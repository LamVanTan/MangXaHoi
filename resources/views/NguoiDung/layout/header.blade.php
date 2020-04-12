<div class="row fixed-top" style="background-color:white;">
	<div class="col-1 col-sm-1 ">
   
	  
	</div>
	<div class="col-3 col-sm-3 ">
     	<nav class="navbar navbar-expand-sm ">
				<ul class="navbar-nav float-right">
					<li class="nav-item">
                       <a class="nav-link" href="" style="color: black;">
                       	 <img src="img/news1.png" width="100px" style="position: relative; top:9px; left:90px;">
                       </a>
			        </li>

			        <li class="nav-item" style="position: relative;left:140px; bottom: 3px;">
						<a class="nav-link" href="Home/TrangChu/content" title="Trang Chủ">
							<div style="font-size: 20px;color: black;"><i class="fas fa-home"></i></div>
						</a>
					</li>
		       </ul>
	</nav>
	</div>
	 
	  <div class="col-4 col-sm-4 ">
	  	<nav class="navbar navbar-expand-sm ">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link">
	  		      <div class="search-header" >
				 <div class="input-header">
				 	<form>
						 <i class="fas fa-search"></i>
						 <input type="text" name="" placeholder="Tìm kiếm...">
					 </form>
				 </div>
			 </div> 
			</a>
			</li>
		</ul>
	</nav>
	  </div>

		<div class="col-3 col-sm-3" id="menu">
			<nav class="navbar navbar-expand-sm ">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="" title="Trang Cá Nhân" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="rounded-circle" src="img/tan.jpg" width="25px" height="25px" style="position: relative; top:3px;left:4px;">
						</a>
						<div class="dropdown-menu thongbao" aria-labelledby="navbarDropdown" style="width: 120px;">
				             <a class="dropdown-item" href="Home/TrangCaNhan/content" id="background1">
				                    Trang Cá Nhân
				             </a>    
				              <div class="dropdown-divider"></div>     
				              <a class="dropdown-item" href="#" id="background1">
				                   Đăng Xuất
				             </a>              
				        </div>
					</li>
					
					
					<!-- phần kết bạn -->
					<li class="nav-item">
				         <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Lời Mời Kết Bạn">
				         	<div style="font-size: 20px;color: black;"><i class="fas fa-user-friends"></i>
				        </div>
				        </a> 
				        <div class="dropdown-menu " aria-labelledby="navbarDropdown" style="width:350px;" >
				             <div class="dropdown-item hover1" style="padding:0 5px;">
				             	
				             	<div class="row">
				                   <div class="col-2 col-sm-2">
				                         <a href="" >	
				                         <img src="img/tan.jpg" class="rounded-circle" width="30px" height="30px" style="margin-top: 2px;">
				                         </a>
				                     </div>
				                     <div class="col-6 col-sm-6 " style="margin-top: 5px;">
				                         <a href="" style="color:black; margin-left: -20px;font-weight: bold;">Lâm Văn Nguyễn Thịnh </a>
				                    
				                    </div>
				                    <div class="col-2 col-sm-2" >
				                    	<a href="" title="Chấp Nhận" class="req" style="margin-left:30px;margin-bottom: 5px; padding-right:5px;"><i class="fas fa-check"></i></a>
				                    	
				                    </div>
				                    <div class="col-2 col-sm-2">
				                    	<a href="" title="Từ Chối" class="req" style="margin-bottom:5px; padding-right: 5px;"><i class="fas fa-times"></i></a>
				                    	
				                    </div>
				                </div>
				              
				                    
				             </div>    
				              <div class="dropdown-divider"></div>  
				                
				        </div>

			      </li>
			      <!-- kết thúc phần kết bạn -->

			      <!-- phần tin nhắn -->
				  <li class="nav-item ">
				        <a class="nav-link" href="Home/TinNhan/content" title="Tin Nhắn"><div style="font-size: 20px;color: black;"><i class="fas fa-sms"></i></div>
				        </a>
			      </li>
					<!-- kết thúc phần tin nhắn -->

					<!-- phần thông báo -->
			      <li class="nav-item">
				        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Thông Báo">
				        	<div style="font-size: 20px;color: black;"><i class="fas fa-bell"></i></div>
				        </a>
				        <div class="dropdown-menu thongbao" aria-labelledby="navbarDropdown" >
				             <a class="dropdown-item" href="#" id="background1">
				             	<div class="row">
				             		<div class="col-2 col-sm-2">
				                         <img src="img/tan.jpg" class="rounded-circle" width="40px" height="40px">
				                    </div>
				                    <div class="col-10 col-sm-10">
				                         <p> Văn Tân Và 5 người khác vừa thích bài của bạn Văn Tân Và 5 người</p>
				                    </div>
				                </div>
				                    
				             </a>    
				              <div class="dropdown-divider"></div>                 
				        </div>
			      </li>
			      
		                 
				</ul>
			</nav>
		</div>

	<div class="col-1 col-sm-1">

	  
	</div>

</div>

<style type="text/css">
	/*thongbao*/
	  .thongbao>a {
	     word-wrap: break-word;
	     white-space: normal;  
	     font-size: 14px;
	  } 
	.thongbao{
		width:350px;
	}

	.thongbao a:hover{
		color: white;
	}
	/*ket thuc*/

    /*ket ban*/
	.hover1:hover{
        background-color: transparent;
	}

    .req{
         color:black;
    }
    .req:hover{
    	border-bottom: 2px solid black;
    	color: black;
    }
</style>
