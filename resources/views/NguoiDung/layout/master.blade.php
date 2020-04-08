<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="">
	<title>Mạng Xã Hội</title>
	
    <base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/css.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.css">
	
   
</head>
<body style="background-color:ghostwhite;">
<div class="container-fluid">
@include('NguoiDung.layout.header')
<div class="row" style="margin-top:65px ; margin-bottom: 100px;">
@yield('noidung')
</div>
</div>
</body>
<script type="text/javascript" src="{{ asset('style/file.js')}}"></script>
<script type="text/javascript" src="{{ asset('style/file1.js')}}"></script>
<script type="text/javascript" src="{{ asset('style/file2.js')}}"></script>
</html>