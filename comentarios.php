<?php 
$pageTitle = "Comentários - SportMax";
require_once 'includes/header.php'; 
require_once 'includes/config.php';

// Busca comentários do banco
$stmt = $pdo->query("SELECT * FROM comentarios ORDER BY data_criacao DESC");
$comentarios = $stmt->fetchAll();

// Calcula média
$media = 0;
if (count($comentarios) > 0) {
    $soma = 0;
    foreach($comentarios as $c) $soma += $c['nota'];
    $media = number_format($soma / count($comentarios), 1);
}
?>
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
<div class="content">
    
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center border-end">
                    <h1 class="display-2 fw-bold text-warning"><?= $media ?></h1>
                    <div class="text-warning mb-2">
                        <?php for($i=1; $i<=5; $i++) echo ($i <= round($media)) ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>'; ?>
                    </div>
                    <p class="text-muted"><?= count($comentarios) ?> avaliações</p>
                </div>
                <div class="col-md-8 ps-md-5">
                    <h3>O que nossos clientes dizem</h3>
                    <p class="lead text-muted">A opinião de quem usa nossos produtos no dia a dia.</p>
                    
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <button class="btn btn-primary btn-lg mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#formComentario">
                            <i class="fas fa-pen me-2"></i>Escrever Avaliação
                        </button>
                    <?php else: ?>
                        <a href="login.php" class="btn btn-outline-primary mt-3">Faça login para avaliar</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="collapse bg-light border-bottom" id="formComentario">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Nova Avaliação</h5>
                            <form action="includes/comentarios_ops.php" method="POST">
                                <input type="hidden" name="acao" value="criar">
                                <div class="mb-3">
                                    <label>Nota (1 a 5)</label>
                                    <select name="nota" class="form-select" required>
                                        <option value="5">⭐⭐⭐⭐⭐ (Excelente)</option>
                                        <option value="4">⭐⭐⭐⭐ (Muito Bom)</option>
                                        <option value="3">⭐⭐⭐ (Bom)</option>
                                        <option value="2">⭐⭐ (Ruim)</option>
                                        <option value="1">⭐ (Péssimo)</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Título</label>
                                    <input type="text" name="titulo" class="form-control" placeholder="Resumo da sua experiência" required>
                                </div>
                                <div class="mb-3">
                                    <label>Comentário</label>
                                    <textarea name="texto" class="form-control" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Publicar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach($comentarios as $c): ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h6 class="fw-bold mb-0"><?= htmlspecialchars($c['nome_usuario']) ?></h6>
                                    <small class="text-muted"><?= date('d/m/Y', strtotime($c['data_criacao'])) ?></small>
                                </div>
                                <div class="text-warning">
                                    <?php for($i=1; $i<=5; $i++) echo ($i <= $c['nota']) ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>'; ?>
                                </div>
                            </div>
                            <h5 class="card-title mt-3"><?= htmlspecialchars($c['titulo']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($c['texto']) ?></p>
                            
                            <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $c['usuario_id']): ?>
                                <hr>
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editModal<?= $c['id'] ?>">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                    <a href="includes/comentarios_ops.php?acao=excluir&id=<?= $c['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Tem certeza?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>

                                <div class="modal fade" id="editModal<?= $c['id'] ?>" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Editar Comentário</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="includes/comentarios_ops.php" method="POST">
                                                    <input type="hidden" name="acao" value="editar">
                                                    <input type="hidden" name="id" value="<?= $c['id'] ?>">
                                                    <div class="mb-3">
                                                        <label>Nota</label>
                                                        <select name="nota" class="form-select">
                                                            <option value="5" <?= $c['nota']==5?'selected':'' ?>>5 Estrelas</option>
                                                            <option value="4" <?= $c['nota']==4?'selected':'' ?>>4 Estrelas</option>
                                                            <option value="3" <?= $c['nota']==3?'selected':'' ?>>3 Estrelas</option>
                                                            <option value="2" <?= $c['nota']==2?'selected':'' ?>>2 Estrelas</option>
                                                            <option value="1" <?= $c['nota']==1?'selected':'' ?>>1 Estrela</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Título</label>
                                                        <input type="text" name="titulo" class="form-control" value="<?= htmlspecialchars($c['titulo']) ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Texto</label>
                                                        <textarea name="texto" class="form-control" rows="3"><?= htmlspecialchars($c['texto']) ?></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<?php require_once 'includes/footer.php'; ?>