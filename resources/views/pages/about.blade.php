@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')
<section class="hero-section" style="background-image: url('{{ asset('img/pancakes-bg.jpg') }}');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <h1 class="fw-bold text-uppercase">TENTANG KAMI</h1>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3 class="fw-bold mb-3">TASTY FOOD</h3>
                <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="text-muted">Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque.</p>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
            </div>
            <div class="col-md-6">
                <div class="row g-2">
                    <div class="col-6"><img src="https://placehold.co/300x400" class="img-fluid rounded" alt="Chef"></div>
                    <div class="col-6"><img src="https://placehold.co/300x400" class="img-fluid rounded" alt="Kitchen"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <div class="row g-2">
                    <div class="col-6"><img src="https://placehold.co/300x300" class="img-fluid rounded" alt="Food"></div>
                    <div class="col-6"><img src="https://placehold.co/300x300" class="img-fluid rounded" alt="Food"></div>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="fw-bold">VISI</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum.</p>
            </div>
        </div>
        
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                 <img src="https://placehold.co/600x300" class="img-fluid rounded w-100" alt="Ingredients">
            </div>
            <div class="col-md-6 order-md-1">
                <h4 class="fw-bold">MISI</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit.</p>
            </div>
        </div>
    </div>
</section>
@endsection