

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