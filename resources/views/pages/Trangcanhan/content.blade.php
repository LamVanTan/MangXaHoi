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

            <div class="row">
              <div class="col-12 col-sm-12">
                @if(isset($kq))
                        @if($kq=="anhcanhan")
                          @include('pages.Trangcanhan.contentimg')
          
                        @elseif($kq="gioithieu")
                             @include('pages.Trangcanhan.contentlylich')
                        @endif

                      @else
                        @include('pages.Trangcanhan.main')
                @endif
              </div>
            </div>
      </div>

      
       <div class="col-2 col-sm-2">
      
      </div>
@endsection
