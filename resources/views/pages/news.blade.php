@extends('layouts.app')
@section('title', 'Berita')

@section('content')
    @include('components.navbar-inner')
    @include('components.hero-inner', [
        'title' => 'BERITA KAMI',
        'bg' => asset('img/about-bg02.png'),
    ])

    <section class="section-padding">
        <div class="container">

            {{-- ================= FEATURED NEWS ================= --}}
            @isset($featuredNews)
                <div class="row align-items-center mb-5 bg-white shadow-sm rounded-4 overflow-hidden">

                    {{-- IMAGE --}}
                    <div class="col-md-6 p-0">
                        <div class="featured-news-image">
                            <img src="{{ $featuredNews->featured_image
                                ? asset('storage/' . $featuredNews->featured_image)
                                : 'https://placehold.co/800x600' }}"
                                alt="{{ $featuredNews->title }}">
                        </div>
                    </div>

                    {{-- CONTENT --}}
                    <div class="col-md-6 p-4 p-lg-5">
                        <h3 class="fw-bold mb-3">
                            {{ $featuredNews->title }}
                        </h3>

                        <p class="text-muted mb-3">
                            {{ $featuredNews->excerpt }}
                        </p>

                        <button class="btn btn-dark-custom mt-3" data-bs-toggle="modal"
                            data-bs-target="#newsModal{{ $featuredNews->id }}">
                            BACA SELENGKAPNYA
                        </button>
                    </div>

                </div>
            @endisset

            {{-- ================= NEWS LIST ================= --}}
            <h3 class="fw-bold mb-4">BERITA LAINNYA</h3>

            <div class="row">
                @forelse ($newsPageNews as $item)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 border-0 shadow-sm">

                            <img src="{{ $item->featured_image
                                ? asset('storage/' . $item->featured_image)
                                : 'https://placehold.co/400x300' }}"
                                class="card-img-top"
                                alt="{{ $item->title }}"
                                style="height:180px; object-fit:cover;">

                            <div class="card-body">
                                <h5 class="fw-bold fs-6 mb-2">
                                    {{ $item->title }}
                                </h5>

                                <p class="small text-muted mb-3">
                                    {{ $item->excerpt }}
                                </p>

                                <span class="text-warning small fw-bold"
                                    role="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#newsModal{{ $item->id }}">
                                    Baca selengkapnya
                                </span>
                            </div>

                        </div>
                    </div>
                @empty
                    <p class="text-muted">Belum ada berita.</p>
                @endforelse
            </div>

        </div>
    </section>

    {{-- ================= MODAL DETAIL BERITA ================= --}}
    @foreach ($newsPageNews as $item)
        <div class="modal fade" id="newsModal{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content border-0 rounded-4">

                    <img src="{{ $item->featured_image
                        ? asset('storage/' . $item->featured_image)
                        : 'https://placehold.co/900x450' }}"
                        class="w-100 rounded-top"
                        style="object-fit:cover; max-height:300px;"
                        alt="{{ $item->title }}">

                    <div class="modal-body p-4">
                        <h4 class="fw-bold mb-2">
                            {{ $item->title }}
                        </h4>

                        <p class="text-muted small mb-3">
                            {{ $item->created_at->format('d M Y') }}
                        </p>

                        <div class="news-content">
                            {!! $item->content !!}
                        </div>
                    </div>

                    <div class="modal-footer border-0">
                        <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                            Tutup
                        </button>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endsection