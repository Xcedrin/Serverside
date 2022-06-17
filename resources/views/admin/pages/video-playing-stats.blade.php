@extends('admin.layouts.default')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/css/daterangepicker.css') }}">
@endsection

@section('page-title')
    <h1>Video Playing Stats</h1>
@endsection

@section('page-info')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Video Playing Stats</li>
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
                            <div class="input-group input-group-sm" style="width: 190px;">
                                <input type="text" class="form-control float-right" name="datetimes" value="" />
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-filter"></i>
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
                                <th>Video</th>
                                <th>User</th>
                                <th>Views</th>
                                {{--<th>Option</th>--}}
                                <th>Date/Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($video_playing_stats as $response)
                                <tr>
                                    <td><a href="{{ asset('/assets') }}/{{ $response->ad_id }}.mp4" target="_blank">{{ $response->ad_id }}</a></td>
                                    <td>{{ optional($response->user)['email'] }}</td>
                                    <td>{{ $response->count }}</td>
{{--                                    <td>{{ $response->option }}</td>--}}
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

@section('page-script')
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/js/daterangepicker.min.js') }}"></script>
    <script type="text/javascript">
        $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            /*locale: {
                format: 'M/DD hh:mm A'
            }*/
        }, function (start, end) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            location.href = "{{ url('/admin/video-stats') }}" + "/" + start.format('YYYY-MM-DD') + "/" + end.format('YYYY-MM-DD');
        });
    </script>
@endsection
