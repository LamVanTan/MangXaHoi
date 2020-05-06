<!-- phần để viết đăng bài -->
<div class="card" >
     <div class="card-header">
      <div class="row">
        <div class="col-sm-12">
          <i class="fas fa-pencil-alt"></i><b> Bài Viết Mới </b>
        </div>
      </div>
     </div>
    
     <div class="card-body">
       <button type="button" class="btn btn-light btn-block btn-submit" data-toggle="modal" data-target="#myModal" title="Nhấn Vào Đây Để Đăng Bài Mới">
         <img src="img/tan.jpg" class="rounded-circle"> Bạn đang nghĩ gì?</button>
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
                                     <div class="col-sm-4">
                                        <button type="button" class="btn btn-light btn-sm btn-block">
                                         <i class="fas fa-image"></i><br>Hình Ảnh</button>
                                     </div>
                                     <div class="col-sm-4">
                                         <button type="button" class="btn btn-light btn-sm btn-block">
                                         <i class="fas fa-user-tag"></i><br>Gắn Thẻ</button>
                                     </div>
                                     <div class="col-sm-4">
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
       <div class="col-sm-12">
          <a href="" class="linkprofile">
           <img src="img/tan.jpg" class="rounded-circle"> <b>Lâm Văn Tân </b>
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
    <div class="row title-list">
       <div class="col-sm-12">
          <p>Hôm Này Tôi Nhớ Về Anh </p>
       </div>
    </div>

    <div class="row datetime-list">
       <div class="col-sm-12">
        <p>6/4/2020</p> <p>13:00</p>
      </div>
    </div>


    <div class="row img-list">
     <img class="card-img-top" src="img/em.jpg" alt="Card image" >
    </div>

     <div class="row btn-list">
          <div class="col-sm-4">
            <a href="" title="Thích" class="btn btn-default btn-block">
                <i class="fas fa-thumbs-up"> 1</i>
           </a>
          </div>
        <div class="col-sm-4">
            <a href="" title="Bình Luận" class="btn btn-default btn-block ">
                <i class="fas fa-comment"> 3</i>
             
            </a>
        </div>
            <div class="col-sm-4">
               <a href="" title="Chia Sẽ" class="btn btn-default btn-block">
                  <i class="fas fa-share"> 6</i>
               </a> 
            </div>
        </div>
        
        <hr>
        <div class="row" style="margin-right: 0px; margin-left: 0px !important;">
          <div class="comment" >
             <img src="img/tan.jpg" alt="" class="rounded-circle ">
             <div class="content-des">
                <span>
                  <a href="">Lam Van Tan</a> 
                Xinh đó. :)) Xinh đó. :)) Xinh đó. :)) Xinh đó. :))Xinh đó. :)) Xinh đó. :))
                inh đó. :)) Xinh đó. :)) Xinh đó. :)) Xinh đó. :))Xinh đó. :)) Xinh đó. :))
              </span><br>
                <a href="" class="edit-del-cmt">Chỉnh sửa</a> <a href="" class="edit-del-cmt">Xóa</a>
             </div>
             <div class="clearfix"></div>
          </div>
           <div class="comment">
             <img src="img/em.jpg" alt="" class="rounded-circle ">
             <div class="content-des">
                <span>
                  <a href="">Binh Lam</a> 
                Xinh đó. :)) Xinh đó. :)) Xinh đó. :)) Xinh đó. :))Xinh đó. :)) Xinh đó. :))
                inh đó. :)) Xinh đó. :)) Xinh đó. :)) Xinh đó. :))Xinh đó. :)) Xinh đó. :))
              </span><br>
                <a href="" class="edit-del-cmt">Chỉnh sửa</a> <a href="" class="edit-del-cmt">Xóa</a>
             </div>
             <div class="clearfix"></div>
          </div>
           <a href="" title="" class="xemthem">Xem thêm</a>
          </div>

        
           <form action="/action_page.php">
              
                <img src="img/tan.jpg" alt="admin" width="7%" class="rounded-circle img-comment">

                <textarea name="" id="text_comment" rows="1" placeholder="Viết bình luận..."></textarea>
             
            </form>
        
  </div>

</div> <!-- kết thúc -->
    
<style type="text/css" media="screen">
  .card .card-body form{
    padding: 0 0 !important;
    margin-top: 10px;

  }
  .card .card-body form {
    
     margin-bottom: -5px;
  }
   .card .card-body form img{
     position: relative;
     bottom: 10px;
     height: 35px;

   }
   .card .card-body form #text_comment { 
    margin: 0px ;
    outline: none !important;
    border: 1px solid lightgray;
    border-radius:30px;
    width: 92%;
    display: inline;
    background-color: #F8F8FF;
    padding-left: 15px;
    padding-right: 15px;
    color: black;
     border: 1px solid #AAAAAA;
}
.card .card-body form #text_comment:focus{ 
   padding:0px 10px 50px 10px;
   border: 1px solid #AAAAAA;
}

.card .card-body .comment{
  margin-bottom: 5px;
  width: 100%;
  padding: 0 !important;
 
}

.card .card-body .comment img{
  display:inline !important;
  width: 7%;
  height: 35px;
  float: left;
}



.card .card-body .comment .content-des{
  display:inline !important;
  background-color:transparent;
  padding: 5px 10px;
  border-radius: 30px;
  font-size: 15px;
  width: 92%;
  float: right;
}

.card .card-body .comment .content-des span a{
   color: black;
   font-weight: bold;
}

.card .card-body .comment .content-des .edit-del-cmt{
   color:gray;
   font-size: 12px;
   margin-right: 20px;
}


.card .card-body {
    padding-bottom: 5px !important;
    padding: 1rem;
}

.xemthem{
  margin-left: 2px;
  color: black;
}

.xemthem:hover{
  margin-left: 2px;
  color: black;
}


</style>

