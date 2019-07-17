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
                <form action="" class="shadow overflow-auto p-5">
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
                            <div class="form-group">
                                <label for="name">Nama UMKM</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="narasumber" role="tabpanel" aria-labelledby="narasumber-tab">
                            <div class="form-group">
                                <label for="name">Nama Narasumber</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="inputState">Lembaga</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Lembaga 1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="phone-number">Kontak</label>
                        <input type="tel" class="form-control" id="phone-number" placeholder="Enter phone number">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection