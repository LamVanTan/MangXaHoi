<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mạng Xã Hội</title>
	
    <base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/css.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="style/jquery.js"></script>
	<script type="text/javascript" src="style/file.js"></script>
	<script type="text/javascript" src="style/file1.js"></script>
	<script type="text/javascript" src="style/file2.js"></script>
</head>
<body style="background-color:ghostwhite;">
<div class="container-fluid">
	@include('NguoiDung.layout.header')
	<div class="row" style="margin-top:65px ; margin-bottom: 100px;">
	@yield('noidung')
</div>
</div>
</body>
</html>


