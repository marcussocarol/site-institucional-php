<?php 
$pageTitle = "SportMax - Preços";
require_once 'includes/header.php'; 
?>
            <!-- Price Categories -->
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-primary">
                                <div class="card-header bg-primary text-white text-center">
                                    <h4>Básico</h4>
                                    <p class="mb-0">Para iniciantes</p>
                                </div>
                                <div class="card-body text-center">
                                    <h2 class="text-primary">R$ 50 - R$ 150</h2>
                                    <ul class="list-unstyled mt-4">
                                        <li><i class="fas fa-check text-success me-2"></i>Roupas básicas</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Acessórios simples</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Equipamentos básicos</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Garantia de 6 meses</li>
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="produtos.html" class="btn btn-primary">Ver Produtos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-success">
                                <div class="card-header bg-success text-white text-center">
                                    <h4>Intermediário</h4>
                                    <p class="mb-0">Para praticantes regulares</p>
                                </div>
                                <div class="card-body text-center">
                                    <h2 class="text-success">R$ 150 - R$ 400</h2>
                                    <ul class="list-unstyled mt-4">
                                        <li><i class="fas fa-check text-success me-2"></i>Roupas de performance</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Calçados especializados</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Equipamentos avançados</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Garantia de 1 ano</li>
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="produtos.html" class="btn btn-success">Ver Produtos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-danger">
                                <div class="card-header bg-danger text-white text-center">
                                    <h4>Premium</h4>
                                    <p class="mb-0">Para atletas profissionais</p>
                                </div>
                                <div class="card-body text-center">
                                    <h2 class="text-danger">R$ 400+</h2>
                                    <ul class="list-unstyled mt-4">
                                        <li><i class="fas fa-check text-success me-2"></i>Tecnologia de ponta</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Materiais premium</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Equipamentos profissionais</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Garantia de 2 anos</li>
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="produtos.html" class="btn btn-danger">Ver Produtos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Special Offers -->
            <section class="py-5 bg-light">
                <div class="container">
                    <h2 class="text-center mb-5">Ofertas Especiais</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Desconto Progressivo</h5>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge bg-success fs-6">Até 20% OFF</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mt-3">
                                        <li>• Compras acima de R$ 200: 5% de desconto</li>
                                        <li>• Compras acima de R$ 500: 10% de desconto</li>
                                        <li>• Compras acima de R$ 1000: 20% de desconto</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Frete Grátis</h5>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge bg-primary fs-6">GRÁTIS</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mt-3">
                                        <li>• Compras acima de R$ 150</li>
                                        <li>• Válido para todo o território nacional</li>
                                        <li>• Prazo de entrega: 3-7 dias úteis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Payment Methods -->
            <section class="py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Formas de Pagamento</h2>
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <div class="payment-method-card">
                                <i class="fas fa-credit-card fa-3x text-primary mb-3"></i>
                                <h5>Cartão de Crédito</h5>
                                <p>Parcelamento em até 12x sem juros</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="payment-method-card">
                                <i class="fas fa-mobile-alt fa-3x text-success mb-3"></i>
                                <h5>PIX</h5>
                                <p>Pagamento instantâneo com 5% de desconto</p>
                                <div class="pix-info">
                                    <span class="badge bg-success">Desconto Especial</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="payment-method-card">
                                <i class="fas fa-barcode fa-3x text-warning mb-3"></i>
                                <h5>Boleto Bancário</h5>
                                <p>Vencimento em 3 dias úteis</p>
                                <div class="boleto-info">
                                    <span class="text-muted">Processamento em 1-2 dias</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php 
require_once 'includes/footer.php'; 
?>
