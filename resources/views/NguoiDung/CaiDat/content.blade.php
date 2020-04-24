
@extends('NguoiDung.layout.master')

@section('noidung')

<div class="col-sm-2">
  		    
</div>
<div class="col-sm-3">
    @include('NguoiDung.CaiDat.menu')
</div>
<div class="col-sm-5">
	@if(isset($kq))
         @if($kq=="Home/CaiDat/baomat")
             @include('NguoiDung.CaiDat.baomat')         
         @endif
     @else
         @include('NguoiDung.CaiDat.caidatchung')              
     @endif
    
</div>

<div class="col-sm-2">
   
</div>
   
@endsection

