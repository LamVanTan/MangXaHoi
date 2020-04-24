@extends('NguoiDung.layout.master')

@section('noidung')

	<div class="col-sm-2">
  </div>
      <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-12">
                      @include('NguoiDung.TrangCaNhan.header')
                </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                @if(isset($kq))
                        @if( $kq== "Home/TrangCaNhan/img")
                          @include('NguoiDung.TrangCaNhan.contentimg')
          
                        @elseif( $kq=="Home/TrangCaNhan/thongtin")
                             @include('NguoiDung.TrangCaNhan.contentlylich')

                        @elseif( $kq=="Home/TrangCaNhan/BanBe")
                             @include('NguoiDung.TrangCaNhan.friend')
                        
                        @endif
                 @else
                    @include('NguoiDung.TrangCaNhan.main')
                @endif
              </div>
            </div>
      </div>

      
       <div class="col-sm-2">
      
      </div>
@endsection
