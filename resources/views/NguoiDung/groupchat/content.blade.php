@extends('layout.master')

@section('noidung')

	<div class="col-2 col-sm-2">
       @include('pages.groupchat.left')     
      </div>
      <div class="col-8 col-sm-8">
      	<div class="row">
		<div class="col-12 col-sm-12">
			@include('pages.groupchat.header')
		</div>
		</div>     
            <div class="row">
                
                @if(isset($kq))
                    @if($kq=="anhgroupchat")   
                      <div class="col-12 col-sm-12">
                          @include('pages.groupchat.anhgroupchat')
                      </div>
                    @elseif($kq=="ThanhVienGroup")
                      <div class="col-12 col-sm-12">
                          @include('pages.groupchat.thanhviengroup')
                      </div>
                    @endif
                @else
                  <div class="col-7 col-sm-7">
                         @include('pages.groupchat.main')
                  </div>
                  <div class="col-5 col-sm-5">
                         @include('pages.groupchat.mainright')
                  </div>
                @endif
                  
            </div>

     
     
     
     </div>

       <div class="col-2 col-sm-2">
       @include('pages.trangchu.right')
      </div>
@endsection
