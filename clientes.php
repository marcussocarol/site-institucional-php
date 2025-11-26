<?php 
// 1. Define o título para esta página
$pageTitle = "SportMax - Nossos Clientes";
// 2. Inclui o cabeçalho (que abre as tags wrapper, nav e content-wrapper)
require_once 'includes/header.php'; 
?>

<!-- Client Types -->
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <div class="client-type-card">
                                <i class="fas fa-trophy fa-4x text-warning mb-3"></i>
                                <h4>Atletas Profissionais</h4>
                                <p>Fornecemos equipamentos de alta performance para atletas de elite em diversas modalidades esportivas.</p>
                                <div class="stats">
                                    <span class="badge bg-warning text-dark">200+ Atletas</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="client-type-card">
                                <i class="fas fa-users fa-4x text-primary mb-3"></i>
                                <h4>Equipes e Clubes</h4>
                                <p>Parcerias com times profissionais e clubes esportivos, fornecendo uniformes e equipamentos completos.</p>
                                <div class="stats">
                                    <span class="badge bg-primary">50+ Equipes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="client-type-card">
                                <i class="fas fa-heart fa-4x text-success mb-3"></i>
                                <h4>Praticantes Amadores</h4>
                                <p>Atendemos milhares de pessoas que praticam esporte por hobby e buscam qualidade com preço justo.</p>
                                <div class="stats">
                                    <span class="badge bg-success">500K+ Clientes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Client Success Stories -->
            <section class="py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Histórias de Sucesso</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-primary"></div>
                                    <div class="timeline-content">
                                        <h5>2020 - Parceria com Atletas Olímpicos</h5>
                                        <p>Iniciamos fornecimento de equipamentos para 5 atletas que competiram nas Olimpíadas de Tóquio.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-success"></div>
                                    <div class="timeline-content">
                                        <h5>2021 - Expansão para Clubes</h5>
                                        <p>Fechamos contratos com 20 clubes esportivos, fornecendo uniformes e equipamentos completos.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-warning"></div>
                                    <div class="timeline-content">
                                        <h5>2022 - 100K Clientes Ativos</h5>
                                        <p>Alcançamos a marca de 100 mil clientes ativos em nossa plataforma online.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-info"></div>
                                    <div class="timeline-content">
                                        <h5>2024 - Meio Milhão de Clientes</h5>
                                        <p>Chegamos a 500 mil clientes satisfeitos, consolidando nossa posição no mercado esportivo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php 
// 3. Inclui o rodapé
require_once 'includes/footer.php'; 
?>