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
                            <h1 class="m-0">Page d'accueil</h1>
                        </div><!-- /.col -->
                       
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    @if(Auth::user()->isAdmin())
                        @include('admin.includes.statistique')
                    @else 
                        @include('admin.includes.statistiqueFournisseur')
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
