
@extends('NguoiDung.layout.master')

@section('noidung')
	<div class=" col-sm-2">
	  		    
	</div>
	<div class=" col-sm-5">
	    @include('NguoiDung.TrangChu.main')
	</div>
	<div class=" col-sm-3">
	   @include('NguoiDung.TrangChu.listbanbe')
	</div>
	<div class=" col-sm-2">
	   
	</div>
 
@endsection

