<?php 

// PÁGINA DE LOGIN (INTERFACE DE ACESSO)
// Formulário para autenticação de usuários já cadastrados.

$pageTitle = "Login - SportMax";
require_once 'includes/header.php'; 
?>
<div class="content">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <h3><i class="fas fa-sign-in-alt me-2"></i>Login</h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_GET['erro'])): ?>
                            <div class="alert alert-danger">Email ou senha incorretos.</div>
                        <?php endif; ?>
                        <?php if(isset($_GET['sucesso'])): ?>
                            <div class="alert alert-success">Cadastro realizado! Faça login.</div>
                        <?php endif; ?>
                        
                        <form action="includes/auth.php" method="POST">
                            <input type="hidden" name="acao" value="login">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Entrar</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="cadastro.php">Não tem conta? Cadastre-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>