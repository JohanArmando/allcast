<?php

namespace App\Http\Controllers;
use App\Models\Stream;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PlayerController extends Controller
{
    public function show(Request $request)
    {
        $stream     =   Stream::find($request->id)->information->key;
        // StreamsInformation
        return view('admin.player', compact('request','stream'));
    }

}
