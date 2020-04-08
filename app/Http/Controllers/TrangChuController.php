<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function getHome(){
    	return view('NguoiDung.TrangChu.content');
    }
}
