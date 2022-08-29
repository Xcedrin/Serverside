@extends('admin.layouts.default')

@section('page-head-title')
    RideHailing | Dashboard
@endsection

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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-cyan">
                        <h3 class="card-title">User Stats</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Last Login</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($user_stats as $user_stat)
                                        <tr>
                                            <td>{{ $user_stat->name }}</td>
                                            <td>{{ $user_stat->email }}</td>
                                            <td>{{ $user_stat->location }}</td>
                                            <td>{{ \Carbon\Carbon::parse($user_stat->created_at)->format('d-m-Y h:i A') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-gradient-green">
                        <h3 class="card-title">Video Playing Stats</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>Video</th>
                                <th>User</th>
                                <th>Views</th>
                                <th>Date/Time</th>
{{--                                <th></th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ad_view_stats as $stat)
                                <tr>
                                    <td>{{ $stat->ad_id }}</td>
                                    <td>{{ optional($stat->user)['email'] }}</td>
                                    <td>{{ $stat->count }}</td>
                                    <td>{{ \Carbon\Carbon::parse($stat->created_at)->format('d-m-Y h:i A') }}.</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-lightblue">
                        <h3 class="card-title">Survey Responses</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>Survey</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Date/Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($survey_filled_stats as $response)
                                <tr>
                                    <td>{{ optional($response->survey)['title'] }}</td>
                                    <td>{{ optional($response->user)['email'] }}</td>
                                    <td>{{ optional($response->question)['question']['question'] }}</td>
                                    <td>{{ $response->option }}</td>
                                    <td>{{ \Carbon\Carbon::parse($response->created_at)->format('d-m-Y h:i A') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
