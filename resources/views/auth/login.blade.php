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
              <h1>Login Now</h1>
              <div class="login-container">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-12">
                    <form>
                      <div class="login-form" action="{{ url('home') }}" method="GET">
                        <div class="login-logo">
                          <a href="index.html">
                            <img src="images/login-register/logo.svg" alt="">
                          </a>
                        </div>
                        <div class="social-btns">
                          <button class="facebook-btn">
                            <i class="fab fa-facebook-f"></i>Continue with facebook </button>
                          <button class="google-btn">
                            <i class="fab fa-google"></i>Continue with Google </button>
                        </div>
                        <div class="or">
                          <p> Or </p>
                        </div>
                        <div class="form-group">
                          <input type="text" class="video-form" id="emailphonenumber" placeholder="Type Email or Phone Number">
                        </div>
                        <div class="form-group">
                          <input type="password" class="video-form" id="yourPassword" placeholder="Password">
                        </div>
                        <button class="login-btn btn-link">
                            <a href="{{ url('home') }}" >Connecter</a>
                        </button>
                        <div class="forgot-password">
                          <a href="#">Forgot Password?</a>
                          <p>Don’t have an account? <a href="signup.html">
                              <span style="color:#ffa803;">- Register Now</span>
                            </a>
                          </p>
                        </div>
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

