<?php 

// PÁGINA DE CATÁLOGO DE PRODUTOS
// Exibe a grade de produtos disponíveis para compra.
// Os produtos são estáticos (HTML), mas a integração com o carrinho é funcional via POST.

$pageTitle = "SportMax - Produtos";
require_once 'includes/header.php'; 
?>

<div class="content-wrapper"> 
    <section class="py-5 product-list-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/tenis.jpg" class="card-img-top" alt="Tênis de Corrida">
                        <div class="card-body">
                            <h5 class="card-title">Tênis de Corrida</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 350,00</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="1">
                                <input type="hidden" name="nome" value="Tênis de Corrida">
                                <input type="hidden" name="preco" value="350.00">
                                <input type="hidden" name="imagem" value="img/tenis.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/camiseta.jpg" class="card-img-top" alt="Camiseta Dry-fit">
                        <div class="card-body">
                            <h5 class="card-title">Camiseta Dry-fit</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 59,90</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="2">
                                <input type="hidden" name="nome" value="Camiseta Dry-fit">
                                <input type="hidden" name="preco" value="59.90">
                                <input type="hidden" name="imagem" value="img/camiseta.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/oculos.jpg" class="card-img-top" alt="oculos">
                        <div class="card-body">
                            <h5 class="card-title">Óculos de Performance</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 79,90</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="4">
                                <input type="hidden" name="nome" value="Óculos de Performance">
                                <input type="hidden" name="preco" value="79.90">
                                <input type="hidden" name="imagem" value="img/oculos.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/short.jpg" class="card-img-top" alt="short">
                        <div class="card-body">
                            <h5 class="card-title">Short Duplo</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 65,00</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="5">
                                <input type="hidden" name="nome" value="Short Duplo">
                                <input type="hidden" name="preco" value="65.00">
                                <input type="hidden" name="imagem" value="img/short.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/camisa.jpg" class="card-img-top" alt="Camisa">
                        <div class="card-body">
                            <h5 class="card-title">Camisa Arsenal</h5>

                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 350,00</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="6">
                                <input type="hidden" name="nome" value="Camisa Arsenal">
                                <input type="hidden" name="preco" value="350.00">
                                <input type="hidden" name="imagem" value="img/camisa.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/luvagol.jpg" class="card-img-top" alt="Capacete">
                        <div class="card-body">
                            <h5 class="card-title">Luvas de Goleiro</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 70,00</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="7">
                                <input type="hidden" name="nome" value="Luvas de Goleiro">
                                <input type="hidden" name="preco" value="70.00">
                                <input type="hidden" name="imagem" value="img/luvagol.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/chuteira.jpg" class="card-img-top" alt="Chuteira">
                        <div class="card-body">
                            <h5 class="card-title">Chuteira</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 299,99</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="8">
                                <input type="hidden" name="nome" value="Chuteira">
                                <input type="hidden" name="preco" value="299.99">
                                <input type="hidden" name="imagem" value="img/chuteira.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/bola.jpg" class="card-img-top" alt="Bola de Futebol">
                        <div class="card-body">
                            <h5 class="card-title">Bola de Futebol</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 49,90</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="3">
                                <input type="hidden" name="nome" value="Bola de Futebol">
                                <input type="hidden" name="preco" value="49.90">
                                <input type="hidden" name="imagem" value="img/bola.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/leash.jpg" class="card-img-top" alt="leash">
                        <div class="card-body">
                            <h5 class="card-title">Surf Leash</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 79,90</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="9">
                                <input type="hidden" name="nome" value="Surf Leash">
                                <input type="hidden" name="preco" value="79.90">
                                <input type="hidden" name="imagem" value="img/leash.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/oculosnat.jpg" class="card-img-top" alt="Óculos para natação">
                        <div class="card-body">
                            <h5 class="card-title">Óculos para natação</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 59,90</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="10">
                                <input type="hidden" name="nome" value="Óculos para natação">
                                <input type="hidden" name="preco" value="59.90">
                                <input type="hidden" name="imagem" value="img/oculosnat.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/traje.jpg" class="card-img-top" alt="Traje de Borracha">
                        <div class="card-body">
                            <h5 class="card-title">Traje de Borracha</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 599,00</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="11">
                                <input type="hidden" name="nome" value="Traje de Borracha">
                                <input type="hidden" name="preco" value="599.90">
                                <input type="hidden" name="imagem" value="img/traje.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/touca.jpg" class="card-img-top" alt="Touca de Silicone">
                        <div class="card-body">
                            <h5 class="card-title">Touca de Silicone</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 39,90</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="12">
                                <input type="hidden" name="nome" value="Touca de Silicone">
                                <input type="hidden" name="preco" value="39.90">
                                <input type="hidden" name="imagem" value="img/touca.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/halter.jpg" class="card-img-top" alt="Halteres Ajustáveis">
                        <div class="card-body">
                            <h5 class="card-title">Halteres Ajustáveis</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 69,90</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="13">
                                <input type="hidden" name="nome" value="Halteres Ajustáveis">
                                <input type="hidden" name="preco" value="69.90">
                                <input type="hidden" name="imagem" value="img/halter.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/coqueteleira.jpg" class="card-img-top" alt="Coqueteleira">
                        <div class="card-body">
                            <h5 class="card-title">Coqueteleira</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 19,90</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="14">
                                <input type="hidden" name="nome" value="Coqueteleira">
                                <input type="hidden" name="preco" value="19.90">
                                <input type="hidden" name="imagem" value="img/coqueteleira.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/suplemento.jpg" class="card-img-top" alt="Suplementos">
                        <div class="card-body">
                            <h5 class="card-title">Suplementos</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 99,99</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="15">
                                <input type="hidden" name="nome" value="Suplementos">
                                <input type="hidden" name="preco" value="99.99">
                                <input type="hidden" name="imagem" value="img/suplemento.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 product-card">
                        <img src="img/luva.jpg" class="card-img-top" alt="Luvas de Musculação">
                        <div class="card-body">
                            <h5 class="card-title">Luvas de Musculação</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="product-price fw-bold">R$ 49,99</span>
                            <form action="includes/carrinho.php" method="POST">
                                <input type="hidden" name="acao" value="add">
                                <input type="hidden" name="id" value="16">
                                <input type="hidden" name="nome" value="Luvas de Musculação">
                                <input type="hidden" name="preco" value="49.99">
                                <input type="hidden" name="imagem" value="img/luva.jpg">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Comprar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once 'includes/footer.php'; ?>