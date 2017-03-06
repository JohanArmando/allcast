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
                <h2>Streams</h2>
                <table id="channels" style="background-color: #C63543" class="display table table-bordered table-hover table-responsive" cellpadding="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Domain</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($streams as $stream)
                        <tr>
                            <td>{{$stream->title}}</td>
                            <td>{{$stream->domain}}</td>
                            <td>{{$stream->description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#channels').DataTable();
            } );
        </script>
@endsection

