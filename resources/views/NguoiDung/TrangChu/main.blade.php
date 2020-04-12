<!-- phần để viết đăng bài -->
<div class="card" >
     <div class="card-header">
      <div class="row">
        <div class="col-12 col-sm-12">
          <i class="fas fa-pencil-alt" style=" font-size:17px; color:black  ;"></i><b> Bài Viết Mới </b>
        </div>
      </div>
     </div>
    
     <div class="card-body">
       <button type="button" class="btn btn-light btn-block" data-toggle="modal" data-target="#myModal" style="color: #BBBBBB; background-color:white;" title="Nhấn Vào Đây Để Đăng Bài Mới">
         <img src="img/tan.jpg" class="rounded-circle" width="50px" height="50px;"> Bạn đang nghĩ gì?</button>
           <!-- Modal -->
           <div class="modal fade " id="myModal" role="dialog" data-backdrop="static">
             <div class="modal-dialog" >
              <!-- Modal content-->
               <div class="modal-content">
                   <div class="modal-header">
                       <b class="modal-title">Tạo Bài Viết Mới</b>
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                     <form action="/action_page.php">
                         <input type="text" name="" placeholder="Cho tôi biết suy nghĩ của bạn?">
                             <div class="row" >
                                 <div class="col-4 col-sm-4">
                                    <button type="button" class="btn btn-light btn-sm btn-block">
                                     <i class="fas fa-image"></i><br>Hình Ảnh</button>
                                 </div>
                                 <div class="col-4 col-sm-4">
                                     <button type="button" class="btn btn-light btn-sm btn-block">
                                     <i class="fas fa-user-tag"></i><br>Gắn Thẻ</button>
                                 </div>
                                 <div class="col-4 col-sm-4">
                                     <button type="button" class="btn btn-light btn-sm btn-block">
                                     <i class="fas fa-grin-alt"></i><br>Cảm Xúc</button>
                                 </div>
                             </div>
                     </form>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-dark btn-block bg-dark">Đăng Bài</button>
                   </div>
              </div>
           </div>
         </div><!-- ket thúc cua sổ -->      
    </div> 
  </div><!-- kết thúc -->
  
<!-- phần hiển thị bài dăng -->
<div class="card" style="margin-top: 10px;">
  <div class="card-header">
     <div class="row">
       <div class="col-12 col-sm-12">
          <a href="" class="linkprofile">
           <img src="img/tan.jpg" class="rounded-circle" style="width:30px; height:30px;"> <b>Lâm Văn Tân </b>
          </a>
     
           <a class=" float-right" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-caret-down"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" id="background1">Chỉnh sửa bài</a>
            <a class="dropdown-item" href="#" id="background1">Tắt thông báo</a>
            <a class="dropdown-item" href="#" id="background1">Xóa </a> 
        </div>
       <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" id="background1">Ẩn</a>
            <a class="dropdown-item" href="#" id="background1">Tắt thông báo</a>
           
        </div> -->

        </div>
     </div>
  </div>
  <div class="card-body">
    <div class="row" style=" margin-left:5px; padding-bottom: 5px; margin-top:-15px;">
      <p>Hôm Này Tôi Nhớ Về Anh</p>
    </div>

    <div class="row datetime" style=" margin-left:5px; padding-bottom: 5px; margin-top:-15px;">
      <span >6/4/2020</span> <span >13:00</span>
    </div>


    <div class="row">
     <img class="card-img-top" src="img/em.jpg" alt="Card image" width="100%" height="500px">
    </div>

     <div class="row" style="height:25px; margin-top:10px;">
          <div class="col-4 col-sm-4">
            <a href="" title="Thích" class="btn btn-light btn-block">
                   <i class="fas fa-thumbs-up" style="color:silver;"></i> <b style="position: relative; top: 3px;">1</b>
           </a>
          </div>
        <div class="col-4 col-sm-4">
            <a href="" title="Bình Luận" class="btn btn-light btn-block ">
                <i class="fas fa-comment"> 3</i>
             
            </a>
        </div>
            <div class="col-4 col-sm-4">
               <a href="" title="Chia Sẽ" class="btn btn-light btn-block">
                  <i class="fas fa-share"> 6</i>
               </a> 
            </div>
        </div>
  </div>
</div> <!-- kết thúc -->
    


<style type="text/css">
  .linkprofile{
    color: black;
  }
  .linkprofile:hover{
   color: black;
  }

</style>


