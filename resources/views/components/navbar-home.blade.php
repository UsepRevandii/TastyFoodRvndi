<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

        <button class="navbar-toggler me-3"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{ route('home') }}">TASTY FOOD</a>

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
