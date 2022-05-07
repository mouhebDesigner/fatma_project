@extends('admin.layouts.master')


@section('titre', 'ajouter demande de livraison')
@section('content')
<div class="wrapper">
        @include('admin.includes.header')
        @include('admin.includes.aside')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Ajouter un demande de livraison 
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
                        <form action="{{ url('fournisseur/demandes') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"> 
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Article</label>
                                    <input type="text" class="form-control" name="article" value="{{ old('article') }}" id="article" placeholder="Saisir article ">
                                    @error('article')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Adresse destination</label>
                                    <input type="text" class="form-control" name="destination" value="{{ old('destination') }}" id="destination" placeholder="Saisir destination ">
                                    @error('destination')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                
                                <div class="form-group">
                                    <label for="date">Date/heure</label>
                                    <input type="date" class="form-control" name="date" value="{{ old('date') }}" id="name" placeholder="Saisir quantité de produit">
                                    @error('date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nom_client">Nom client</label>
                                    <input type="text" class="form-control" name="nom_client" value="{{ old('nom_client') }}" id="nom_client" placeholder="Saisir nom_client ">
                                    @error('nom_client')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="num_client">Numéro client</label>
                                    <input type="text" class="form-control" name="num_client" value="{{ old('num_client') }}" id="num_client" placeholder="Saisir num_client ">
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