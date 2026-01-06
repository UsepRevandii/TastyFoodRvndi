@extends('layouts.app')
@section('title', $news->title)

@section('content')
@include('components.navbar-inner')

@include('components.hero-inner', [
    'title' => 'BERITA',
    'bg' => asset('img/about-bg02.png'),
])

<section class="section-padding">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                {{-- IMAGE --}}
                <img 
                    src="{{ $news->featured_image
                        ? asset('storage/'.$news->featured_image)
                        : 'https://placehold.co/800x450' }}"
                    class="img-fluid rounded mb-4"
                    alt="{{ $news->title }}"
                >

                {{-- TITLE --}}
                <h1 class="fw-bold mb-3">
                    {{ $news->title }}
                </h1>

                {{-- DATE --}}
                <p class="text-muted small mb-4">
                    {{ $news->created_at->format('d M Y') }}
                </p>

                {{-- CONTENT --}}
                <div class="news-content">
                    {!! $news->content !!}
                </div>

            </div>
        </div>

    </div>
</section>
@endsection
