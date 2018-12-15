@extends('auth.sign-layout.master') 
@section('title', '登入') 
@section('content')
@include('components.validationErrorMessage')
<form action="/user/auth/sign-in" method="POST">
    <div class="form-group">
        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="required">
            <label for="inputEmail">Email</label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
            <label for="inputPassword">Password</label>
        </div>
    </div>
    {{-- <div class="form-group">
        <div class="checkbox">
            <label>
            <input type="checkbox" value="remember-me">
                Remember Password
            </label>
        </div>
    </div> --}}
    {!! csrf_field() !!}
    <button type="submit" class="btn btn-primary btn-block">登入</button>
</form>
{{-- <div class="text-center">
    <a class="d-block small mt-3" href="register.html">Register an Account</a>
    <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
</div> --}}
@endsection
