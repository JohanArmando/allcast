@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-xs-12  col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4> Create a new Broadcast</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12  col-md-8 col-md-offset-2">
                        <form class="form-horizontal variant-form" method="post" action="{{url('/stream')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="title" id="channelName" placeholder="Example: My new stream"
                                           maxlength="20" required="">
                                    <label for="channelName" class="input-group-addon"><i class="fa fa-video-camera"></i>
                                        <span class="shrink">Channel Title</span></label>
                                </div>
                            </div> <!-- /.form-group -->

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="domain" id="protectDomain" placeholder="Example: domain.com,www.example.tv">
                                    <label for="protectDomain" class="input-group-addon"><i class="fa fa-unlock-alt"></i>
                                        <span class="shrink">Domain Lock</span></label>
                                </div> <!-- /.input-group -->
                            </div> <!-- /.form-group -->

                            <div class="form-group">
                                <div class="input-group">
                                    <label><input id="agreeTerms" type="checkbox" required="">  I agree to the <a href="#">Terms</a>
                                        and <a href="#">Privacy Policy</a></label>
                                </div> <!-- /.input-group -->
                            </div> <!-- /.form-group -->

                            <button class="form-control btn btn-primary"><i class="fa fa-play-circle"></i> Start your live streaming now!</button>
                        </form>
                    </div>
                </div>
            </div> <!-- /.panel-body -->
        </div>
    </div>
</div>
@endsection