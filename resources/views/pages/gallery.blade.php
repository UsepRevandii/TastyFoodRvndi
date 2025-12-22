@extends('layouts.app')
@section('title', 'Galeri')

@section('content')
<section class="hero-section" style="background-image: url('{{ asset('img/gallery-bg.jpg') }}');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <h1 class="fw-bold text-uppercase">GALERI KAMI</h1>
    </div>
</section>

<section class="py-5" style="background-color: #fca311;"> <div class="container position-relative">
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <div class="row align-items-center bg-white rounded-4 overflow-hidden mx-auto" style="max-width: 900px;">
                        <div class="col-md-4 p-0">
                            <img src="https://placehold.co/300x300" class="w-100" alt="Brokoli">
                        </div>
                        <div class="col-md-8 text-center">
                            <img src="https://placehold.co/400x300" class="img-fluid" alt="Main Dish">
                        </div>
                        </div>
                </div>
                 <div class="carousel-item">
                    <div class="row align-items-center bg-white rounded-4 overflow-hidden mx-auto" style="max-width: 900px;">
                        <div class="col-md-12 p-0">
                            <img src="https://placehold.co/900x300" class="w-100" alt="Slide 2">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            @for($i=1; $i<=12; $i++)
            <div class="col-md-3 col-6">
                <img src="https://placehold.co/300x300" class="w-100 h-100 object-fit-cover rounded-3" alt="Gallery Item">
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection