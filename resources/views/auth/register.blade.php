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
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                </div>
                                @error('name')
                                    <small class="text-danger ml-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                    </div>
                                    <input id="username" type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
                                </div>
                                @error('username')
                                    <small class="text-danger ml-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                </div>
                                @error('email')
                                    <small class="text-danger ml-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-check-bold"></i></span>
                                        </div>
                                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>
                                @error('password')
                                    <small class="text-danger ml-2" style="margin-top: -20px" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-login my-4">Create an account</button>
                            </div>
                        </form>

                        <div class="row justify-content-center">
                            <a href="{{ url('login') }}" class="text-light">Already have account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
