@extends('admin.layouts.auth')

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Enter new password</p>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form action="{{ route('admin.password.update') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="New Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm New Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ Request::get('email') }}">

            <div class="row">
                <div class="col-8">
                    {{--<div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>--}}
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            <a href="{{ url('admin/login') }}">Login</a>
        </p>
    </div>
@endsection
