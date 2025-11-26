<?php
// Define a variável de título
$pageTitle = isset($pageTitle) ? $pageTitle : "SportMax - Sua Loja de Esportes";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title> 
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <button id="darkModeToggle" class="btn btn-outline-secondary btn-sm me-3">
                    <i class="fas fa-moon" id="darkModeIcon"></i>
                </button>
                
                <a href="index.php" class="navbar-brand">
                    <i class="fas fa-running brand-icon"></i>
                    <span class="brand-text font-weight-bold">SportMax</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="empresa.php" class="nav-link">Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a href="produtos.php" class="nav-link">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="preco.php" class="nav-link">Preço</a>
                        </li>
                        <li class="nav-item">
                            <a href="clientes.php" class="nav-link active">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a href="comentarios.php" class="nav-link">Comentários</a>
                        </li>
                        <li class="nav-item">
                            <a href="contato.php" class="nav-link">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="local.php" class="nav-link">Local</a>
                        </li>
                        <li class="nav-item">
                            <a href="redes-sociais.php" class="nav-link">Redes Sociais</a>
                        </li>
                    </ul>
                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/atvfullstack/sacola.php">
                            <i class="fas fa-bag-shopping"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">