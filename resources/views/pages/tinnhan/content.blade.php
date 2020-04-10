@extends('layout.master')

@section('noidung')
<div class="col-12 col-sm-12">
	
	<div class="row no-gutters bg-light">
	 		<div class="col-4 col-sm-4 border-right bg-light " style="z-index: 1">
		@include('pages.tinnhan.left')   
     </div>    

     <div class="col-8 col-sm-8 bg-light">
     	@include('pages.tinnhan.right')   
     </div>

 </div>
</div>
@endsection
