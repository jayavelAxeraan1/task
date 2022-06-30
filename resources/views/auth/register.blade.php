@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
            <div class="text-center"><br/>
                  <img src="img/logo.png"
                    style="width: 185px;" alt="logo"><br/>
                  <h6 class="mt-1 mb-4 pb-1">We are The Axeraan Team</h6>
</div>


                <div class="card-header text-center text-primary h4">{{ __('Register') }}</div>
                <span class='hr-bder'/></span>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                            <div class="col-md-6">
                                <input id="email" type="email"  placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                            <div class="col-md-6">
                                <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-6">
                                <input id="password-confirm"  placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4 justify-content-center pb-4">
  <p class="mb-0 me-2">Don't have an account?</p>
  <a href="/login"><button type="button" class="btn btn-outline-success">Login</button></a>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


