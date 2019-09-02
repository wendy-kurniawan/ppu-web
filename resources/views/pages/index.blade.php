@extends('layouts.app')

@section('title', 'Pemerataan Pemberdayaan UMKM')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css">
@endsection

@section('content')
    <img src="img/illustrations/abstract-shape.svg" alt="abstract" class="abstract">
    <div class="container">
        @include('partials.navigation')
    </div>

    <section id="banner">
        <div class="jumbotron jumbotron-fluid">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 header-text text-center">
                        <h1 class="mb-3">Pemerataan Pemberdayaan UMKM</h1>
                        <h4 class="mb-4">Yuk,Share Masalah Anda</h4>
                        <a href="#services" class="btn-start">Get Started</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('img/illustrations/business.svg') }}" alt="Illustration Business">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="mb-5">
        <div id="services__content" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center pt-5">
                        <h1 class="text-white my-5">Services</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="card py-2" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Cari Solusi</h3>
                            </div>
                            <div class="text-center">
                                <img class="card-img-top" src="{{ asset('img/illustrations/search-solutions.svg') }}" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card py-2" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Tentukan Lokasi</h3>
                            </div>
                            <div class="text-center">
                                <img class="card-img-top" src="{{ asset('img/illustrations/choose-locations.svg') }}" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card py-2" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Seminar</h3>
                            </div>
                            <div class="text-center">
                                <img class="card-img-top" src="{{ asset('img/illustrations/seminars.svg') }}" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h1 class="font-weight-bold">About Us</h1>
                </div>
            </div>
            <div class="row mb-5 justify-content-center">
                <div class="col">
                    <img src="{{ asset('img/illustrations/solutions.svg') }}" alt="Illustration Solutions">
                </div>
                <div class="col">
                    <h3 class="font-weight-bold">Solusi Pemberdayaan UMKM</h3>
                    <p>Kami menghubungkan anda selaku pemilik usaha UMKM dengan narasumber dari Lembaga yang menyelenggarakan event untuk menyelesaikan permasalahan dari UMKM.</p>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row mb-5">
                <div class="col">
                    <h3 class="font-weight-bold">Solusi Pemberdayaan UMKM</h3>
                    <p>Kami menghubungkan anda selaku pemilik usaha UMKM dengan narasumber dari Lembaga yang menyelenggarakan event untuk menyelesaikan permasalahan dari UMKM.</p>
                </div>
                <div class="col">
                    <img src="{{ asset('img/illustrations/maps.svg') }}" alt="Illustration Solutions">
                </div>
            </div>
        </div>
    </section>

    <footer class="py-2">
        <p class="text-center text-white font-weight-bold">Copyright &copy; 2019 PPU</p>
    </footer>

    {{-- @include('partials.modal') --}}
@endsection