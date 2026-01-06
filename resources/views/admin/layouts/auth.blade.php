<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tasty Food Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: url('https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .overlay {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        .login-card {
            z-index: 2;
            width: 100%;
            max-width: 420px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            padding: 3rem;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            color: white;
        }
        .form-control {
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.1);
            color: #fff;
            padding: 12px;
        }
        .form-control::placeholder { color: rgba(255,255,255,0.7); }
        .form-control:focus {
            background: rgba(255,255,255,0.25);
            border-color: #f5a623;
            color: #fff;
            box-shadow: none;
        }
        .btn-login {
            background-color: #f5a623;
            color: #000;
            font-weight: 700;
            padding: 12px;
            border: none;
        }
        .btn-login:hover { background-color: #e0961f; }
    </style>
</head>
<body>
    <div class="overlay"></div>
    @yield('content')
</body>
</html>