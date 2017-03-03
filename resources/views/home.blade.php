@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left">
                        <h4><i class="glyphicon glyphicon-facetime-video blue"></i> My Streams</h4>
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
                                <th scope="row" class="item-title">{{$stream->id}}</th>
                                <td class="item-title"><a href="{{url('stream/'.$stream->id)}}">{{$stream->title}}</a></td>
                                <td>{{$stream->domain}}</td>
                                <td></td>
                                <td class="item-title"></td>
                                <td class="item-title">
                                    <a href="{{url('stream/'.$stream->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
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
