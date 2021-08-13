@extends('layouts.auth')

@section('content')
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0 shadow-sm">
                    <div class="card-header bg-transparent">
                        <div class="btn-wrapper text-center">
                            <a href="{{ route('home') }}">
                                <span class="btn-inner--icon"><img src="{{ url('frontend/images/logo.png') }}" class="w-50"></span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body px-lg-5">
                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="current-password">
                                </div>
                                @error('email')
                                    <small class="text-danger ml-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                </div>
                                @error('password')
                                    <small class="text-danger ml-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-muted">Remember me</span>
                                </label>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-login my-4">Sign in</button>
                            </div>
                        </form>
                        <div class="row justify-content-between">
                            @if (Route::has('password.request'))
                                <a class="text-light" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <a href="{{ url('register') }}" class="text-light">Create new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
