@extends('layouts.master')

@section('includes')
@include('includes.header')
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
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
                        <h1>S'inscrire comme client</h1>
                    </div>
                    <div class="basic-info">
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

@endsection

@section('js')
<script>
    $("#cycle").on('change', function () {
        var cycle = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'get',
            url: '/sections/' + cycle,
            success: function (data) {
                console.log(data);
                $("#section_id").empty();
                $('#section_id').append(
                    '<option value="" selected disabled>Choisir votre section</option>');
                $.each(data, function (index, value) {
                    $('#section_id').append('<option value="' + value.id + '">' + value
                        .titre + '</option>');
                });
            }
        });
    });
    $("#cycle").on('change', function () {
        var cycle = $(this).val();

        if (cycle == 'licence') {
            $('#niveau').empty();
            $("#niveau").append('<option value="" selected disbaled>Choisir niveau</option>')
            $("#niveau").append('<option value="première">Première année</option>')
            $("#niveau").append('<option value="deuxième">Deuxième année</option>')
            $("#niveau").append('<option value="troisième">Troisième année</option>')
        } else {
            $('#niveau').empty();
            $("#niveau").append('<option value="" selected disbaled>Choisir niveau</option>')
            $("#niveau").append('<option value="première">Première année</option>')
            $("#niveau").append('<option value="deuxième">Deuxième année</option>')
        }

        // Get sections 


    });

</script>
@endsection
