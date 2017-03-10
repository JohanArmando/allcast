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
        $stream     =   Stream::find($request->id);
        $protect_result =	$this->domainProtect($stream);

        if ($protect_result == 1) {
        	return view('admin.player', compact('request','stream'));
        }else{
        	return view('admin.protected', compact('request','stream'));
        }
    }
    public function domainProtect($domain)
    {
    	$domains	=	$domain->domain;
    	if (!empty($domains)) {
    		$domains	=	explode(",", $domains);
	    	array_push($domains,'allcast.local','www.allcast.pw', 'allcast.pw' );
	        $domain_referer	=	request()->headers->get('referer');
	        $first_filter	=	explode('//', $domain_referer);
	        $second_filter	=	explode('/', $first_filter[1]);
	        $referer_domain	=	$second_filter[0];
	        if(in_array($referer_domain, $domains))
	    	{
	    		return 1;
	    	}
	    	else{
	    		return 0;
	    	}
    	}else{
    		return 1;
    	}
    	
    }
}
