<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaiDatController extends Controller
{
    public function getHome(){
    	return view('NguoiDung.CaiDat.content');
    }

    public function getBaoMat(Request $req){
          $kq=$req->path();
    	  return view('NguoiDung.CaiDat.content',['kq'=>$kq]);
    }
}
