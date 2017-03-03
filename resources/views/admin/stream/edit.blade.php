@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-cog blue"></i> Stream settings</h4>
            </div>

            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#customize" aria-controls="customize" role="tab" data-toggle="tab">Customize stream</a></li>
                    <li role="presentation"><a href="#strInfo" aria-controls="strInfo" role="tab" data-toggle="tab">Stream information</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="customize">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="post" action="{{url('/stream/'.$stream->id)}}">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <br>
                                    <div class="form-group">
                                        <label for="title" class="col-sm-3 control-label">Stream title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="title" value="{{$stream->title}}" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc" class="col-sm-3 control-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea rows="4" class="form-control" name="description">{{$stream->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="embedding" class="col-sm-3 control-label">Embedding</label>
                                        <div class="col-sm-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="embedding" value="enabled" checked> Enabled
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="embedding" value="disabled"> Disabled
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="domains" class="col-sm-3 control-label">Domain protection</label>
                                        <div class="col-sm-9">
                                            <textarea rows="4" class="form-control"  name="domain">{{$stream->domain}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <button type="submit" class="btn btn-success">
                                                <i class="fa fa-check"></i> Save changes
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="strInfo">
                        <div class="form-horizontal">
                            <br>
                            <div class="form-group">
                                <label for="fms" class="col-sm-3 control-label">Pubish server</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="" class="form-control" onclick="this.focus();this.select();" id="fms" value="rtmp://cnd.bcast.pw:1935/stream">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sf" class="col-sm-3 control-label">Stream key</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="" class="form-control" onclick="this.focus();this.select();" id="sf" value="vNWh8rKKYKKg?acc=madmax&amp;pass=<yourpass>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sf" class="col-sm-3 control-label">Embed code</label>
                                <div class="col-sm-9">
                                    <textarea rows="4" id="embed_code" readonly="" class="form-control" onclick="this.focus();this.select();">&lt;script type='text/javascript'&gt;id='1909'; width='640'; height='360';&lt;/script&gt;&lt;script type='text/javascript' src='http://www.bcast.site/static/player.js'&gt;&lt;/script&gt;</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Embed size:</label>
                                <div class="col-sm-9 btn-group">
                                    <button id="one" class="embd btn btn-default">640x360</button>
                                    <button id="two" class="embd btn btn-default">640x480</button>
                                    <button id="three" class="embd btn btn-default">720x480</button>
                                    <button id="four" class="embd btn btn-default">1280x720</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <form class="pull-left" action="{{url('stream/'.$stream->id)}}" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete stream </button>
                                    </form>
                                    <span>&nbsp;</span>
                                    <a href="{{url('stream/'.$stream->id)}}" class="btn btn-default">
                                        <i class="fa fa-window-maximize"></i> Go to stream
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection