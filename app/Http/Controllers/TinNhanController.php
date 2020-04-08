<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinNhanController extends Controller
{
    public function getHome(){
    	return view('NguoiDung.TinNhan.content');
    }
}
