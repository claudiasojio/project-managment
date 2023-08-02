@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="card-header">{{ __('Login') }}</div>

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class=" bg-url('/public/images.jpg') col-lg-6 d-none d-lg-block "></div>
                            <div class="col-lg-6">
                                
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <div class="row mb-3">
                                                    <input type="email" id="email"
                                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus
                                                        placeholder="{{ __('Email Address') }}">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row mb-3">
                                                    <input type="password" id="password"
                                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password"
                                                        placeholder="{{ __('Password') }}">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="remember"
                                                {{ old('remember') ? 'checked' : '' }} name="remember">
                                            <label class="custom-control-label"
                                                for="remember">{{ __('Remember Me') }}</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                {{ __('Login') }}
                                            </button>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-danger btn-user btn-block">
                                                <i class="fa-brands fa-google"></i> Login with Google
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-info btn-user btn-block">
                                                <i class="fa-brands fa-facebook-f"></i> Login with Facebook
                                            </button>
                                        </div>
                                    </div>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>
@endsection
