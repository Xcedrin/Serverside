@extends('admin.layouts.default')

@section('page-title')
    <h1>Survey Responses</h1>
@endsection

@section('page-info')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Survery Responses</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
{{--                        <h3 class="card-title">Responsive Hover Table</h3>--}}

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
{{--                                <th></th>--}}
                                <th>Survey</th>
                                <th>User</th>
                                <th>Question</th>
                                <th>Option</th>
                                <th>Date/Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($survey_responses as $response)
                                <tr>
                                    <td>{{ optional($response->survey)['title'] }}</td>
                                    <td>{{ optional($response->user)['email'] }}</td>
                                    <td>{{ optional($response->question)['question']['question'] }}</td>
                                    <td>{{ $response->option }}</td>
                                    <td>{{ \Carbon\Carbon::parse($response->created_at)->format('d-m-Y h:i A') }}</td>
{{--                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>--}}
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
