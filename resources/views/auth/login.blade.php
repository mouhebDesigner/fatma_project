@extends('layouts.master')



@section('content')
    <section class="title-bar">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="left-title-text">
                <h3>Login Now</h3>
            </div>
            </div>
            <div class="col-md-6">
            <div class="right-title-text">
                <ul>
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Login Now</li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </section>
    <section class="login_register">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-12">
              <h1>Connecter maintenant</h1>
              <div class="login-container">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-12">
                    <form action="{{ route('login') }}" method="post">
                      @csrf
                      <div class="login-form" >
                        <div class="login-logo">
                          <a href="index.html">
                            <img src="images/login-register/logo.svg" alt="">
                          </a>
                        </div>
                        <div class="form-group">
                            <input type="text" class="video-form @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="video-form" id="yourPassword" placeholder="Mot de passe">
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="login-btn btn-link">
                            Connecter
                        </button>
                        @if (Route::has('password.request'))
                            <div class="forgot-password">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif
                          <p>Don’t have an account? <a href="signup.html">
                              <span style="color:#ffa803;">- Register Now</span>
                            </a>
                          </p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection

