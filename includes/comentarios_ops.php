<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

// --- CRIAR COMENTÁRIO ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'criar') {
    $usuario_id = $_SESSION['user_id'];
    $nome_usuario = $_SESSION['user_nome'];
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
    $nota = (int)$_POST['nota'];

    $stmt = $pdo->prepare("INSERT INTO comentarios (usuario_id, nome_usuario, nota, titulo, texto) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$usuario_id, $nome_usuario, $nota, $titulo, $texto]);

    header("Location: ../comentarios.php?sucesso=criado");
    exit;
}

// --- EXCLUIR COMENTÁRIO ---
if (isset($_GET['acao']) && $_GET['acao'] === 'excluir' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario_id = $_SESSION['user_id'];

    // Garante que só apaga o próprio comentário
    $stmt = $pdo->prepare("DELETE FROM comentarios WHERE id = ? AND usuario_id = ?");
    $stmt->execute([$id, $usuario_id]);

    header("Location: ../comentarios.php?sucesso=excluido");
    exit;
}

// --- EDITAR COMENTÁRIO ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'editar') {
    $id = $_POST['id'];
    $usuario_id = $_SESSION['user_id'];
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
    $nota = (int)$_POST['nota'];

    $stmt = $pdo->prepare("UPDATE comentarios SET titulo = ?, texto = ?, nota = ? WHERE id = ? AND usuario_id = ?");
    $stmt->execute([$titulo, $texto, $nota, $id, $usuario_id]);

    header("Location: ../comentarios.php?sucesso=atualizado");
    exit;
}
?>