<?php

// CONTROLADOR DO CARRINHO DE COMPRAS
// Gerencia a sessão de compras e a finalização do pedido no banco de dados.

session_start();
require_once 'config.php';

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// ADICIONAR AO CARRINHO
if (isset($_POST['acao']) && $_POST['acao'] === 'add') {
    // Coleta dados vindos do formulário do produto (inputs hidden).
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem'];
    
    // Se o produto já existe no carrinho, apenas aumenta a quantidade (+1).
    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade']++;
    } else {
        // Se é novo, cria o item com todos os detalhes e quantidade inicial 1.
        $_SESSION['carrinho'][$id] = [
            'id' => $id,
            'nome' => $nome,
            'preco' => $preco,
            'imagem' => $imagem,
            'quantidade' => 1
        ];
    }

    // Redireciona para a visualização da sacola.
    header("Location: ../sacola.php");
    exit;
}

// REMOVER DO CARRINHO
if (isset($_GET['acao']) && $_GET['acao'] === 'remover' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Remove o item específico do array da sessão.
    unset($_SESSION['carrinho'][$id]);

    header("Location: ../sacola.php");
    exit;
}

// ATUALIZAR QUANTIDADE
if (isset($_POST['acao']) && $_POST['acao'] === 'atualizar') {
    $id = $_POST['id'];
    $nova_qtd = (int)$_POST['quantidade'];
    
    if ($nova_qtd > 0 && isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade'] = $nova_qtd;
    }
    header("Location: ../sacola.php");
    exit;
}

// FINALIZAR COMPRA
if (isset($_POST['acao']) && $_POST['acao'] === 'finalizar') {
    // Segurança: Bloqueia compra se usuário não estiver logado.
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login.php?erro=login_necessario");
        exit;
    }

    // Validação: Bloqueia se o carrinho estiver vazio.
    if (empty($_SESSION['carrinho'])) {
        header("Location: ../sacola.php");
        exit;
    }

    // Cálculo do Total do Pedido
    $total = 0;
    foreach ($_SESSION['carrinho'] as $item) {
        $total += $item['preco'] * $item['quantidade'];
    }

    try {
        $pdo->beginTransaction();

        // PASSO 1: Criar o registro na tabela 'pedidos' (Cabeçalho)
        $stmt = $pdo->prepare("INSERT INTO pedidos (usuario_id, total) VALUES (?, ?)");
        $stmt->execute([$_SESSION['user_id'], $total]);
        $pedido_id = $pdo->lastInsertId();

        // PASSO 2: Salvar cada item na tabela 'itens_pedido' (Detalhes)
        $stmt_item = $pdo->prepare("INSERT INTO itens_pedido (pedido_id, produto_nome, preco_unitario, quantidade) VALUES (?, ?, ?, ?)");
        
        foreach ($_SESSION['carrinho'] as $item) {
            $stmt_item->execute([$pedido_id, $item['nome'], $item['preco'], $item['quantidade']]);
        }

        $pdo->commit(); // Confirma as alterações no banco.
        unset($_SESSION['carrinho']); // Limpa o carrinho da sessão, pois a compra foi concluída.
        header("Location: ../sacola.php?sucesso=pedido_realizado");

    } catch (Exception $e) {
        $pdo->rollBack(); // Se houve erro em qualquer etapa, desfaz tudo (Rollback) para não deixar dados inconsistentes.
        die("Erro ao processar pedido: " . $e->getMessage());
    }
    exit;
}
?>