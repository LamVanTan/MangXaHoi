   <div class="card profile-listcontact">
      <div class="card-header">
          <i class="fas fa-user-alt"></i> <b style="font-size: 17px; position: relative;top:10px;">Giới Thiệu</b>
      </div>
      <div class="card-body">
          <div class="row">
             <div class="col-sm-7" >
              <div class="lietke">
               <p><i class="fas fa-graduation-cap vitri"></i>&nbsp;&nbsp;Trường THPT Hoàng Diệu </p>
               <p><i class="fas fa-home vitri"></i>&nbsp;&nbsp; Thôn 1 Thái Sơn , Điện Tiến , Điện Bàn , Quảng Nam </p>
               <p> <i class="fas fa-map-marker-alt vitri"></i>&nbsp;&nbsp; Quảng Nam ,Quảng Nam-Đà Nẵng ,Việt Nam </p>
             </div>
               <b id="submit">Xem Thêm</b><b id="an">Ẩn</b>
               <div class="listthongtin">
                   <p><i class="fas fa-graduation-cap vitri"></i>&nbsp;&nbsp;Trường THPT Hoàng Diệu </p>
                   <p><i class="fas fa-home vitri"></i>&nbsp;&nbsp; Thôn 1 Thái Sơn , Điện Tiến , Điện Bàn , Quảng Nam </p>
                   <p> <i class="fas fa-map-marker-alt vitri"></i>&nbsp;&nbsp; Quảng Nam ,Quảng Nam-Đà Nẵng ,Việt Nam </p>
                   <p>Hiện Tại sống ở đâu </p>
                   <p>Hiện Tại làm việc gì .. vv</p>
               </div>
             </div>
             <div class="col-sm-5">
                <p>Lâm Văn Tân</p>
                <p>Giới tính : Chưa xác định</p>
                <p>Sinh nhật : Ngày 29 tháng 1 năm 2000</p>
             </div>
           </div>
     </div>
  </div>
  

  <style type="text/css">
    .profile-listcontact{
      margin-top: 10px;
    }
    .vitri{
      font-size: 15px;
      position: relative; bottom: 6px;
      color:black;
    }
    #submit{
      padding: 5px 30px;  
    }
    #an{
      padding: 5px 30px;
      position: relative;
      left: 350px;  
    }
  </style>
 <script src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
      $(".listthongtin").hide();
      $("#an").hide();
      $(document).ready(function(){
         $("#submit").click(function(){
            $(".listthongtin").slideDown(300);
            $(".lietke").hide();
            $("#submit").hide();
            $("#an").show();
         });
         $("#an").click(function(){
            $(".listthongtin").hide(300);
            $(".lietke").show();
            $("#submit").show();
            $("#an").hide();
         });
      });
  </script>