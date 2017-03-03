<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stream;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function create()
    {
        return view('admin.stream.create');
    }
    public function store(Request $request)
    {
        Stream::create([
            'title' => $request->get('title'),
            'domain' => $request->get('domain'),
            'user_id' => Auth('web')->user()->id
        ]);
        return redirect('home');
    }
}
