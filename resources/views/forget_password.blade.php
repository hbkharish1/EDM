@extends('layout.empty')

@section('title', 'Forget Password')


@section('content')
<!-- BEGIN login -->
<div class="login">
    <!-- BEGIN login-content -->

    <div class="login-content">

        <div class="text-center mb-5">
            <a href="#" class="brand-logo">

                <img src="{{asset('/assets/img/Kopie-von-logo-edm_4.-Logo-No-Sub.png')}}" alt="" height="80" />
            </a>
        </div>
        <form action="#" method="GET" name="login_form">
            <h1 class="text-center">Forget Password</h1>
            <div class="text-muted text-center mb-4">
                Enter your email address to receive the password reset link
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="text" class="form-control form-control-lg fs-15px" value=""
                    placeholder="username@address.com" />
            </div>


            <button type="submit" class="btn btn-primary btn-lg d-block w-100 fw-500 mb-3">Send Reset Link</button>
            <div class="text-center">
                <a href="{{url('/')}}" class="ms-auto text-muted">Login to get access</a>
            </div>
        </form>
    </div>
    <!-- END login-content -->
</div>


<!-- END login -->
@endsection