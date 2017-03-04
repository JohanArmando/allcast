@extends('layouts.dashboard')

@section('content')
    <div class="wrapper container-fluid">
        <div class="marginTop"></div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <div class="pull-left">
                            <h4><i class="glyphicon glyphicon-facetime-video blue"></i> My Streams</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="item-title">#</th>
                                <th class="item-title">Title</th>
                                <th>Domain(s)</th>
                                <th>Stream key</th>
                                <th class="item-title">Views</th>
                                <th class="item-title" colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($streams as $stream)
                                <tr>
                                    <th>{{$stream->id}}</th>
                                    <td><a href="{{url('stream/'.$stream->id)}}">{{$stream->title}}</a></td>
                                    <td>{{$stream->domain}}</td>
                                    <td>{{$stream->information->key}}</td>
                                    <td></td>
                                    <td>
                                        <a href="{{url('stream/'.$stream->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"> hola hola</h4>
                    </div>
                    <div class="panel-body">
                        <div class="panel-content">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta doloremque harum iusto maiores officia ratione reiciendis sunt? Alias animi architecto dolor dolore ea eos, id necessitatibus optio suscipit tempora vero?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-defautl">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            hola hola
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="panel-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur eaque, error est hic id impedit incidunt ipsum magni optio rerum saepe ullam veniam vitae voluptates. Alias amet nisi rem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
