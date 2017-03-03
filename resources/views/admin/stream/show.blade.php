@extends('layouts.dashboard')

@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" scrolling="no" height="250px" width="300px" frameborder="0" allowtransparency="true"
                        src="http://www.bcast.site/stream.php?id=1909"></iframe>
            </div>
            <div class="panel-footer clearfix">
                <div class="pull-left">

                    <a data-toggle-tool="tooltip" data-placement="top" title="Edit this channel" href="#" class="btn btn-success">
                        <i class="glyphicon glyphicon-edit"></i> <span class="shrink">Customize</span>
                    </a>
                    <a data-toggle-tool="tooltip" data-placement="top" title="Get the embed code" class="btn btn-default"
                       href="#" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-code"></i> <span class="shrink">Embed code</span>
                    </a>
                </div>
                <div class="pull-right">
                    <a data-toggle-tool="tooltip" data-placement="top" title="Report this stream" href="#"
                       data-toggle="modal" data-target="#myModal" class="btn btn-danger">
                        <i class="fa fa-exclamation-circle"></i> <span class="shrink">Report stream</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection