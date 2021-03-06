@extends('layouts.dashboard')
@section('title')
    Home
@endsection
@section('content')
    <div class="wrapper container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <div class="pull-left">
                            <h4><i class="fa fa-play-circle blue"></i> My Streams</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="item-title">#</th>
                                <th class="item-title">Title</th>
                                <th>Domain(s)</th>
                                <th>Stream key</th>
                                <th class="item-title">Views</th>
                                <th class="item-title" colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($streams as $stream)
                                <tr>
                                    <th>{{$stream->id}}</th>
                                    <td><a href="{{url('stream/'.$stream->id)}}">{{ucfirst($stream->title)}}</a></td>
                                    <td>{{$stream->domain}}</td>
                                    <td>{{$stream->information->key}}</td>
                                    <td></td>
                                    <td>
                                        <a href="{{url('stream/'.$stream->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="{{url('stream/'.$stream->id.'')}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Watch Now</a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
</div>
@endsection
