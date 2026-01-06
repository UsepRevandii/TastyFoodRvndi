@extends('layouts.app')
@section('title', 'Home')

@php
    $aboutCards = [
        [
            'img' => 'img/img-1.png',
            'title' => 'Lorem Ipsum',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus magni dolorem.',
        ],
        [
            'img' => 'img/img-2.png',
            'title' => 'Lorem Ipsum',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus magni dolorem.',
        ],
        [
            'img' => 'img/img-3.png',
            'title' => 'Lorem Ipsum',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus magni dolorem.',
        ],
        [
            'img' => 'img/img-4.png',
            'title' => 'Lorem Ipsum',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus magni dolorem.',
        ],
    ];
@endphp

@section('content')
    @include('components.navbar-home')

    {{-- ================= HERO ================= --}}
    <section class="home-hero page-header">
        <div class="hero-image" style="background-image: url('{{ asset('img/home-bg.png') }}');"></div>

        <div class="container hero-content">
            <div class="row">
                <div class="col-md-6">
                    <hr class="hero-divider">
                    <h1 class="hero-title text-uppercase">
                        <span class="hero-thin">Healthy</span><br>
                        <span class="hero-bold">Tasty Food</span>
                    </h1>

                    <p class="mb-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut alias nihil magni deleniti odio.
                        Aliquid sapiente perspiciatis quo vitae eveniet? Rerum, ut animi ratione magni explicabo perferendis
                        culpa corrupti sit?
                    </p>

                    <a href="{{ route('about') }}" class="btn btn-dark-custom">TENTANG KAMI</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= ABOUT ================= --}}
    <section class="section-padding about-section">
        <div class="container text-center mb-5">
            <h2 class="section-title">TENTANG KAMI</h2>
            <p class="mx-auto about-description" style="max-width:700px;">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non sit quae culpa quisquam in, velit repudiandae
                consequatur sed cupiditate modi enim obcaecati amet vel, harum impedit voluptates!
            </p>
            <hr class="about-divider">
        </div>

        <div class="about-bottom">
            <div class="about-bg-pattern"></div>

            <div class="container">
                <div class="about-card-container">
                    @foreach ($aboutCards as $card)
                        <div class="about-card-item">
                            @include('components.card', $card)
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ================= NEWS ================= --}}
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">BERITA KAMI</h2>

            <div class="row">
                {{-- BERITA UTAMA (KIRI) --}}
                @isset($homeFeaturedNews)
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 shadow-sm h-100">

                            <img src="{{ $homeFeaturedNews->featured_image
                                ? asset('storage/' . $homeFeaturedNews->featured_image)
                                : 'https://placehold.co/600x400' }}"
                                class="card-img-top" style="object-fit: cover; height: 300px;"
                                alt="{{ $homeFeaturedNews->title }}">

                            <div class="card-body">
                                <h5 class="fw-bold">
                                    {{ $homeFeaturedNews->title }}
                                </h5>

                                <p>
                                    {{ $homeFeaturedNews->excerpt }}
                                </p>

                                <span class="text-warning fw-bold">
                                    Baca selengkapnya &gt;
                                </span>
                            </div>
                        </div>
                    </div>
                @endisset

                {{-- 4 BERITA KECIL (KANAN) --}}
                <div class="col-md-6">
                    <div class="row">
                        @forelse ($homeLatestNews as $news)
                            <div class="col-6 mb-3">
                                <div class="card h-100 border-0 shadow-sm">

                                    <img src="{{ $news->featured_image ? asset('storage/' . $news->featured_image) : 'https://placehold.co/400x300' }}"
                                        class="card-img-top" style="object-fit: cover; height: 140px;"
                                        alt="{{ $news->title }}">

                                    <div class="card-body p-2">
                                        <h6 class="fw-bold">
                                            {{ Str::limit($news->title, 40) }}
                                        </h6>

                                        <span class="small text-warning">
                                            Baca...
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted">Belum ada berita.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ================= GALLERY ================= --}}
    <section class="section-padding">
        <div class="container">
            <h2 class="section-title">GALERI KAMI</h2>

            <div class="row g-2 gallery-grid">
                @foreach ($homeGalleries as $gallery)
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="gallery-item">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="Galeri">
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('gallery') }}" class="btn btn-dark-custom">
                    LIHAT LEBIH BANYAK
                </a>
            </div>
        </div>
    </section>


@endsection
