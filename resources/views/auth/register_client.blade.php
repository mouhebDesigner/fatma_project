@extends('layouts.master')

@section('includes')
@include('includes.header')
@endsection

@section('content')
<section class="add-restaurant">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="hidden" name="role" value="client">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-8 col-12">
                    <div class="resto-heading">
                        <img src="images/partner-with-us/icon-1.svg" alt="">
                        <h1>S'inscrire comme client</h1>
                    </div>
                    <div class="basic-info">
                        <h4>Des informations de client</h4>
                        <div class="form-group">
                            <label for="nameRestaurant">Nom de client*</label>
                            <input type="text" name="nom" class="video-form" id="nameRestaurant"
                                placeholder="Saisir nom">
                                @error('nom')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="nameRestaurant">Prénom de client*</label>
                            <input type="text" name="prenom" class="video-form" id="nameRestaurant"
                                placeholder="Saisir prénom">
                                @error('prenom')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email de client*</label>
                            <input type="email" name="email" class="video-form" id="emailAddress"
                                placeholder="Saisir email">
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="telNumber1">Numéro téléphone de client*</label>
                            <input type="tel" name="numtel" class="video-form" id="telNumber1"
                                placeholder="Saisir numéro de téléphone">
                                @error('numtel')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe*</label>
                            <input type="password" name="password" class="video-form" id="password"
                                placeholder="Saisir mot de passe">
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmer mot de passe*</label>
                            <input type="password" name="password_confirmation" class="video-form" id="password_confirmation"
                                placeholder="Saisir mot de passe">
                        </div>
                        

                    </div>
                    
                    <button type="submit" class="add-resto-btn1 btn-link">Valider</button>
                </div>
              
            </div>
        </div>
    </form>
</section>
@endsection
