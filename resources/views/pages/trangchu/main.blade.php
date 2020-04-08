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
       <button type="button" class="btn btn-light btn-block" data-toggle="modal" data-target="#myModal" style="color: #BBBBBB; background-color:white;">
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
                                     <i class="fas fa-image" style="color: #66CC00;"></i><br>Hình Ảnh</button>
                                 </div>
                                 <div class="col-4 col-sm-4">
                                     <button type="button" class="btn btn-light btn-sm btn-block">
                                     <i class="fas fa-user-tag" style="color: #FF3333  ;"></i><br>Gắn Thẻ</button>
                                 </div>
                                 <div class="col-4 col-sm-4">
                                     <button type="button" class="btn btn-light btn-sm btn-block">
                                     <i class="fas fa-grin-alt"style="color: #CC6600;"></i><br> Cảm Xúc</button>
                                 </div>
                             </div>
                     </form>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-block">Đăng Bài</button>
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
         
         <img src="img/tan.jpg" class="rounded-circle" style="width:30px; height:30px;"> <b>Lâm Văn Tân </b>
      
     
           <a class=" float-right" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-caret-down"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" id="background1">lưu bài viết</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" id="background1">chỉnh sữa bài</a>
            <a class="dropdown-item" href="#" id="background1">nhúng</a>
            <a class="dropdown-item" href="#" id="background1">tắt thông báo bài viết này</a>
            <a class="dropdown-item" href="#" id="background1">hiển thị trong tab</a>
        </div>
        </div>
     </div>
  </div>
  <div class="card-body">
    <div class="row" style=" margin-left:5px; padding-bottom: 5px; margin-top:-15px;">
      a
    </div>

    <div class="row">
     <img class="card-img-top" src="img/em.jpg" alt="Card image" width="100%" height="500px">
    </div>

     <div class="row" style="height:25px; margin-top:10px;">
          <div class="col-4 col-sm-4">
            <a href="" title="thich">
            <button type="submit" class="btn btn-light btn-block">
             
              <i class="far fa-thumbs-up"> 1</i> 
            </button>
           </a>
          </div>
        <div class="col-4 col-sm-4">
            <button type="submit" class="btn btn-light btn-block "><i class="far fa-comment-alt"> 3</i></button>
        
        </div>
            <div class="col-4 col-sm-4">
                       
                <button type="submit" class="btn btn-light btn-block"><i class="far fa-share-square"> 6</i></button>
             
            </div>
        </div>
  </div>
</div> <!-- kết thúc -->
    





