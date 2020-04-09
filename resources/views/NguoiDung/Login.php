<!DOCTYPE html>
<html>
<head>
	<title>Mạng Xã Hội</title>
	<meta name="_token" content="{!! csrf_token() !!}" />
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<style type="text/css">
		*{
			font-family: "montserrat",sans-serif;
		}
		body{
			margin:0;
			padding:0;
			background-color: black;
		}
		.form_login{
			position: absolute;
			top: 0;
			left:0;
			width: 100%;
			height: 100%;
			background-image: linear-gradient(45deg,#9fbaa8,#31354c);
			transition: 0.4s;
		}
		.login_form{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: white;
			text-align: center;
		}
		#user{
			display: block;
			
		}
	</style>
</head>
<body>
	  <div class="form_login">
	  	<form class="login_form">
	  		<input type="text" name="textuser" id="user" placeholder="Username"/>
	  		<input type="password" name="textpass" id="pass" placeholder="Password"/>
	  		<input type="submit" name="submit" id="" value="Login">
	  	</form>
	  </div>
</body>
</html>


<script >
		$(document).ready(function(){
				$("#nen").load("dangki.php");
		});
</script>





