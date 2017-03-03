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
                            <th class="item-title"></th>
                            <th class="item-title">Title</th>
                            <th>Domain(s)</th>
                            <th>Stream key</th>
                            <th class="item-title">Views</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($streams as $stream)
                                <th scope="row" class="item-title">{{$stream->id}}</th>
                                <td class="item-title"><a href="/edit/1909"><i class="glyphicon glyphicon-pencil"></i></a></td>
                                <td class="item-title"><a href="/play/1909">{{$stream->title}}</a></td>
                                <td>{{$stream->domain}}</td>
                                <td>vNWh8rKKYKKg</td>
                                <td class="item-title"></td>
                            @endforeach
                        </tr>
                        </tbody></table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
