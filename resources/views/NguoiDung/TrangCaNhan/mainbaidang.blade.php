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
                       <form action="/action_page.php">
                       <div class="modal-body">
                         
                          <div class="camxucpost" style="display:none">
                           <input type="text" name="" id="emotion" disabled="" ><i class="fas fa-times emotionclose"></i>
                           </div>
                         
                           <textarea name=""  rows="1" placeholder="Cho tôi biết suy nghĩ của bạn?"></textarea>
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
                                         <button type="button" class="btn btn-light btn-sm btn-block camxuc" >
                                         <i class="fas fa-grin-alt"></i><br>Cảm Xúc</button>
                                     </div>
                                 </div>
                         
                       </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-dark btn-block bg-dark ">Đăng Bài</button>
                   </div>
                   </form>
              </div>
           </div>
         </div><!-- ket thúc cua sổ -->      
    </div> 
  </div><!-- kết thúc -->
  <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">      
              <!-- Modal content-->
              <div class="modal-content modal_camxuc">
                <div class="modal-header">
                  <div class="modal-title">Cảm Xúc</div>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <ul class="list-group">
                    <li class="list-group-item list-group-item-action">Đang Cảm Thấy Hạnh Phúc</li>
                    <li class="list-group-item list-group-item-action">Đang Cảm Thấy Buồn</li>
                    <li class="list-group-item list-group-item-action">Đang Cảm Thấy Vui</li>
                    <li class="list-group-item list-group-item-action">Đang Cảm Thấy Hoảng Sợ</li>
                    <li class="list-group-item list-group-item-action">Đang Cảm Thấy Giận Dữ</li>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
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
            <a class="dropdown-item editposts" id="background1">Chỉnh sửa bài</a>
            <a class="dropdown-item"  id="background1">Tắt thông báo</a>
            <a class="dropdown-item"  id="background1">Xóa </a> 
        </div>
       <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" id="background1">Ẩn</a>
            <a class="dropdown-item" href="#" id="background1">Tắt thông báo</a>
           
        </div> -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">      
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <b class="modal-title">Sửa bài viết</b>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="/action_page.php">
                      <input type="text" name="" placeholder="Hom nay tôi" style="outline: none; ">
                      <div class="">
                          <i class="fas fa-times" id="closeimg"></i>
                          <img src="img/tan.jpg" alt="" class="img-fluid rounded" style="margin-bottom: 10px;">
                      </div>
                      <button type="button" class="btn btn-dark btn-block bg-dark">Cập Nhập Bài Viết</button>    
                  </form>
                </div>
                
              </div>
            </div>
          </div>
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

     <div class="row btn-list" >
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
    


<style type="text/css">
  /*phàn tạo ra cua sổ khi clik vào nít
*/.modal-header{
  background-color: #eee;
}


.modal-body textarea{
  width: 100%;
  border-radius: 10px;
  border: none;
  background-color: #eee;
  margin: 10px 0;
  border-bottom: 0.5px solid #666666;
  padding-left: 15px;
}

.modal-body textarea:focus {
  height: 100px;
 
}
.modal_camxuc{
    margin-top: 310px;
    margin-left: 8px;
}

.modal-body .camxucpost{
  padding-bottom: -10px !important;

}

.modal-body .camxucpost #emotion{
  width: 100%;
  border-radius: 10px;
  border: none;
  display: inline;
  margin-bottom: 0;
  margin-top: 0;
  background-color: transparent;
  color: #BBBBBB;


}

.modal-body .camxucpost #emotion:focus{
  height: 34px;
}

.modal-body .emotionclose{
 position: relative;
  float: right;
  bottom: 33px;
  right: 5px;
}

#closeimg{
  position: relative;
  float: right;
  top: 25px;
  right: 10px;
  background-color: white;
  padding-left:3px;
  padding-right: 2px;padding-bottom: 2px;padding-top: 2px;
  border: 1px solid gray;
}

</style>

<script>

$(document).ready(function(){
  $(".dropdown-menu .editposts").click(function(){
    $("#myModal1").modal({show: true});
  });

   $(".camxuc").click(function(){
    $("#myModal2").modal({show: true});
  });



  $("ul li").click(function() {
    var bien= $(this).text();
    $("form #emotion").val(bien);
    $("form .camxucpost").show();
  });

  $(".emotionclose").click(function() {    
    $("form #emotion").val("");
    $("form .camxucpost").hide();
  });
  
  $("#closeimg").click(function() {    
    $("form #emotion").val("");
    $("form div").hide();
  });
 

});
</script>