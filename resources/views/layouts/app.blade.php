<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
    <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

        <!-- Hamburger di kiri -->
        <button class="navbar-toggler me-3" type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('home') }}">TASTY FOOD</a>

        <!-- Desktop Menu -->
        <div class="collapse navbar-collapse d-none d-lg-flex">
            <ul class="navbar-nav ms-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">TENTANG</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">BERITA</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">GALERI</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">KONTAK</a></li>
            </ul>
        </div>

    </div>
</nav>

<div class="offcanvas offcanvas-start mobile-menu" tabindex="-1" id="mobileMenu">

    <!-- TOP IMAGE STRIP -->
    <div class="offcanvas-image"
        style="background-image: url('{{ asset('img/home-bg.png') }}');">
    </div>

    <button type="button"
        class="btn-close mobile-close"
        data-bs-dismiss="offcanvas"
        aria-label="Close"></button>

    <div class="offcanvas-body">

        <!-- MENU -->
        <ul class="navbar-nav mobile-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">TENTANG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">BERITA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">GALERI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">KONTAK</a>
            </li>
        </ul>

        <!-- ACCENT SHAPE -->
        <span class="menu-accent"></span>

    </div>
</div>



<script>
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar-custom');
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });
</script>


    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Tasty Food</h5>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Useful links</h5>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Hewan</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">Testimonial</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Privacy</h5>
                    <ul>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                        <li><a href="#">Servis</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact Info</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope me-2"></i> tastyfood@gmail.com</li>
                        <li><i class="fas fa-phone me-2"></i> +62 812 3456 7890</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Kota Bandung, Jawa Barat</li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4 pt-3 border-top border-secondary">
                <small class="text-secondary">Copyright ©2023 All rights reserved</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>