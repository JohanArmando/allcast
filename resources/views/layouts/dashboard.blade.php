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

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/calendar.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/app.v1.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/toastr.min.css')}}">
    <script src="{{asset('dashboard/js/jquery-1.9.1.min.js')}}"></script>
</head>
    <body>
        @include('admin.partials.left-menu')
        <section class="content">
            @include('admin.partials.header')
            <br>
            @if(!Request::is('user/profile') && !Request::is('user/password'))
                @include('admin.partials.menu')
            @endif
            @yield('content')
            @include('admin.partials.footer')
        </section>

    <!-- script's -->
    
    <script src="{{asset('dashboard/js/underscore-min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/js/globalize.min.js')}}"></script>
    <script src="{{asset('dashboard/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('dashboard/js/custom.js')}}"></script>
    <script src="{{asset('dashboard/js/toastr.min.js')}}"></script>
    @include('admin.partials.message')
    @yield('scripts')

    </body>

</html>