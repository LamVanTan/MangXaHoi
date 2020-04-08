<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập Mạng Xã Hội BTT</title>
	<style type="text/css">
		.error{
			background-color:yellow;
			color:blue;
			font-size: 11px;
			width: 180px;
			margin-top:5px;
			border-radius: 8px;
		}
	</style>
	<meta name="_token" content="{!! csrf_token() !!}" />
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
</head>
<body style="background-color:gainsboro;">
<div class="row" style="padding-top:30px; background-color: steelblue;">
	<div class="col-6 col-sm-6">
		<h1 style="text-align: center; color: white;"> Mạng Xã Hội BTT</h1>
	</div>


	<div class="col-6 col-sm-6" >
		<form class="form-inline" action="dangnhap" method="POST" id="formlogin">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			
			<div class="row">
				<div class="col-4 col-sm-4">

					<input type="text" class="form-control" placeholder="Emali hoặc SDT" name="email" style="margin-right: 5px;width: 180px;">
				</div>
				<div class="col-4 col-sm-4">
				    <input type="password" class="form-control" placeholder="Password" name="pass" style="margin-right: 5px;width: 180px;">
				</div>
				<div class="col-4 col-sm-4">
					 <button type="submit" class="btn btn-info" style="background-color: skyblue;"> Đăng Nhập</button>
				</div>
			</div> 		
  	</form>
	</div>
</div>



<div class="row">
	<div class="col-2 col-sm-2"></div>
	<div class="col-4 col-sm-4">
		<h3 style="margin-top: 30px; margin-bottom: 20px;">Đăng Nhập Gần Đây</h3>
         <div class="row">
         	<div class="col-6 col-sm-6">
		<div class="card">
		  <img class="card-img-top" src="img/em.jpg" alt="Card image">
		  <div class="card-body">
		    <a href="#" class="btn btn-secondary btn-block">Lâm</a>
		  </div>
		</div>
	     </div>

	     <div class="col-6 col-sm-6">
		<div class="card">
		  <img class="card-img-top" src="img/em.jpg" alt="Card image">
		  <div class="card-body">
		    <a href="#" class="btn btn-secondary btn-block">Lâm</a>
		  </div>
		</div>
	     </div>

	</div>
</div>




	<div class="col-4 col-sm-4"> <h1 style="text-align: center;">Tạo Tài Khoản Mới</h1>
  
  <form action=""  method="POST"  class="formlogin">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">	
     		  	<?php if(session('thongbao')){?>
			  	 <div class="row">
			  	  <div class="col-12 col-sm-12">
					           <div class="alert alert-success">
			                            <?php echo "".session('thongbao')?>
			                           </div>
					           </div>
			                    </div>

			            <?php  }?>
	          	  <div class="row">
	                <div class="col-6 col-sm-6">
	                <div class="form-group">
	                    <label for="lastname">Họ</label>
	                    <input type="text" class="form-control" value="" name="hoten" placeholder="Họ" >
	                </div>
                    </div>
		            <div class="col-6 col-sm-6">
		            <div class="form-group">
	                	<label for="towncity">Tên</label>
	                    <input type="text" class="form-control" name="ten" placeholder="Tên">
	                </div>
		            </div>

		        </div>
		        <div class="row">
		           
		            <div class="col-12 col-sm-12">
		            <div class="form-group">
		            	<label for="towncity">Email</label>
		                <input class="form-control" type="text" name="username" placeholder="Emali hoặc SDT">
		                 </div>
		            </div>
		           </div>

		           <div class="row">

		           <div class="col-12 col-sm-12">
		            <div class="form-group">
		            	<label for="towncity">Mật Khẩu</label>
		                <input class="form-control" type="password" name="password" placeholder="Mật Khẩu">
		                 </div>
		            </div>
                     </div>

                      <div class="row">

		           <div class="col-12 col-sm-12">
		            <div class="form-group">
		            	<label for="towncity">Nhập Lại Mật Khẩu</label>
		                <input class="form-control" type="password" name="set_password" placeholder="Nhập Lại Mật Khẩu">
		                 </div>
		            </div>
                     </div>

                     <div class="row">
		            <div class="col-6 col-sm-6">
	                <div class="form-group">
	                    <label for="lastname">Ngày Sinh</label>
	                    <input type="date" class="form-control" value="" name="date">
	                </div>
                    </div>
		           </div>

		           <div class="row">
		             <div class="col-12 col-sm-12">
		                 <div class="form-check-inline">
						    <label class="form-check-label">
						      <input type="radio" class="form-check-input" value="0" name="optradio">Nữ
						    </label>
						 </div>
						 <div class="form-check-inline">
						    <label class="form-check-label">
						      <input type="radio" class="form-check-input" value="1" name="optradio">Nam
						    </label>
						</div>
						<div class="form-check-inline disabled">
						    <label class="form-check-label">
						      <input type="radio" class="form-check-input" value="2" name="optradio" disabled>Tùy Chỉnh
						    </label>
						</div>
                     </div>
	               </div>
	               <br>
	               <div class="row">
	               	 <div class="col-6 col-sm-6">
	               	 	<div class="form-group">
	               	 		<button type="submit" class="btn btn-info btn-block"> Đăng Kí</button>
	               	 	</div>
	               	 </div>
	               </div>
	                   
				</form>

</div>
</div>
</body>
</html>

<script type="text/javascript">
		     $(document).ready(function (){
			     $('#formlogin').validate({
				     rules:{
					     email:{
						     required:true,
							 
						 },
						 pass:{
						     required:true,
							 
						 }
						
					 },
					 messages:{
					     email:{
						     required: "Trường Này Không Được Để Trống",
							
						 },
						 pass:{
						     required:"Trường Này Không Được Để Trống",
							 
						 },
						
					 }
				 
				 });
			 });
			 
		</script>






