@extends('layouts.dashboard')
@section('title')
    List Streams
@endsection
@section('content')
<div class="wrapper container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-stripped" id="ChannelsData">
                            <thead>
                                <th>ID</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-center">Channels</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($users AS $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td><img src="{{asset('profile/'.$user->avatar)}}" class="img-circle img-responsive" alt="..." width="45px"></td>
                                        <td>{{ucfirst($user->name)}}</td>
                                        <td>{{$user->email}}</td>
                                        <td class="text-center">{{count($user->streams)}}</td>
                                        <td>
                                            <form action="{{url('users/'.$user->id)}}" method="post">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <!-- <a href="{{url('stream/'.$user->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('stream/'.$user->id.'')}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a> -->
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
                                            
                                                
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                <div class="panel-footer clearfix">
                   
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<script>
    $(document).ready(function(){
    $('#ChannelsData').DataTable({
        "pageLength": 50,
                 "order": []
    });
});
</script>
@endsection