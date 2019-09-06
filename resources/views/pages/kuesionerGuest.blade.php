@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/event.css') }}" type="text/css">
@endsection

@section('content')
    <div class="ranking__container">
        @include('partials.navigation')
            <form action="{{route('kuesioner.store')}}" method="POST">
            @csrf
            @foreach ($getGuest as $itemGuest)
            <div class="ranking_top container">
                    <div class="card ranking__card container col-md-12" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Judul Seminar: {{$itemGuest->JUDULACARA}}</h5>
                            <input type="text" name="emailGuest" value="{{$itemGuest->EMAILPESERTA}}" readonly>
                            <input type="text" name="idkegiatanGuest" value="{{$itemGuest->IDKEGIATAN}}" readonly>
                            @foreach ($itemGuest->totalKuesioner as $itemKuesioner)
                                <label>{{$itemKuesioner->PERTANYAAN}}</label>
                                <select class="form-control" name="jwb[]" required>
                                    <option value="">Pilih Salah Satu</option>
                                    <option value="1">1 (Kurang)</option>
                                    <option value="2">2 (Baik)</option>
                                    <option value="3">3 (Cukup)</option>
                                    <option value="4">4 (Bagus)</option>
                                    <option value="5">5 (Sangat Bagus)</option>
                                </select>    
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </div>
                </div>
                @endforeach
            </form>
            <div class="ranking_bottom">
            </div>
    </div>
@endsection