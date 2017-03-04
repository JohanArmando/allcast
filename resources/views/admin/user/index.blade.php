@extends('layouts.dashboard')
@section('title')
    My Profile
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('dashboard/css/dropify.min.css')}}">
<div class="wrapper container-fluid">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Profile</div>
            <div class="panel-body">
                <form role="form" action="{{url('user/profile')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input type="file" name="avatar" class="dropify" data-default-file="{{ asset("profile/".Auth::user()->avatar) }}" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control"  value="{{Auth::user()->email}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <button type="submit" class="btn btn-purple">Save</button>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Change Password</div>
            <div class="panel-body">
                <form role="form" method="post" action="{{url('user/password')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="actual">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" class="form-control" name="c-password">
                    </div>
                    <button type="submit" class="btn btn-info">Change</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('dashboard/js/dropify.min.js')}}"></script>
<script type="text/javascript">
    $('.dropify').dropify();
</script>
@endsection