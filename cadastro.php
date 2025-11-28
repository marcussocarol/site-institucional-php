<?php 
$pageTitle = "Cadastro - SportMax";
require_once 'includes/header.php'; 
?>
<div class="content">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card card-outline card-success">
                    <div class="card-header text-center">
                        <h3><i class="fas fa-user-plus me-2"></i>Crie sua conta</h3>
                    </div>
                    <div class="card-body">
                        
                        <!-- MENSAGENS DE ERRO -->
                        <?php if(isset($_GET['erro'])): ?>
                            <?php if($_GET['erro'] == 'email_suspeito'): ?>
                                <div class="alert alert-warning">
                                    <i class="fas fa-robot me-2"></i>
                                    <strong>Bloqueado:</strong> Este e-mail parece inválido, ofensivo ou temporário.
                                </div>
                            <?php elseif($_GET['erro'] == 'email_existe'): ?>
                                <div class="alert alert-danger">
                                    Este e-mail já está cadastrado.
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                        <form action="includes/auth.php" method="POST">
                            <input type="hidden" name="acao" value="cadastro">
                            <div class="mb-3">
                                <label class="form-label">Nome Completo</label>
                                <input type="text" name="nome" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="login.php">Já tem conta? Faça login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>