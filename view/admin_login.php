
<!DOCTYPE html>
<head>
<title>Assignment2</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../controller/css/home.css">
<link rel="stylesheet" type="text/css" href="../controller/css/style4.css">
<link rel="stylesheet" type="text/css" href="../controller/css/login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    @media (min-width: 992px){}
    .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
    float: none;;
}
</style>
<body>
 <?php
if(isset($_GET['error'])){
    echo "<p style='width:100%; text-align:center'> Hảy nhập ID và Password </p>";
}
if(isset($_GET['accounterror'])){
    echo "<p style='width:100%; text-align:center'> Sai ID hoặt Password </p>";
}

?>    
    
<div class="container"> 
 <div class="row vertical-center-row"> 
  <div class="col-md-4 col-center-block login-widget"> 
   <h1 class="text-center"><i class="fa fa-dot-circle-o"></i>ADMIN
   </h1> 
   <div > 
    <form action="../controller/admincontroller.php?action=admin_login" method="POST" style="text-align:center;">
    <div class="form-group"> 
     <div class="input-group"> 
      <div class="input-group-addon"><i class="fa fa-user fa-fw"></i>
      </div> <input class="form-control"type="text" name="email" value="" placeholder="admin_login"> 
     </div> 
    </div> 
    <div class="form-group"> 
     <div class="input-group"> 
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i>
      </div> <input class="form-control" placeholder="******" type="password" name="password" > 
     </div> 
    </div> 
    <div class="form-group"> 
     <div class="checkbox"> <label for="c1"><input id="c1" name="cc" type="checkbox">Nhớ thông tin</label> 
     </div> 
    </div> 
    <div class="form-group"> 
     <button type="submit" value="Login by admin" class="btn btn-primary btn-block">Đăng nhập</button> 
     <hr> 
     <p class="text-center">Bạn có tài khoản không? <strong><a href="../controller/usercontroller.php?action=signin_view" target="_self">Đăng ký ngay!</a></strong>
     </p> 
    </div> 
    </form>
   </div> 
  </div> 
 </div>
</div>





<?php
            
        ?>
</body>
</html>