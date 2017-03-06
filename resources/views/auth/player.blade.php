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
            <h2>{{$name}}</h2>
            <center>
                <script src="//content.jwplatform.com/players/MEDIAID-PLAYERID.js"> </script>
                <br>
                <textarea rows="4" style="width: 100%" id="embed_code" readonly="" class="form-control"><script type='text/javascript'>id='1'; width='640'; height='360';</script><script type='text/javascript' src='{{url('/player/')}}'></script></textarea>
            </center>
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