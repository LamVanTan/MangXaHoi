
@extends('layout.master')

@section('noidung')

<div class="col-2 col-sm-2">  		    
  <!-- @include('pages.trangchu.left') -->
</div>
<div class="col-5 col-sm-5">
    @include('pages.trangchu.main')
</div>
<div class="col-3 col-sm-3" >
   @include('pages.trangchu.quangcao')
</div>
<div class="col-2 col-sm-2">
   <!-- @include('pages.trangchu.right')		 -->
</div>
    
@endsection

