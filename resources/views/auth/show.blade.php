@extends('layouts.home')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
@section('content')
    <div class="headerLogo">
        <center>
            <a href="/">
                <img class="img-responsive logo-index" src="{{asset('template/images/logo_all_cast.png')}}" alt="" >
            </a>
        </center>
    </div>

    <div class="clear"></div>

    <div class="w3layouts">
        <div class="signin-agile" style="width: 90%; !important;height: auto !important;">
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
                    <textarea rows="4" class="form-control" name="description" style="width: 100%">{{$stream->description}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="domains" class="col-sm-3 control-label">Domain protection</label>
                <div class="col-sm-9">
                    <textarea rows="4" class="form-control"  name="domain" style="width: 100%">{{$stream->domain}}</textarea>
                </div>
            </div>

            <br>
            <div class="form-group">
                <label for="fms" class="col-sm-3 control-label">Pubish server</label>
                <div class="col-sm-9">
                    <input type="text" readonly="" class="form-control" onclick="this.focus();this.select();" id="fms"
                           value="{{$stream->information->server}}">
                </div>
            </div>
            <div class="form-group">
                <label for="sf" class="col-sm-3 control-label">Stream key</label>
                <div class="col-sm-9">
                    <input type="text" readonly="" class="form-control" onclick="this.focus();this.select();" id="sf"
                           value="{{$stream->information->key}}">
                </div>
            </div>
            <div class="form-group">
                <label for="sf" class="col-sm-3 control-label">Embed code</label>
                <div class="col-sm-9">
                    <textarea rows="4" style="width: 100%" id="embed_code" readonly="" class="form-control" onclick="this.focus();this.select();"><script type='text/javascript'>id='{{$stream->id}}'; width='640'; height='360';</script><script type='text/javascript' src='{{url('/player/')}}'></script></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="footer-w3l">
        <p class="agileinfo"> &copy; 2017 AllCast . All Rights Reserved | Design by
            <a href="#">Maxcorp Inc.</a></p>
    </div>
    <div class="pop-up">
        <div id="small-dialog" class="mfp-hide book-form">

        </div>
    </div>