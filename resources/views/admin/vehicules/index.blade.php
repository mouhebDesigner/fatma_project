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
                                             
                                                
                                    <h3 class="m-0">Liste des vehicules</h3>
                                    <a href="{{ url('admin/vehicules/create') }}">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
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
                                                            Marque
                                                        </th>
                                                        <th>
                                                            Model
                                                        </th>
                                                        <th>
                                                            Capacité
                                                        </th>
                                                        <th>
                                                            Matricule
                                                        </th>
                                                        
                                                        <th>
                                                            Action
                                                        </th>

                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    @foreach($vehicules as $vehicule)
                                                        <tr>
                                                            <td>{{ $vehicule->id }}</td>
                                                            <td>{{ $vehicule->marque }}</td>
                                                            <td>{{ $vehicule->model }}</td>
                                                            <td>{{ $vehicule->capacite }}</td>
                                                            <td>{{ $vehicule->matricule }}</td>
                                                            <td>
                                                                <div class="d-flex justify-content-around">
                                                                    
                                                                    <button type="submit" class="btn-delete delete-confirm" data-model="vehicule" data-url="{{ route('admin.vehicules.destroy', ['vehicule' => $vehicule]) }}" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    <a href="{{ url('admin/vehicules/'.$vehicule->id.'/edit') }}" data-model="vehicule" class="edit-confirm">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                 
                                                                   
                                                                </div>
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
