@extends('layouts.app')

@section('title', 'Pemerataan Pemberdayaan UMKM')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/event.css') }}" type="text/css">
@endsection

@section('content')
    <section id="event-banner" class="mb-5">
        <div class="container">
            @include('partials.navigation')
            <div class="row p-5 justify-content-center">
                <div class="col ml-5">
                    <img src="{{ asset('img/illustrations/search_keyword.svg') }}" alt="search illustration" width="400">
                </div>
                <div class="col-5 text-white align-self-center mr-5">
                    <h1>Temukan Eventmu</h1>
                    <p class="font-weight-bold">Cari event workshop dan seminar yang menjadi solusi dari UMKM anda</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <input type="text" class="form-control mb-2 mr-sm-2 search-box" placeholder="Events...">
                </div>
            </div>
        </div>
    </section>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle w-100 shadow" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jenis Kegiatan
                    </button>
                    <div class="dropdown-menu w-100 p-4" aria-labelledby="dropdownMenuButton">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">Seminar</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">Workshop</label>
                        </div>
                    </div>
                </div>
                <div class="dropdown mt-2">
                    <button class="btn btn-primary dropdown-toggle w-100 shadow" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bidang Keahlian
                    </button>
                    <div class="dropdown-menu w-100 p-4" aria-labelledby="dropdownMenuButton">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">Programming</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">Designing</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="card mx-2 mb-3" style="width: 22rem; box-shadow: 0 10px 10px rgba(0, 0, 0, 0.25)">
                        <p class="card-tag text-white font-weight-bold">Seminar</p>
                        <img class="card-img-top" src="{{ asset('img/event/download@2x.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <div class="card-author">
                                <p class="font-weight-bold"><small>oleh: </small>Lembaga</p>
                            </div>
                            <p class="card-text overflow-hidden">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="card-skills">
                                <h6 class="font-weight-bold">Skills</h6>
                                <p>Java, Python, PHP</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold">10 hari lagi</span>
                            <a href="#" class="btn btn-primary">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection