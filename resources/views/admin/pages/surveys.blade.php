@extends('admin.layouts.default')

@section('page-head-title')
    RideHailing | Surveys
@endsection
{{--@dd($questions)--}}
@section('page-styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/css/daterangepicker.css') }}">
@endsection

@section('page-title')
    <h1>Surveys</h1>
@endsection

@section('page-info')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Surveys</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{--<div class="card-header">
                                                <h3 class="card-title">Responsive Hover Table</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 190px;">
                                <input type="text" class="form-control float-right" name="datetimes" value="" />
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-filter"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>Survey</th>
                                <th>Question</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($questions as $question)
                                    <tr>
                                        <td>{{ $question->survey->title }}</td>
                                        <td><a href="{{ url('/admin/survey-stats/') . "/" .$question->id }}"> {{ $question->question['question'] }} </a></td>
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
