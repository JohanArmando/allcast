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
            <br>
                <label for="title" class="col-sm-3 control-label">Stream title</label>
                <input type="text" class="form-control" name="title" value="{{$stream->title}}" required=""><br>
                <label for="fms" class="col-sm-3 control-label">Pubish server</label>
                <input type="text" readonly="" class="form-control" onclick="this.focus();this.select();" id="fms" value="{{$stream->information->server}}"><br>
                <label for="sf" class="col-sm-3 control-label">Stream key</label>
                <input type="text" readonly="" class="form-control" onclick="this.focus();this.select();" id="sf" value="{{$stream->information->key}}"><br>
                <label for="sf" class="col-sm-3 control-label">Embed code</label>
                <textarea rows="4" style="width: 100%" id="embed_code" readonly="" class="form-control"><script type='text/javascript'>id='{{$stream->id}}'; width='640'; height='360';</script><script type='text/javascript' src='{{url('/player/')}}'></script></textarea>
                <a href="{{url('/player/home/'.$stream->title)}}"> <input type="submit" value="Go To Stream" style="width:100%;"></a>
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
@endsection
