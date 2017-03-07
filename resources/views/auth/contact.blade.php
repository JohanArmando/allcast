@extends('layouts.home')

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
        <div class="signin-agile" style="width: 90%; !important;">

            <form role="form" method="POST" action="{{ url('/message') }}">
                {{ csrf_field() }}
                <div>
                    <input type="text" name="name" class="name" placeholder="Name User"  required>
                    <input type="text" name="subject" class="name" placeholder="Subject" required>
                    <input type="email" name="email" class="name" placeholder="Email" required>
                    <input type="text" name="message" class="name" placeholder="Message" required>
                </div>
                <input type="submit" value="Send Message" style="width:100%;">
            </form>
        </div>
    </div>

    <div class="clear"></div>
    <div class="footer-w3l">
        <p class="agileinfo"> &copy; 2017 AllCast . All Rights Reserved | Design by
            <a href="http://allcast.pw">Allcast Inc.</a></p>
    </div>
@endsection

