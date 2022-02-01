@extends('layout.default')

@section('title', 'Mezzanine Financing')

@push('css')
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
    rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
    rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="{{env('APP_URL')}}/assets/plugins/highlight.js/highlight.min.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/highlightjs.demo.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/table-plugins.demo.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/sidebar-scrollspy.demo.js"></script>
@endpush

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <!-- BEGIN container -->
    <div class="container">
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <!-- BEGIN row -->
        <div class="row justify-content-center">
            <!-- BEGIN col-10 -->
            <div class="col-xl-10">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-12">
                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto p-2 bd-highlight">
                                <h1 class="page-header">
                                    Mezzanine Financing
                                </h1>
                            </div>

                            <div class="p-2 bd-highlight">
                                <a class="btn btn-primary" href="{{url('banks/new_mezzanine_financing')}}"
                                    role="button">Add
                                    New Entry</a>

                            </div>
                        </div>

                        {{-- <div class="row">
                            <form class="cmxform" id="importExcel" action="{{ route('uploadMezzExcel') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="custom-file col-md-6 my-2">
                                    <input type="file" class="custom-file-input" id="file1" name="file1">
                                    <label class="custom-file-label" for="file1">Choose Excel File to import</label>
                                    <button type="submit" class="ml-3 btn btn-primary">Submit</button>
                                </div>
                            </form>

                            <a href = "{{route('downloadMezz')}}" class="btn btn-primary">Download Datatbase</a>
                        </div> --}}
                        <div class="row align-items-center justify-content-center">
                            <form class="cmxform col-12 col-md-9 m-0" id="importExcel" action="{{ route('uploadMezzExcel') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                               <div class="row align-items-center justify-content-center">
                                    <div class="col-12 col-md-8">
                                        <input class="my-2 form-control" type="file" id="file1" name="file1" placeholder="Select File to upload">
                                    </div>
                                    <button type="submit" class="my-2 btn btn-primary col-12 col-md-3 excel_btn">Upload Database</button>
                               </div>
                            </form>
                            <a href = "{{route('downloadMezz')}}" class="my-2 btn btn-primary col-12 col-md-4 excel_btn">Download Datatbase</a>
                        </div>
                        <hr class="mb-4" />

                        <!-- BEGIN #datatable -->
                        <div id="datatable" class="mb-5">

                            <div class="card">
                                <div class="card-body">
                                    <table id="datatableDefault" class="table text-nowrap w-100 table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name of the Bank</th>
                                                <th>Website of the Bank</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            @php $count = 1 @endphp
                                            @foreach($mezzanine as $mezzanine1)
                                                <td>{{ $count }} </td>
                                                <td>{{$mezzanine1->name}}</td>
                                                <td>{{$mezzanine1->website}}</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="{{ route('Mezz_',$mezzanine1->id)}}" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="{{ route('mezzanine_financinglist',$mezzanine1->id)}}" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php $count++ @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- END #datatable -->


                        <!-- END #bootstrapTable -->
                    </div>
                    <!-- END col-9-->

                </div>
                <!-- END row -->
            </div>
            <!-- END col-10 -->
        </div>
        <!-- END row -->
    </div>
    <!-- END container -->
</div>
<!-- END #content -->
@endsection
