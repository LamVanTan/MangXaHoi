<div class="card">
  <img src="img/nen.jpg" alt="anh bia" class="img-fluid cover-image">
  <div class="card-body profile-menu">
         <div class="row">
             <div class="col-sm-4 addfriend">
                 
                 <div class="row">
                     <div class="col-sm-10">
                       <?php $ten=1 ?>
                          @if($ten==0)
                         <a class="nav-link btn btn-sm ph" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">
                          <i class="fas fa-user-plus"></i> 
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                 <a class="dropdown-item" href="Home/TrangCaNhan/content">
                                  <i class="fas fa-check"></i>&nbsp;&nbsp;Đồng ý 
                                 </a>    

                                  <div class="dropdown-divider"></div> 

                                  <a class="dropdown-item" href="#">
                                      <i class="fas fa-times"></i>&nbsp;&nbsp;Hủy 
                                 </a> 
                          </div>

                          @else

                           <a class="nav-link btn btn-sm kb" href="">
                             <i class="fas fa-user-check"></i>
                          </a>
                          @endif
                        
                      </div>  
                    </div>

                    <div class="row mess-follow">
                     
                      <div class="col-sm-2 sms">
                         <a class="nav-link btn btn-sm" href="">
                              <i class="fas fa-sms"></i>
                          </a>
                      </div>
                      <div class="col-sm-2 follow">
                         <a class="nav-link btn btn-sm " href="">
                             <i class="fas fa-rss"></i>
                          </a>
                      </div>
                      <div class="col-sm-2 drop">
                         <a class="nav-link btn btn-sm" href="">
                              <i class="fas fa-caret-down"></i>
                          </a>
                      </div>
                 </div>
             </div>

             <div class="col-sm-4 img-profile">
                <img src="img/tan.jpg" class="rounded-circle" /> <br> 
                <b >Lâm Văn Tân</b>
              </div>

             <div class="col-sm-4"> 

             </div>
        </div>


         <ul class="profile-address">
              <div class="row ">
                 <div class="col-sm-6">
                    <li>
                      <i class="fas fa-graduation-cap icon" ></i>
                      <p>Đã Học Tại Trường THPT Hoàng Diệu ,Điện Bàn,Quảng Nam</p>
                      <div class="clearfix"></div>
                    </li>
                    <li>
                     <i class="fas fa-university icon"></i>
                      <p>Trường Đại Học Công Nghệ Thông Tin</p>
                      <div class="clearfix"></div>
                    </li>

                    
                  </div>

                   <div class="col-sm-6" >
                    <li>
                      <i class="fas fa-home icon"></i>
                      <p> Thôn 1 Thái Sơn , Điện Tiến , Điện Bàn , Quảng Nam </p>
                      <div class="clearfix"></div>
                    </li>
                    <li>
                      <i class="fas fa-map-marker-alt icon"></i>
                      <p> Điện Tiến ,Điện Bàn , Quảng Nam</p>
                      <div class="clearfix"></div>
                    </li>
                   
                  </div>
             </div>    
         </ul>

          <div class="row menu-list" >
                
                <div class="col-sm-12 ">
                    <ul class="nav">
                      <li class="nav-item">
                        <a class="nav-link" href="Home/TrangCaNhan/content" id="background"><b>Bài Viết</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Home/TrangCaNhan/thongtin" id="background"><b>Thông Tin</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Home/TrangCaNhan/BanBe" id="background"><b>Bạn Bè</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="Home/TrangCaNhan/img" id="background"><b>Hình Ảnh</b></a>
                      </li>
                      
                    </ul>
                </div>
                
                 
        </div>
        
</div>
</div>

<style type="text/css">
  #background{
  padding:.10rem 1rem !important;
 }
  .icon{
    color: black;
    font-size: 16px;
  }
  .mess-follow{
    position: relative;
    bottom:125px;

  }
/* sms */
  .mess-follow .sms a{
    background-color: white;
    position: relative;
    right:15px;
    bottom: 0px;
    padding-top: 0;
    padding-bottom: 0;
    opacity: 0.7;
    padding-right: 17px;

  }

  .mess-follow .col-sm-2 a .fa-sms{
    position: relative;
    right:16px;
    bottom: 4px;
    font-size: 18px;
  }/* ket thuc */


/* follow*/
   .mess-follow .follow a{
    background-color: white;
    position: relative;
    right:63px;
    bottom:35px;
    padding-top: 0;
    padding-bottom: 0;
    opacity: 0.7;
    padding-right: 17px;

  }

  .mess-follow .follow a .fa-rss{
    position: relative;
    right:16px;
    bottom: 4px;
    color: black;
    z-index: 1;
    font-size: 20px;
    
  }/* ket thuc */

  /* drop */
  .mess-follow .drop a{
    background-color: white;
    position: relative;
    right:112px;
    bottom:70px;
    padding-top: 0;
    padding-bottom: 0;
    opacity: 0.7;
    padding-right: 17px;
  }

  .mess-follow .drop a .fa-caret-down{
    position: relative;
    right:13px;
    bottom: 4px;
    color: black;
  }/* ket thúc */
  
  .fa-user-check{
    font-size: 15px;
    position: relative;
    bottom: 4px;
    right: 2px;
    color: black;
  }
  
</style>

  
