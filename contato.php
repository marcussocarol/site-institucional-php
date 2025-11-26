<?php 
// 1. Define o título para esta página
$pageTitle = "SportMax - Contato";
// 2. Inclui o cabeçalho
require_once 'includes/header.php'; 
if (isset($_GET['status']) && isset($_GET['msg'])) {
    // Coleta as mensagens da URL
    $status = htmlspecialchars($_GET['status']); 
    $msg = htmlspecialchars($_GET['msg']);
    
    // Define a classe CSS do AdminLTE/Bootstrap
    $alertClass = ($status === 'success') ? 'alert-success' : 'alert-danger';

    // Exibe a notificação
    echo "<div class='container mt-5'>";
    echo "<div class='alert {$alertClass} alert-dismissible fade show' role='alert'>";
    echo "<strong>" . ucfirst($status) . "!</strong> " . $msg;
    echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
    echo "</div>";
    echo "</div>";
}
?>

<div class="content-wrapper">
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <div class="contact-info-card">
                                <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                                <h5>Telefone</h5>
                                <p class="text-muted">Ligue para nós</p>
                                <p><strong>(11) 3456-7890</strong></p>
                                <p><strong>(11) 98765-4321</strong></p>
                                <small class="text-muted">Seg-Sex: 8h às 18h<br>Sáb: 8h às 14h</small>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="contact-info-card">
                                <i class="fas fa-envelope fa-3x text-success mb-3"></i>
                                <h5>E-mail</h5>
                                <p class="text-muted">Envie uma mensagem</p>
                                <p><strong>contato@sportmax.com.br</strong></p>
                                <p><strong>vendas@sportmax.com.br</strong></p>
                                <small class="text-muted">Resposta em até 24h</small>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="contact-info-card">
                                <i class="fas fa-map-marker-alt fa-3x text-danger mb-3"></i>
                                <h5>Endereço</h5>
                                <p class="text-muted">Visite nossa loja</p>
                                <p><strong>Rua dos Esportes, 123</strong></p>
                                <p><strong>São Paulo - SP</strong></p>
                                <small class="text-muted">CEP: 01234-567</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Envie sua Mensagem</h4>
                                </div>
                                <div class="card-body">
                                    <form action="processa_contato.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName" class="form-label">Nome *</label>
                                                <input type="text" class="form-control" id="firstName" name="nome" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName" class="form-label">Sobrenome *</label>
                                                <input type="text" class="form-control" id="lastName" name="sobrenome" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="form-label">E-mail *</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="phone" class="form-label">Telefone</label>
                                                <input type="tel" class="form-control" id="phone" name="telefone">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="subject" class="form-label">Assunto *</label>
                                            <select class="form-select" id="subject" name="assunto" required>
                                                <option value="">Selecione um assunto</option>
                                                <option value="duvida">Dúvida sobre produto</option>
                                                <option value="pedido">Status do pedido</option>
                                                <option value="troca">Troca/Devolução</option>
                                                <option value="sugestao">Sugestão</option>
                                                <option value="reclamacao">Reclamação</option>
                                                <option value="outros">Outros</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message" class="form-label">Mensagem *</label>
                                            <textarea class="form-control" id="message" name="mensagem" rows="5" placeholder="Descreva sua mensagem aqui..." required></textarea>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
                                            <label class="form-check-label" for="newsletter">
                                                Desejo receber ofertas e novidades por e-mail
                                            </label>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="terms" name="termos" required>
                                            <label class="form-check-label" for="terms">
                                                Concordo com os <a href="#">termos de uso</a> e <a href="#">política de privacidade</a> *
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fas fa-paper-plane me-2"></i>Enviar Mensagem
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Perguntas Frequentes</h2>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                            Como posso rastrear meu pedido?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Você pode rastrear seu pedido através do código de rastreamento enviado por e-mail após a confirmação do pagamento. Também é possível acompanhar pelo nosso site na seção "Meus Pedidos".
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                            Qual o prazo de entrega?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            O prazo de entrega varia conforme sua localização: Região Sudeste (3-5 dias úteis), Região Sul (4-6 dias úteis), demais regiões (5-10 dias úteis). Frete grátis para compras acima de R$ 150.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                            Como fazer trocas e devoluções?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Você tem até 30 dias para solicitar troca ou devolução. O produto deve estar em perfeitas condições, com etiquetas e embalagem original. Entre em contato conosco para iniciar o processo.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                            Vocês têm loja física?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Sim! Nossa loja física fica na Rua dos Esportes, 123, São Paulo - SP. Funcionamos de segunda a sexta das 8h às 18h, e sábados das 8h às 14h. Você pode retirar pedidos ou fazer compras presenciais.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5 bg-light">
                <div class="container">
                    <h2 class="text-center mb-5">Outros Canais de Atendimento</h2>
                    <div class="row">
                        <div class="col-md-3 text-center mb-4">
                            <div class="support-channel">
                                <i class="fab fa-whatsapp fa-3x text-success mb-3"></i>
                                <h5>WhatsApp</h5>
                                <p>(11) 98765-4321</p>
                                <a href="#" class="btn btn-success btn-sm">Conversar</a>
                            </div>
                        </div>
                        <div class="col-md-3 text-center mb-4">
                            <div class="support-channel">
                                <i class="fas fa-comments fa-3x text-primary mb-3"></i>
                                <h5>Chat Online</h5>
                                <p>Atendimento imediato</p>
                                <a href="#" class="btn btn-primary btn-sm">Iniciar Chat</a>
                            </div>
                        </div>
                        <div class="col-md-3 text-center mb-4">
                            <div class="support-channel">
                                <i class="fab fa-telegram fa-3x text-info mb-3"></i>
                                <h5>Telegram</h5>
                                <p>@sportmax_oficial</p>
                                <a href="#" class="btn btn-info btn-sm">Seguir</a>
                            </div>
                        </div>
                        <div class="col-md-3 text-center mb-4">
                            <div class="support-channel">
                                <i class="fas fa-headset fa-3x text-warning mb-3"></i>
                                <h5>SAC</h5>
                                <p>0800 123 4567</p>
                                <a href="#" class="btn btn-warning btn-sm">Ligar</a>
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