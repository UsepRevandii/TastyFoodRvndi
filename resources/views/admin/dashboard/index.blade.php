@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard Overview')

@section('content')

    {{-- STAT CARDS --}}
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card h-100 p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase mb-1 small">Total Berita</h6>
                        <h2 class="fw-bold mb-0">{{ $totalNews }}</h2>
                    </div>
                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                        <i class="bi bi-newspaper fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase mb-1 small">Total Galeri</h6>
                        <h2 class="fw-bold mb-0">{{ $totalGallery }}</h2>
                    </div>
                    <div class="bg-success bg-opacity-10 p-3 rounded-circle text-success">
                        <i class="bi bi-images fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 p-3 border-start border-4 border-warning">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase mb-1 small">Pesan Baru</h6>
                        <h2 class="fw-bold mb-0">{{ $totalContacts }}</h2>
                    </div>
                    <div class="bg-warning bg-opacity-10 p-3 rounded-circle text-warning">
                        <i class="bi bi-envelope-exclamation fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- WELCOME --}}
    <div class="card bg-dark text-white overflow-hidden mb-4">
        <div class="card-body p-4 position-relative">
            <div class="position-relative z-1">
                <h3 class="fw-bold">Selamat Datang, Admin! 👋</h3>
                <p class="mb-0 text-white-50">
                    Kelola konten berita, galeri, pesan & informasi perusahaan di sini.
                </p>
            </div>
            <i class="bi bi-egg-fried position-absolute end-0 bottom-0 opacity-25"
                style="font-size: 8rem; margin: -20px -10px;"></i>
        </div>
    </div>

    {{-- COMPANY LOCATION --}}
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                        Informasi Lokasi Perusahaan
                    </h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.company.update') }}">
                        @csrf

                        <div class="row">
                            {{-- LEFT FORM --}}
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label fw-bold small text-uppercase text-muted">
                                        Alamat Perusahaan
                                    </label>
                                    <textarea name="location" rows="4" class="form-control" placeholder="Masukkan alamat lengkap">{{ $setting->address ?? '' }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold small text-uppercase text-muted">
                                        Query Google Maps
                                    </label>
                                    <input type="text" name="map_query" class="form-control"
                                        placeholder="Contoh: Gedung Sate Bandung"
                                        value="{{ $setting->map_query ?? 'Bandung' }}">
                                </div>

                                <button class="btn btn-primary w-100">
                                    <i class="bi bi-save"></i> Simpan Lokasi
                                </button>
                            </div>

                            {{-- RIGHT MAP --}}
                            <div class="col-md-8">
                                <div class="ratio ratio-16x9 rounded overflow-hidden border">
                                    <iframe
                                        src="https://maps.google.com/maps?q={{ urlencode($setting->map_query ?? 'Bandung') }}&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no">
                                    </iframe>
                                </div>
                                <p class="text-muted small mt-2 text-end">
                                    *Peta otomatis berdasarkan query lokasi
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
