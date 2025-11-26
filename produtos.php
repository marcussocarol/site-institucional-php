<?php 
// 1. Define o título para esta página
$pageTitle = "SportMax - Produtos";
// 2. Inclui o cabeçalho (que abre as tags necessárias)
require_once 'includes/header.php'; 
?>

<div class="content-wrapper"> 
    <section class="py-5 product-list-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card" data-product-id="1">
                        <img src="img/tenis.jpg" class="card-img-top" alt="Tênis de Corrida">
                        <div class="card-body">
                            <h5 class="card-title">Tênis de Corrida</h5>
                            <p class="card-text text-muted">Tênis leve e respirável, ideal para treinos diários.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price">R$ 350,00</span>
                            <a href="sacola.php" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart"></i> Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card" data-product-id="2">
                        <img src="img/camiseta.jpg" class="card-img-top" alt="Camiseta Dry-fit">
                        <div class="card-body">
                            <h5 class="card-title">Camiseta Dry-fit</h5>
                            <p class="card-text text-muted">Tecido que absorve o suor, mantendo o corpo seco.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price">R$ 89,90</span>
                            <a href="sacola.php" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart"></i> Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card" data-product-id="3">
                        <img src="img/bola.jpg" class="card-img-top" alt="Bola de Futebol Oficial">
                        <div class="card-body">
                            <h5 class="card-title">Bola de Futebol</h5>
                            <p class="card-text text-muted">Bola de alta performance, para jogos e treinos.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price">R$ 120,50</span>
                            <a href="sacola.php" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart"></i> Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card" data-product-id="4">
                        <img src="img/halter.jpg" class="card-img-top" alt="Conjunto de Halteres">
                        <div class="card-body">
                            <h5 class="card-title">Halteres Ajustáveis</h5>
                            <p class="card-text text-muted">Perfeito para treinos em casa, economiza espaço.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price">R$ 299,99</span>
                            <a href="sacola.php" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart"></i> Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 product-details-section">
        <div class="container">
            <button id="backToProductsButton" class="btn btn-secondary mb-4"><i class="fas fa-arrow-left me-2"></i>Voltar para Produtos</button>
            <div class="row">
                <div class="col-md-6">
                    <div class="product-gallery">
                        <div class="main-image mb-3">
                            <img src="img/tenis.jpg" alt="Tênis de Corrida Nike Air Max" class="img-fluid rounded" id="mainImage">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-details">
                        <h1 class="product-title mb-3">Tênis de Corrida Nike Air Max</h1>
                        <div class="product-rating mb-3">
                            <div class="stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <span class="rating-text ms-2">(4.5) - 127 avaliações</span>
                        </div>
                        <div class="product-price mb-4">
                            <span class="price-old text-muted text-decoration-line-through me-2">R$ 299,99</span>
                            <span class="price-current h3 text-success">R$ 209,99</span>
                            <span class="discount-badge badge bg-danger ms-2">30% OFF</span>
                        </div>
                        
                        <div class="product-options mb-4">
                            <div class="size-selector mb-3">
                                <label class="form-label">Tamanho:</label>
                                <div class="size-options">
                                    <button class="btn btn-outline-secondary size-btn">38</button>
                                    <button class="btn btn-outline-secondary size-btn">39</button>
                                    <button class="btn btn-outline-secondary size-btn active">40</button>
                                    <button class="btn btn-outline-secondary size-btn">41</button>
                                    <button class="btn btn-outline-secondary size-btn">42</button>
                                    <button class="btn btn-outline-secondary size-btn">43</button>
                                </div>
                            </div>
                            
                            <div class="color-selector mb-3">
                                <label class="form-label">Cor:</label>
                                <div class="color-options">
                                    <button class="btn color-btn active" style="background-color: #000;" title="Preto"></button>
                                    <button class="btn color-btn" style="background-color: #fff; border: 1px solid #ddd;" title="Branco"></button>
                                    <button class="btn color-btn" style="background-color: #ff0000;" title="Vermelho"></button>
                                    <button class="btn color-btn" style="background-color: #0066cc;" title="Azul"></button>
                                </div>
                            </div>
                        </div>

                        <div class="quantity-selector mb-4">
                            <label class="form-label">Quantidade:</label>
                            <div class="input-group" style="width: 150px;">
                                <button class="btn btn-outline-secondary" type="button" onclick="decreaseQuantity()">-</button>
                                <input type="text" class="form-control text-center" value="1" id="quantity" readonly>
                                <button class="btn btn-outline-secondary" type="button" onclick="increaseQuantity()">+</button>
                            </div>
                        </div>

                        <div class="action-buttons mb-4">
                            <button class="btn btn-primary btn-lg me-2">
                                <i class="fas fa-shopping-cart me-2"></i>Adicionar à Sacola
                            </button>
                        </div>

                        <div class="product-features">
                            <h5>Características:</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Tecnologia Air Max para amortecimento</li>
                                <li><i class="fas fa-check text-success me-2"></i>Cabedal em mesh respirável</li>
                                <li><i class="fas fa-check text-success me-2"></i>Solado de borracha antiderrapante</li>
                                <li><i class="fas fa-check text-success me-2"></i>Ideal para corrida e caminhada</li>
                                <li><i class="fas fa-check text-success me-2"></i>Garantia de 1 ano contra defeitos de fabricação</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php 
// 3. Inclui o rodapé
require_once 'includes/footer.php'; 
?>