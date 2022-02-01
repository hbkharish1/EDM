@extends('layout.default')

@section('title', 'Site Settings')

@push('scripts')
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
            <div class="col-xl-10">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-9">


                        <!-- BEGIN #general -->
                        <div id="general" class="mb-5">
                            <div class="clearfix">
                                <div class="float-start">
                                    <h4><i class="far fa-user fa-fw"></i> General</h4>
                                    <p>View and update your general account information and settings.</p>
                                </div>
                                <div class="float-end">
                                    <a href="#general-edit" data-bs-toggle="modal"
                                        class="btn btn-default width-100">Edit</a>
                                </div>

                            </div>


                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Name</div>
                                            <div class="text-gray-700">{{$user->firstname}}{{$user->lastname}}</div>
                                        </div>

                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Username</div>
                                            <div class="text-gray-700">support@edmedm-advisors.de</div>
                                        </div>

                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Phone</div>
                                            <div class="text-gray-700">{{$user->phone_number}}</div>
                                        </div>

                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Email address</div>
                                            <div class="text-gray-700">{{$user->email}}</div>
                                        </div>

                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Password</div>
                                        </div>
                                        <div>
                                            <a href="#passwordEdit" data-bs-toggle="modal"
                                                class="btn btn-default width-200">Change Password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END #general -->


                        <!-- BEGIN #languages -->
                        <div id="languages" class="mb-5">
                            <h4><i class="fa fa-language fa-fw"></i> Languages</h4>
                            <p>Language font support and default language</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Language enabled</div>
                                            <div class="text-gray-700">
                                                English (default), Germany
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#languageEdit" data-bs-toggle="modal"
                                                class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Default Language</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                <i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Germany
                                            </div>
                                        </div>

                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Translation Management</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                Use translation manager to translate the language strings
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-default width-100">Use
                                                Tool</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END #languages -->



                        <!-- BEGIN #resetSettings -->
                        <div id="backupsettings" class="mb-5">
                            <h4><i class="fa fa-redo fa-fw"></i> Backup</h4>
                            <p>Take a full database backup</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <div class="flex-fill">
                                            <div>Database Backup</div>
                                            <div class="text-gray-700">
                                                This action will download a full website database backup as .sql format.
                                                You can import the backup if something went wrong with your site.
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mt-4">
                                            <a href="{{route('our_backup_database')}}" class="btn btn-success"><i
                                                    class="fas fa-lg fa-fw me-2 fa-download"></i> Backup</a>
                                            <a href="#restore-backup" class="btn btn-dark" data-bs-toggle="modal"><i
                                                    class="fas fa-lg fa-fw me-2 fa-upload"></i> Restore Database</a>

                                        </div>


                                    </div>


                                </div>


                            </div>
                        </div>
                        <!-- END #resetSettings -->


                        <!-- BEGIN #system -->
                        <div id="systeminfo" class="mb-5">
                            <h4><i class="far fa-hdd fa-fw"></i> System</h4>
                            <p>Web server information, Website information</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Total Users</div>
                                            <div class="text-gray-700">
                                                124 Users registered on your site
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-bs-toggle="modal"
                                                class="btn btn-default width-200">Manage Users</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Last Backup Taken</div>
                                            <div class="text-gray-700">
                                                <i class="fas fa-lg fa-fw  fa-info-circle"></i> 23 Days Ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Database</div>
                                            <div class="text-gray-700">
                                                MySQL version 8.0.19
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-bs-toggle="modal"
                                                class="btn btn-default width-100 disabled">Update</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Platform</div>
                                            <div class="text-gray-700">
                                                <?php
                                                    echo 'Current PHP version : ' . phpversion();
                                                    // prints e.g. '2.0' or nothing if the extension isn't enabled
                                                    echo phpversion('tidy')."\n";
                                                    ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END #system -->
                    </div>
                    <!-- END col-9-->
                    <!-- BEGIN col-3 -->
                    <div class="col-xl-3">
                        <!-- BEGIN #sidebar-bootstrap -->
                        <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                            <nav class="nav">
                                <a class="nav-link" href="#general" data-bs-toggle="scroll-to">General</a>

                                <a class="nav-link" href="#languages" data-bs-toggle="scroll-to">Languages</a>

                                <a class="nav-link" href="#backupsettings" data-bs-toggle="scroll-to">Backup
                                    settings</a>

                                <a class="nav-link" href="#systeminfo" data-bs-toggle="scroll-to">System
                                    Info</a>
                            </nav>
                        </nav>
                        <!-- END #sidebar-bootstrap -->
                    </div>
                    <!-- END col-3 -->
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

<!-- BEGIN #modalEdit -->


<div class="modal fade" id="general-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">General Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('savechanges') }}" method="post" enctype="multipart/form-data" >
            @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <div class="row row-space-10">
                        <div class="col-4">
                            <input class="form-control" name ="firstname" placeholder="First" value="{{$user->firstname}}" />
                        </div>
                        <div class="col-4">
                            <input class="form-control" name =" " placeholder="Middle" value="" />
                        </div>
                        <div class="col-4">
                            <input class="form-control" name ="lastname" placeholder="Last" value="{{$user->lastname}}" />
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">User Name</label><small> Can not be changed</small>
                    <div class="row row-space-10">
                        <div class="col-12">
                            <input class="form-control" placeholder="First" value="admin@email.com" / readonly>
                        </div>

                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone </label> <small>not visible for public</small>
                    <div class="row row-space-10">
                        <div class="col-12">
                            <input class="form-control" name ="phone_number" placeholder="First" value="{{$user->phone_number}}" />
                        </div>

                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email </label> <small>this is your username</small>
                    <div class="row row-space-10">
                        <div class="col-12">
                            <input class="form-control" name ="email" placeholder="First" value="{{$user->email}}" />
                        </div>

                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Change profile-image  </label> <small>choose only image formats</small>
                    <div class="row row-space-10">
                        <div class="col-12">
                        <input class="form-control" type="file" id="formFile" name="image" value="{{$user->profile_photo_path}}" />
                        </div>
                    </div>
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save changes"></button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Restore backup modal start -->
<div class="modal fade" id="restore-backup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Restore Database Backup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form  action="{{ route('restore') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Select database <small>(Must be .sql
                            format)</small></label>
                    <input class="form-control" type="file" id="formFile" name="import">
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Upload">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Restore backup modal end -->


<!-- Language Edit modal start -->
<div class="modal fade" id="languageEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">language Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <p>Select language</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
                        <label class="form-check-label fw-bold" for="inlineCheckbox1">English</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
                        <label class="form-check-label fw-bold" for="inlineCheckbox2">Germany</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Select Default Language</label>
                    <select class="form-select" aria-label="Default select example">

                        <option value="English">English</option>
                        <option value="Germany">Germany</option>

                    </select>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>
<!--Language Edit modal end -->


<!-- Language Edit modal start -->
<div class="modal fade" id="passwordEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <form  method="POST" action="{{ route('updatepassword') }}" enctype="multipart/form-data" >
               @csrf 
                <div class="mb-3">
                    <label class="form-label">Password </label>
                    <div class="row row-space-10">
                        <div class="col-12">
                            <input type="password" name="newpassword" class="form-control" placeholder="Enter new password" />
                        </div>

                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password </label>
                    <div class="row row-space-10">
                        <div class="col-12">
                            <input type="password" name="confirmpassword"  class="form-control" placeholder="Confirm password" />
                        </div>

                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--Language Edit modal end -->

<!-- END #modalEdit -->
@endsection