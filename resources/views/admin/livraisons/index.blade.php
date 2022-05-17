@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
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
            <div class="content">
                <div class="container-fluid">
                @include('admin.includes.error-message')

                    <div class="row">
                        <div class="col-12">
                            
                            <!-- /.card -->

                            <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h3 class="m-0">Liste des demandes</h3>
                                    @if(Auth::user()->role == "fournisseur")
                                    <a href="{{ url('fournisseur/demandes/create') }}" class="add_button">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    @endif
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>
                                                            Article
                                                        </th>
                                                        <th>
                                                            Fournisseur
                                                        </th>
                                                        <th>
                                                            Destination
                                                        </th>
                                                        <th>
                                                            Date
                                                        </th>
                                                        <th>
                                                            Nom client
                                                        </th>
                                                        <th>
                                                            Numéro client
                                                        </th>
                                                        <th>
                                                            Document
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>

                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    @foreach($demandes as $demande)
                                                        <tr>
                                                            <td>{{ $demande->id }}</td>
                                                            <td>{{ $demande->article }}</td>
                                                            <td>
                                                                {{ $demande->user->nom }}
                                                                {{ $demande->user->prenom }}
                                                            </td>
                                                            <td>{{ $demande->destination }}</td>
                                                            <td>{{ $demande->date }}</td>
                                                            <td>{{ $demande->nom_client }}</td>
                                                            <td>{{ $demande->num_client }}</td>
                                                            <td>
                                                                <a href="{{ url('downloads/'.$demande->id) }}">
                                                                    Uploads
                                                                </a>
                                                                
                                                            </td>
                                                            <td>
                                                            @if(Auth::user()->role == "fournisseur")

                                                                <div class="d-flex justify-content-around">
                                                                    
                                                                    <button type="submit" class="btn-delete delete-confirm" data-model="produit" data-url="{{ route('fournisseur.demandes.destroy', ['demande' => $demande]) }}" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    <a href="{{ route('fournisseur.demandes.edit', ['demande' => $demande]) }}" data-model="produit" class="edit-confirm">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                    <a href="{{ route('fournisseur.demandes.show', ['demande' => $demande]) }}" data-model="produit" class="show-btn">
                                                                        <i class="fa fa-info"></i>
                                                                    </a>
                                                                </div>
                                                                @else 
                                                                    <a href="{{ route('admin.livreur.affect', ['demande' => $demande]) }}" style="width: 104px;height: 44px;" data-model="produit" class="show-btn">
                                                                        Lancer mission
                                                                    </a> 
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                               
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    
@endsection
