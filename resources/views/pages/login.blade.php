@extends('layouts.app')

@section('title', 'Sign In')

@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/login.css') }}" type="text/css">
@endsection

@section('content')
    <div class="container">
        <div class="row"> 
            <div class="col text-center">
                <img src="{{ asset('public/img/illustrations/network-man.svg') }}" alt="illustration">
            </div>
            <div class="col justify-content-center align-self-center">
                <form action="" class="shadow p-5">
                    <div class="form-group text-center">
                        <h3>Sign In</h3>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection