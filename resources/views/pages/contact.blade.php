@extends('layouts.app')
@section('title', 'Kontak')

@section('content')
@include('components.navbar-inner')

@include('components.hero-inner', [
    'title' => 'KONTAK KAMI',
    'bg' => asset('img/about-bg02.png'),
])

<section class="section-padding">
    <div class="container">
        <h3 class="fw-bold mb-4">KONTAK KAMI</h3>

        {{-- FORM KONTAK --}}
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input name="subject" class="form-control mb-3"
                           placeholder="Subject" required>

                    <input name="name" class="form-control mb-3"
                           placeholder="Name" required>

                    <input name="email" type="email"
                           class="form-control"
                           placeholder="Email" required>
                </div>

                <div class="col-md-6">
                    <textarea name="message"
                              class="form-control"
                              rows="6"
                              placeholder="Message"
                              required></textarea>
                </div>

                <div class="col-12 mt-3">
                    <button type="submit"
                            class="btn btn-dark-custom w-100 py-3">
                        KIRIM PESAN
                    </button>
                </div>
            </div>
        </form>

        {{-- INFO KONTAK (TETAP STATIS) --}}
        <div class="row mt-5">
            <div class="col-md-4 contact-icon-box">
                <div class="bg-white p-4 text-center h-100">
                    <i class="fas fa-envelope rounded-circle bg-black text-white p-3"></i>
                    <h5 class="fw-bold mt-3">EMAIL</h5>
                    <p class="text-muted mb-0">tastyfood@gmail.com</p>
                </div>
            </div>

            <div class="col-md-4 contact-icon-box">
                <div class="bg-white p-4 text-center h-100">
                    <i class="fas fa-phone rounded-circle bg-black text-white p-3"></i>
                    <h5 class="fw-bold mt-3">PHONE</h5>
                    <p class="text-muted mb-0">+62 812 3456 7890</p>
                </div>
            </div>

            <div class="col-md-4 contact-icon-box">
                <div class="bg-white p-4 text-center h-100">
                    <i class="fas fa-map-marker-alt rounded-circle bg-black text-white p-3"></i>
                    <h5 class="fw-bold mt-3">LOCATION</h5>
                    <p class="text-muted mb-0">Indonesia</p>
                </div>
            </div>
        </div>

        {{-- GOOGLE MAP (DINAMIS DARI DASHBOARD) --}}
        <div class="row mt-5">
            <div class="col-12">
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm border">
                    <iframe
                        src="https://maps.google.com/maps?q={{ urlencode($mapQuery) }}&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0"
                        scrolling="no">
                    </iframe>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
