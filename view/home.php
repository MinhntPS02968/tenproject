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
<!--Header-->
<div id="header" >
  <?php 
  include "header.php"; 
  ?>
</div>
<!--END Header-->

<!--Section-->
<section class="wrapper-box">
  <!--Menu-->
  <?php 
  include "menu.php"; 
  ?><!--END Menu-->

  <!--Container-->
  <div id="container">
      <div class="container">
        <div class="row">
          <aside id="column-left" class="col-sm-3 hidden-xs"><!--Left Container--> 
            <?php 
            include "leftaside.php"; 
            ?>
          </aside><!--END Left Container-->  

      <!--Right Container-->
      <div id="content" class="col-sm-9"> 
        <div class="slider-wrapper">
            <div id="slideshow1" class="nivoSlider">
              <a href="#">
              <img src="../controller/images/slide1.png" alt="Giới thiệu Divine Shop" /></a>
            </div>
        </div>

        <!--Product List-->
        <div id="product-tab-0" class="product-tab" style="margin-top: 15px;">
          <ul id="tabs-0" class="tabs clearfix">
          <li class="active"><a href="#">NỔI BẬT</a></li>
          <li><a href="#">MỚI</a></li>
          </ul>
          <!-- Product -->
          <div id="tab-featured-0" class="tab_content deactive" style="display: block;">
          <div class="row products-category product_carousel_tab mod" style="display: block;"> 
            <?php 
            include "product.php"; 
            ?>
          </div>           
          </div><!-- END Product -->
        </div><!--END Product List-->
      </div><!--END Right Container-->
  </div>
  </div>    
</div><!--END Container-->

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