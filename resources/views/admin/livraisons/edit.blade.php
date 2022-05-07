@extends('admin.layouts.master')


@section('titre', 'Modifier demande de livraison')
@section('content')
<div class="wrapper">
        @include('admin.includes.header')
        @include('admin.includes.aside')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Modifier un demande de livraison 
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
                        <form action="{{ route('fournisseur.demandes.update', ['demande' => $demande]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Article</label>
                                    <input type="text" class="form-control" name="article" value="{{ $demande->article }}" id="article" placeholder="Saisir titre de produit">
                                    @error('article')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Adresse destination</label>
                                    <input type="text" class="form-control" name="destination" value="{{ $demande->destination }}" id="destination" placeholder="Saisir titre de produit">
                                    @error('destination')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                
                                <div class="form-group">
                                    <label for="date">Date/heure</label>
                                    <input type="date" class="form-control" name="date" value="{{ $demande->date }}" id="name" placeholder="Saisir quantité de produit">
                                    @error('date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nom_client">Nom client</label>
                                    <input type="text" class="form-control" name="nom_client" value="{{ $demande->nom_client }}" id="nom_client" placeholder="Saisir titre de produit">
                                    @error('nom_client')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="num_client">Numéro client</label>
                                    <input type="text" class="form-control" name="num_client" value="{{ $demande->num_client }}" id="num_client" placeholder="Saisir titre de produit">
                                    @error('num_client')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="document">Document d'ordonance</label>
                                    <input type="file" class="form-control" name="document" value="{{ old('document') }}" id="document" placeholder="Saisir document ">
                                    @error('document')
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