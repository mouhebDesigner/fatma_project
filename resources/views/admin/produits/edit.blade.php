@extends('admin.layouts.master')


@section('titre', 'Modifier produit')
@section('content')
<div class="wrapper">
        @include('admin.includes.header')
        @include('admin.includes.aside')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Modifier un produit 
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
                        <form action="{{ route('fournisseur.produits.update', ['produit'=> $produit]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Titre</label>
                                    <input type="text" class="form-control" name="name" value="{{ $produit->name }}" id="name" placeholder="Saisir titre de produit">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="categorie_id">Catégorie <span
                                            style="color: red">* </span> </label>
                                    <select class="form-control" name="categorie_id" id="categorie_id">
                                        <option value="" disabled selected>Choisir un catégorie</option>
                                        @foreach(App\Models\Categorie::all() as $categorie)
                                            <option value="{{ $categorie->id }}" @if($produit->categorie_id == $categorie->id) selected @endif>{{ $categorie->label }}</option>
                                        @endforeach
                                    </select>
                                    @error('categorie_id')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Description  
                                        <span style="color: red">* </span>
                                    </label>
                                    <textarea name="description" class="form-control" placeholder="Saisir description" id="" >{{ $produit->description }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantité</label>
                                    <input type="text" class="form-control" name="quantity" value="{{ $produit->quantity }}" id="name" placeholder="Saisir quantité de produit">
                                    @error('quantity')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Prix</label>
                                    <input type="text" class="form-control" name="price" value="{{ $produit->price }}" id="price" placeholder="Saisir titre de produit">
                                    @error('price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="images">Images  <span
                                            style="color: red">* </span></label>
                                    <input type="file" class="form-control" name="images[]"
                                        id="images" multiple>
                                    @error('images')
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