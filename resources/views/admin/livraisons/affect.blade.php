@extends('admin.layouts.master')


@section('titre', 'ajouter catégorie')
@section('content')
<div class="wrapper">
        @include('admin.includes.header')
        @include('admin.includes.aside')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Ajouter mission 
                </h1>
            </section>
            <section class="content">
                <div class="row">
                <div class="col-md-12">
                
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Formulaire d'ajout</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('admin/missions') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="demande_id" value="{{ $demande->id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="label">libellé</label>
                                    <input type="text" class="form-control" name="label" value="{{ old('label') }}" id="label" placeholder="Saisir libellé de mission">
                                    @error('label')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="livreur_id">Livreur</label>
                                    <select name="livreur_id" class="form-control" id="">
                                        <option value="">Choisir livreur</option>
                                        @foreach(App\Models\User::where('role', 'livreur')->get() as $livreur)
                                            <option value="{{ $livreur->id }}">{{ $livreur->nom }} {{ $livreur->prenom }}</option>
                                        @endforeach
                                    </select>
                                    @error('livreur_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="vehicule_id">Vehicule</label>
                                    <select name="vehicule_id" class="form-control" id="">
                                        <option value="">Choisir vehicule</option>
                                        @foreach(App\Models\Vehicule::all() as $vehicule)
                                            <option value="{{ $vehicule->id }}">{{ $vehicule->marque }} => {{ $vehicule->capacite }} KG</option>
                                        @endforeach
                                    </select>
                                    @error('vehicule_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                               
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="reset" class="btn btn-info">Annuler</button>
                            </div>
                        </form>
                        </div>
                </div>
                  
                </div>
            </section>
        </div>
   


@endsection