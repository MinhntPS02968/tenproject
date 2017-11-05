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
      <?php                    
        $pro = new product();
        $result = $pro->getProductById($product_id);
      ?>
      <div id="content" class="col-sm-9">
      <h1><?php echo $result['product_name']?></h1>
      <div class="row product-info">
        <div class="col-sm-6">
            <img src="<?php echo '../controller/images/'.$result['product_images'] ?>">
      </div>
      <div class="col-sm-6">
          <ul class="list-unstyled description">
             <li><b>Nhà sản xuất:</b><a href="#"> <?php echo $result['category_name']?></a></li>
             <li><b>Mã sản phẩm:</b><span> code5</span></li>
             <li><b>Tình trạng:</b><span style="color:#53af2e; font-weight:bold;"> Còn hàng</span></li>
          </ul>
          <ul class="price-box" class="list-unstyled">
            <li class="price"  itemprop="offers">
              <span class="price-old"><?php echo $result['price']?></span>
              <span class="real" itemprop="price"><?php echo $result['discount_price']?></span>
            </li>
          </ul>
           <div id="product">
              <div class="cart">
                <div>
                    <div class="qty">
                        <label class="control-label" for="input-quantity">Số lượng</label>
                        <a class="qtyBtn mines" href="javascript:void(0);">-</a>
                        <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                        <a class="qtyBtn plus" href="javascript:void(0);">+</a>
                        
                        <input type="hidden" name="product_id" value="91" />
                    <div class="clear"></div>
                    </div>
                        <button type="button" id="button-cart" data-loading-text="Đang tải..." class="btn btn-primary btn-lg">Thêm vào giỏ</button>
                </div>
                <div>
                        <button type="button" class="wishlist" onclick="wishlist.add('91');"><i class="fa fa-heart"></i> Thêm vào yêu thích</button>
                      <br />
                        <button type="button" class="wishlist" onclick="compare.add('91');"><i class="fa fa-exchange"></i> So sánh sản phẩm này</button>
                </div>
              </div>
            </div>
            </div>
          <ul class="nav nav-tabs"> 
                <li class="active"><a href="#tab-description" data-toggle="tab">Chi tiết sản phẩm</a></li>
                <li ><a href="#tab-platform" data-toggle="tab">Cấu hình</a></li>
                <li><a href="#tab-review" data-toggle="tab">Đánh giá (0)</a></li>
          </ul>

<!--Chi tiết sản phẩm-->
          <div class="tab-content">
          <div class="tab-pane active" id="tab-description" itemprop="description">
            <p><?php echo $result['detail']?></p>
          </div>

<!--Đánh giá sản phẩm-->

          <div class="tab-pane " id="tab-platform" itemprop="platform"></div>
            <div class="tab-pane" id="tab-review">
              <form class="form-horizontal" id="form-review">
              <p>Không có đánh giá cho sản phẩm này.</p>
              <div id="review"></div>
              <h2>Viết đánh giá</h2>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label" for="input-name">Tên bạn:</label>
                  <input type="text" name="name" value="" id="input-name" class="form-control" />
                </div>
              </div>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label" for="input-review">Đánh giá của bạn:</label>
                  <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                  <div class="help-block"><span style="color: #FF0000;">Lưu ý:</span> không hỗ trợ HTML!</div>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-sm-12"></div>
              </div>
              <script src="//www.google.com/recaptcha/api.js" type="text/javascript"></script>
                    <fieldset>
                      <legend>Mã xác thực</legend>
                      <div class="form-group required">
                        <label class="col-sm-2 control-label">Vui lòng điền mã xác thực bên dưới</label>
                      <div class="col-sm-10">
                  <div class="g-recaptcha" data-sitekey="6LcjiRAUAAAAALOM1SbJgqWm1Xtaj91dzpEbLP8c"></div>
                  <img src="images/snip.PNG">
                      </div>
                      </div>
                    </fieldset>
                  <div class="buttons">
                    <div class="pull-right">
                      <button type="button" id="button-review" data-loading-text="Đang tải..." class="btn btn-primary">Tiếp tục</button>
                    </div>
                  </div>
              </form>
          </div>
        </div>                          
      </div>
      </div><!--END Right Container-->
  </div>
  </div>    
</div><!--END Container-->

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