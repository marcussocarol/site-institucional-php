// SportMax - Custom JavaScript

function toggleDarkMode() {
    const body = document.body;
    const icon = document.getElementById("darkModeIcon");

    body.classList.toggle("dark-mode");

    if (body.classList.contains("dark-mode")) {
        icon.classList.remove("fa-moon");
        icon.classList.add("fa-sun");
        localStorage.setItem("darkMode", "enabled");
        showToast("Modo noturno ativado", "info");
    } else {
        icon.classList.remove("fa-sun");
        icon.classList.add("fa-moon");
        localStorage.setItem("darkMode", "disabled");
        showToast("Modo claro ativado", "info");
    }
}

// Funções para a página de detalhes, agora dentro de produtos.html
function changeImage(thumbnail) {
    const mainImage = document.getElementById("mainImage");
    const thumbnails = document.querySelectorAll(".thumbnail");

    if (mainImage && thumbnail) {
        mainImage.src = thumbnail.src;

        thumbnails.forEach((thumb) => thumb.classList.remove("active"));
        thumbnail.classList.add("active");
    }
}

function increaseQuantity() {
    const quantityInput = document.getElementById("quantity");
    if (quantityInput) {
        const currentValue = Number.parseInt(quantityInput.value) || 1;
        quantityInput.value = currentValue + 1;
    }
}

