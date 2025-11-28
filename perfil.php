<?php 
$pageTitle = "Meu Perfil - SportMax";
require_once 'includes/header.php'; 

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<div class="content">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <?php if(isset($_GET['sucesso'])): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        Dados atualizados com sucesso!
                    </div>
                <?php endif; ?>

                <div class="card card-primary card-outline mb-4">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user-edit me-2"></i>Editar Meus Dados</h3>
                    </div>
                    <div class="card-body">
                        <form action="includes/auth.php" method="POST">
                            <input type="hidden" name="acao" value="update_perfil">
                            
                            <div class="mb-3">
                                <label>Nome Completo</label>
                                <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($_SESSION['user_nome']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($_SESSION['user_email']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Nova Senha <small class="text-muted">(deixe em branco para não alterar)</small></label>
                                <input type="password" name="senha" class="form-control" placeholder="********">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                        </form>
                    </div>
                </div>

                <div class="card card-danger card-outline">
                    <div class="card-header">
                        <h3 class="card-title text-danger"><i class="fas fa-exclamation-triangle me-2"></i>Zona de Perigo</h3>
                    </div>
                    <div class="card-body">
                        <p>Deseja excluir sua conta permanentemente? Esta ação não pode ser desfeita.</p>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            Excluir Minha Conta
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir sua conta?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="includes/auth.php" method="POST">
                    <input type="hidden" name="acao" value="delete_conta">
                    <button type="submit" class="btn btn-danger">Sim, excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>