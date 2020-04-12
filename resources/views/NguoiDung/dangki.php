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
			padding:50px 500px;
			background-image: linear-gradient(#476262,#f7ffe9,#f7ffe9,#f7ffe9);
		}
		.home_login{
			position: relative;
			margin-top:5%;
			margin-bottom:5%;
			margin-left:70%;
			width: 380px;
			height: 600px;
			padding: 5px;
			
			overflow: hidden;
		}

		 .btn_button{
            width: 250px;
            margin: 35px auto;
            box-shadow:0 0 10px 0 #353331;
            border-radius: 20px;
            position: relative;
          
		}

		.btn{
        	position: absolute;
        	top:0;
        	left:0;
        	width:125px;
        	height:100%;
        	background-color:#4a4f50;
        	border-radius: 20px;
        	transition: .3s;
           
        }

		 .btn_sub{
			padding: 10px 30px;
			cursor: pointer;
			color:white;
			background: transparent;
			outline: none;
			position: relative;
			border :none;
		}
         
         .login_form{
        	position: absolute;
        	top:150px;
        	left: 0;
        	width: 300px;
        	transition: .4s;
        	margin: 0 44px;
        	
        }

         .register_form{
        	position: absolute;
        	top:100px;
        	right:-100%;
        	width: 300px;
        	transition: .4s;
        	margin: 0 44px;

        }
         .txt{
        	
        	width: 100%;
        	border-top: 0;
        	border-left: 0;
        	border-right: 0;
        	border-bottom: 1px solid #738685;
        	background:transparent;
        	padding: 10px 0;
        	margin: 5px 0;
        	outline:none;

        }
          .submit{
         	background-color:#595142 ;
         	display: block;
         	width: 100%;
         	padding: 5px 0;
         	border-radius: 20px;
         	margin: 10px 0;
         	border:none;
            cursor: pointer;
            color: #fbf1fb;
         }
	
		.showed{
			left:-100%;
		}

		.showeds{
			right:0;
		}
		.show{
			left:125px;

		}
		.error{
			font-size: 14px;
			color: #f3cd46;

		}
		 
	</style>
</head>
<body>

	 <div class="home_login">
			  <div class="btn_button">
				  	 <div class ="btn"></div>
				  	 <button class="btn_sub">Đăng Nhập</button> 
				  	 <button class="btn_sub">Đăng Ký</button> 
			  </div>
		  	<form action="" class="login_form" method="GET">
		  		<input class="txt" type="text" name="user" placeholder="Email Hoặc SDT"/>
		  		<input class="txt" type="password" name="password" placeholder="Mật Khẩu"/>
		  		<input class="submit" type="submit" name="submit" value="Đăng Nhập">
		  	</form>

		  	<form class="register_form">
		  		<input class="txt" type="text" name="name" placeholder="Name"/>
		  		<input class="txt" type="text" name="user" placeholder="Email Hoặc SDT"/>
		  		<input class="txt" type="password" name="pass" id="password" placeholder="Mật Khẩu"/>
		  		<input class="txt" type="password" name="passreset" placeholder="Nhập Lại Mật Khẩu"/>
		  		<input class="txt" type="text" name="sdt" placeholder="SDT"/>
		  		<input class="txt" type="text" name="diachi" placeholder="Địa Chỉ"/>
		  		<input class="submit" type="submit" name="submit" value="Đăng Ký">
		  	</form>
		 

	  </div>
	  

</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$(".btn_sub").click(function(){
				$(".login_form").toggleClass("showed");
		});

		$(".btn_sub").click(function(){
				$(".register_form").toggleClass("showeds");
		});

		$(".btn_sub").click(function(){
				$(".btn").toggleClass("show");
		});

	});

   $(document).ready(function(){
   	   $(".login_form").validate({
   	   	  rules:{
              user:{
                 required:true,
              },
              password:{
              	required:true,
              }
   	   	  },
   	   	  messages:{
              user:{
              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống"
              },
              password:{
              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống"
              },
   	   	  },

   	   });
   });

    $(document).ready(function(){
   	   $(".register_form").validate({
   	   	  rules:{
   	   	  	  name:{
                 required:true,
                 minlength:3,
                 maxlength:32,
              },
              user:{
                 required:true,
                 email:true,
              },
              pass:{
                 required:true,
                 minlength:6,
              },
              passreset:{
              	required:true,
              	equalTo: "#password"
              },
              sdt:{
                 required:true,
                 number:true,
                 maxlength:11,
                 minlength:10

              },
              diachi:{
              	required:true,
              }
   	   	  },
   	   	  messages:{
	              name:{
	              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	              	minlength:"Tên Quá Ngắn, Phải Có Ít Nhất 3 Kí Tự",
	              	maxlength:"Tên Không Được Quá 32 Kí Tự"
	              },

	              user:{
	              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	              	email:"Sai Định Dạng Email"
	              },
	              pass:{
	              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	              	minlength:"Mật Khẩu Quá Ngắn ,Phải Có Ít Nhất 6 Kí Tự"
	              },
	              passreset:{
	                required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	              	equalTo:"Mật Khẩu Không Trùng Khớp"
	              },
	              sdt:{
	                required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	                number:"Sai Định Dạng SDT",
	                maxlength:"SDT Quá Dài, SDT Bằng 10 Số",
	                minlength:"SDT Không Đúng, Phải Có 10 Sô"
	              },
	              diachi:{
	              	 required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	              },
   	   	 }

   	   });
   });
</script>




