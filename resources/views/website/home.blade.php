 @extends('layouts.master')

@section('title', 'Jhan\'s Collections - Premium Fashion Store')

@section('styles')
<style>
    /* Video/Header Section */
    .videobg {
        position: relative;
        width: 100%;
        height: 70vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #000; /* Fallback background */
    }

    /* Particles effect - simplified */
    .particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
        opacity: 0.5;
    }

    /* Carousel container */
    .carousel-container {
        position: relative;
        width: 100%;
        height: 100%;
    }

    /* Individual slides */
    .carousel-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        visibility: hidden;
        transition: opacity 1s ease-in-out, visibility 1s;
    }

    .carousel-slide.active {
        opacity: 1;
        visibility: visible;
    }

    /* Carousel images */
    .carousel-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Carousel text overlay */
    .carousel-text {
        position: absolute;
        bottom: 20%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
        color: white;
        font-size: 2.5rem;
        font-family: "Times New Roman", Times, serif;
        font-weight: 600;
        font-style: italic;
        text-align: center;
        width: 90%;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
        animation: fadeIn 2s ease-in-out;
    }

    /* Carousel dots */
    .carousel-dots {
        position: absolute;
        bottom: 10%;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 3;
    }

    .carousel-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        border: 2px solid transparent;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .carousel-dot.active {
        background: #4bbc43 ;
        transform: scale(1.2);
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* CTA Button */
    .cta-section {
        text-align: center;
        padding: 40px 20px;
        background: #f9f9f9;
    }

    .cta-button {
        background: #4bbc43 ;
        color: white;
        border: none;
        padding: 18px 50px;
        border-radius: 30px;
        font-size: 1.2rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 5px 20px #032b00;
        display: inline-block;
    }

    .cta-button:hover {
        background: #4bbc43 ;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px #032b00;
    }

    /* Collections Section */
    .collections {
        padding: 60px 5%;
        text-align: center;
    }

    .collections h2 {
        font-family: 'Dancing Script', cursive;
        font-size: 3rem;
        font-weight: 700;
        color: #4bbc43 ;
        text-align: center;
        margin-bottom: 3rem;
        text-shadow: 2px 2px 4px #032b00;
    }

    .collection-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

.collection-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Three equal columns */
    gap: 25px; /* Space between cards */
    margin-top: 30px;
    padding: 0 20px;
}

.collection-item {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px #032b00;
    transition: all 0.4s ease;
    cursor: pointer;
}

.collection-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px #032b00;
}

.collection-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.collection-item:hover img {
    transform: scale(1.05);
}

