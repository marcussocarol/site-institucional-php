<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// ADICIONAR AO CARRINHO
if (isset($_POST['acao']) && $_POST['acao'] === 'add') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem'];
    
    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade']++;
    } else {
        $_SESSION['carrinho'][$id] = [
            'id' => $id,
            'nome' => $nome,
            'preco' => $preco,
            'imagem' => $imagem,
            'quantidade' => 1
        ];
    }
    header("Location: ../sacola.php");
    exit;
}

// REMOVER DO CARRINHO
if (isset($_GET['acao']) && $_GET['acao'] === 'remover' && isset($_GET['id'])) {
    $id = $_GET['id'];
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
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login.php?erro=login_necessario");
        exit;
    }

    if (empty($_SESSION['carrinho'])) {
        header("Location: ../sacola.php");
        exit;
    }

    $total = 0;
    foreach ($_SESSION['carrinho'] as $item) {
        $total += $item['preco'] * $item['quantidade'];
    }

    try {
        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO pedidos (usuario_id, total) VALUES (?, ?)");
        $stmt->execute([$_SESSION['user_id'], $total]);
        $pedido_id = $pdo->lastInsertId();

        $stmt_item = $pdo->prepare("INSERT INTO itens_pedido (pedido_id, produto_nome, preco_unitario, quantidade) VALUES (?, ?, ?, ?)");
        
        foreach ($_SESSION['carrinho'] as $item) {
            $stmt_item->execute([$pedido_id, $item['nome'], $item['preco'], $item['quantidade']]);
        }

        $pdo->commit();
        unset($_SESSION['carrinho']);
        header("Location: ../sacola.php?sucesso=pedido_realizado");

    } catch (Exception $e) {
        $pdo->rollBack();
        die("Erro ao processar pedido: " . $e->getMessage());
    }
    exit;
}
?>