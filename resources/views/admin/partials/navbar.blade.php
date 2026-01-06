<nav class="navbar navbar-expand-lg mb-4 rounded-3 bg-white shadow-sm p-3">
    <div class="container-fluid">
        <h5 class="m-0 fw-bold text-dark text-uppercase">@yield('page-title', 'Overview')</h5>
        
        <div class="collapse navbar-collapse justify-content-end">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark" id="userDropdown" data-bs-toggle="dropdown">
                    <img src="https://ui-avatars.com/api/?name=Admin+Tasty&background=000&color=fff" alt="Admin" width="40" height="40" class="rounded-circle me-2">
                    <div class="d-none d-lg-block">
                        <span class="d-block fw-bold small">Administrator</span>
                        <span class="d-block text-muted small" style="line-height: 10px; font-size: 10px;">Super Admin</span>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>