.collection-item .category-name {
    padding: 20px;
    font-size: 1.3rem;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

/* For tablets */
@media (max-width: 992px) {
    .collection-grid {
        grid-template-columns: repeat(2, 1fr); /* Two cards per row on tablets */
        gap: 20px;
    }
}

/* For mobile phones */
@media (max-width: 576px) {
    .collection-grid {
        grid-template-columns: 1fr; /* One card per row on mobile */
        gap: 15px;
        padding: 0 15px;
    }

    .collection-item img {
        height: 200px;
    }

    .collection-item .category-name {
        padding: 15px;
        font-size: 1.1rem;
    }
}

    /* Services/Features Section - FIXED */
    .services {
        padding: 60px 5%;
        width: 100%;
        overflow: hidden;
    }

    .services h2 {
        font-family: 'Dancing Script', cursive;
        font-size: 3rem;
        font-weight: 700;
        color: #4bbc43 ;
        text-align: center;
        margin-bottom: 3rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 columns by default */
        gap: 20px;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .feature-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .feature-img:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    /* MOBILE RESPONSIVE STYLES */
    @media (max-width: 1024px) {
        .videobg {
            height: 60vh;
        }

        .carousel-text {
            font-size: 2.2rem;
            bottom: 15%;
        }

        .services-grid {
            grid-template-columns: repeat(3, 1fr); /* Still 3 columns on tablet */
            gap: 15px;
        }

        .feature-img {
            height: 180px;
        }
    }

    @media (max-width: 768px) {
        .videobg {
            height: 50vh;
        }

        .carousel-text {
            font-size: 1.8rem;
            bottom: 10%;
            width: 95%;
        }

        .carousel-dots {
            bottom: 5%;
        }

        /* Collections grid - 2 columns on tablet */
        .collection-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 0 10px;
        }

        .collection-item img {
            height: 200px;
        }

        /* Services grid - 2 columns on tablet */
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            padding: 0 10px;
        }

        .feature-img {
            height: 160px;
        }

        .services h2,
        .collections h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }
    }

    @media (max-width: 600px) {
        .services-grid {
            grid-template-columns: repeat(2, 1fr); /* 2 columns on small tablets */
            gap: 12px;
            padding: 0 15px;
        }

        .feature-img {
            height: 150px;
        }
    }

    @media (max-width: 480px) {
        .videobg {
            height: 40vh;
        }

        .carousel-text {
            font-size: 1.4rem;
            bottom: 8%;
        }

        .carousel-dot {
            width: 10px;
            height: 10px;
        }

        /* Collections grid - 1 column on mobile */
        .collection-grid {
            grid-template-columns: 1fr;
            gap: 15px;
            max-width: 350px;
            padding: 0;
        }

        .collection-item img {
            height: 220px;
        }

        /* Services grid - 2 columns on mobile */
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            padding: 0 10px;
            max-width: 100%;
        }

        .feature-img {
            height: 140px;
        }

        .services,
        .collections {
            padding: 40px 15px;
        }

        .services h2,
        .collections h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
    }

    @media (max-width: 400px) {
        /* Services grid - 1 column on very small screens */
        .services-grid {
            grid-template-columns: 1fr;
            gap: 15px;
            max-width: 300px;
            margin: 0 auto;
        }

        .feature-img {
            height: 160px;
        }

        .collection-grid {
            max-width: 300px;
        }
    }

    @media (max-width: 360px) {
        .carousel-text {
            font-size: 1.2rem;
        }

        .services-grid {
            gap: 12px;
        }

        .feature-img {
            height: 150px;
        }
    }

    /* Ensure images don't overflow on mobile */
    img {
        max-width: 100%;
        height: auto;
    }

    /* Prevent horizontal scrolling */
    .services, .collections, .videobg {
        overflow-x: hidden;
    }
</style>
@endsection

@section('content')
<!-- Video/Header Section -->
<section class="videobg">
    <!-- Particles effect -->
    <div class="particles" id="particles-container"></div>

    <!-- Carousel -->
    <div class="carousel-container">
        <!-- Slide 1 -->
        <div class="carousel-slide active" data-index="0">
            <img
                src="{{ asset('assets/Service Pages/leo.webp') }}"
                alt="Leo Collection"
                loading="eager"
                width="1200"
                height="800"
                onerror="this.onerror=null; this.src='{{ asset('assets/Service Pages/leo.jpg') }}'"
            >
        </div>

        <!-- Slide 2 -->
        <div class="carousel-slide" data-index="1">
            <img
                src="{{ asset('assets/Service Pages/v88.webp') }}"
                alt="V88 Collection"
                loading="lazy"
                width="1200"
                height="800"
                onerror="this.onerror=null; this.src='{{ asset('assets/Service Pages/v88.jpg') }}'"
            >
        </div>

        <!-- Slide 3 -->
        <div class="carousel-slide" data-index="2">
            <img
                src="{{ asset('assets/Service Pages/v99.webp') }}"
                alt="V99 Collection"
                loading="lazy"
                width="1200"
                height="800"
                onerror="this.onerror=null; this.src='{{ asset('assets/Service Pages/v99.jpg') }}'"
            >
        </div>

        <!-- Carousel text -->
        <div class="carousel-text" id="carousel-text">
            Premium Fashion Collections
        </div>

        <!-- Carousel dots -->
        <div class="carousel-dots" id="carousel-dots">
            <span class="carousel-dot active" data-index="0" onclick="goToSlide(0)"></span>
            <span class="carousel-dot" data-index="1" onclick="goToSlide(1)"></span>
            <span class="carousel-dot" data-index="2" onclick="goToSlide(2)"></span>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <button class="cta-button" onclick="window.location.href='{{ route('products') }}'">
        Discover Our Products
    </button>
</section>

