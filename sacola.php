<?php 
// 1. Define o título para esta página
$pageTitle = "SportMax - Sacola";
// 2. Inclui o cabeçalho (que abre as tags wrapper, nav e body)
require_once 'includes/header.php'; 
?>
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <i class="fas fa-shopping-cart me-2"></i>Sacola de Compras
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Seus Produtos (2 itens)</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Produto</th>
                                                <th style="width: 30%">Descrição</th>
                                                <th style="width: 15%">Preço Unitário</th>
                                                <th style="width: 15%">Quantidade</th>
                                                <th style="width: 15%">Total</th>
                                                <th style="width: 15%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="img/tenis.jpg" alt="Tênis" class="img-fluid" style="width: 60px;"></td>
                                                <td>Tênis de Corrida Nike Air Max</td>
                                                <td>R$ 209,99</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <button class="btn btn-sm btn-outline-secondary cart-quantity-btn" data-action="decrease">-</button>
                                                        <input type="text" class="form-control form-control-sm text-center mx-2" value="1" style="width: 50px;" readonly>
                                                        <button class="btn btn-sm btn-outline-secondary cart-quantity-btn" data-action="increase">+</button>
                                                    </div>
                                                </td>
                                                <td>R$ 209,99</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger cart-remove-btn"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/camiseta.jpg" alt="Camiseta" class="img-fluid" style="width: 60px;"></td>
                                                <td>Camiseta Dry-fit</td>
                                                <td>R$ 89,90</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <button class="btn btn-sm btn-outline-secondary cart-quantity-btn" data-action="decrease">-</button>
                                                        <input type="text" class="form-control form-control-sm text-center mx-2" value="1" style="width: 50px;" readonly>
                                                        <button class="btn btn-sm btn-outline-secondary cart-quantity-btn" data-action="increase">+</button>
                                                    </div>
                                                </td>
                                                <td>R$ 89,90</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger cart-remove-btn"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Resumo do Pedido</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Subtotal:</span>
                                        <span id="cart-subtotal">R$ 299,89</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Frete:</span>
                                        <span id="cart-shipping" class="text-success">Grátis</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between h4">
                                        <span>Total:</span>
                                        <span id="cart-total">R$ 299,89</span>
                                    </div>
                                    <hr>
                                    <a href="produtos.html" class="btn btn-secondary w-100 mb-2">
                                        <i class="fas fa-arrow-left me-2"></i>Continuar Comprando
                                    </a>
                                    <a href="#" class="btn btn-primary w-100">
                                        <i class="fas fa-check me-2"></i>Finalizar Compra
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php 
// 3. Inclui o rodapé
require_once 'includes/footer.php'; 
?>        