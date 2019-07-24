@extends('layouts.app')

@section('title', 'Sign Up')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" type="text/css">
@endsection

@section('content')
    <div class="container">
        <div class="row"> 
            <div class="col text-center">
                <img src="{{ asset('img/illustrations/user-register.svg') }}" alt="illustration">
            </div>
            <div class="col justify-content-center align-self-center">
                <div class="shadow overflow-auto p-5 bg-white ">
                    <div class="form-group text-center">
                        <h3>Sign Up</h3>
                    </div>
                    <ul class="nav nav-tabs nav-justified mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="umkm-tab" data-toggle="tab" href="#umkm" role="tab" aria-controls="umkm" aria-selected="true">UMKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="narasumber-tab" data-toggle="tab" href="#narasumber" role="tab" aria-controls="narasumber" aria-selected="false">Narasumber</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="tabContent">
                        <div class="tab-pane fade show active" id="umkm" role="tabpanel" aria-labelledby="umkm-tab">
                            <form action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nameUMKM">{{ __('Nama UMKM') }}</label>
                                    <input id="namaUMKM" type="text" class="form-control @error('namaUMKM') is-invalid @enderror" name="namaUMKM" value="{{ old('namaUMKM') }}" required autocomplete="namaUMKM" placeholder="Enter name" autofocus>
                                </div>
                                <div class="form-group">
                                <label for="name">{{ __('Nama Lengkap') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >
                                        <div class="col-md-6">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" >{{ __('E-Mail Address') }}</label>
        
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <input type="hidden" name="statusUser" value="UMKM"> 
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('login')}}">Sudah Memiliki Account?|Klik disini</a>
                            </form>

                        </div>
                        <div class="tab-pane fade" id="narasumber" role="tabpanel" aria-labelledby="narasumber-tab">
                            <form action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                <label for="name">{{ __('Nama Lengkap') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >
                                        <div class="col-md-6">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" >{{ __('E-Mail Address') }}</label>
        
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <input type="hidden" name="statusUser" value="NARASUMBER"> 
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('login')}}">Sudah Memiliki Account?|Klik disini</a>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
@endsection