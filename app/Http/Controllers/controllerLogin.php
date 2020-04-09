<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\TaiKhoan;
class controllerLogin extends Controller
{
    //
    public function getLogin(){
    	return view('NguoiDung/Login');
    }

    public function postLogin(Request $req){

        $email=$req->email;
        $password=$req->pass;
        
         if (Auth::attempt(array('Username' => $email, 'password' => $password)))
    {
         return view('pages/trangchu/content');
    } else {
       return view('pages/Login');
    }
        
    }

    // public function postdangki(Request $req){

    //     $TaiKhoan= new TaiKhoan;
    //     $TaiKhoan->Ho=$req->hoten;
    //     $TaiKhoan->Ten=$req->ten;
    //     $TaiKhoan->Username=$req->username;
    //     $TaiKhoan->password=$req->password;
    //     $TaiKhoan->NgaySinh=$req->date;
    //     $TaiKhoan->GioiTinh=$req->optradio;

    //     $TaiKhoan->save();

    //      return redirect('dangnhap')->with('thongbao','Thêm Thành Công');
    // }
}
