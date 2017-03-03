<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stream;
use App\Models\StreamsInformation;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function create()
    {
        return view('admin.stream.create');
    }

    public function store(Request $request)
    {
        $stream = Stream::create([
            'title' => $request->get('title'),
            'domain' => $request->get('domain'),
            'user_id' => Auth('web')->user()->id
        ]);
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $numerodeletras=12;
        $cadena = "";
        for($i=0;$i<$numerodeletras;$i++) {$cadena .= substr($caracteres,rand(0,strlen($caracteres)),1);}
        StreamsInformation::create([
            'stream_id' => $stream->id,
            'server'    => 'prueba',
            'key'       => $cadena,
            'code'      => $stream->id,
            'size'      => '640x360'
        ]);
        return redirect('home');
    }

    public function show($id)
    {
        Stream::find($id);
        return view('admin.stream.show');
    }

    public function edit($id)
    {
        $stream = Stream::find($id);
        return view('admin.stream.edit',compact('stream'));
    }

    public function update(Request $request , $id)
    {
        $stream = Stream::find($id);
        $stream->update($request->all());
        return redirect('home');
    }

    public function destroy($id){
        $stream = Stream::find($id);
        $stream->delete();
        return redirect('home');
    }
}
