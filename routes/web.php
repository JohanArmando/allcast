<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Models\Stream;
use App\Models\StreamsInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {return view('auth.login');});
Route::get('/contact', function () {return view('auth.contact');});
Route::get('/schedules', function () {$streams = Stream::all();return view('auth.streams',compact('streams'));});
Route::get('/player/{id}/{width}/{heigth}', 'PlayerController@show');
Route::post('/message',function(Request $request){
    $user = $request->all();
    Mail::send('emails.contact', ['user' => $user], function ($m) use ($user) {$m->to(env('MAIL_USERNAME'), 'd')->subject('AllCast');});
    return redirect('/');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Admin'], function () {
    Route::resource('stream', 'StreamController');
    Route::get('user/profile', 'UserController@index');
    Route::post('user/profile', 'UserController@profile');
    Route::post('user/password', 'UserController@password');
    Route::get('admin/channels', 'UserController@listAdminChannels');
    Route::get('admin/users', 'UserController@listUsers');
    Route::delete('users/{id}', 'UserController@destroy');
    Route::post('stream/home', function(Request $request)
    {
        $stream = Stream::create([
            'title' => $request->get('title'),
            'domain' => $request->get('domain'),
            'user_id' => 1
        ]);
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $numerodeletras=12;
        $cadena = "";
        for($i=0;$i<$numerodeletras;$i++) {$cadena .= substr($caracteres,rand(0,strlen($caracteres)),1);}
        StreamsInformation::create([
            'stream_id' => $stream->id,
            'server'    => 'rtmp://origin.allcast.pw:1935/stream',
            'key'       => $cadena,
            'code'      => $stream->id,
            'size'      => '640x360'
        ]);
        return view('auth.show',compact('stream'));
    });
    route::get('/show',function(){return view('auth.show');});
    route::get('/player/home/{id}',function($id){return view('auth.player',compact('id'));});
});

