@extends('admin.layouts.default')

@section('page-title')
    <h1>Dashboard</h1>
@endsection

@section('page-info')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <!-- Widget: user widget style 2 -->
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{ asset('/assets/images/user-profile-150x150.png') }}" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">{{ auth()->user()->name }}</h3>
                        <h5 class="widget-user-desc">{{ auth()->user()->email }}</h5>
                    </div>

                </div>
                <!-- /.widget-user -->
            </div>
            <!-- /.col -->
            <div class="col-md-8">
                <div class="card card-primary">
                    {{--<div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>--}}
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ url('admin/change-password') }}">
                        @csrf
                        <div class="card-body">
                            @if(Session::has('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputPassword1">Current Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">New Password</label>
                                <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" placeholder="New Password">
                                @error('new_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm New Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm New Password">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

