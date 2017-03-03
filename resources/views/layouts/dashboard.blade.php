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

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
<<<<<<< HEAD
    <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap/bootstrap.min.css')}}">
=======
    <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap/bootstrap.css')}}">
>>>>>>> 04e68e39305b64fd4dd7667c896919098f89148a
    <link rel="stylesheet" href="{{asset('dashboard/css/plugins/calendar/calendar.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/app/app.v1.css')}}">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

</head>
    <body data-ng-app>
        @include('admin/partials/top')
        @include('admin/partials/left-menu')

    @yield('content')

    <!-- script's -->
    <script src="{{asset('dashboard/js/jquery/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/underscore/underscore-min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/js/globalize/globalize.min.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/DevExpressChartJS/dx.chartjs.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/DevExpressChartJS/world.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/DevExpressChartJS/demo-charts.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/DevExpressChartJS/demo-vectorMap.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/sparkline/jquery.sparkline.demo.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
    <script src="{{asset('dashboard/js/angular/todo.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/calendar/calendar.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/calendar/calendar-conf.js')}}"></script>
    <script src="{{asset('dashboard/js/app/custom.js')}}" type="text/javascript"></script>

    </body>

</html>