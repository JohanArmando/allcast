@extends('layouts.home')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
 @section('content')
        <div class="headerLogo">
            <center>
                <img class="img-responsive logo-index" src="{{asset('template/images/logo_all_cast.png')}}" alt="" >
            </center>
        </div>

        <div class="clear"></div>

        <div class="w3layouts">
            <div class="signin-agile" style="width: 90%; !important;">
                <table id="channels" class="display table table-bordered table-hover table-responsive" cellpadding="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Domain</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>hola</td>
                            <td>hola</td>
                            <td>hola</td>
                        </tr>
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

