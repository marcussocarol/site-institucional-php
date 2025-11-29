<?php

// CONTROLADOR DE AUTENTICAÇÃO E USUÁRIOS
// Centraliza todas as operações de Login, Cadastro e Gestão de Conta.

session_start();
require_once 'config.php';
require_once 'validador_ia.php'; 

// --- LOGOUT ---
if (isset($_GET['logout'])) {
    session_destroy(); // Destrói todas as variáveis de sessão, efetivamente deslogando o usuário.
    header("Location: ../login.php"); // Redireciona para a tela de login.
    exit;
}

// --- LOGIN ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'login') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    // Busca o usuário no banco pelo e-mail
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    // Verificação de Senha:
    // password_verify compara a senha digitada com o hash criptografado salvo no banco.
    if ($user && password_verify($senha, $user['senha'])) {
        // Sucesso: Salva os dados críticos na sessão para uso global no site.
        $_SESSION['user_id'] = $user['id']; 
        $_SESSION['user_nome'] = $user['nome'];
        $_SESSION['user_email'] = $user['email'];
        header("Location: ../index.php");
    } else {
        // Falha: Redireciona com parâmetro de erro.
        header("Location: ../login.php?erro=credenciais");
    }
    exit;
}

// --- CADASTRO (COM INTELIGÊNCIA ARTIFICIAL)---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'cadastro') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // PASSO 1: Antes de salvar, perguntamos ao Google Gemini se o e-mail é válido/seguro.
    if (!validarEmailComIA($email)) {
        // Se a IA retornar false, o cadastro é bloqueado imediatamente e manda de volta com erro específico
        header("Location: ../cadastro.php?erro=email_suspeito");
        exit;
    }

    // PASSO 2: Se a IA aprovou, continua o cadastro normal
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    try {
        // Insere o novo usuário no banco de dados.
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->execute(['nome' => $nome, 'email' => $email, 'senha' => $senha]);
        header("Location: ../login.php?sucesso=registrado");
    } catch (PDOException $e) {
        // Captura erro de duplicidade (caso o e-mail já exista no banco).
        header("Location: ../cadastro.php?erro=email_existe");
    }
    exit;
}

// --- UPDATE PERFIL ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'update_perfil') {
    // Segurança: Garante que só usuários logados podem acessar.
    if (!isset($_SESSION['user_id'])) exit;
    $id = $_SESSION['user_id'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $nova_senha = $_POST['senha'];

    try {
        // Lógica condicional: Só atualiza a senha se o usuário digitou algo novo.
        if (!empty($nova_senha)) {
            $hash = password_hash($nova_senha, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
            $stmt->execute([$nome, $email, $hash, $id]);
        } else {
            // Se a senha estiver em branco, mantém a antiga e atualiza apenas nome/email.
            $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
            $stmt->execute([$nome, $email, $id]);
        }

        // Atualiza a sessão em tempo real para refletir as mudanças na interface sem precisar relogar.
        $_SESSION['user_nome'] = $nome;
        $_SESSION['user_email'] = $email;
        header("Location: ../perfil.php?sucesso=atualizado");
    } catch (PDOException $e) {
        header("Location: ../perfil.php?erro=erro_atualizacao");
    }
    exit;
}

// --- DELETE CONTA ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'delete_conta') {
    if (!isset($_SESSION['user_id'])) exit;

    $id = $_SESSION['user_id'];

    // Remove o registro do banco de dados.
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);

    // Encerra a sessão para garantir que o acesso seja revogado imediatamente.
    session_destroy();
    header("Location: ../index.php?msg=conta_excluida");
    exit;
}
?>