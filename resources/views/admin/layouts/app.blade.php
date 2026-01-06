<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - Tasty Food</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bs-body-font-family: 'Inter', sans-serif;
            --sidebar-width: 260px;
            --primary-color: #f5a623; /* Gold/Yellow from Tasty Food brand */
            --sidebar-bg: #1e1e2d;
        }
        
        body { background-color: #f4f6f9; font-size: 0.9rem; }
        
        /* Sidebar Styling */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: var(--sidebar-bg);
            color: #fff;
            z-index: 1000;
            transition: all 0.3s;
        }
        
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Cards & UI */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            transition: transform 0.2s;
        }
        
        .btn-primary {
            background-color: #000;
            border-color: #000;
        }
        .btn-primary:hover {
            background-color: #333;
            border-color: #333;
        }

        .nav-link { color: #a2a3b7; padding: 12px 20px; border-radius: 8px; margin-bottom: 5px; font-weight: 500;}
        .nav-link:hover { color: #fff; background: rgba(255,255,255,0.05); }
        .nav-link.active { background-color: var(--primary-color); color: #000; font-weight: 600; }
        .nav-link i { width: 25px; text-align: center; margin-right: 10px; }

        .brand-logo { font-size: 1.5rem; font-weight: 800; color: #fff; letter-spacing: 1px; }
    </style>
    @stack('styles')
</head>
<body>

    @include('admin.partials.sidebar')

    <div class="main-content">
        @include('admin.partials.navbar')

        <div class="container-fluid py-4 flex-grow-1">
            @yield('content')
        </div>

        @include('admin.partials.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js" referrerpolicy="origin"></script>

    @stack('scripts')
</body>
</html>