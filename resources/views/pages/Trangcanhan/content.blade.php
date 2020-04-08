@extends('layout.master')

@section('noidung')

	<div class="col-2 col-sm-2">
      </div>
      <div class="col-8 col-sm-8">
            <div class="row">
            <div class="col-12 col-sm-12">
                  @include('pages.trangcanhan.header')
            </div>
      </div>

     
         @if(isset($kq))
            @if($kq=="anhcanhan")
              @include('pages.Trangcanhan.anhcanhan')
        
            @elseif($kq="gioithieu")
               @include('pages.Trangcanhan.lylich')
            @endif
          @else
            @include('pages.Trangcanhan.main')
          @endif
      </div>

      
       <div class="col-2 col-sm-2">
      
      </div>
@endsection
