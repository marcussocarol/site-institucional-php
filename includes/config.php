<?php

// ARQUIVO DE CONFIGURAÇÃO DO BANCO DE DADOS
// Responsável por definir as credenciais e estabelecer a conexão via PDO

// 1. Definição de Constantes (Credenciais)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');   
define('DB_PASS', '');       
define('DB_NAME', 'sportmax_db'); 
define('DB_CHARSET', 'utf8mb4');

$pdo = null;

try {
    // 2. Conexão via PDO (PHP Data Objects)
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [
            // 3. Configurações de Comportamento (Options)
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

} catch (PDOException $e) {
    // 4. Tratamento de Erros
    die("Erro de Conexão com o Banco de Dados: " . $e->getMessage());
}
?>