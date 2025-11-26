<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');   
define('DB_PASS', '');       
define('DB_NAME', 'sportmax_db'); 
define('DB_CHARSET', 'utf8mb4');

$pdo = null;

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

} catch (PDOException $e) {
    die("Erro de Conexão com o Banco de Dados: " . $e->getMessage());
}
?>