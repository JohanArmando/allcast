<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function password(Request $request)
    {
        $user = Auth::user();
        if(Hash::check($request->get('actual'),$user->password)){
            if($request->get('password') == $request->get('c-password')){
                $user->password = $request->get('password');
                $message = 'Datos cambiados correctamente';
            }else{
                $message = 'Las contrase&ntilde;as no coinciden';
            }
        }else{
            $message = 'La contrase&ntilde;a actual no coinciden';
        }

        return redirect()->back()->with('message',['type' => 'success' , 'message' =>$message]);
    }
    public function profile(Request $request)
    {
        $user = Auth::user();
        $user->name   = $request->get('name');
        $user->avatar = $request->file('avatar');
        $user->save();

        return redirect('/home')->with('message',['type' => 'success' , 'message' => 'Editado Correctamente!']);
    }
}
