
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
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
<script type="text/javascript">
$(document).ready(function() {  
  $("#filter_name").autocomplete("getdata.php?lan=vi", {
    width: 445,
    resultsClass: "ac_results col-lg-7",
    matchContains: true
  });
});
</script>


<body class="account-register">
<?php include 'template/header.php' ?>
<div id="container">
<div class="container">
  <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"><dd>Home</dd></i></a></li>
        <li><a href="#">Tài khoản</a></li>
        <li><a href="dangky.php">Đăng Kí</a></li>
      </ul>
    <div class="row">         
           <div id="content" class="col-sm-9">      
           <h1>Đăng Kí Tài Khoản</h1>
      <p>Nếu bạn đã đăng kí tài khoản, vui lòng đăng nhập tại <a href="dangnhap.php">đây</a>.</p>
<form action="../controller/index.php?action=signup" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset id="account">
          <legend>Thông tin cá nhân</legend>
          <div class="form-group required" style="display: none;">
            <label class="col-sm-2 control-label">Nhóm khách hàng</label>
            <div class="col-sm-10">
                <div class="radio">
                      <label>
                      <input type="radio" name="customer_group_id" value="1" checked="checked" />
                      Default</label>
                </div>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-full_name">Họ và Tên</label>
            <div class="col-sm-10">
              <input type="text" name="full_name" value="" placeholder="Tên" id="input-full_name" class="form-control" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-phone">Điện Thoại</label>
            <div class="col-sm-10">
              <input type="number" name="phone" value="" placeholder="Điện Thoại" id="input-phone" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-gender">Giới Tính</label>
            <div class="col-sm-2">
              <select class="form-control" name="gender">
                            <option value="1">Nam</option>
                            <option value="0">Nữ</option>
                        </select>
                      </div>
                        </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-birthday">Ngày Sinh</label>
            <div class="col-sm-10">
              <input type="date" name="birthday" value="" placeholder="Ngày Sinh" id="input-birthday" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-address">Địa Chỉ</label>
            <div class="col-sm-10">
              <input type="text" name="address" value="" placeholder="Địa Chỉ" id="input-address" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-pincode">Mã Pin</label>
            <div class="col-sm-10">
              <input type="number" name="pincode" value="" placeholder="Mã Pin 4 Số" id="input-pincode" class="form-control" />
                          </div>
          </div>
                  </fieldset>
        <fieldset>
          <legend>Mật khẩu</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-username">Tên Tài Khoản</label>
            <div class="col-sm-10">
              <input type="text" name="username" value="" placeholder="Tài Khoản" id="input-username" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Mật Khẩu</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="Mật Khẩu" id="input-password" class="form-control" />
                          </div>
          </div>
          
        </fieldset>
        <!--<script src="//www.google.com/recaptcha/api.js" type="text/javascript"></script>
<fieldset>
<div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm">Nhập lại Mật Khẩu</label>
            <div class="col-sm-10">
              <input type="password" name="confirm" value="" placeholder="Nhập lại Mật Khẩu" id="input-confirm" class="form-control" />
                          </div>
          </div>
  <legend>Mã xác thực</legend>
  <div class="form-group required">
        <label class="col-sm-2 control-label">Vui lòng điền mã xác thực bên dưới</label>
    <div class="col-sm-10">
      <div class="g-recaptcha" data-sitekey="6LcjiRAUAAAAALOM1SbJgqWm1Xtaj91dzpEbLP8c"></div>
          </div>
      </div>
</fieldset>-->
      <div class="buttons">
          <div class="pull-right">Tôi đã đọc và đồng ý với điều khoản <a class="fancybox" href="#" alt="Chính sách bảo mật"><b>Chính sách bảo mật</b></a>                      
              <input type="checkbox" name="agree" value="1" />
                          &nbsp;
              <input type="submit" value="Tiếp tục" class="btn btn-primary" />
          </div>
      </div>
</form>
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
