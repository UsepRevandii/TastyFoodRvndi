<nav class="sidebar d-flex flex-column p-4">
    <div class="mb-5">
        <div class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-utensils text-warning fs-3"></i>
            <span class="brand-logo">TASTY FOOD</span>
        </div>
    </div>
    
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
                <i class="bi bi-grid-fill"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->is('admin/news*') ? 'active' : '' }}">
                <i class="bi bi-newspaper"></i> Berita
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.galleries.index') }}" class="nav-link {{ request()->is('admin/gallery*') ? 'active' : '' }}">
                <i class="bi bi-images"></i> Galeri
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.contacts.index') }}" class="nav-link {{ request()->is('admin/contacts*') ? 'active' : '' }}">
                <i class="bi bi-envelope-fill"></i> Pesan Kontak
            </a>
        </li>
    </ul>

    <hr class="border-secondary">
    
    <div>
        <a href="#" class="nav-link text-danger">
            <i class="bi bi-box-arrow-left"></i> Logout
        </a>
    </div>
</nav>