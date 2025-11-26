<?php
// O componente footer.php
?>
        </div> <footer class="main-footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-column">
                        <h5 class="footer-title">SportMax</h5>
                        <p class="footer-description">Sua loja completa de artigos esportivos. Qualidade e performance para todos os esportes.</p>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="footer-column">
                        <h6 class="footer-title">Atendimento</h6>
                        <ul class="footer-links">
                            <li><a href="contato.php" class="footer-link">Central de Ajuda</a></li>
                            <li><a href="contato.php" class="footer-link">Fale Conosco</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h6 class="footer-title">Institucional</h6>
                        <ul class="footer-links">
                            <li><a href="empresa.php" class="footer-link">Sobre Nós</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h6 class="footer-title">Newsletter</h6>
                        <p class="newsletter-description">Receba ofertas exclusivas e novidades</p>
                        <div class="newsletter-form">
                            <input type="email" class="form-control" placeholder="Seu e-mail">
                            <button class="newsletter-btn" type="button">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="footer-divider">
                <div class="footer-bottom">
                    <div class="footer-copyright">
                        <p class="copyright-text">&copy; 2025 SportMax. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/js/adminlte.min.js"></script>
    <script src="script.js"></script>
    <script>
        // Mantemos a função Dark Mode aqui para garantir que ela carregue
        function toggleDarkMode() {
            const body = document.body;
            body.classList.toggle('dark-mode');
            const icon = document.getElementById('darkModeIcon');
            if (body.classList.contains('dark-mode')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        }
    </script>
</body>
</html>