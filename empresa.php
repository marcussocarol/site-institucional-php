<?php 
// 1. Define o título para esta página
$pageTitle = "SportMax - Empresa";
// 2. Inclui o cabeçalho
require_once 'includes/header.php'; 
?>

<div class="content-wrapper"> <section class="py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <h2 class="mb-4">Quem Somos</h2>
                    <p class="lead">A SportMax é uma empresa brasileira especializada em artigos esportivos, fundada em 2010 com o objetivo de democratizar o acesso ao esporte.</p>
                    <p>Nossa missão é fornecer produtos de alta qualidade para atletas profissionais e amadores, sempre com os melhores preços do mercado. Acreditamos que o esporte transforma vidas e constrói um mundo melhor.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/loja.jpg" alt="Nossa Empresa" class="img-fluid rounded">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fas fa-bullseye fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Missão</h5>
                            <p class="card-text">Democratizar o acesso ao esporte através de produtos de qualidade e preços acessíveis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fas fa-eye fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Visão</h5>
                            <p class="card-text">Ser a principal referência em artigos esportivos no Brasil até 2030.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fas fa-heart fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Valores</h5>
                            <p class="card-text">Qualidade, inovação, sustentabilidade e compromisso com nossos clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <h3 class="display-4 text-primary">14</h3>
                    <p class="lead">Anos de Experiência</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="display-4 text-primary">500K+</h3>
                    <p class="lead">Clientes Satisfeitos</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="display-4 text-primary">10K+</h3>
                    <p class="lead">Produtos Disponíveis</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="display-4 text-primary">50+</h3>
                    <p class="lead">Marcas Parceiras</p>
                </div>
            </div>
        </div>
    </section>
</div> <?php 
// 3. Inclui o rodapé
require_once 'includes/footer.php'; 
?>