<?php 
// 1. Define o título para esta página
$pageTitle = "SportMax - Localização";
// 2. Inclui o cabeçalho (que abre as tags wrapper, nav e content-wrapper)
require_once 'includes/header.php'; 
?>
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card store-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="store-icon me-3">
                                            <i class="fas fa-store fa-2x text-primary"></i>
                                        </div>
                                        <div class="store-info">
                                            <h5 class="card-title">SportMax - Loja Principal</h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                                Rua dos Esportes, 123<br>
                                                Vila Olímpica - São Paulo, SP<br>
                                                CEP: 01234-567
                                            </p>
                                            <p class="card-text">
                                                <i class="fas fa-phone text-success me-2"></i>
                                                (11) 3456-7890
                                            </p>
                                            <p class="card-text">
                                                <i class="fas fa-clock text-warning me-2"></i>
                                                Seg-Sex: 8h às 18h<br>
                                                Sáb: 8h às 14h<br>
                                                Dom: Fechado
                                            </p>
                                            <div class="store-features">
                                                <span class="badge bg-success me-1">Estacionamento</span>
                                                <span class="badge bg-primary me-1">Provador</span>
                                                <span class="badge bg-warning">Retirada</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="card store-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="store-icon me-3">
                                            <i class="fas fa-truck fa-2x text-info"></i>
                                        </div>
                                        <div class="store-info">
                                            <h5 class="card-title">SportMax - Loja Express</h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                                Av. Paulista, 1000<br>
                                                Bela Vista - São Paulo, SP<br>
                                                CEP: 01310-100
                                            </p>
                                            <p class="card-text">
                                                <i class="fas fa-phone text-success me-2"></i>
                                                (11) 3456-7892
                                            </p>
                                            <p class="card-text">
                                                <i class="fas fa-clock text-warning me-2"></i>
                                                Seg-Sex: 9h às 19h<br>
                                                Sáb: 9h às 15h<br>
                                                Dom: Fechado
                                            </p>
                                            <div class="store-features">
                                                <span class="badge bg-info me-1">Express</span>
                                                <span class="badge bg-success me-1">Metrô</span>
                                                <span class="badge bg-primary">Retirada Rápida</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card store-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="store-icon me-3">
                                            <i class="fas fa-store fa-2x text-success"></i>
                                        </div>
                                        <div class="store-info">
                                            <h5 class="card-title">SportMax - Shopping Center</h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                                Shopping Esporte Plaza, Loja 245<br>
                                                Av. das Modalidades, 456<br>
                                                CEP: 02345-678
                                            </p>
                                            <p class="card-text">
                                                <i class="fas fa-phone text-success me-2"></i>
                                                (11) 3456-7891
                                            </p>
                                            <p class="card-text">
                                                <i class="fas fa-clock text-warning me-2"></i>
                                                Seg-Sáb: 10h às 22h<br>
                                                Dom: 14h às 20h
                                            </p>
                                            <div class="store-features">
                                                <span class="badge bg-info me-1">Shopping</span>
                                                <span class="badge bg-primary me-1">Provador</span>
                                                <span class="badge bg-success">Praça Alimentação</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card store-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="store-icon me-3">
                                            <i class="fas fa-warehouse fa-2x text-warning"></i>
                                        </div>
                                        <div class="store-info">
                                            <h5 class="card-title">SportMax - Centro de Distribuição</h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                                Rodovia dos Atletas, Km 15<br>
                                                Distrito Industrial - Guarulhos, SP<br>
                                                CEP: 07123-456
                                            </p>
                                            <p class="card-text">
                                                <i class="fas fa-phone text-success me-2"></i>
                                                (11) 2345-6789
                                            </p>
                                            <p class="card-text">
                                                <i class="fas fa-clock text-warning me-2"></i>
                                                Seg-Sex: 7h às 17h<br>
                                                Sáb-Dom: Fechado
                                            </p>
                                            <div class="store-features">
                                                <span class="badge bg-warning me-1">Apenas Retirada</span>
                                                <span class="badge bg-info">Atacado</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Delivery Areas -->
            <section class="py-5 bg-light">
                <div class="container">
                    <h2 class="text-center mb-5">Áreas de Entrega</h2>
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <div class="delivery-area">
                                <i class="fas fa-shipping-fast fa-3x text-success mb-3"></i>
                                <h5>Entrega Expressa</h5>
                                <p class="text-muted">Mesmo dia</p>
                                <ul class="list-unstyled">
                                    <li>• São Paulo (Capital)</li>
                                    <li>• ABC Paulista</li>
                                    <li>• Guarulhos</li>
                                    <li>• Osasco</li>
                                </ul>
                                <span class="badge bg-success">Até 6h</span>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="delivery-area">
                                <i class="fas fa-truck fa-3x text-primary mb-3"></i>
                                <h5>Entrega Rápida</h5>
                                <p class="text-muted">1-2 dias úteis</p>
                                <ul class="list-unstyled">
                                    <li>• Grande São Paulo</li>
                                    <li>• Campinas</li>
                                    <li>• Santos</li>
                                    <li>• São José dos Campos</li>
                                </ul>
                                <span class="badge bg-primary">1-2 dias</span>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="delivery-area">
                                <i class="fas fa-map-marked-alt fa-3x text-warning mb-3"></i>
                                <h5>Entrega Nacional</h5>
                                <p class="text-muted">3-10 dias úteis</p>
                                <ul class="list-unstyled">
                                    <li>• Todo o Brasil</li>
                                    <li>• Capitais e Interior</li>
                                    <li>• Correios e Transportadoras</li>
                                    <li>• Frete Grátis acima de R$ 150</li>
                                </ul>
                                <span class="badge bg-warning">3-10 dias</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Transportation -->
            <section class="py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Como Chegar</h2>
                    <div class="row">
                        <div class="col-md-3 text-center mb-4">
                            <div class="transport-option">
                                <i class="fas fa-subway fa-3x text-primary mb-3"></i>
                                <h5>Metrô</h5>
                                <p>Estação Vila Olímpica<br>Linha 2-Verde</p>
                                <small class="text-muted">5 min caminhando</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center mb-4">
                            <div class="transport-option">
                                <i class="fas fa-bus fa-3x text-success mb-3"></i>
                                <h5>Ônibus</h5>
                                <p>Linhas: 175M, 2025<br>Ponto: Rua dos Esportes</p>
                                <small class="text-muted">Em frente à loja</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center mb-4">
                            <div class="transport-option">
                                <i class="fas fa-car fa-3x text-warning mb-3"></i>
                                <h5>Carro</h5>
                                <p>Estacionamento próprio<br>100 vagas gratuitas</p>
                                <small class="text-muted">2h grátis</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center mb-4">
                            <div class="transport-option">
                                <i class="fas fa-bicycle fa-3x text-info mb-3"></i>
                                <h5>Bicicleta</h5>
                                <p>Bicicletário seguro<br>20 vagas</p>
                                <small class="text-muted">Gratuito</small>
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
