<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Divine Shop</title>
<script src="../controller/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="../controller/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="../controller/js/bootstrap.min.js" type="text/javascript"></script>

<!--Code Css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../controller/css/stylesheet.min.css" />
<link rel="stylesheet" type="text/css" href="../controller/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../controller/css/product.css">
<link rel="stylesheet" type="text/css" href="../controller/css/home.css">
<link rel="stylesheet" type="text/css" href="../controller/css/responsive.min.css" />
<!--Code menu-->
<script type="text/javascript" src="../controller/js/custom.min.js"></script>
<!--code slide-->
<script type="text/javascript" src="../controller/js/common.min.js"></script>
<script type="text/javascript" src="../controller/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../controller/js/jquery.nivo.slider.pack.js" ></script>

</head>
<body class="common-home">
<div id="header" >
  <?php 
  include "header.php"; 
  ?>
</div>

<!--Section-->
<section class="wrapper-box">
  <!--Menu-->
  <?php 
  include "menu.php"; 
  ?><!--END Menu-->

  <!--Container-->
  <div id="container">
<div class="container">
  <ul class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"><dd>Home</dd></i></a></li>
    <li><a href="#">Tài khoản</a></li>
    <li><a href="#">Đăng nhập</a></li>
  </ul>
  <div class="row">                
  <div id="content" class="col-sm-9">      
  <div class="row">
      <div class="col-sm-6">
        <div class="well">
          <h2>Admin</h2>
          
          <p>Khu vực dành cho admin</p>
          <a href="../view/admin_login.php" class="btn btn-primary">Tiếp tục</a></div>
      </div>
        <!--Đăng nhập-->
        <div class="col-sm-6">
          <div class="well">
            <h2>User</h2>
            <form action="usercontroller.php?action=login" method="post" enctype="multipart/form-data">
              <input type="hidden" name="action" value="login"/>
              <div class="form-group">
                <label class="control-label" for="input-email">Địa chỉ E-Mail:</label>
                <input type="text" name="email" placeholder="Địa chỉ E-Mail:" id="input-email" class="form-control" value="vanA@AA">
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Mật khẩu:</label>
                <input type="password" name="password" placeholder="Mật khẩu:" id="input-password" class="form-control" value="123456">
                <a href="#">Quên mật khẩu</a>
              </div>
              <input type="submit" value="Đăng nhập" class="btn btn-primary">
            </form>
          </div>
          <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;redirect_uri=http%3A%2F%2Fdivineshop.vn%2Findex.php%3Froute%3Daccount%2Flogin&amp;client_id=550595820685-gsojp7ujitgsm2bfj7f0tr04pg9em3fs.apps.googleusercontent.com&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;access_type=offline&amp;approval_prompt=force">
          <img src="../controller/images/google.png" alt="Signin with Google"></a>        
        </div><!--END Đăng nhập-->
    </div>
    </div>
  <aside id="column-right" class="col-sm-3 hidden-xs">

  <h3><span>Tài khoản</span></h3>

  <div class="list-group">
    <ul class="list-item">
      <li><a href="javascript:void(0)">Quên Mật Khẩu</a></li>
      <li><a href="javascript:void(0)">Tài Khoản Của Tôi</a></li>
      <li><a href="javascript:void(0)">Giỏ hàng</a></li>
      <li><a href="javascript:void(0)">Lịch sử đơn hàng</a></li>
    </ul>
  </div>  
  </aside>
</div>
</div>
</div>

<!--END Container-->

<!--Bottom Container-->
<div class="container">
<div class="custom-feature-box row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="feature-box fbox_1">
        <div class="title">🚀 Giao hàng cực nhanh</div>
          <p>Hệ thống giao hàng tự động trong vòng 5 phút.</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="feature-box fbox_2">
        <div class="title">🎁 Bảo hành trọn đời</div>
          <p>Cam kết bảo hành trọn đời với mọi game bán ra</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="feature-box fbox_3">
            <div class="title">✯ Uy tín 5✩</div>
                <p>Chất lượng được đánh giá bởi hàng nghìn khách hàng</p>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="feature-box fbox_4">
            <div class="title">✉ Hỗ trợ tận tình</div>
                <p>Hệ thống support online liên tục từ 8:00 -&gt; 24:00</p>
        </div>
    </div>
</div>
</div><!--END Bottom Container-->

  <!--Footer-->
  <?php 
    include "footer.php"; 
  ?><!--END Footer-->
</section><!--END Section-->
</body>
</html>