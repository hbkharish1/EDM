@extends('layout.empty')

@section('title', 'Login')

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
        @if (session('loginError'))
    <div class="alert alert-danger">
        {{ session('loginError') }}
    </div>
    @endif
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
        <form action="{{url('/loginweb')}}" method="post" name="login_form">
        @csrf
            <h1 class="text-center">Sign In</h1>
            <div class="text-muted text-center mb-4">
                For your protection, please verify your identity.
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="text" class="form-control form-control-lg fs-15px" value="" name="email"
                    placeholder="username@address.com" />
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="form-label">Password</label>
                    <a href="{{url('/forget_password')}}" class="ms-auto text-muted">Forgot password?</a>
                </div>
                <input type="password" class="form-control form-control-lg fs-15px" value="" name="password"
                    placeholder="Enter your password" />
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="customCheck1" />
                    <label class="form-check-label fw-500" for="customCheck1">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg d-block w-100 fw-500 mb-3">Sign In</button>

        </form>
    </div>
    <!-- END login-content -->
</div>
<!-- END login -->
@endsection
