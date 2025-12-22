@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <section class="home-hero page-header">

        {{-- Hero Image --}}
        <div class="hero-image" style="background-image: url('{{ asset('img/home-bg.png') }}');">
        </div>

        <div class="container hero-content">
            <div class="row">
                <div class="col-md-6">
                    <hr class="hero-divider">
                    <h1 class="hero-title text-uppercase">
                        <span class="hero-thin">Healthy</span><br>
                        <span class="hero-bold">Tasty Food</span>
                    </h1>

                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus ornare, augue eu rutrum commodo.
                    </p>
                    <a href="#" class="btn btn-dark-custom">TENTANG KAMI</a>
                </div>
            </div>
        </div>

    </section>


    <section class="section-padding text-center">
        <div class="container">
            <h2 class="section-title">TENTANG KAMI</h2>
            <p class="mx-auto" style="max-width: 700px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae
                dignissim neque, vel luctus ex.</p>
            <hr class="about-divider">
        </div>
    </section>

    <section class="section-padding about-section">
    <div class="about-bg">
        {{-- DESKTOP --}}
        <div class="row d-none d-lg-flex">
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-lg-3">
                    @include('components.card')
                </div>
            @endfor
        </div>

        {{-- SWIPER --}}
        <div class="swiper menuSwiper d-lg-none">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="swiper-slide">
                        @include('components.card')
                    </div>
                @endfor
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">BERITA KAMI</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm">
                        <img src="https://placehold.co/600x400" class="card-img-top" alt="Berita Besar">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">LOREM IPSUM DOLOR SIT AMET</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <a href="#" class="text-warning text-decoration-none fw-bold">Baca selengkapnya ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="col-6 mb-3">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="https://placehold.co/300x200" class="card-img-top" alt="News">
                                    <div class="card-body p-2">
                                        <h6 class="fw-bold">LOREM IPSUM</h6>
                                        <p class="small text-muted mb-1">Lorem ipsum dolor sit...</p>
                                        <a href="#" class="small text-warning text-decoration-none">Baca...</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h2 class="section-title">GALERI KAMI</h2>
            <div class="row g-3">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-4">
                        <img src="https://placehold.co/400x300" class="gallery-img" alt="Galeri">
                    </div>
                @endfor
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('gallery') }}" class="btn btn-dark-custom">LIHAT LEBIH BANYAK</a>
            </div>
        </div>
    </section>
@endsection
