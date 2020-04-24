<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrangCaNhanController extends Controller
{
    public function getHome(){
    	
    	return view('NguoiDung.TrangCaNhan.content');
    }

     public function getIMG(Request $req){
     	$kq=$req->path();
    	return view('NguoiDung.TrangCaNhan.content',['kq'=>$kq]);
    }

     public function getThongTin(Request $req){
     	$kq=$req->path();
    	return view('NguoiDung.TrangCaNhan.content',['kq'=>$kq]);
    }

    public function getBanBe(Request $req){
        $kq=$req->path();
        return view('NguoiDung.TrangCaNhan.content',['kq'=>$kq]);
    }
}
