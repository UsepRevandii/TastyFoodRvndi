@extends('layouts.app')
@section('title', 'Galeri')

@section('content')
@include('components.navbar-inner')
@include('components.hero-inner', [
    'title' => 'GALERI KAMI',
    'bg' => asset('img/about-bg02.png'),
])

{{-- ================= CAROUSEL ================= --}}
@if ($galleries->count() > 0)
<section class="gallery-carousel-section">
    <div class="container position-relative">

        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach ($galleries->take(3) as $index => $gallery)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="gallery-slide slide-lg">
                            <img
                                src="{{ asset('storage/'.$gallery->image) }}"
                                alt="Gallery Image">
                        </div>
                    </div>
                @endforeach

            </div>

            @if ($galleries->count() > 1)
                <button class="carousel-control-prev" type="button"
                        data-bs-target="#galleryCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rounded-circle"></span>
                </button>

                <button class="carousel-control-next" type="button"
                        data-bs-target="#galleryCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon rounded-circle"></span>
                </button>
            @endif
        </div>

    </div>
</section>
@endif

{{-- ================= GRID ================= --}}
<section class="gallery-grid-section">
    <div class="container">

        <div class="row g-2 gallery-grid">
            @forelse ($galleries as $gallery)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-img-box">
                        <img
                            src="{{ asset('storage/'.$gallery->image) }}"
                            alt="Gallery Image">
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-5">
                    Galeri belum tersedia.
                </div>
            @endforelse
        </div>

    </div>
</section>

@endsection
