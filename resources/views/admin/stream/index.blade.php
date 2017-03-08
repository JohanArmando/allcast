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
                                <th>Channel</th>
                                <th>Stream key</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($streams AS $str)
                                    <tr>
                                        <td>{{$str->id}}</td>
                                        <td>{{ucfirst($str->title)}}</td>
                                        <td>{{$str->information->key}}</td>
                                        <td>
                                            <form action="{{url('stream/'.$str->id)}}" method="post">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <a href="{{url('stream/'.$str->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('stream/'.$str->id.'')}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
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