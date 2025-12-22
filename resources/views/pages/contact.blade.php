@extends('layouts.app')
@section('title', 'Kontak')

@section('content')
<section class="hero-section" style="background-image: url('{{ asset('img/contact-bg.jpg') }}');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <h1 class="fw-bold text-uppercase">KONTAK KAMI</h1>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <h3 class="fw-bold mb-4">KONTAK KAMI</h3>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Subject">
                    <input type="text" class="form-control" placeholder="Name">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-6">
                    <textarea class="form-control" rows="6" placeholder="Message"></textarea>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-dark-custom w-100 py-3">KIRIM</button>
                </div>
            </div>
        </form>

        <div class="row mt-5">
            <div class="col-md-4 contact-icon-box">
                <div class="bg-white p-4">
                    <i class="fas fa-envelope rounded-circle bg-black text-white p-3"></i>
                    <h5 class="fw-bold mt-3">EMAIL</h5>
                    <p class="text-muted">tastyfood@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4 contact-icon-box">
                <div class="bg-white p-4">
                    <i class="fas fa-phone rounded-circle bg-black text-white p-3"></i>
                    <h5 class="fw-bold mt-3">PHONE</h5>
                    <p class="text-muted">+62 812 3456 7890</p>
                </div>
            </div>
            <div class="col-md-4 contact-icon-box">
                <div class="bg-white p-4">
                    <i class="fas fa-map-marker-alt rounded-circle bg-black text-white p-3"></i>
                    <h5 class="fw-bold mt-3">LOCATION</h5>
                    <p class="text-muted">Kota Bandung, Jawa Barat</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light pb-5">
    <div class="container">
        <div class="map-responsive rounded overflow-hidden shadow-sm">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.57311705234255!3d-6.903444341687889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1689654123456!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection