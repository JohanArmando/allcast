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
            <h2>{{ucfirst($id)}}</h2>
            <center>
                <script type='text/javascript'>id='{{$id}}'; width='800'; height='600';</script><script type='text/javascript' src='{{Request::root()}}/js/Player.js'></script><div id="PlayAllCast"></div>
                <br>
                <h2>
                    Embed Code
                </h2>
                <textarea rows="4" style="width: 100%" id="embed_code" readonly="" class="form-control"><script type='text/javascript'>id='{{$id}}'; width='840'; height='600';</script><script type='text/javascript' src='{{Request::root()}}/js/Player.js'></script><div id="PlayAllCast"></div></textarea>
            </center>
        </div>
    </div>

    <div class="clear"></div>
    <div class="footer-w3l">
        <p class="agileinfo"> &copy; 2017 AllCast . All Rights Reserved | Design by
            <a href="http://allcast.pw">Allcast Inc.</a></p>
    </div>
    <div class="pop-up">
        <div id="small-dialog" class="mfp-hide book-form">

        </div>
    </div>
@endsection