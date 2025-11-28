<?php 
// Define o título específico para esta página
$pageTitle = "SportMax - Home"; 

// Inclui o cabeçalho
require_once 'includes/header.php'; 
?>

<section class="hero-section">
                <div class="hero-carousel">
                    <div class="hero-slide active">
                        <img src="img/corrida.jpg" alt="Homem correndo em uma paisagem urbana, representando performance e esporte." class="hero-image">
                        <div class="hero-content">
                            <div class="container">
                                <div class="hero-content-wrapper">
                                    <div class="hero-text-content">
                                        <h6 class="hero-subtitle">NOVA COLEÇÃO FITNESS</h6>
                                        <h1 class="hero-title">Suor é o nosso combustível</h1>
                                        <a href="produtos.php" class="hero-btn">Confira</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-slide">
                        <img src="img/academia.jpg" alt="Equipamentos de musculação em uma academia, representando o foco no treino." class="hero-image">
                        <div class="hero-content">
                            <div class="container">
                                <div class="hero-content-wrapper">
                                    <div class="hero-text-content">
                                        <h6 class="hero-subtitle">EQUIPAMENTOS DE TREINO</h6>
                                        <h1 class="hero-title">Supere seus limites</h1>
                                        <a href="produtos.php" class="hero-btn">Veja Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-slide">
                        <img src="img/yoga.jpg" alt="Pessoas praticando Yoga ao ar livre, representando bem-estar e saúde." class="hero-image">
                        <div class="hero-content">
                            <div class="container">
                                <div class="hero-content-wrapper">
                                    <div class="hero-text-content">
                                        <h6 class="hero-subtitle">ESPORTE É VIDA</h6>
                                        <h1 class="hero-title">Aproveite a jornada</h1>
                                        <a href="produtos.php" class="hero-btn">Compre Já</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </section><section class="sports-section">
                <div class="container">
                    <div class="sports-header">
                        <h2 class="section-title">Encontre seu esporte</h2>
                    </div>
                    
                    <div class="sports-main-cards">
                        <div class="sport-card-wrapper">
                            <div class="sport-card">
                                <img src="img/camping.jpg" alt="Camping, Trilha & Neve" class="img-fluid">
                                <div class="sport-overlay">
                                    <h5 class="sport-title">Camping, Trilha & Neve</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sport-card-wrapper">
                            <div class="sport-card">
                                <img src="img/surf.jpg" alt="Surf" class="img-fluid">
                                <div class="sport-overlay">
                                    <h5 class="sport-title">Surf</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sport-card-wrapper">
                            <div class="sport-card">
                                <img src="img/ciclismo.jpg" alt="Ciclismo" class="img-fluid">
                                <div class="sport-overlay">
                                    <h5 class="sport-title">Ciclismo</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sport-card-wrapper">
                            <div class="sport-card">
                                <img src="img/natação.jpg" alt="Natação" class="img-fluid">
                                <div class="sport-overlay">
                                    <h5 class="sport-title">Natação</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sport-card-wrapper">
                            <div class="sport-card">
                                <img src="img/futebol.jpg" alt="Futebol" class="img-fluid">
                                <div class="sport-overlay">
                                    <h5 class="sport-title">Futebol</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sport-card-wrapper">
                            <div class="sport-card">
                                <img src="img/suplementos.jpg" alt="Suplementos e Acessórios" class="img-fluid">
                                <div class="sport-overlay">
                                    <h5 class="sport-title">Suplementos e Acessórios</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div> <?php 
// Inclui o rodapé
require_once 'includes/footer.php'; 
?>