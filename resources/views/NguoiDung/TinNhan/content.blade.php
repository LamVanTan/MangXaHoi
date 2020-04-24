@extends('NguoiDung.layout.master')

@section('noidung')
<div class="col-sm-12">
	
	<div class="row no-gutters bg-light">
	 		<div class="col-sm-4 border-right bg-light " style="z-index: 1">
		@include('NguoiDung.TinNhan.left')   
     </div>    

     <div class="col-sm-8 bg-light">
     	@include('NguoiDung.TinNhan.right')   
     </div>

 </div>
</div>
@endsection
