@extends('layouts.app')

@section('title', 'Pemerataan Pemberdayaan UMKM')

@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/index.css') }}" type="text/css">
@endsection

@section('content')
    <img src="img/illustrations/abstract-shape.svg" alt="abstract" class="abstract">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- brand -->
            <a class="navbar-brand" href="#">PPU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
        
            <!-- Nav Items -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <section id="banner">
        <div class="jumbotron jumbotron-fluid">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 header-text text-center">
                        <h1 class="mb-3">Pemerataan Pemberdayaan UMKM</h1>
                        <h4 class="mb-4">Yuk,Share Masalah Anda</h4>
                        <a href="#" class="btn-start">Get Started</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('public/img/illustrations/business.svg') }}" alt="Illustration Business">
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
                                <img class="card-img-top" src="{{ asset('public/img/illustrations/search-solutions.svg') }}" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card py-2" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Tentukan Lokasi</h3>
                            </div>
                            <div class="text-center">
                                <img class="card-img-top" src="{{ asset('public/img/illustrations/choose-locations.svg') }}" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card py-2" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Seminar</h3>
                            </div>
                            <div class="text-center">
                                <img class="card-img-top" src="{{ asset('public/img/illustrations/seminars.svg') }}" alt="Card image cap">
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
                    <img src="{{ asset('public/img/illustrations/solutions.svg') }}" alt="Illustration Solutions">
                </div>
                <div class="col">
                    <h3 class="font-weight-bold">Solusi Pemberdayaan UMKM</h3>
                    <p>Kami menghubungkan anda selaku pemilik usaha UMKM dengan narasumber dari Lembaga yang menyelenggarakan event untuk menyelesaikan permasalahan dari UMKM.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <h3 class="font-weight-bold">Solusi Pemberdayaan UMKM</h3>
                    <p>Kami menghubungkan anda selaku pemilik usaha UMKM dengan narasumber dari Lembaga yang menyelenggarakan event untuk menyelesaikan permasalahan dari UMKM.</p>
                </div>
                <div class="col">
                    <img src="{{ asset('public/img/illustrations/maps.svg') }}" alt="Illustration Solutions">
                </div>
            </div>
        </div>
    </section>

    <footer class="py-2">
        <p class="text-center text-white font-weight-bold">Copyright &copy; 2019 PPU</p>
    </footer>
@endsection