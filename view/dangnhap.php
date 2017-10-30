
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Index</title>
<script src="responsiveslides.min.js"></script>
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--Code Css-->
<link rel="stylesheet" type="text/css" href="css/stylesheet.min.css" />
<link href="catalog/view/theme/bigshop/stylesheet/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/product.css">
<link rel="stylesheet" type="text/css" href="css/dangnhap.css">
<link rel="stylesheet" type="text/css" href="css/responsive.min.css" />
<!--Code menu-->
<script type="text/javascript" src="js/custom.min.js"></script>
<!--code slide-->
<script type="text/javascript" src="js/common.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<!--<link href="css/slideshow.min.css" type="text/css" rel="stylesheet" media="screen" />-->


<body class="account-login">
<?php include 'template/header.php' ?>


<div id="container">
<div class="container">
  <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"><dd>Home</dd></i></a></li>
        <li><a href="#">Tài khoản</a></li>
        <li><a href="dangnhap.php">Đăng nhập</a></li>
      </ul>
      <div class="row">                <div id="content" class="col-sm-9">      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <h2>Khách hàng mới</h2>
            <p><strong>Đăng kí tài khoản</strong></p>
            <p>Bằng cách tạo tài khoản bạn sẽ có thể mua sắm nhanh hơn, cập nhật tình trạng đơn hàng, theo dõi những đơn hàng đã đặt.</p>
            <a href="dangky.php" class="btn btn-primary">Tiếp tục</a></div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <h2>Khách hàng cũ</h2>
            <p><strong>Tôi là khách hàng cũ</strong></p>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label" for="input-email">Địa chỉ E-Mail:</label>
                <input type="text" name="email" value="" placeholder="Địa chỉ E-Mail:" id="input-email" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Mật khẩu:</label>
                <input type="password" name="password" value="" placeholder="Mật khẩu:" id="input-password" class="form-control" />
                <a href="#">Quên mật khẩu</a></div>
              <input type="submit" value="Đăng nhập" class="btn btn-primary" />
                          </form>
          </div>
			    </div>
      </div>
     </div>
    <aside id="column-right" class="col-sm-3 hidden-xs">
    <h3>Tài khoản</h3>
<div class="list-group">
  <ul class="list-item">
    <li><a href="dangnhap.php" >Đăng nhập</a></li>
    <li><a href="dangky.php" >Đăng kí</a></li>
    <li><a href="#" >Quên Mật Khẩu</a></li>
    <li><a href="#" >Tài Khoản Của Tôi</a></li>
    <li><a href="#" >Danh sách địa chỉ</a></li>
    <li><a href="#" >Giỏ hàng</a></li>
    <li><a href="#" >Lịch sử đơn hàng</a></li>
    <li><a href="#" >Tải về</a></li>
    <li><a href="#" >Chi trả theo định kỳ</a></li>
    <li><a href="#" >Điểm thưởng</a></li>
    <li><a href="#" >Quay lại</a></li>
    <li><a href="#" >Giao dịch</a></li>
    <li><a href="#" >Thư thông báo</a></li>
    </ul>
  </div>  </aside>
</div>
</div>
</div>


<?php include 'template/footer.php' ?>
</body>
</html>
