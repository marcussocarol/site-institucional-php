document.addEventListener("DOMContentLoaded", () => {
    
    // --- 1. HERO CAROUSEL (Para o Index.php) ---
    let currentSlide = 0;
    const slides = document.querySelectorAll(".hero-slide");
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide) => slide.classList.remove("active"));
        if(slides[index]) slides[index].classList.add("active");
    }

    function changeSlide(direction) {
        currentSlide += direction;
        if (currentSlide >= totalSlides) currentSlide = 0;
        else if (currentSlide < 0) currentSlide = totalSlides - 1;
        showSlide(currentSlide);
    }

    if (slides.length > 0) {
        showSlide(currentSlide);
        setInterval(() => { changeSlide(1); }, 5000);
    }

    // --- 2. SISTEMA DE TOAST (Notificações) ---
    window.showToast = function(message, type = "info") {
        const toast = document.createElement("div");
        toast.className = `custom-toast alert alert-${type === "success" ? "success" : "info"} alert-dismissible fade show`;
        toast.style.cssText = `position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px;`;
        toast.innerHTML = `<i class="fas fa-${type === "success" ? "check-circle" : "info-circle"} me-2"></i> ${message} <button type="button" class="btn-close" data-bs-dismiss="alert"></button>`;
        document.body.appendChild(toast);
        setTimeout(() => { toast.remove(); }, 3000);
    }

    // --- 3. LOADING SUAVE DAS IMAGENS ---
    const images = document.querySelectorAll("img");
    images.forEach((img) => {
        img.style.opacity = "0";
        img.style.transition = "opacity 0.5s ease";
        if (img.complete) img.style.opacity = "1";
        else img.addEventListener("load", () => img.style.opacity = "1");
    });
});