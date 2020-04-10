@extends('layout.master')

@section('noidung')
	<div class="col-2 col-sm-2">
       @include('pages.nhom.left')     
      </div>
      <div class="col-6 col-sm-6">
       @include('pages.nhom.main')
      </div>
      <div class="col-2 col-sm-2">
       @include('pages.nhom.right')
      </div>
      <div class="col-2 col-sm-2">
       @include('pages.nhom.right')
      </div>
@endsection
