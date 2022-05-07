@extends('admin.layouts.master')

@section('content')
<div class="wrapper">
        
        @include('admin.includes.header')
        @include('admin.includes.aside')
    <div class="content-wrapper" style="min-height: 257px">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                                        alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{ Auth::user()->nom }}{{ Auth::user()->prenom }}</h3>
                                <p class="text-muted text-center">{{ Auth::user()->role }}</p>


                            </div>

                        </div>

                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">


                                    <li class="nav-item"><a class="nav-link active" href="#settings"
                                            data-toggle="tab">Profile</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                    
                                <form class="form-horizontal" action="{{ url('profile') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nom de gérant</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ Auth::user()->nom }}" name="nom" class="form-control" id="nameRestaurant"
                                            placeholder="Saisir nom">
                                            @error('nom')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Prénom de gérant</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ Auth::user()->prenom }}" name="prenom" class="form-control" id="nameRestaurant"
                                            placeholder="Saisir prénom">
                                            @error('prenom')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Email de gérant</label>
                                        <div class="col-sm-10">
                                            <input type="email" value="{{ Auth::user()->email }}" name="email" class="form-control" id="emailAddress"
                                            placeholder="Saisir email">
                                            @error('email')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Numéro téléphone de gérant</label>
                                        <div class="col-sm-10">
                                            <input type="tel" value="{{ Auth::user()->numtel }}" name="numtel" class="form-control" id="telNumber1"
                                            placeholder="Saisir numéro de téléphone">
                                            @error('numtel')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Mot de passe</label>
                                        <div class="col-sm-10">
                                            <input type="password" value="" name="password" class="form-control" id="password"
                                            placeholder="Saisir mot de passe">
                                            @error('password')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                        
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Mot de passe</label>
                                            <div class="col-sm-10">
                                                <input type="password" value="{{ Auth::user()->password_confirmation }}" name="password_confirmation" class="form-control" id="password_confirmation"
                                            placeholder="Saisir mot de passe">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nom de société</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ Auth::user()->nom_societe }}" name="nom_societe" class="form-control" id="nameRestaurant"
                                            placeholder="Saisir nom de la société">
                                            @error('nom_societe')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Adresse de la société</label>
                                        <div class="col-sm-10">
                                                <input type="Search" value="{{ Auth::user()->adresse }}" name="adresse" class="form-control" id="searchCity" placeholder="Saisir adresse de la société">
                                        @error('adresse')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Numéro téléphone de société</label>
                                        <div class="col-sm-10">
                                                <input type="tel" value="{{ Auth::user()->numtel_societe }}" name="numtel_societe" class="form-control" id="telNumber2" placeholder="Saisir numéro de téléphone de la société">
                                        @error('numtel_societe')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Spécialité</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="categorie_id" id="categorie_id">
                                                <option value="" disabled selected>Choisir un spécialité</option>
                                                @foreach(App\Models\Categorie::all() as $categorie)
                                                    <option value="{{ $categorie->id }}" @if(Auth::user()->categorie_id == $categorie->id) selected @endif>{{ $categorie->label }}</option>
                                                @endforeach
                                            </select>
                                        @error('categorie_id')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                        </div>
                                    </div>
                                    
                                
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                  

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
    </div>
</div>
@endsection
