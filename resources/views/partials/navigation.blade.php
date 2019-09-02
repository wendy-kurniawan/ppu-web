<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- brand -->
        <a class="navbar-brand" href="{{url('/')}}">PPU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Nav Items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto font-weight-bold">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('event.index') }}">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('narasumber.index') }}">Narasumber</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('checkkuesioner.index')}}">Kuesioner</a>                   
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link btn-primary" href="{{ route('src.index') }}">My Dashboard</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signInModal">Sign In</button> --}}
                        <a class="nav-link btn-primary" href="{{ route('login') }}">Sign In</a>
                    </li>
                    <li class="nav-item">
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUpModal">Sign Up</button> --}}
                        <a class="nav-link btn-primary" href="{{ route('register') }}">Sign Up</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>