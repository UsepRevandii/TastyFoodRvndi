@extends('admin.layouts.auth')

@section('content')
    <div class="login-card text-center">
        <h2 class="fw-bold mb-1">TASTY FOOD</h2>
        <p class="mb-4 text-white-50">Masuk untuk mengelola website</p>

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="mb-3 text-start">
                <label class="form-label small">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="admin@tastyfood.com">
            </div>
            <div class="mb-4 text-start">
                <label class="form-label small">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••">
            </div>
            <button type="submit" class="btn btn-login w-100 rounded-pill">LOGIN DASHBOARD</button>
        </form>
    </div>
@endsection
