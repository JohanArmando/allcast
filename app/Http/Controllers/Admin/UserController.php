<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Models\Stream;
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
                $message = 'Info chanded';
            }else{
                $message = 'Password does not match';
            }
        }else{
            $message = 'Password does not match';
        }

        return redirect()->back()->with('message',['type' => 'success' , 'message' =>$message]);
    }
    public function profile(Request $request)
    {
        $user = Auth::user();
        $user->name   = $request->get('name');
        $user->avatar = $request->file('avatar');
        $user->save();

        return redirect('/home')->with('message',['type' => 'success' , 'message' => 'Updated!']);
    }
    public function listAdminChannels (Request $request)
    {
        $user = User::find(Auth::user()->id);
        if ($user->roll == 'streamer') {
            return redirect('home');
        }
        $streams    =   Stream::all();
        return view('admin.stream.index',compact('streams'));
    }
    public function listUsers ()
    {
        $user = User::find(Auth::user()->id);
        if ($user->roll == 'streamer') {
            return redirect('home');
        }
        $users  =   User::all();
        return view('admin.user.list',compact('users'));
    }
    public function destroy($id){
        $stream = User::find($id);
        $stream->delete();
        return redirect(request()->headers->get('referer'))->with('message',['type' => 'error' , 'message' => 'User deleted successfuly!']);
    }
    public function CheckAdmin($id){

        $user = User::find($id);
        if ($user->roll == 'streamer') {
            // dd($user->roll);
            return redirect('home');
        }

    }
}
