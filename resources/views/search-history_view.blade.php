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
            <div class="col-xl-12">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-10">


                        <h1 class="page-header">
                            Search History Details <small>Manage site users.</small>
                        </h1>

                        <hr class="mb-4" />

                        <!-- BEGIN #datatable -->
                        <div id="datatable" class="mb-5">

                            <div class="card">
                                <div class="card-body">
                                <div class="container">
                                <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th><h6>CONTENTS</h6></th>
                                    <th><h6>RECORDS</h6></th>
                                </tr>
                                </thead>

    <tbody>
      <tr>
        <td><h6>FINANCE TYPE</h6></td>
        <td><h6>:  {{$Username->finance_type}}</h6></td>
      </tr>
      <tr>
        <td><h6>PROPERTY TYPE</h6></td>
        <td><h6>:  {{$Username->property_type}}</h6></td>
      </tr>
      <tr>
        <td><h6>BORROWER TYPE</h6></td>
        <td><h6>:  {{$Username->borrower_type}}</h6></td>
      </tr>
      <tr>
        <td><h6>BORROWER COUNTRY</h6></td>
        <td><h6>:  {{$Username->borrower_country}}</h6></td>
      </tr>
      <tr>
        <td><h6>PROJECT STREET</h6></td>
        <td><h6>:  {{$Username->project_street}}</h6></td>
      </tr>
    </tbody>
  </table>

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
