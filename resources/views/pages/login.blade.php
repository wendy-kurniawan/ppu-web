@extends('layouts.app')

@section('title', 'Sign In')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
@endsection

@section('content')
    <div class="container">
        @include('partials.navigation')
        <div class="row"> 
            <div class="col-lg-6 text-center">
                <img src="{{ asset('img/illustrations/network-man.svg') }}" alt="illustration">
            </div>
            <div class="form-section col-lg-6 col-sm-12 justify-content-center align-self-center">
                <div class="shadow p-5 bg-white">
                    <div class="form-group text-center">
                        <h3>Sign In</h3>
                    </div>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" >{{ __('Password') }}</label>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('register')}}">Belum Ada Account?Klik disini</a>
                     </form>
                </div>
            </div>
        </div>
    </div>
@endsection