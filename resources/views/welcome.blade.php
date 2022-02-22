@extends('layouts.app')

@section('content')

    <section class="hero" style="background-image: url({{ asset('hero.jpg') }})">

        <div class="intro">
            <h1 class="welcome-text"> Welcome To Patient Tracker </h1>
        </div>

    </section>

    <section class="services d-flex flex-column flex-md-row  justify-content-center align-items-center">

        <div class="service">
            <i class="fa-solid fa-book-medical"></i>
            <p>Appointment Booking Forms.</p>
        </div>

        <div class="service">
            <i class="fa-solid fa-head-side-cough"></i>
            <p>COVID-19 vaccination options </p>
        </div>

        <div class="service">
        <i class="fa-solid fa-heart-pulse"></i>
            <p>A Clear Value Proposition in Your Headline </p>
        </div>

    </section>

    <section class="login-section container" id="login">
        <div class="section-intro">
            <h2>Join Us</h2>
            <p>Join Us Few Clicks Only</p>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-start">
                <!-- Login Credintals -->
                <div class="col-xl-6 col-md-8 col-sm-12">
                    <div class="section-intro">
                        <h2>Login</h2>
                    </div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="row justify-content-center mb-3">
                            

                            <div class="col-md-6">
                                <label for="email" class="label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="input  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="none" >

                                @error('email')
                                    <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">

                            <div class="col-md-6">
                                <label for="password" class="label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <!-- <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button> -->
                                <button type="submit" class="button">
                                    Login
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Register Credintals -->
                <div class="col-xl-6 col-md-8 col-sm-12">
                    <div class="section-intro">
                        <h2>Register</h2>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <!-- Name -->
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-6">
                                <label for="name" class="label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="input  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="none" >

                                @error('name')
                                    <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-6">
                                <label for="email" class="label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="input  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="none" >

                                @error('email')
                                    <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row justify-content-center mb-3">

                            <div class="col-md-6">
                                <label for="password" class="label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Confirmation -->
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-6">
                                <label for="password_confirmation" class="label">{{ __('Password Confirmation') }}</label>

                                <input id="password_confirmation" type="password" class="input  @error('password') is-invalid @enderror" name="password_confirmation">

                                @error('password')
                                    <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                
                                <button type="submit" class="button">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
       
    </section>
   
@endsection