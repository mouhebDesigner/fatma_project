@extends('layouts.master')



@section('content')
<section class="recipe-block-preview">
    <div class="recipe-banner" style="background-image: url(images/find-recipes/banner.jpg)"></div>
    <div class="container">
        <div class="find-recipes">
            <div class="row">
                <div class="col-md-12">
                    <div class="new-heading">
                        <h1> Find Recipes </h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p>Aenean tellus ligula, pellentesque sit amet luctus eget, posuere eget sapien. Proin ultricies
                        vestibulum sem non lobortis.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <input class="input-recipes" name="find-recipes" type="text" placeholder="Find recipes...">
                        <div class="find-recipes-btn">
                            <div class="f-r-btn">
                                <button class="find-recipe-btn btn-link"><i class="fas fa-search"></i>Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recomended">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="new-heading">
                    <h1> Liste de produits </h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($produits as $produit)
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="recipe-vdo">
                    <div class="top">
                        <div class="top-img">
                            <div class="bg-gradient"></div>
                            <img src="{{ asset("uploads/".$produit->ressources()->first()->path) }}" alt="">
                        </div>
                    </div>
                    <div class="video-bottom">
                        <div class="bottom-text">
                            <a href="recipe_details.html">
                                <h4>{{ $produit->name }}</h4>
                            </a>
                            <div class="v-published">{{ $produit->created_at->diffForHumans() }}</div>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>4.5</span>
                                <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
