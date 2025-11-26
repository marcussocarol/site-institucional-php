<?php

// 1. INCLUI O ARQUIVO DE CONFIGURAÇÃO (para obter a conexão $pdo)
require_once 'config.php'; 

// 2. Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    // Redireciona se a página for acessada diretamente
    header("Location: contato.php?status=error&msg=Acesso%20inválido.");
    exit;
}

// Função para Coleta e Sanitização dos Dados
function sanitize_input($data) {
    // Usa filter_input nativo do PHP para maior segurança e conveniência
    // Usamos FILTER_SANITIZE_SPECIAL_CHARS como um substituto do htmlspecialchars para dados de formulário
    return filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);
}

// 3. Coleta e Sanitização dos Dados
$nome           = sanitize_input($_POST['nome'] ?? '');
$sobrenome      = sanitize_input($_POST['sobrenome'] ?? '');
$email          = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone       = sanitize_input($_POST['telefone'] ?? '');
$assunto        = sanitize_input($_POST['assunto'] ?? '');
$mensagem       = sanitize_input($_POST['mensagem'] ?? '');

// Checkbox: se marcado (existe no $_POST), o valor é 1, caso contrário, 0.
$newsletter     = isset($_POST['newsletter']) ? 1 : 0; 

// O campo 'termos' é checado pelo 'required' no HTML, mas é bom verificar
$termos_aceitos = isset($_POST['termos']);


// 4. Validação (Verifica campos obrigatórios e termos)
if (empty($nome) || empty($sobrenome) || empty($email) || empty($assunto) || empty($mensagem) || !$termos_aceitos) {
    $error_msg = "Por%20favor,%20preencha%20todos%20os%20campos%20obrigatórios%20e%20aceite%20os%20termos.";
    header("Location: contato.php?status=error&msg=$error_msg");
    exit;
}

// 5. Preparação e Execução da Inserção Segura (Prepared Statement)
$sql = "INSERT INTO contatos (nome, sobrenome, email, telefone, assunto, mensagem, newsletter) 
        VALUES (:nome, :sobrenome, :email, :telefone, :assunto, :mensagem, :newsletter)";

try {
    // A variável $pdo vem do arquivo config.php
    $stmt = $pdo->prepare($sql);
    
    // Vincula os valores
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':sobrenome', $sobrenome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':assunto', $assunto);
    $stmt->bindParam(':mensagem', $mensagem);
    $stmt->bindParam(':newsletter', $newsletter, PDO::PARAM_INT); // Especifica que é um inteiro
    
    $stmt->execute();
    
    // 6. Sucesso! Redireciona para a página de contato com a mensagem de sucesso
    $success_msg = "Mensagem%20enviada%20com%20sucesso!%20Em%20breve%20entraremos%20em%20contato.";
    header("Location: contato.php?status=success&msg=$success_msg");
    exit;

} catch (\PDOException $e) {
    // 7. Erro na Inserção
    // Idealmente, você logaria o erro $e->getMessage() em um arquivo no servidor
    $error_msg = "Ocorreu%20um%20erro%20ao%20salvar%20sua%20mensagem.%20Código:%20" . $e->getCode();
    header("Location: contato.php?status=error&msg=$error_msg");
    exit;
}
?>