@extends('layouts.app')

@section('title', 'Kuesioner Pemerataan Pemberdayaan UMKM')

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
                    <h1>Kuesioner</h1>
                    <p class="font-weight-bold">Isikan Email Anda Untuk Mengisi Kuesioner</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="{{route('checkkuesioner.store')}}" method="post">
                        @csrf
                        <input type="email" class="form-control mb-2 mr-sm-2 search-box" name="emailGuest" placeholder="Email Anda    ">
                        <input type="hidden" class="form-control mb-2 mr-sm-2 search-box" value="Cari">
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@endsection