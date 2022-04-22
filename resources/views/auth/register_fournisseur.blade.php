@extends('layouts.master')

@section('includes')
@include('includes.header')
@endsection

@section('content')
<section class="add-restaurant">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="hidden" name="role" value="fournisseur">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="resto-heading">
                        <img src="images/partner-with-us/icon-1.svg" alt="">
                        <h1>S'inscrire comme fournisseur</h1>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="basic-info">
                                <h4>Des informations de gérant</h4>
                                <div class="form-group">
                                    <label for="nameRestaurant">Nom de gérant*</label>
                                    <input type="text" value="{{ old('nom') }}" name="nom" class="video-form" id="nameRestaurant"
                                        placeholder="Saisir nom">
                                        @error('nom')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nameRestaurant">Prénom de gérant*</label>
                                    <input type="text" value="{{ old('prenom') }}" name="prenom" class="video-form" id="nameRestaurant"
                                        placeholder="Saisir prénom">
                                        @error('prenom')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Email de gérant*</label>
                                    <input type="email" value="{{ old('email') }}" name="email" class="video-form" id="emailAddress"
                                        placeholder="Saisir email">
                                        @error('email')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="telNumber1">Numéro téléphone de gérant*</label>
                                    <input type="tel" value="{{ old('numtel') }}" name="numtel" class="video-form" id="telNumber1"
                                        placeholder="Saisir numéro de téléphone">
                                        @error('numtel')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe*</label>
                                    <input type="password" value="{{ old('password') }}" name="password" class="video-form" id="password"
                                        placeholder="Saisir mot de passe">
                                        @error('password')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Mot de passe*</label>
                                    <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="video-form" id="password_confirmation"
                                        placeholder="Saisir mot de passe">
                                </div>
                                
        
                            </div>
                        </div>
                        <div class="col">
                            <div class="basic-info">
                                <h4>Des informations de société</h4>
                                <div class="form-group">
                                    <label for="nameRestaurant">Nom de société*</label>
                                    <input type="text" value="{{ old('nom_societe') }}" name="nom_societe" class="video-form" id="nameRestaurant"
                                        placeholder="Saisir nom de la société">
                                        @error('nom_societe')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="searchCity">Adresse de la société*</label>
                                    <input type="Search" value="{{ old('adresse') }}" name="adresse" class="video-form" id="searchCity" placeholder="Saisir adresse de la société">
                                    @error('adresse')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="telNumber2">Numéro téléphone de société*</label>
                                    <input type="tel" value="{{ old('numtel_societe') }}" name="numtel_societe" class="video-form" id="telNumber2" placeholder="Saisir numéro de téléphone de la société">
                                    @error('numtel_societe')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="categorie_id">Spécialité*</label>
                                    <select class="video-form" name="categorie_id" id="categorie_id">
                                        <option value="" disabled selected>Choisir un spécialité</option>
                                        @foreach(App\Models\Categorie::all() as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->label }}</option>
                                        @endforeach
                                    </select>
                                    @error('categorie_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>




                    <button type="submit" class="add-resto-btn1 btn-link float-right">Valider</button>
                </div>
              
            </div>
        </div>
    </form>
</section>
@endsection
