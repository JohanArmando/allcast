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
        <div class="signin-agile">
            <h2>Login</h2>
            @if ($errors->has('email'))
                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
            @endif
            @if ($errors->has('password'))
                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
            @endif
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" class="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" class="password" placeholder="Password" required>
                </div>
                    <ul>
                        <li>
                            <input type="checkbox" id="brand1"  name="remember" {{ old('remember') ? 'checked' : ''}}>
                            <label for="brand1"><span></span>Remember me</label>
                        </li>
                    </ul>
                    <a href="#">Forgot Password?</a><br>
                    <div class="clear"></div>
                    <input type="submit" value="Login" style="width:100%;">
                    <div class="clear"></div>
                    <br>
                    <h3>
                        <a href="#small-dialog" class="book popup-with-zoom-anim buttom-isi zoomIn" data-wow-delay=".5s">
                            <strong>If you do not have an account</strong>
                        </a>
                    </h3>
            </form>
        </div>
        <div class="signup-agileinfo">
            @include('auth.stream')
            <!--<div class="more">
                <a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>
            </div>-->
        </div>
        <div class="clear"></div>

    </div>
    <div class="clear"></div>
    <div class="footer-w3l">
        <p class="agileinfo"> &copy; 2017 AllCast . All Rights Reserved | Design by
            <a href="#">Maxcorp Inc.</a></p>
    </div>
    <div class="pop-up">
        <div id="small-dialog" class="mfp-hide book-form">
            <h3>Sign Up with new user </h3>
            @if ($errors->has('name'))
                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
            @endif
            @if ($errors->has('email'))
                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
            @endif
            @if ($errors->has('password'))
                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" required/>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="text" name="email" value="{{ old('email') }}" class="email" placeholder="Email" required/>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" class="password" placeholder="Password" required/>
                </div>
                <input type="password" id="password-confirm" name="password_confirmation" class="password" placeholder="Confirm Password" required/>
                <input type="submit" value="Sign Up">
            </form>
        </div>
    </div>
@endsection

