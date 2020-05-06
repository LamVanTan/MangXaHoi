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




//dang nhap

  Route::get('dangnhap','controllerLogin@getLogin');
  Route::post('dangnhap','controllerLogin@postLogin');
  Route::get('dangki','controllerLogin@getdangki');
 

// Nguoi Dùng
Route::group(['prefix'=>'Home'],function() {
    
   
    Route::group(['prefix'=>'TrangChu'],function(){
        Route::get('content','TrangChuController@getHome');
      
     });

    Route::group(['prefix'=>'TrangCaNhan'],function(){
        Route::get('content','TrangCaNhanController@getHome');
        Route::get('img','TrangCaNhanController@getIMG');
        Route::get('thongtin','TrangCaNhanController@getThongTin');
        Route::get('BanBe','TrangCaNhanController@getBanBe');
      
     });

    Route::group(['prefix'=>'TinNhan'],function(){
        Route::get('content','TinNhanController@getHome');
      
     });

    Route::group(['prefix'=>'Nhom'],function(){
        Route::get('content','NhomController@getHome');
      
     }); 

     Route::group(['prefix'=>'CaiDat'],function(){
         Route::get('content','CaiDatController@getHome');
         Route::get('baomat','CaiDatController@getBaoMat');
     });  

      Route::group(['prefix'=>'TimKiem'],function(){
         Route::get('content','TimKiemController@getHome');
         
     });  
     
}); 

