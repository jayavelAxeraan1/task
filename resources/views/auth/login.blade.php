@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <div class="text-center"><br/>
                  <img src="img/logo.png"
                    style="width: 185px;" alt="logo"><br/>
                  <h6 class="mt-1 mb-4 pb-1">We are The Axeraan Team</h6>
</div>



                <div class="card-header text-center text-primary h4">{{ __('Login') }}</div>
                <span class='hr-bder'/></span>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password"  class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                            <div class="col-md-6">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="rem ember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>




                        
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div></div>
                    <div class="row mt-4">
                    <div class="col-md-7">

                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                                <div class="col-md-5 align-self-center" style='text-align:right;'>
                     <a href="/register"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
