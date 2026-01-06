<nav class="navbar navbar-expand-lg navbar-inner">
    <div class="container">

        <!-- Toggler -->
        <button class="navbar-toggler me-3"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand text-white" href="{{ route('home') }}">
            TASTY FOOD
        </a>

        <!-- Desktop menu -->
        <div class="collapse navbar-collapse d-none d-lg-flex">
            <ul class="navbar-nav ms-auto">
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
        </div>

    </div>
</nav>
