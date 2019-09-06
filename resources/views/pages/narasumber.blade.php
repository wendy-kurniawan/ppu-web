@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/narasumber.css') }}" type="text/css">
@endsection

@section('content')     
    <div class="ranking__container">
        @include('partials.navigation')
        <div class="container">
            <div class="wrapper">
                <div class="ranking_top">
                    @foreach ($rangking as $itemRangking)
    
                        @if ($itemRangking->totalKegiatanNarasumber == 0)
    
                        @else
                            @if (($itemRangking->rank/$itemRangking->totalKegiatanNarasumber) > 95.0)
                                <div id="rank-first" class="ranking__card">
                                    <img src="{{ asset('img/icons/crown_gold.svg') }}" alt="crown" class="card__crown">
                                        <div class="profile">
                                            <img src="{{ asset('assetLogin/img/profile/'.$itemRangking->GAMBAR) }}" alt="profile picture"/>
                                        </div>
                                    <h5 class="card__name">{{$itemRangking->NAMALENGKAP}}</h5>
                                    <p class="card__skill">Java, Programming, Design, Machine Learning, Teaching</p>
                                <div class="chart" data-percent="{{($itemRangking->rank/$itemRangking->totalKegiatanNarasumber)}}">{{($itemRangking->rank/$itemRangking->totalKegiatanNarasumber)}}%</div>
                            @elseif (($itemRangking->rank/$itemRangking->totalKegiatanNarasumber) > 90.0)
                                <div id="rank-first" class="ranking__card">
                                    <img src="{{ asset('img/icons/crown_silver.svg') }}" alt="crown" class="card__crown">
                                        <div class="profile">
                                            <img src="{{ asset('assetLogin/img/profile/'.$itemRangking->GAMBAR) }}" alt="profile picture"/>
                                        </div>
                                    <h5 class="card__name">{{$itemRangking->NAMALENGKAP}}</h5>
                                    <p class="card__skill">Java, Programming, Design, Machine Learning, Teaching</p>
                                <div class="chart" data-percent="{{($itemRangking->rank/$itemRangking->totalKegiatanNarasumber)}}">{{($itemRangking->rank/$itemRangking->totalKegiatanNarasumber)}}%</div>
                            @elseif (($itemRangking->rank/$itemRangking->totalKegiatanNarasumber) > 85.0)
                                <div id="rank-first" class="ranking__card">
                                    <img src="{{ asset('img/icons/crown_bronze.svg') }}" alt="crown" class="card__crown">
                                        <div class="profile">
                                            <img src="{{ asset('assetLogin/img/profile/'.$itemRangking->GAMBAR) }}" alt="profile picture"/>
                                        </div>
                                    <h5 class="card__name">{{$itemRangking->NAMALENGKAP}}</h5>
                                    <p class="card__skill">Java, Programming, Design, Machine Learning, Teaching</p>
                                    <div class="chart" data-percent="{{($itemRangking->rank/$itemRangking->totalKegiatanNarasumber)}}">{{($itemRangking->rank/$itemRangking->totalKegiatanNarasumber)}}%</div>
                            @else
    
                            @endif
                        
                    </div>  
                        @endif
                    @endforeach
                </div>
                <div class="ranking_bottom">
                    @php
                        $no= 1;    
                    @endphp
                    @foreach ($rangking as $lowRank)
    
                        @if ($lowRank->totalKegiatanNarasumber == 0)
    
                        @else 
                            @if (($lowRank->rank/$lowRank->totalKegiatanNarasumber) < 85.0)
                            <div class="ranking__list">
                                    <div class="ranking__number">
                                        <p>{{$no++}}</p>
                                    </div>
                                    <div class="list__picture">
                                        <div class="profile">
                                            <img src="{{ asset('assetLogin/img/profile/'.$lowRank->GAMBAR)  }}" alt="profile picture"/>
                                        </div>
                                    </div>
                                    <div class="list__profile">
                                        <h5>{{$lowRank->NAMALENGKAP}}</h5>
                                        <p class="list__skill">Java, Programming, Design, Machine Learning, Teaching</p>
                                    </div>
                                    <div class="list__chart">
                                        <div class="chart" data-percent="{{($lowRank->rank/$lowRank->totalKegiatanNarasumber)}}" class="">{{($lowRank->rank/$lowRank->totalKegiatanNarasumber)}}%</div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
    
                    
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection