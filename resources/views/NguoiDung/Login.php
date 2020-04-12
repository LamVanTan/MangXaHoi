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
			left:-100%;
			width: 100%;
			height: 100%;
			background-image: linear-gradient(45deg,#9fbaa8,#31354c);
			transition: 0.4s;
		}
		
	.form_login	.login_form{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: white;
			text-align: center;
		}
	.form_login	.login_form	#txt{
			display: block;
			width: 250px;
			padding: 10px 10px;
			outline: none;
			border-radius: 8px;
			margin: 10px 0;
			box-sizing: border-box;
			background-color:#EEEEEE;
			text-align: center;
			border:none;
            
		}
	.form_login	.login_form #btn_sub{

		   width: 250px;
			padding: 10px 10px;
			outline: none;
			border-radius: 8px;
			margin: 5px 0;
			background-color:#111111;
			text-align: center;
			border:none;
			color: white;
	}
    .form_login .colse{
    	position: absolute;
    	left:1300px;
    	top: 20px;
    	font-size:30px;
    	cursor: pointer;

    }
    
    .wellcom{
    	cursor: pointer;
    	padding: 10% 35%;
    	width: 400px


    }
    .btn_show_login{
    	width: 190px;
    	padding: 10px 0px;
    	margin: 10px 5px;
    	border-radius: 10px;
    	text-align: center;
    	border:none;
    	cursor: pointer;
    }
    .btn_show_register{
    	width: 190px;
    	padding: 10px 0px;
    	margin: 10px 0;
    	border-radius: 10px;
    	text-align: center;
    	border:none;
    	cursor: pointer;
    }
    .showed{
    	left:0;
    	
       
    }

/*//dăng ký*/
    .form_register{
			position: absolute;
			top:0;
			left:-100%;
			width: 100%;
			height: 100%;
			background-image: linear-gradient(45deg,#9fbaa8,#31354c);
			transition: 0.4s;
			color: white;
		}

	.form_register	.login_form{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: white;
			text-align: center;
		}
	.form_register	.login_form	#txt{
			display: block;
			width: 250px;
			padding: 10px 10px;
			outline: none;
			border-radius: 8px;
			margin: 10px 0;
			box-sizing: border-box;
			background-color:#EEEEEE;
			text-align: center;
			border:none;
            
		}
	.form_register	.login_form #btn_sub{

		   width: 250px;
			padding: 10px 10px;
			outline: none;
			border-radius: 8px;
			margin: 5px 0;
			background-color:#111111;
			text-align: center;
			border:none;
			color: white;
	}
    .form_register .colse{
    	position: absolute;
    	left:1300px;
    	top: 20px;
    	font-size:30px;
    	cursor: pointer;

    }
    .showed_register{
    	left: 0;
    }
	</style>
</head>
<body>

	<div class="wellcom">
		<h1 style="color: white; text-align: center;">Chào Mừng Bạn Đến Với Chúng Tôi</h1>
		<input type="" name="" class="btn_show_login" value="Sign In">
		<input type="" name="" class="btn_show_register" value="Sign Up">

	</div>


	  <div class="form_login">
	  	<div class="colse">
	  		<i class="fas fa-times-circle"></i></div>
	  	<h1>Login</h1>
	  	<form class="login_form">
	  		<input type="text" name="textuser" id="txt" placeholder="Username"/>
	  		<input type="password" name="textpass" id="txt" placeholder="Password"/>
	  		<input type="submit" name="submit" id="btn_sub" value="Login">
	  	</form>
	  </div>

	  
	  <div class="form_register">
		  	<div class="colse">
		  		<i class="fas fa-times-circle"></i></div>
		  	<h1>Dăng Nhập</h1>
		  	<form class="login_form">
		  		<input type="text" name="textuser" id="txt" placeholder="Username"/>
		  		<input type="password" name="textpass" id="txt" placeholder="Password"/>
		  		<input type="submit" name="submit" id="btn_sub" value="Login">
		  	</form>
	  </div>

</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$(".btn_show_login").click(function(){
				$(".form_login").toggleClass("showed");
			});
		$(".colse").click(function(){
				$(".form_login").toggleClass("showed");
		});

	});

	$(document).ready(function(){
		$(".btn_show_register").click(function(){
				$(".form_register").toggleClass("showed_register");
			});
		$(".colse").click(function(){
				$(".form_register").toggleClass("showed_register");
		});
	});
	
</script>




