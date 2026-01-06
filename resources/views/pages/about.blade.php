@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')
    @include('components.navbar-inner')
    @include('components.hero-inner', [
        'title' => 'TENTANG KAMI',
        'bg' => asset('img/about-bg02.png'),
    ])

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">TASTY FOOD</h3>
                    <p class="fw-bold">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos amet nisi incidunt molestiae! Quidem, quisquam? Vero suscipit nulla perspiciatis vitae. Praesentium ullam aperiam repellat, voluptates!</p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi provident minus, architecto ipsa, at libero quasi quidem distinctio incidunt tempora dignissimos? Delectus dolorem nisi dolorum consequuntur.</p>
                </div>
                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="about-img tall">
                                <img src="{{ asset('img/about-bahan01.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-img short">
                                <img src="{{ asset('img/about-bahan02.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="about-img square">
                                <img src="{{ asset('img/about-bahan03.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-img square">
                                <img src="{{ asset('img/about-bahan04.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="fw-bold">VISI</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia reprehenderit minus voluptas, voluptates commodi necessitatibus amet recusandae. Nemo tempora rerum, eaque atque est recusandae accusantium beatae officiis totam, error expedita eligendi. Voluptatibus dolores vero, quod corporis vel nulla ducimus neque praesentium ipsum tenetur eum maxime in, natus totam ratione cum quidem. Delectus minima ullam, vitae qui harum perspiciatis?</p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <div class="about-img wide">
                        <img src="{{ asset('img/about-bahan05.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <h4 class="fw-bold">MISI</h4>
                    <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non expedita sed ipsa ex, suscipit ab maxime quaerat facere? Dignissimos sapiente unde harum consequuntur libero asperiores, optio alias consectetur sunt obcaecati! Maiores temporibus error debitis iste similique ipsa sit impedit ut deserunt dolores repudiandae, mollitia vitae. Ratione, beatae! Nam laboriosam minima itaque cumque sint repudiandae aliquam! Eius!</p>
                </div>
            </div>
        </div>
    </section>
@endsection
