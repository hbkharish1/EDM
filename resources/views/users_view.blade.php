@extends('layout.default')

@section('title', 'Users Management')

@push('css')
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
    rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
    rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
        <!-- BEGIN row -->
        <div class="row justify-content-center">
            <!-- BEGIN col-10 -->
            <div class="col-xl-8">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-8">


                        <h1 class="page-header">
                            User Details <small>Manage site users.</small>
                        </h1>

                        <hr class="mb-4" />

                        <!-- BEGIN #datatable -->
                        <div id="datatable" class="mb-5">

                            <div class="card">
                                <div class="card-body">
                             
                                    <!--Grid column-->
    <div class="col-md-12 mb-2">
    
    <div class="list-group-flush">
        <div class="list-group-item">
          <p class="mb-0"><i class="fa fa-user fa-2x mr-4 blue p-3 white-text rounded " aria-hidden="true"></i>{{$Username->firstname}}{{$Username->lastname}}</p>
        </div>
        <div class="list-group-item">
          <p class="mb-0"> <i class="fa fa-envelope fa-2x mr-4 mr-4 red p-3 white-text rounded" aria-hidden="true"></i>{{$Username->email}}</p>
        </div>
        {{-- <div class="list-group-item">
          <p class="mb-0"><i class="fa fa-key fa-2x mr-4 mr-4 purple p-3 white-text rounded" aria-hidden="true"></i>{{$Username->password}}</p>
        </div> --}}
        <div class="list-group-flush">
        <div class="list-group-item">
          <p class="mb-0"><i class="fa fa-phone-square fa-2x mr-4 grey p-3 white-text rounded-circle " aria-hidden="true"></i>{{$Username->phone_number}}</p>
        </div>
        <div class="list-group-item">
          <p class="mb-0"> <i class="fa fa-globe fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>{{$Username->website}}</p>
        </div>
      </div>
      </div>

</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-6 mb-4">


</div>
<!--Grid column-->

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