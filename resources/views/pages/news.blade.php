@extends('layouts.app')
@section('title', 'Berita')

@section('content')
<section class="hero-section" style="background-image: url('{{ asset('img/news-bg.jpg') }}');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <h1 class="fw-bold text-uppercase">BERITA KAMI</h1>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center mb-5 bg-white shadow-sm rounded overflow-hidden">
            <div class="col-md-6 p-0">
                <img src="https://placehold.co/800x600" class="w-100 h-100 object-fit-cover" alt="Featured">
            </div>
            <div class="col-md-6 p-5">
                <h3 class="fw-bold mb-3">APA SAJA MAKANAN KHAS NUSANTARA?</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.</p>
                <p class="text-muted">Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                <a href="#" class="btn btn-dark-custom mt-3">BACA SELENGKAPNYA</a>
            </div>
        </div>

        <h3 class="fw-bold mb-4">BERITA LAINNYA</h3>
        <div class="row">
            @for($i=1; $i<=4; $i++)
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://placehold.co/300x200" class="card-img-top" alt="News">
                    <div class="card-body">
                        <h5 class="fw-bold fs-6">LOREM IPSUM</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <a href="#" class="text-warning small text-decoration-none fw-bold">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            @endfor
            @for($i=1; $i<=4; $i++)
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://placehold.co/300x200" class="card-img-top" alt="News">
                    <div class="card-body">
                        <h5 class="fw-bold fs-6">LOREM IPSUM</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <a href="#" class="text-warning small text-decoration-none fw-bold">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection