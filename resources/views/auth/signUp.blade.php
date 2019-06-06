@extends('auth.sign-layout.master')
@section('title', '註冊')
@section('content')
@include('components.validationErrorMessage')
<form action="/user/auth/sign-up" method="POST">
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-label-group">
                    <input type="text" id="Nickname" class="form-control" placeholder="name" required="required"
                        autofocus="autofocus" name="Nickname" value="{{ old('Nickname') }}">
                    <label for="Nickname">Nickname</label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" name="email" value="{{ old('email') }}">
            <label for="inputEmail">Email address</label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password" value="{{ old('password') }}">
                    <label for="inputPassword">Password</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password"
                required="required" name="password_confirmation" value="{{ old('password_confirmation') }}">
                    <label for="confirmPassword">Confirm password</label>
                </div>
            </div>
        </div>
    </div>
    {!! csrf_field() !!}
    <button type="submit" class="btn btn-primary btn-block">註冊</button>
</form>
@endsection
