<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Allcast, tu creador de canales onlien a bajo precio" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>AllCast</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('template/css/popup-box.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="{{asset('template/favicon/favicon_ac.png')}}" />
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script type="text/javascript" src="{{asset('template/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('template/js/jquery.magnific-popup.js')}}"></script>
        <script type="text/javascript" src="{{asset('template/js/modernizr.custom.53451.js')}}"></script>
        <script type="text/javascript" src="{{asset('template/js/popup.js')}}"></script>
    </head>
    <body>
    @yield('content')


    </body>
</html>