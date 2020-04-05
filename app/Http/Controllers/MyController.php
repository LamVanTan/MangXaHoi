<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function geturl(Request $request){

    	$kq=$request->path();
         if($kq=="anhgroupchat"){
    	 return view('pages.groupchat.content',compact('kq'));
    	}
    	elseif ($kq=="ThanhVienGroup") {
    		return view('pages.groupchat.content',compact('kq'));
    	}

    	elseif ($kq=="anhcanhan") {
    		return view('pages.Trangcanhan.content',compact('kq'));
    	}
    	elseif ($kq=="lylichcanhan") {
    		return view('pages.Trangcanhan.content',compact('kq'));
    	}
    
    }


}
