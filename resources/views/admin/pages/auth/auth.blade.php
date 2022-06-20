@extends('admin.layouts.auth')

@section('page-head-title')
    RideHailing | Login
@endsection

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

{{--        @dd(Session::has('errors'))--}}
        @if(Session::has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        {{--@if(isset($status))
            <div class="alert alert-success">{{ $status }}</div>
        @endif--}}
        <form action="{{ route('admin.login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-8">
                    {{--<div class="icheck-primary">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                    <input type="checkbox" id="remember">--}}
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            <a href="{{ route('admin.password.request') }}">I forgot my password</a>
        </p>
    </div>
@endsection
