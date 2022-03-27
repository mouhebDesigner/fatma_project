@extends('layouts.master')

@section('includes')
@include('includes.header')
@endsection

@section('content')
<section class="add-restaurant">
    <form>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-8 col-12">
                    <div class="resto-heading">
                        <img src="images/partner-with-us/icon-1.svg" alt="">
                        <h1>S'inscrire comme fournisseur</h1>
                    </div>
                    <div class="basic-info">
                        <h4>Des informations basique</h4>
                        <div class="form-group">
                            <label for="nameRestaurant">Restaurant Name*</label>
                            <input type="text" class="video-form" id="nameRestaurant"
                                placeholder="Enter Restaurant Name">
                        </div>
                        <div class="form-group">
                            <label for="searchCity">City*</label>
                            <input type="Search" class="video-form" id="searchCity" placeholder="Search City">
                        </div>

                    </div>
                    <div class="basic-info">
                        <h4>Contacts</h4>
                        <div class="form-group">
                            <label for="emailAddress">Email Address*</label>
                            <input type="email" class="video-form" id="emailAddress"
                                placeholder="Restaurant Email Address">
                        </div>
                        <div class="form-group">
                            <label for="telNumber1">Phone Number*</label>
                            <input type="tel" class="video-form" id="telNumber1"
                                placeholder="Owner / Manager Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="telNumber2">Restaurant Phone Number*</label>
                            <input type="tel" class="video-form" id="telNumber2" placeholder="Restaurant Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="webSite">Restaurant Website*</label>
                            <input type="text" class="video-form" id="webSite" placeholder="Restaurant Website">
                        </div>

                    </div>




                    <button type="submit" class="add-resto-btn1 btn-link">Valider</button>
                </div>
                <div class="col-lg-5 col-md-4 col-12">
                    <div class="new-heading">
                        <h1>How It Works</h1>
                    </div>
                    <div class="how-it-work-1">
                        <img src="images/add-restaurant/icon-1.svg" alt="">
                        <h4>Fill Form</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet leo id enim mollis
                            volutpat. Donec venenatis</p>
                    </div>
                    <div class="how-it-work-1">
                        <img src="images/add-restaurant/icon-2.svg" alt="">
                        <h4>Send Information</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet leo id enim mollis
                            volutpat. Donec venenatis</p>
                    </div>
                    <div class="how-it-work-1 m-bottom">
                        <img src="images/add-restaurant/icon-3.svg" alt="">
                        <h4>Verified Listing &amp; Start Working With Natto</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet leo id enim mollis
                            volutpat. Donec venenatis</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection
