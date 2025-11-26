<?php 
// 1. Define o título para esta página
$pageTitle = "SportMax - Comentários e Avaliações";
// 2. Inclui o cabeçalho (que abre as tags wrapper, nav e content-wrapper)
require_once 'includes/header.php'; 
?>
            <!-- Rating Overview -->
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="rating-overview">
                                <h2 class="display-3 text-warning">4.8</h2>
                                <div class="stars mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="text-muted">Baseado em 2.847 avaliações</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="rating-breakdown">
                                <div class="rating-bar mb-2">
                                    <span class="rating-label">5 estrelas</span>
                                    <div class="progress mx-3">
                                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                                    </div>
                                    <span class="rating-count">75%</span>
                                </div>
                                <div class="rating-bar mb-2">
                                    <span class="rating-label">4 estrelas</span>
                                    <div class="progress mx-3">
                                        <div class="progress-bar bg-warning" style="width: 18%"></div>
                                    </div>
                                    <span class="rating-count">18%</span>
                                </div>
                                <div class="rating-bar mb-2">
                                    <span class="rating-label">3 estrelas</span>
                                    <div class="progress mx-3">
                                        <div class="progress-bar bg-warning" style="width: 5%"></div>
                                    </div>
                                    <span class="rating-count">5%</span>
                                </div>
                                <div class="rating-bar mb-2">
                                    <span class="rating-label">2 estrelas</span>
                                    <div class="progress mx-3">
                                        <div class="progress-bar bg-warning" style="width: 1%"></div>
                                    </div>
                                    <span class="rating-count">1%</span>
                                </div>
                                <div class="rating-bar">
                                    <span class="rating-label">1 estrela</span>
                                    <div class="progress mx-3">
                                        <div class="progress-bar bg-warning" style="width: 1%"></div>
                                    </div>
                                    <span class="rating-count">1%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reviews Section -->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3>Avaliações dos Clientes</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card review-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div class="reviewer-info">
                                            <h6 class="mb-1">Carlos Silva</h6>
                                            <small class="text-muted">Verificado • Há 2 dias</small>
                                        </div>
                                        <div class="stars">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <p class="review-text">"Excelente qualidade dos produtos! Comprei um tênis de corrida e estou muito satisfeito. Entrega rápida e atendimento nota 10."</p>
                                    <div class="review-product">
                                        <small class="text-muted">Produto: Tênis Nike Air Max</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card review-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div class="reviewer-info">
                                            <h6 class="mb-1">Ana Costa</h6>
                                            <small class="text-muted">Verificado • Há 1 semana</small>
                                        </div>
                                        <div class="stars">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <p class="review-text">"Roupas de academia de ótima qualidade. O tecido é confortável e não desbota. Já fiz várias compras e sempre fico satisfeita."</p>
                                    <div class="review-product">
                                        <small class="text-muted">Produto: Conjunto Fitness Feminino</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card review-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div class="reviewer-info">
                                            <h6 class="mb-1">Roberto Santos</h6>
                                            <small class="text-muted">Verificado • Há 2 semanas</small>
                                        </div>
                                        <div class="stars">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <p class="review-text">"Equipamentos chegaram bem embalados e dentro do prazo. Única ressalva é que poderia ter mais opções de cores."</p>
                                    <div class="review-product">
                                        <small class="text-muted">Produto: Kit de Musculação</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card review-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div class="reviewer-info">
                                            <h6 class="mb-1">Mariana Oliveira</h6>
                                            <small class="text-muted">Verificado • Há 3 semanas</small>
                                        </div>
                                        <div class="stars">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <p class="review-text">"Atendimento excepcional! Tive um problema com o tamanho e a troca foi super rápida. Produtos de qualidade e preços justos."</p>
                                    <div class="review-product">
                                        <small class="text-muted">Produto: Tênis de Caminhada</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Write Review Section -->
            <section class="py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Deixe sua Avaliação</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Sua Avaliação</label>
                                            <div class="rating-input">
                                                <i class="far fa-star" data-rating="1"></i>
                                                <i class="far fa-star" data-rating="2"></i>
                                                <i class="far fa-star" data-rating="3"></i>
                                                <i class="far fa-star" data-rating="4"></i>
                                                <i class="far fa-star" data-rating="5"></i>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="reviewTitle" class="form-label">Título da Avaliação</label>
                                            <input type="text" class="form-control" id="reviewTitle" placeholder="Resuma sua experiência">
                                        </div>
                                        <div class="mb-3">
                                            <label for="reviewText" class="form-label">Sua Avaliação</label>
                                            <textarea class="form-control" id="reviewText" rows="4" placeholder="Conte-nos sobre sua experiência com o produto"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="reviewerName" class="form-label">Seu Nome</label>
                                            <input type="text" class="form-control" id="reviewerName" placeholder="Como você gostaria de aparecer">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enviar Avaliação</button>
                                    </form>
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
