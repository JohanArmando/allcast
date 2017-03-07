@extends('layouts.dashboard')
@section('title')
    Show Stream
@endsection
@section('content')
<div class="wrapper container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
        <div class="row">
            <div class="panel panel-default">
                <div class="embed-responsive embed-responsive-4by3"> 
                    <script type='text/javascript'>id='{{$stream->id}}'; width='840'; height='600';</script><script type='text/javascript' src='{{Request::root()}}/js/Player.js'></script><div id="PlayAllCast"></div>
                </div>
                <div class="panel-footer clearfix">
                    <div class="pull-left">

                        <a data-toggle-tool="tooltip" data-placement="top" title="Edit this channel" href="#" class="btn btn-success">
                            <i class="fa fa-edit"></i> <span class="shrink">Customize</span>
                        </a>
                        <a  class="btn btn-default"
                           href="#" data-toggle="modal" data-target="#myStream">
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
    </div>
</div>
<div id="myStream" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Embed code</h4>
      </div>
      <div class="modal-body">
        <p>
            <textarea id="StreamEmbed" class="form-control" onclick="this.focus();this.select();"><script type='text/javascript'>id='{{$stream->id}}'; width='840'; height='600';</script><script type='text/javascript' src='{{Request::root()}}/js/Player.js'></script><div id="PlayAllCast"></div>
            </textarea>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection