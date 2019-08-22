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
            <div class="row justify-content-left">
                @foreach ($dataEvent as $headerEvent)
                <div class="col-1 mx-5 mr-5">
                    <div class="card profile-card" >
                        <img src="{{ asset('assetLogin/img/kegiatan/'.$headerEvent->GAMBAR) }}" class="card-img-top" alt="Tidak Ada Foto">
                    </div>
                </div>
                <div class="ml-5 mt-auto col-5 text-white align-self-center">
                    <h2 style="word-wrap: break-word;">{{$headerEvent->JUDULACARA}}</h2>
                    <p class="font-weight-bold">Oleh: {{$headerEvent->NAMANARASUMBER}} ||
                    <span class="badge badge-success">{{$headerEvent->JKKEGIATAN}}</span></p>
                </div>
                @endforeach
                </div>
        </div><hr style="height: 8px;background-image: linear-gradient(to right, #EAFDB4 , #A8EEED);">
    </section>
    <br>
    <br>
    <div class="container">
        <div class="row content">
            @foreach ($dataEvent as $itemEvent)                
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link nav-color active" id="home-tab" data-toggle="tab" href="#deskiprsi" role="tab" aria-controls="home" aria-selected="true" >Deskripsi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-color" id="profile-tab" data-toggle="tab" href="#jadwalLokasi" role="tab" aria-controls="profile" aria-selected="false">Jadwal&Lokasi</a>
                    </li>
                </ul>
                {{-- Deskripsi --}}
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="deskiprsi" role="tabpanel" aria-labelledby="home-tab">
                        <p class="font-weight-bold">Deskripsi</p>
                        <p>{{$itemEvent->KETKEGIATAN}}</p>
                        <hr>
                    </div>
                    {{-- Jadwal&Lokasi --}}
                    <div class="tab-pane fade" id="jadwalLokasi" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="font-weight-bold">Lokasi</p>
                            <p>{{$itemEvent->LOKASI}}</p>
                            <p class="font-weight-bold">Tanggal Mulai</p>
                            <p>{{ \Carbon\Carbon::parse($itemEvent->TGLMULAI)->format('d M Y H:i:s')}}</p>
                            <p class="font-weight-bold">Tanggal Selesai</p>
                            <p>{{ \Carbon\Carbon::parse($itemEvent->TGLSELESAI)->format('d M Y H:i:s')}}</p>
                        <hr>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">	
                @guest
                <h4>Daftar Acara</h4><hr>
                    <form action="{{route('eventregister.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            @foreach ($dataEvent as $idEventGuest)
                            <input type="hidden" name="nopage" class="form-control" value="{{$idEventGuest->NO}}" readonly>
                            <input type="hidden" name="guestidKegiatan" class="form-control" value="{{$idEventGuest->IDKEGIATAN}}" readonly>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <i class="fa fa-envelope-o" aria-hidden="true">
                            <label for="formGroupExampleInput">Email</label></i>
                            <input type="email" name="emailGuest" class="form-control"  placeholder="Email Anda" required>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-address-card-o" aria-hidden="true">
                            <label >Nama Lengkap</label></i>
                            <input type="text" name="nameGuest" class="form-control" placeholder="Nama Lengkap Anda" required>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-mobile" aria-hidden="true">
                            <label>No Handphone</label></i>
                            <input type="text" name="hpGuest" class="form-control" maxlength="13" placeholder="Handphone Anda"required>
                        </div>
                        <input type="submit" class="form-control btn btn-primary" value="Daftar" >
                        <span><a href="{{URL('/login')}}">Sudah Memiliki Account|Klik Disini</small></a>
                    </form>
                @else
                <form action="{{route('eventregister.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        @foreach ($dataEvent as $idEvent)
                        <input type="hidden" name="statuslogin" class="form-control" value="LOGIN" readonly>
                        <input type="hidden" name="nopage" class="form-control" value="{{$idEvent->NO}}" readonly>
                        <input type="hidden" name="noidUser" class="form-control" value="{{Auth::User()->PROFILEUSERS_ID}}" readonly>
                        <input type="hidden" name="idKegiatan" class="form-control" value="{{$idEvent->IDKEGIATAN}}" readonly>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <i class="fa fa-envelope-o" aria-hidden="true">
                        <label for="formGroupExampleInput">Email</label></i>
                        <input type="email" name="emailUMKM" class="form-control" value="{{Auth::User()->email}}"  placeholder="Email Anda" readonly>
                    </div>
                        <div class="form-group">
                            <i class="fa fa-address-card-o" aria-hidden="true">
                            <label >Nama Lengkap</label></i>
                            <input type="text" name="namalengkapUMKM"class="form-control" value="{{Auth::User()->USERNAME}}" placeholder="Nama Lengkap Anda" readonly>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-building-o" aria-hidden="true">
                            <label >NAMA UMKM</label></i>
                            <input type="text" name="namaOrganisasi" class="form-control" value="{{Auth::User()->NAMAUMKM}}" placeholder="Nama UMKM Anda" readonly>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-mobile" aria-hidden="true">
                            <label>No Handphone</label></i>
                            <input type="text" name="nohpUMKM" class="form-control" placeholder="Handphone Anda" maxlength="13" required>
                        </div>
                        <input type="submit" class="form-control btn btn-primary" value="Daftar" >
                    </form>
                @endauth
            </div>
        </div>
    </div>
@endsection