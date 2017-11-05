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
            <li><a href="#">Giới thiệu về Divine Shop</a></li>
          </ul>
      <div class="row">                
        <div id="content" class="col-sm-12">      
          <h1>Giới thiệu về Divine Shop</h1>
          <p><img src="../controller/images/divine.jpg" style="width: 1250px;"><br></p>
        </div>
      </div>
    </div>
  </div><!--END Container-->

  <!--Footer-->
  <?php 
    include "footer.php"; 
  ?><!--END Footer-->
</section><!--END Section-->
</div>
</body>
</html>