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
            <div class="event-banner row p-5 justify-content-center">
                <div class="col">
                    <img src="{{ asset('img/illustrations/search_keyword.svg') }}" alt="search illustration" width="400">
                </div>
                <div class="col text-white align-self-center">
                    <h1>Temukan Eventmu</h1>
                    <p class="font-weight-bold">Cari event workshop dan seminar yang menjadi solusi dari UMKM anda</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <input id="searchEvent" data-url="{{route('event.show',['id'=>null])}}" type="text" class="form-control mb-2 mr-sm-2 search-box" placeholder="Temukan Event">
                </div>
            </div>
        </div>
    </section>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row" id="dataResultEvent">
                    @foreach ($dataKegiatan as $itemKegiatan)                        
                    <div class="card mx-2 mb-3" style="width: 22rem; box-shadow: 0 10px 10px rgba(0, 0, 0, 0.25)">
                        <p class="card-tag text-white font-weight-bold">{{$itemKegiatan->JKKEGIATAN}}</p>
                        <img class="card-img-top" src="{{ asset('assetLogin/img/kegiatan/'.$itemKegiatan->GAMBAR) }}" alt="Foto Tidak Ada">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{$itemKegiatan->JUDULACARA}}</h5>
                            <div class="card-author">
                                <p class="font-weight-bold"><small>oleh: </small>{{$itemKegiatan->NAMANARASUMBER}}</p>
                            </div>
                            <p class="card-text overflow-hidden">{{$itemKegiatan->KETKEGIATAN}}</p>
                            <div class="card-skills">
                                <h6 class="font-weight-bold">Lokasi</h6>
                                <p>{{$itemKegiatan->LOKASI}}</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            @if ($itemKegiatan->TGLMULAI < $dateNow)
                            <span class="font-weight-bold">Selesai</span>
                            <span class="disable-links">
                                <button type="#" class="btn btn-danger" disabled>Pendaftar ditutup</button>   
                            </span>
                            @elseif (\Carbon\Carbon::parse($itemKegiatan->TGLMULAI)->format('m') == $cvDateMonthNow)
                             <span class="font-weight-bold">
                                Tersisa {{abs($day = (\Carbon\Carbon::parse($itemKegiatan->TGLMULAI)->format('d'))-$cvDateNow)." Hari" }}
                            </span>
                            <a href="{{url('eventregister/'.$itemKegiatan->NO)}}" class="btn btn-primary">Daftar</a>
                            @else
                            <span class="font-weight-bold">
                                {{
                                abs($month = (\Carbon\Carbon::parse($itemKegiatan->TGLMULAI)->format('m'))-$cvDateMonthNow)."Bulan ".
                                abs($day = (\Carbon\Carbon::parse($itemKegiatan->TGLMULAI)->format('d'))-$cvDateNow)."Hari"
                                }}
                            </span>
                            <a href="{{url('eventregister/'.$itemKegiatan->NO)}}" class="btn btn-primary">Daftar</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection