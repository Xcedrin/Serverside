@extends('admin.layouts.auth')

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Enter your email to receive a password reset link</p>

{{--        @if(isset($status))--}}
{{--        {{ $data }}--}}
{{--        @endif--}}
        <form action="{{ route('admin.password.email') }}" method="post" id="forgot-form">
            @csrf
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-6">
                </div>
                <!-- /.col -->
                <div class="col-6">
                    <button type="submit" class="btn btn-primary btn-block submit-btn">Send Email</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            <a href="{{ route('login') }}">Login</a>
        </p>
    </div>

@endsection

@section('page-script')
    <script>
        $(".submit-btn").on('click', function () {

            $(this)
                .attr('disabled', 'disabled')
                .html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...');
            $("#forgot-form").submit();
        })
    </script>
@endsection
