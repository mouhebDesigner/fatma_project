@extends('admin.layouts.master')


@section('titre', 'ajouter véhicule')
@section('content')
<div class="wrapper">
        @include('admin.includes.header')
        @include('admin.includes.aside')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Ajouter un véhicule 
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
                        <form action="{{ url('admin/vehicules') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="marque">Marque</label>
                                    <input type="text" class="form-control" name="marque" value="{{ old('marque') }}" id="marque" placeholder="Saisir libellé de catégorie">
                                    @error('marque')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input type="text" class="form-control" name="model" value="{{ old('model') }}" id="model" placeholder="Saisir libellé de catégorie">
                                    @error('model')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="capacite">capacite</label>
                                    <input type="text" class="form-control" name="capacite" value="{{ old('capacite') }}" id="capacite" placeholder="Saisir libellé de catégorie">
                                    @error('capacite')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="matricule">matricule</label>
                                    <input type="text" class="form-control" name="matricule" value="{{ old('matricule') }}" id="matricule" placeholder="Saisir libellé de catégorie">
                                    @error('matricule')
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