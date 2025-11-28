<?php
session_start();
require_once 'config.php';

// IMPORTANTE: Trazemos o especialista em IA para dentro deste arquivo
require_once 'validador_ia.php'; 

// --- LOGOUT ---
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ../login.php");
    exit;
}

// --- LOGIN ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'login') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_nome'] = $user['nome'];
        $_SESSION['user_email'] = $user['email'];
        header("Location: ../index.php");
    } else {
        header("Location: ../login.php?erro=credenciais");
    }
    exit;
}

// --- CADASTRO (AQUI ACONTECE A MÁGICA) ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'cadastro') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // PASSO 1: Perguntar para a IA antes de qualquer coisa
    if (!validarEmailComIA($email)) {
        // Se a IA reprovar, mandamos de volta com erro específico
        header("Location: ../cadastro.php?erro=email_suspeito");
        exit;
    }

    // PASSO 2: Se a IA aprovou, continuamos o cadastro normal
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->execute(['nome' => $nome, 'email' => $email, 'senha' => $senha]);
        header("Location: ../login.php?sucesso=registrado");
    } catch (PDOException $e) {
        header("Location: ../cadastro.php?erro=email_existe");
    }
    exit;
}

// --- UPDATE PERFIL ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'update_perfil') {
    if (!isset($_SESSION['user_id'])) exit;
    $id = $_SESSION['user_id'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $nova_senha = $_POST['senha'];

    try {
        if (!empty($nova_senha)) {
            $hash = password_hash($nova_senha, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
            $stmt->execute([$nome, $email, $hash, $id]);
        } else {
            $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
            $stmt->execute([$nome, $email, $id]);
        }
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
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);
    session_destroy();
    header("Location: ../index.php?msg=conta_excluida");
    exit;
}
?>