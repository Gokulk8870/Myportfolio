 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title', 'Jhan\'s Collections - Premium Fashion & Clothing Store')</title>

    <!-- SEO Meta -->
    <meta name="description" content="@yield('description', 'Premium fashion collections for men, women, and kids. High-quality clothing and home textiles.')">
    <meta name="keywords" content="@yield('keywords', 'fashion, clothing, mens wear, womens wear, kids fashion, home textiles')">
    <meta name="author" content="Jhan's Collections">

    <!-- Social Share -->
    <meta property="og:title" content="@yield('og_title', 'Jhan\'s Collections - Premium Fashion Store')">
    <meta property="og:description" content="@yield('og_description', 'Premium fashion collections for men, women, and kids')">
    <meta property="og:image" content="@yield('og_image', asset('favicon.ico'))">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="shortcut icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' fill='%23032b00'/%3E%3Crect x='6' y='10' width='20' height='14' rx='1' fill='none' stroke='%234bbc43' stroke-width='2'/%3E%3Crect x='9' y='10' width='14' height='2' fill='%234bbc43'/%3E%3Ccircle cx='16' cy='17' r='2' fill='%234bbc43'/%3E%3C/svg%3E">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body, html {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        width: 100%;
    }

    /* NAVBAR */
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background: #032b00;
        height: 80px;
        padding: 0 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .navbar .brand {
        font-family: 'Times New Roman', serif;
        font-size: 1.8rem;
        display: flex;
        align-items: center;
        text-decoration: none;
        color: white;
        z-index: 1002;
    }

    .navbar .brand img {
        height: 45px;
        width: 45px;
        margin-right: 10px;
        border-radius: 50%;
        object-fit: cover;
    }

    .navbar ul {
        display: flex;
        list-style: none;
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    .navbar ul li a {
        text-decoration: none;
        color: white;
        font-family: 'Times New Roman', serif;
        padding: 8px 12px;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .navbar ul li a:hover {
        color: #4bbc43;
    }

    /* DROPDOWN - DESKTOP */
    .dropdown {
        position: relative;
    }

    .dropdown > a {
        cursor: pointer;
    }

    .dropdown > a .fa-chevron-down {
        font-size: 0.8rem;
        transition: transform 0.3s ease;
    }

    .dropdown.active > a .fa-chevron-down {
        transform: rotate(180deg);
    }

    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background:#032b00;
        min-width: 200px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        z-index: 1001;
        padding: 10px 0;
        opacity: 0;
        transform: translateY(-10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .dropdown.active .dropdown-content {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .dropdown-content a {
        display: block;
        padding: 12px 20px;
        text-decoration: none;
        color: #333;
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
    }

    .dropdown-content a:hover {
        background: #f8f8f8;
        color: #4bbc43;
        border-left-color: #4bbc43;
        padding-left: 25px;
    }

    /* MOBILE NAVIGATION */
    .mobile-menu {
        display: none;
        flex-direction: column;
        cursor: pointer;
        z-index: 1002;
    }

    .mobile-menu span {
        width: 28px;
        height: 3px;
        background: #333;
        margin: 5px 0;
        transition: 0.3s;
    }

    .mobile-menu.active span:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }

    .mobile-menu.active span:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }

    /* MOBILE RESPONSIVE STYLES */
    @media (max-width: 768px) {
        .navbar {
            height: 70px;
            padding: 0 20px;
        }

        .navbar .brand {
            font-size: 1.4rem;
        }

        .navbar .brand img {
            height: 40px;
            width: 40px;
        }

        .mobile-menu {
            display: flex;
        }

        .navbar ul {
            display: none;
            flex-direction: column;
            position: fixed;
            top: 70px;
            left: 0;
            background: white;
            width: 100%;
            height: calc(100vh - 70px);
            padding: 20px 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .navbar ul.active {
            display: flex;
        }

        .navbar ul li {
            width: 100%;
        }

        .navbar ul li a {
            display: block;
            padding: 15px 25px;
            font-size: 1.1rem;
            border-bottom: 1px solid #f0f0f0;
        }

        /* MOBILE DROPDOWN STYLES */
        .dropdown-content {
            position: static;
            box-shadow: none;
            background: #f9f9f9;
            display: none;
            width: 100%;
            margin: 0;
            padding: 0;
            border-radius: 0;
            border-left: 5px solid #4bbc43;
            transform: none;
            opacity: 1;
            transition: none;
        }

        .dropdown.active .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            padding: 12px 40px;
            font-size: 1rem;
            border-left: none;
        }

        .dropdown-content a:hover {
            background: #f0f0f0;
            padding-left: 40px;
        }

        /* Add padding to body for fixed navbar */
        body {
            padding-top: 70px;
        }
    }

    @media (max-width: 480px) {
        .navbar {
            height: 65px;
            padding: 0 15px;
        }

        .navbar .brand {
            font-size: 1.2rem;
        }

        .navbar ul {
            top: 65px;
            height: calc(100vh - 65px);
        }

        body {
            padding-top: 65px;
        }
    }

    /* MAIN CONTENT AREA */
    .main-content {
        margin-top: 80px;
        min-height: calc(100vh - 200px);
    }

    @media (max-width: 768px) {
        .main-content {
            margin-top: 70px;
        }
    }

    @media (max-width: 480px) {
        .main-content {
            margin-top: 65px;
        }
    }

    /* FOOTER */
    .modern-footer {
        background: #032b00;
        color: white;
        padding: 40px 20px;
        text-align: center;
        margin-top: auto;
    }

    .modern-footer h2 {
        font-family: 'Dancing Script', cursive;
        color:  white;
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .modern-footer p {
        font-family: 'Dancing Script', cursive;
        margin: 10px 0;
        font-size: 1rem;
    }

    .social-icons {
        margin: 25px 0;
    }

    .social-icons a {
        color: white;
        margin: 0 15px;
        font-size: 1.3rem;
        transition: color 0.3s ease;
    }

    .social-icons a:hover {
        color: white;
    }

    @media (max-width: 768px) {
        .modern-footer {
            padding: 30px 15px;
        }

        .modern-footer h2 {
            font-family: 'Dancing Script', cursive;
            font-size: 2rem;
        }

        .social-icons a {
            margin: 0 10px;
            font-size: 1.2rem;
        }
    }
</style>

@yield('styles')
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
    <a href="{{ route('home') }}" class="brand">
        <i class="fas fa-briefcase" style="font-size: 2rem; margin-right: 10px; color: #4bbc43;"></i>
        Jhan's Collections
    </a>

    <div class="mobile-menu" id="mobile-menu" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <ul id="nav-menu">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>

        <li class="dropdown" id="products-dropdown">
            <a href="javascript:void(0)" onclick="toggleDropdown(this)">
                Products <i class="fas fa-chevron-down"></i>
            </a>
            <div class="dropdown-content">
                <a href="{{ route('products') }}?category=mens">Mens</a>
                <a href="{{ route('products') }}?category=womens">Womens</a>
                <a href="{{ route('products') }}?category=kids-boys">Kids Boys</a>
                <a href="{{ route('products') }}?category=kids-girls">Kids Girls</a>
                <a href="{{ route('products') }}?category=home-textiles">Home Textiles</a>
                <a href="{{ route('products') }}?category=inners">Inners</a>
            </div>
        </li>

        <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
</nav>

<!-- MAIN CONTENT -->
<div class="main-content">
@yield('content')
</div>

<!-- FOOTER -->
<footer class="modern-footer" style="font-family: 'Dancing Script', cursive;">
    <h2>Jhan's Collections</h2>
    <p>Premium fashion for men, women & kids.</p>

    <div class="social-icons">
        <a href="https://www.instagram.com/jhanscollections" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/jhanscollections" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
       <a href="https://wa.me/0000000000" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-whatsapp"></i><br>
    <br>
   <a href="https://www.google.com/maps?q=Jhan's Collections, 15, Thudiyalur Rd, Vasantham Nagar, Saravanampatti, Coimbatore, Tamil Nadu 641035"
   style="text-decoration: none !important;" target="_blank" rel="noopener noreferrer">
    <i class="fas fa-map-marker-alt"></i>
    Jhan's Collections, 15, Thudiyalur Rd, Vasantham Nagar, Saravanampatti, Coimbatore, Tamil Nadu 641035
</a>

 <div class="terms" style="margin-top: 10px;">
        <a href="/terms-and-conditions" style="color:#fff; text-decoration: underline;text-decoration: none !important; ">
            Terms & Conditions
        </a>
    </div>


</a>

    </div>

    <p style="font-size:0.9rem; margin-top: 20px;">© 2025 Jhan's Collections. All rights reserved.</p>
</footer>

<script>
// Global variables
let isDropdownOpen = false;
let isMobileMenuOpen = false;

// Toggle mobile menu
function toggleMenu() {
    const menu = document.getElementById('nav-menu');
    const mobileMenuBtn = document.getElementById('mobile-menu');

    menu.classList.toggle('active');
    mobileMenuBtn.classList.toggle('active');
    isMobileMenuOpen = !isMobileMenuOpen;

    // Close dropdown if mobile menu is closed
    if (!isMobileMenuOpen) {
        const dropdown = document.getElementById('products-dropdown');
        if (dropdown) {
            dropdown.classList.remove('active');
            isDropdownOpen = false;
        }
    }
}

// Toggle dropdown - works for both desktop and mobile
function toggleDropdown(element) {
    const dropdown = element.closest('.dropdown');
    if (!dropdown) return;

    isDropdownOpen = !dropdown.classList.contains('active');

    // Close other dropdowns if any
    document.querySelectorAll('.dropdown.active').forEach(d => {
        if (d !== dropdown) {
            d.classList.remove('active');
        }
    });

    // Toggle current dropdown
    dropdown.classList.toggle('active');

    // On mobile, prevent default link behavior
    if (window.innerWidth <= 768) {
        return false;
    }
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('products-dropdown');
    const dropdownContent = dropdown ? dropdown.querySelector('.dropdown-content') : null;
    const dropdownLink = dropdown ? dropdown.querySelector('a') : null;
    const mobileMenuBtn = document.getElementById('mobile-menu');
    const navMenu = document.getElementById('nav-menu');

    // Check if click is outside dropdown
    if (dropdown && dropdownContent && dropdownLink) {
        const isClickInsideDropdown = dropdown.contains(event.target);

        if (!isClickInsideDropdown && dropdown.classList.contains('active')) {
            dropdown.classList.remove('active');
            isDropdownOpen = false;
        }
    }

    // Close mobile menu when clicking outside
    if (window.innerWidth <= 768) {
        const isClickInsideMenu = navMenu.contains(event.target);
        const isClickOnMobileBtn = mobileMenuBtn.contains(event.target);

        if (!isClickInsideMenu && !isClickOnMobileBtn && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            mobileMenuBtn.classList.remove('active');
            isMobileMenuOpen = false;

            // Also close dropdown if open
            if (dropdown) {
                dropdown.classList.remove('active');
                isDropdownOpen = false;
            }
        }
    }
});

// Handle window resize
window.addEventListener('resize', function() {
    const navMenu = document.getElementById('nav-menu');
    const mobileMenuBtn = document.getElementById('mobile-menu');
    const dropdown = document.getElementById('products-dropdown');

    if (window.innerWidth > 768) {
        // Reset mobile menu on larger screens
        navMenu.classList.remove('active');
        mobileMenuBtn.classList.remove('active');
        isMobileMenuOpen = false;

        // Keep dropdown as hover on desktop
        if (dropdown) {
            dropdown.classList.remove('active');
            isDropdownOpen = false;
        }
    } else {
        // Ensure dropdown is closed by default on mobile
        if (dropdown) {
            dropdown.classList.remove('active');
            isDropdownOpen = false;
        }
    }
});

// Close dropdown when a dropdown item is clicked (for mobile)
document.querySelectorAll('.dropdown-content a').forEach(link => {
    link.addEventListener('click', function() {
        const dropdown = document.getElementById('products-dropdown');
        if (dropdown && window.innerWidth <= 768) {
            dropdown.classList.remove('active');
            isDropdownOpen = false;

            // Also close mobile menu on mobile after selection
            const navMenu = document.getElementById('nav-menu');
            const mobileMenuBtn = document.getElementById('mobile-menu');
            if (navMenu && mobileMenuBtn) {
                navMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                isMobileMenuOpen = false;
            }
        }
    });
});

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effect for desktop
    const dropdown = document.getElementById('products-dropdown');
    if (dropdown && window.innerWidth > 768) {
        dropdown.addEventListener('mouseenter', function() {
            this.classList.add('active');
        });

        dropdown.addEventListener('mouseleave', function() {
            this.classList.remove('active');
        });
    }
});
</script>

@yield('scripts')
</body>
</html>