function decreaseQuantity() {
    const quantityInput = document.getElementById("quantity");
    if (quantityInput) {
        const currentValue = Number.parseInt(quantityInput.value) || 1;
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    // Lógica da página de carrinho
    const cartQuantityButtons = document.querySelectorAll(".cart-quantity-btn");
    const cartRemoveButtons = document.querySelectorAll(".cart-remove-btn");

    cartQuantityButtons.forEach((button) => {
    button.addEventListener("click", function () {
        const action = this.getAttribute("data-action");
        const quantityInput = this.parentElement.querySelector("input");
        let quantity = parseInt(quantityInput.value);

        if (action === "increase") {
            quantity++;
        } else if (action === "decrease" && quantity > 1) {
            quantity--;
        }

        quantityInput.value = quantity;
        // Aqui você chamaria uma função para recalcular o total do carrinho
        showToast(`Quantidade atualizada para ${quantity}`, "info");
    });
});

cartRemoveButtons.forEach((button) => {
    button.addEventListener("click", function () {
        const productRow = this.closest("tr");
        const productName = productRow.querySelector("td:nth-child(2)").textContent;
        productRow.remove();
        showToast(`"${productName}" removido da sacola`, "success");
        // Aqui você chamaria uma função para recalcular o total do carrinho
    });
});
    
    // Botão do carrinho de compras
    const cartButton = document.querySelector('.main-header .fa-shopping-cart');

    if (cartButton) {
        cartButton.parentElement.addEventListener('click', (e) => {
        e.preventDefault();
        // Aqui você pode redirecionar para a página do carrinho
        window.location.href = 'sacola.php'; // AQUI AQUI  
        // ou pode mostrar uma notificação
        showToast('Redirecionando para a sacola...', 'info');
    });
}
    
    const darkModeToggle = document.getElementById("darkModeToggle");

    if (darkModeToggle) {
        darkModeToggle.addEventListener("click", toggleDarkMode);
    }

    // Aplicar modo noturno salvo no localStorage
    const darkMode = localStorage.getItem("darkMode");
    const body = document.body;
    const icon = document.getElementById("darkModeIcon");

    if (darkMode === "enabled") {
        body.classList.add("dark-mode");
        if (icon) {
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
        }
    }

    // Hero Carousel Functionality
    let currentSlide = 0;
    const slides = document.querySelectorAll(".hero-slide");
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide) => slide.classList.remove("active"));
        slides[index].classList.add("active");
    }

    function changeSlide(direction) {
        currentSlide += direction;
        if (currentSlide >= totalSlides) {
            currentSlide = 0;
        } else if (currentSlide < 0) {
            currentSlide = totalSlides - 1;
        }
        showSlide(currentSlide);
    }

    // Inicializa o carrossel na primeira página
    if (slides.length > 0) {
        showSlide(currentSlide);
        setInterval(() => {
            changeSlide(1);
        }, 5000);
    }

    // Products Carousel Scroll
    const productsCarousel = document.getElementById("productsCarousel");
    if (productsCarousel) {
        // As funções de rolagem foram removidas porque o carrossel do index não tem botões de rolagem
        // A navegação é automática.
    }

    // Wishlist Functionality
    const wishlistButtons = document.querySelectorAll(".btn-wishlist");
    wishlistButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            const icon = this.querySelector("i");
            if (icon.classList.contains("far")) {
                icon.classList.remove("far");
                icon.classList.add("fas");
                this.style.background = "#dc3545";
                this.style.color = "white";
                showToast("Produto adicionado aos favoritos!", "success");
            } else {
                icon.classList.remove("fas");
                icon.classList.add("far");
                this.style.background = "white";
                this.style.color = "#333";
                showToast("Produto removido dos favoritos!", "info");
            }
        });
    });

    // Toast Notification System
    function showToast(message, type = "info") {
        const existingToasts = document.querySelectorAll(".custom-toast");
        existingToasts.forEach((toast) => toast.remove());

        const toast = document.createElement("div");
        toast.className = `custom-toast alert alert-${type === "success" ? "success" : "info"} alert-dismissible fade show`;
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            animation: slideInRight 0.3s ease-out;
        `;
        toast.innerHTML = `
            <i class="fas fa-${type === "success" ? "check-circle" : "info-circle"} me-2"></i>
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        document.body.appendChild(toast);
        setTimeout(() => {
            if (toast.parentNode) {
                toast.classList.add("fade");
                setTimeout(() => toast.remove(), 150);
            }
        }, 3000);
    }

    // Search Functionality
    const searchForm = document.querySelector(".form-inline");
    const searchInput = document.querySelector(".form-control-navbar");

    if (searchForm) {
        searchForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const searchTerm = searchInput.value.trim();
            if (searchTerm) {
                showToast(`Buscando por: "${searchTerm}"`, "info");
                console.log("Searching for:", searchTerm);
            }
        });
    }

    // Smooth Scrolling for Internal Links
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        });
    });

    // Product Card Hover Effects
    const productCards = document.querySelectorAll(".product-card");
    productCards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-5px)";
        });
        card.addEventListener("mouseleave", function () {
            this.style.transform = "translateY(0)";
        });
    });

    // Category and Sport Card Interactions
    const categoryItems = document.querySelectorAll(".category-item, .product-category, .sport-card");
    categoryItems.forEach((item) => {
        item.addEventListener("click", function () {
            const title = this.querySelector("h6, h5, p")?.textContent || "Categoria";
            showToast(`Explorando: ${title}`, "info");
            console.log("Category clicked:", title);
        });
    });

    // Newsletter Subscription
    const newsletterButton = document.querySelector("footer .newsletter-btn");
    const emailInput = document.querySelector('footer input[type="email"]');
    if (newsletterButton && emailInput) {
        newsletterButton.addEventListener("click", () => {
            const email = emailInput.value.trim();
            if (email && isValidEmail(email)) {
                showToast("Obrigado! Você foi inscrito na nossa newsletter.", "success");
                emailInput.value = "";
            } else {
                showToast("Por favor, insira um e-mail válido.", "info");
            }
        });
        emailInput.addEventListener("keypress", (e) => {
            if (e.key === "Enter") {
                newsletterButton.click();
            }
        });
    }

    // Email Validation Helper
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Responsive Navigation
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbarCollapse = document.querySelector(".navbar-collapse");
    if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener("click", () => {
            navbarCollapse.classList.toggle("show");
        });
        document.addEventListener("click", (e) => {
            if (!navbarToggler.contains(e.target) && !navbarCollapse.contains(e.target)) {
                navbarCollapse.classList.remove("show");
            }
        });
    }

    // Loading Animation for Images
    const images = document.querySelectorAll("img");
    images.forEach((img) => {
        img.style.opacity = "0";
        img.style.transition = "opacity 0.3s ease";
        if (img.complete) {
            img.style.opacity = "1";
        } else {
            img.addEventListener("load", function () {
                this.style.opacity = "1";
            });
        }
    });

    // Size and Color Selection for Product Details
    const sizeButtons = document.querySelectorAll(".size-btn");
    const colorButtons = document.querySelectorAll(".color-btn");

    sizeButtons.forEach((button) => {
        button.addEventListener("click", function () {
            sizeButtons.forEach((btn) => btn.classList.remove("active"));
            this.classList.add("active");
            showToast(`Tamanho ${this.textContent} selecionado`, "info");
        });
    });
    colorButtons.forEach((button) => {
        button.addEventListener("click", function () {
            colorButtons.forEach((btn) => btn.classList.remove("active"));
            this.classList.add("active");
            const colorName = this.getAttribute("title") || "Cor";
            showToast(`${colorName} selecionada`, "info");
        });
    });

    // Rating System for Comments Page
    const ratingStars = document.querySelectorAll(".rating-input i");
    let selectedRating = 0;
    ratingStars.forEach((star, index) => {
        star.addEventListener("mouseover", () => {
            highlightStars(index + 1);
        });
        star.addEventListener("click", () => {
            selectedRating = index + 1;
            highlightStars(selectedRating);
            showToast(`Avaliação: ${selectedRating} estrela${selectedRating > 1 ? "s" : ""}`, "info");
        });
    });
    const ratingContainer = document.querySelector(".rating-input");
    if (ratingContainer) {
        ratingContainer.addEventListener("mouseleave", () => {
            highlightStars(selectedRating);
        });
    }
    function highlightStars(count) {
        ratingStars.forEach((star, index) => {
            if (index < count) {
                star.classList.remove("far");
                star.classList.add("fas");
            } else {
                star.classList.remove("fas");
                star.classList.add("far");
            }
        });
    }

    // Filter Functionality for Products and Comments
    const filterButtons = document.querySelectorAll(".filter-buttons .btn");
    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            filterButtons.forEach((btn) => btn.classList.remove("active"));
            this.classList.add("active");
            const filterText = this.textContent.trim();
            showToast(`Filtro aplicado: ${filterText}`, "info");
        });
    });

    // Contact Form Validation
    const contactForm = document.querySelector("form");
    if (contactForm && window.location.pathname.includes("contato")) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();
            const requiredFields = this.querySelectorAll("[required]");
            let isValid = true;
            requiredFields.forEach((field) => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add("is-invalid");
                } else {
                    field.classList.remove("is-invalid");
                }
            });
            const emailField = this.querySelector('input[type="email"]');
            if (emailField && emailField.value && !isValidEmail(emailField.value)) {
                isValid = false;
                emailField.classList.add("is-invalid");
            }
            if (isValid) {
                showToast("Mensagem enviada com sucesso! Entraremos em contato em breve.", "success");
                this.reset();
            } else {
                showToast("Por favor, preencha todos os campos obrigatórios corretamente.", "info");
            }
        });
    }

    // Review Form Submission
    const reviewForm = document.querySelector("#comentarios form");
    if (reviewForm) {
        reviewForm.addEventListener("submit", function (e) {
            e.preventDefault();
            const rating = document.querySelectorAll(".rating-input .fas").length;
            const title = this.querySelector("#reviewTitle")?.value;
            const text = this.querySelector("#reviewText")?.value;
            const name = this.querySelector("#reviewerName")?.value;
            if (rating === 0) {
                showToast("Por favor, selecione uma avaliação.", "info");
                return;
            }
            if (!title || !text || !name) {
                showToast("Por favor, preencha todos os campos.", "info");
                return;
            }
            showToast("Avaliação enviada com sucesso! Obrigado pelo seu feedback.", "success");
            this.reset();
            const ratingStars = document.querySelectorAll(".rating-input i");
            ratingStars.forEach((star) => {
                star.classList.remove("fas");
                star.classList.add("far");
            });
        });
    }

    // Social Media Interactions
    const socialButtons = document.querySelectorAll(".social-card .btn, .social-follow-buttons .btn");
    socialButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const platform = this.textContent.trim();
            showToast(`Redirecionando para ${platform}...`, "info");
        });
    });

    // Social post interactions
    const likeButtons = document.querySelectorAll(".social-interactions span");
    likeButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const icon = this.querySelector("i");
            if (icon && icon.classList.contains("far")) {
                icon.classList.remove("far");
                icon.classList.add("fas");
                showToast("Curtido!", "success");
            }
        });
    });

    // Store Location Interactions
    const directionButtons = document.querySelectorAll('.store-card .btn:contains("Como Chegar")');
    const callButtons = document.querySelectorAll('.store-card .btn:contains("Ligar")');

    document.querySelectorAll(".store-card .btn").forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const action = this.textContent.trim();
            const storeName = this.closest(".store-card").querySelector("h5").textContent;
            if (action.includes("Como Chegar")) {
                showToast(`Abrindo direções para ${storeName}`, "info");
            } else if (action.includes("Ligar")) {
                showToast(`Ligando para ${storeName}`, "info");
            }
        });
    });

    // Accordion Enhancement
    const accordionButtons = document.querySelectorAll(".accordion-button");
    accordionButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const isExpanded = this.getAttribute("aria-expanded") === "true";
            if (!isExpanded) {
                const question = this.textContent.trim();
                console.log("FAQ opened:", question);
            }
        });
    });

    // Hashtag Interactions
    const hashtags = document.querySelectorAll(".hashtag-cloud .badge");
    hashtags.forEach((hashtag) => {
        hashtag.addEventListener("click", function () {
            const tag = this.textContent.trim();
            showToast(`Explorando posts com ${tag}`, "info");
        });
    });

    // Lógica para mostrar/esconder a seção de detalhes na página de produtos
    const productListSections = document.querySelectorAll(".product-list-section");
    const productDetailsSection = document.querySelector(".product-details-section");
    const backButton = document.getElementById("backToProductsButton");

    if (productListSections.length > 0 && productDetailsSection) {
        productDetailsSection.style.display = "none";
        
        productListSections.forEach(section => {
            section.querySelectorAll(".product-card").forEach((card) => {
                card.addEventListener("click", (e) => {
                    if (e.target.closest("a") || e.target.closest("button")) {
                        return;
                    }
                    productListSections.forEach(s => s.style.display = "none");
                    productDetailsSection.style.display = "block";
                    const productName = card.querySelector(".card-title").textContent;
                    showToast(`Visualizando detalhes do produto: ${productName}`, "info");
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            });
        });
    }

    if (backButton) {
        backButton.addEventListener("click", () => {
            if (productDetailsSection) {
                productDetailsSection.style.display = "none";
            }
            productListSections.forEach(s => s.style.display = "block");
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
    
    console.log("SportMax website loaded successfully! 🏃‍♂️");
    console.log("SportMax - All pages functionality loaded! 🚀");
    console.log("SportMax - Dark mode functionality loaded! 🌙");
});