<!-- Collections Section -->
<section class="collections">
    <h2>Our Products</h2>
    <div class="collection-grid">

        <div class="collection-item" onclick="redirectToCategory('kids-boys')">
            <img
                src="{{ asset('assets/Service Pages/front-view-little-kid-blue-t-shirt-khaki-trousers-riding-segway-pink-space.jpg') }}"
                alt="Kids Boys"
                loading="lazy"
                width="600"
                height="400"
            >
            <div class="category-name">Kids Boys</div>
        </div>
        <div class="collection-item" onclick="redirectToCategory('kids-girls')">
            <img
                src="{{ asset('assets/Service Pages/close-up-girl-wearing-hat.jpg') }}"
                alt="Kids Girls"
                loading="lazy"
                width="600"
                height="400"
            >
            <div class="category-name">Kids Girls</div>
        </div>
        <div class="collection-item" onclick="redirectToCategory('mens')">
            <img
                src="{{ asset('assets/Service Pages/37edd82ef385e0e33bcddbdd885152be.jpg') }}"
                alt="Mens"
                loading="lazy"
                width="600"
                height="400"
            >
            <div class="category-name">Mens</div>
        </div>
        <div class="collection-item" onclick="redirectToCategory('womens')">
            <img
                src="{{ asset('assets/Service Pages/cb7141083471301d19c4d24f09a7d42c.jpg') }}"
                alt="Womens"
                loading="lazy"
                width="600"
                height="400"
            >
            <div class="category-name">Womens</div>
        </div>
        <div class="collection-item" onclick="redirectToCategory('home-textiles')">
            <img
                src="{{ asset('assets/Service Pages/personal-shopper-helping-cutomer.jpg') }}"
                alt="Home Textiles"
                loading="lazy"
                width="600"
                height="400"
            >
            <div class="category-name">Home Textiles</div>
        </div>
        <div class="collection-item" onclick="redirectToCategory('inners')">
            <img
                src="{{ asset('assets/Service Pages/under.jpg') }}"
                alt="Inners"
                loading="lazy"
                width="600"
                height="400"
            >
            <div class="category-name">Inners</div>
        </div>
    </div>
</section>

<!-- Services/Features Section - UPDATED -->
<section class="services">
    <h2>Featured Collections</h2>
    <div class="services-grid">
        <div class="feature-item">
            <img src="{{ asset('assets/Service Pages/37edd82ef385e0e33bcddbdd885152be.jpg') }}" alt="Mens Collection" class="feature-img" loading="lazy">
        </div>
        <div class="feature-item">
            <img src="{{ asset('assets/Service Pages/cb7141083471301d19c4d24f09a7d42c.jpg') }}" alt="Womens Collection" class="feature-img" loading="lazy">
        </div>
        <div class="feature-item">
            <img src="{{ asset('assets/Service Pages/v33.jpg') }}" alt="V33 Collection" class="feature-img" loading="lazy">
        </div>
        <div class="feature-item">
            <img src="{{ asset('assets/Service Pages/close-up-girl-wearing-hat.jpg') }}" alt="Kids Girls Collection" class="feature-img" loading="lazy">
        </div>
        <div class="feature-item">
            <img src="{{ asset('assets/Service Pages/front-view-little-kid-blue-t-shirt-khaki-trousers-riding-segway-pink-space.jpg') }}" alt="Kids Boys Collection" class="feature-img" loading="lazy">
        </div>
        <div class="feature-item">
            <img src="{{ asset('assets/Service Pages/women.JPG') }}" alt="Women's Fashion" class="feature-img" loading="lazy">
        </div>
        <div class="feature-item">
            <img src="{{ asset('assets/Service Pages/goat.jpg') }}" alt="Premium Collection" class="feature-img" loading="lazy">
        </div>
        <div class="feature-item">
            <img src="{{ asset('assets/Service Pages/ck.jpg') }}" alt="CK Collection" class="feature-img" loading="lazy">
        </div>
        <div class="feature-item">
            <img src="{{ asset('assets/Service Pages/under.jpg') }}" alt="Innerwear Collection" class="feature-img" loading="lazy">
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
// Carousel functionality
class Carousel {
    constructor() {
        this.slides = document.querySelectorAll('.carousel-slide');
        this.dots = document.querySelectorAll('.carousel-dot');
        this.text = document.getElementById('carousel-text');
        this.currentIndex = 0;
        this.interval = null;
        this.intervalTime = 4000; // 4 seconds
        this.isAnimating = false;

        this.init();
    }

