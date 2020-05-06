<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimKiemController extends Controller
{
    public function getHome(){
    	return view('NguoiDung.TimKiem.main');
    }
}
