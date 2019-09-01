@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/narasumber.css') }}" type="text/css">
@endsection

@section('content')
    <div class="ranking__container">
        @include('partials.navigation')
        <div class="wrapper">
            <div class="ranking_top">
                <div id="rank-first" class="ranking__card">
                    <img src="{{ asset('img/icons/crown_gold.svg') }}" alt="crown" class="card__crown">
                    <div class="profile">
                        <img src="{{ asset('assetLogin\img\profile') }}" alt="profile picture"/>
                    </div>
                    <h5 class="card__name">Nama User</h5>
                    <p class="card__skill">Java, Programming, Design, Machine Learning, Teaching</p>
                    <div class="chart" data-percent="90">90%</div>
                </div>
                <div id="rank-first" class="ranking__card">
                    <img src="{{ asset('img/icons/crown_silver.svg') }}" alt="crown" class="card__crown">
                    <div class="profile">
                        <img src="{{ asset('assetLogin\img\profile') }}" alt="profile picture"/>
                    </div>
                    <h5 class="card__name">Nama User</h5>
                    <p class="card__skill">Java, Programming, Design, Machine Learning, Teaching</p>
                    <div class="chart" data-percent="70">70%</div>
                </div>
                <div id="rank-first" class="ranking__card">
                    <img src="{{ asset('img/icons/crown_bronze.svg') }}" alt="crown" class="card__crown">
                    <div class="profile">
                        <img src="{{ asset('assetLogin\img\profile') }}" alt="profile picture"/>
                    </div>
                    <h5 class="card__name">Nama User</h5>
                    <p class="card__skill">Java, Programming, Design, Machine Learning, Teaching</p>
                    <div class="chart" data-percent="70">70%</div>
                </div>
            </div>
            <div class="ranking_bottom">
                <div class="ranking__list">
                    <div class="ranking__number">
                        <p>4</p>
                    </div>
                    <div class="list__picture">
                        <div class="profile">
                            <img src="{{ asset('assetLogin\img\profile') }}" alt="profile picture"/>
                        </div>
                    </div>
                    <div class="list__profile">
                        <h5>Nama User</h5>
                        <p class="list__skill">Java, Programming, Design, Machine Learning, Teaching</p>
                    </div>
                    <div class="list__chart">
                        <div class="chart" data-percent="60" class="">60%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection