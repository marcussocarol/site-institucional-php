<?php 
$pageTitle = "SportMax - Sacola";
require_once 'includes/header.php'; 

// Calcula totais
$total = 0;
$itens = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : [];
foreach($itens as $item) {
    $total += $item['preco'] * $item['quantidade'];
}
?>

<div class="content-header">
    <div class="container">
        <h1><i class="fas fa-shopping-cart me-2"></i>Sacola de Compras</h1>
    </div>
</div>

<div class="content">
    <div class="container">
        <?php if(isset($_GET['sucesso'])): ?>
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <h4><i class="icon fas fa-check"></i> Pedido Realizado!</h4>
                Obrigado por comprar na SportMax. Seus itens chegarão em breve.
            </div>
        <?php endif; ?>

        <?php if(empty($itens)): ?>
            <div class="alert alert-info text-center py-5">
                <h4><i class="fas fa-shopping-basket me-2"></i>Sua sacola está vazia</h4>
                <p class="mb-3">Navegue pelos nossos produtos e encontre o que precisa para seu treino!</p>
                <a href="produtos.php" class="btn btn-primary">Ir às Compras</a>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Itens Selecionados</h3>
                        </div>
                        <div class="card-body p-0 table-responsive">
                            <table class="table table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th style="width: 40%">Produto</th>
                                        <th>Preço</th>
                                        <th>Qtd</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($itens as $id => $item): ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?= $item['imagem'] ?>" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;" class="rounded">
                                                <span class="fw-bold"><?= htmlspecialchars($item['nome']) ?></span>
                                            </div>
                                        </td>
                                        <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
                                        <td>
                                            <form action="includes/carrinho.php" method="POST" class="d-flex" style="width: 100px;">
                                                <input type="hidden" name="acao" value="atualizar">
                                                <input type="hidden" name="id" value="<?= $id ?>">
                                                <input type="number" name="quantidade" value="<?= $item['quantidade'] ?>" class="form-control form-control-sm text-center" min="1" onchange="this.form.submit()">
                                            </form>
                                        </td>
                                        <td>R$ <?= number_format($item['preco'] * $item['quantidade'], 2, ',', '.') ?></td>
                                        <td class="text-end">
                                            <a href="includes/carrinho.php?acao=remover&id=<?= $id ?>" class="btn btn-sm btn-danger" title="Remover item">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header"><h3 class="card-title">Resumo do Pedido</h3></div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal:</span>
                                <span>R$ <?= number_format($total, 2, ',', '.') ?></span>
                            </div>
                            <div class="d-flex justify-content-between mb-3 text-success">
                                <span>Frete:</span>
                                <span>Grátis</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between h4 fw-bold">
                                <span>Total:</span>
                                <span>R$ <?= number_format($total, 2, ',', '.') ?></span>
                            </div>
                            <hr>
                            
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <form action="includes/carrinho.php" method="POST">
                                    <input type="hidden" name="acao" value="finalizar">
                                    <button type="submit" class="btn btn-success w-100 btn-lg">
                                        <i class="fas fa-check-circle me-2"></i>Finalizar Compra
                                    </button>
                                </form>
                            <?php else: ?>
                                <a href="login.php" class="btn btn-warning w-100 mb-2">
                                    <i class="fas fa-lock me-2"></i>Login para Finalizar
                                </a>
                            <?php endif; ?>
                            
                            <a href="produtos.php" class="btn btn-outline-secondary w-100 mt-2">
                                <i class="fas fa-arrow-left me-2"></i>Continuar Comprando
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>