    init() {
        // Show first slide
        this.showSlide(this.currentIndex);

        // Start auto rotation
        this.startAutoRotation();

        // Add event listeners for dots
        this.dots.forEach(dot => {
            dot.addEventListener('click', (e) => {
                const index = parseInt(e.target.getAttribute('data-index'));
                this.goToSlide(index);
            });
        });

        // Pause on hover
        const carousel = document.querySelector('.carousel-container');
        carousel.addEventListener('mouseenter', () => this.stopAutoRotation());
        carousel.addEventListener('mouseleave', () => this.startAutoRotation());

        // Touch events for mobile
        let startX = 0;
        let endX = 0;

        carousel.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            this.stopAutoRotation();
        });

        carousel.addEventListener('touchmove', (e) => {
            endX = e.touches[0].clientX;
        });

        carousel.addEventListener('touchend', () => {
            const diff = startX - endX;

            if (Math.abs(diff) > 50) { // Minimum swipe distance
                if (diff > 0) {
                    this.nextSlide(); // Swipe left = next
                } else {
                    this.prevSlide(); // Swipe right = previous
                }
            }

            setTimeout(() => this.startAutoRotation(), 3000);
        });
    }

    showSlide(index) {
        if (this.isAnimating || index === this.currentIndex) return;

        this.isAnimating = true;

        // Hide current slide
        this.slides[this.currentIndex].classList.remove('active');
        this.dots[this.currentIndex].classList.remove('active');

        // Show new slide
        this.currentIndex = index;
        this.slides[this.currentIndex].classList.add('active');
        this.dots[this.currentIndex].classList.add('active');

        // Update text if needed
        const texts = [
            "Premium Fashion Collections",
            "Exclusive Designs",
            "Trending Styles"
        ];
        this.text.textContent = texts[this.currentIndex];

        // Reset animation flag
        setTimeout(() => {
            this.isAnimating = false;
        }, 1000);
    }

    nextSlide() {
        let nextIndex = this.currentIndex + 1;
        if (nextIndex >= this.slides.length) {
            nextIndex = 0;
        }
        this.showSlide(nextIndex);
    }

    prevSlide() {
        let prevIndex = this.currentIndex - 1;
        if (prevIndex < 0) {
            prevIndex = this.slides.length - 1;
        }
        this.showSlide(prevIndex);
    }

    goToSlide(index) {
        if (index >= 0 && index < this.slides.length) {
            this.showSlide(index);
        }
    }

    startAutoRotation() {
        if (this.interval) clearInterval(this.interval);
        this.interval = setInterval(() => this.nextSlide(), this.intervalTime);
    }

    stopAutoRotation() {
        if (this.interval) {
            clearInterval(this.interval);
            this.interval = null;
        }
    }
}

// Create particles effect
function createParticles() {
    const container = document.getElementById('particles-container');
    if (!container) return;

    // Clear existing
    container.innerHTML = '';

    const particleCount = window.innerWidth <= 768 ? 20 : 30;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.style.position = 'absolute';
        particle.style.width = Math.random() * 4 + 2 + 'px';
        particle.style.height = particle.style.width;
        particle.style.background = 'rgba(255, 255, 255, 0.6)';
        particle.style.borderRadius = '50%';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animation = `float ${Math.random() * 5 + 3}s ease-in-out infinite`;
        particle.style.animationDelay = Math.random() * 5 + 's';

        container.appendChild(particle);
    }
}

// Category redirect
function redirectToCategory(category) {
    const baseUrl = '{{ route('products') }}';
    window.location.href = baseUrl + '?category=' + category;
}

// Global functions for HTML onclick
window.goToSlide = function(index) {
    if (window.carousel) {
        window.carousel.goToSlide(index);
    }
};

// Initialize when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Initialize carousel
    window.carousel = new Carousel();

    // Create particles
    createParticles();

    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            createParticles();
            // Force reflow for grid layout
            document.querySelector('.services-grid').style.display = 'none';
            document.querySelector('.services-grid').offsetHeight; // Trigger reflow
            document.querySelector('.services-grid').style.display = 'grid';
        }, 250);
    });

    // Preload next carousel images
    setTimeout(function() {
        const nextIndex = (window.carousel.currentIndex + 1) % window.carousel.slides.length;
        const nextImg = window.carousel.slides[nextIndex].querySelector('img');
        if (nextImg && nextImg.getAttribute('loading') === 'lazy') {
            const img = new Image();
            img.src = nextImg.src;
        }
    }, 2000);
});

// Fallback for older browsers
if (!document.addEventListener) {
    // Simple carousel for old browsers
    let current = 0;
    const slides = document.querySelectorAll('.carousel-slide');

    if (slides.length > 0) {
        setInterval(function() {
            slides[current].style.display = 'none';
            current = (current + 1) % slides.length;
            slides[current].style.display = 'block';
        }, 4000);
    }
}
</script>
@endsection
