@extends('NguoiDung.layout.master')

@section('noidung')

	<div class="col-2 col-sm-2">
  </div>
      <div class="col-8 col-sm-8">
            <div class="row">
                <div class="col-12 col-sm-12">
                      @include('NguoiDung.TrangCaNhan.header')
                </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-12">
                @if(isset($kq))
                        @if($kq=="Home/TrangCaNhan/img")
                          @include('NguoiDung.TrangCaNhan.contentimg')
          
                        @elseif($kq="Home/TrangCaNhan/thongtin")
                             @include('NguoiDung.TrangCaNhan.contentlylich')
                        @endif

                      @else
                        @include('NguoiDung.TrangCaNhan.main')
                @endif
              </div>
            </div>
      </div>

      
       <div class="col-2 col-sm-2">
      
      </div>
@endsection
