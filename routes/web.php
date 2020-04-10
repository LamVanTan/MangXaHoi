<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// trang chủ
Route::get('home',['as'=>'trangchu',function(){

	return view('pages.trangchu.content');
}]);


//mess
Route::get('mess',['as'=>'mes',function(){

	return view('pages.tinnhan.content');
}]);

//nhóm tạo nhóm
Route::get('nhom',['as'=>'group',function(){

	return view('pages.nhom.content');
}]);

//groupchat 
Route::get('groupchat',['as'=>'nhomchat',function(){

	return view('pages.groupchat.content');
}]);

Route::get('anhgroupchat',['as'=>'anh','uses'=>'MyController@geturl']);

Route::get('ThanhVienGroup',['as'=>'thanhvien','uses'=>'MyController@geturl']);

//kết thúc groupchat


//trang cá nhân

Route::get('trangcanhan',['as'=>'canhan',function(){

	return view('pages.trangcanhan.content');
}]);
 Route::get('anhcanhan',['as'=>'imgcanhan','uses'=>'MyController@geturl']);

  Route::get('lylichcanhan',['as'=>'lylich','uses'=>'MyController@geturl']);



//dang nhap

  Route::get('dangnhap','controllerLogin@getLogin');
  Route::post('dangnhap','controllerLogin@postLogin');

 // Route::post('dangnhap','controllerLogin@postdangki');
 



