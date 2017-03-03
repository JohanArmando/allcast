@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a data-toggle-tool="tooltip" data-placement="top" title="Show your streams" class="btn btn-success" href="/user">
                        <i class="glyphicon glyphicon-circle-arrow-right"></i> <span class="shrink">My Streams</span>
                    </a>
                    -
                    <a data-toggle-tool="tooltip" data-placement="top" title="Update your settings" class="btn btn-default" href="/settings">
                        <i class="glyphicon glyphicon-cog"></i> <span class="shrink">Settings</span></a>
                    -
                    <a data-toggle-tool="tooltip" data-placement="top" title="Log out of your account" class="btn btn-default" href="/logout">
                        <i class="glyphicon glyphicon-log-out"></i> <span class="shrink">Logout</span></a>
                    <a data-toggle-tool="tooltip" data-placement="top" title="Create a new stream" class="btn btn-primary pull-right" href="/broadcast">
                        <i class="glyphicon glyphicon-facetime-video"></i> <span class="shrink">New stream</span></a>
                </div>
            </div>
        </div>
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

                        <tbody><tr>
                            <th scope="row" class="item-title">1909</th>
                            <td class="item-title"><a href="/edit/1909"><i class="glyphicon glyphicon-pencil"></i></a></td>
                            <td class="item-title"><a href="/play/1909">mi canal</a></td>
                            <td></td>
                            <td>vNWh8rKKYKKg</td>
                            <td class="item-title"></td>
                        </tr>
                        </tbody></table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
