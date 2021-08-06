{{--  <!-- Navbar -->  --}}
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/logo.png') }}" alt="logo NOMADS">
        </a>
        <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item mx-md-2 dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDrop" data-toggle="dropdown">Services</a>

                    <div class="dropdown-menu border-0 shadow-sm">
                        <a href="" class="dropdown-item">Action</a>
                        <a href="" class="dropdown-item">Another action</a>
                        <a href="" class="dropdown-item">Something else here</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Testimonial&apos;s</a>
                </li>
            </ul>
            
            @guest
                {{-- Mobile button  --}}
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    Sign In
                </button>
            </form>
            

            {{--  <!-- Dekstop button -->  --}}
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}'">
                    Sign In
                </button>
            </form>
            @endguest

            @auth
                {{-- Mobile button  --}}
            <form action="{{ url('logout') }}" method="POST" class="form-inline d-sm-block d-md-none">
                @csrf
                <button class="btn btn-login" type="submit" >
                    Sign Out
                </button>
            </form>
            

            {{--  <!-- Dekstop button -->  --}}
            <form action="{{ url('logout') }}" method="POST" class="form-inline my-2 my-lg-0 d-none d-md-block">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                    Sign Out
                </button>
            </form>
            @endauth
        </div>
    </nav>
</div>