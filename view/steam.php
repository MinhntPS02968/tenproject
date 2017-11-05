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
    <li><a href="http://divineshop.vn/index.php?route=common/home"><i class="fa fa-home"><dd>Home</dd></i></a></li>
    <li><a href="http://divineshop.vn/steam">Steam</a></li>
  </ul>
  <div class="row">
  <aside id="column-left" class="col-sm-3 hidden-xs">
    <?php 
    include "leftaside.php"; 
    ?>
  </aside>
      <div id="content" class="col-sm-9">      
      <h1>Steam</h1>
      
      <div class="product-filter">
        <div class="row">
          <div class="col-md-5">
            <div class="btn-group">
              <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="" data-original-title="Danh sách"><i class="fa fa-th-list"></i></button>
              <button type="button" id="grid-view" class="btn btn-default selected" data-toggle="tooltip" title="" data-original-title="Lưới sản phẩm"><i class="fa fa-th"></i></button>
            </div>
            <a href="http://divineshop.vn/index.php?route=product/compare" id="compare-total">So sánh sản phẩm (0)</a> </div>
            
            <div class="col-md-4 col-xs-6">
            <div class="form-group input-group input-group-sm">
              <label class="input-group-addon" for="input-sort">Sắp xếp theo:</label>
              <select id="input-sort" class="form-control" onchange="location = this.value;">
              <option value="http://divineshop.vn/steam?sort=p.sort_order&amp;order=ASC" selected="selected">Mặc định</option>
                <option value="http://divineshop.vn/steam?sort=pd.name&amp;order=ASC">Tên (A - Z)</option>
                <option value="http://divineshop.vn/steam?sort=pd.name&amp;order=DESC">Tên (Z - A)</option>
                <option value="http://divineshop.vn/steam?sort=p.price&amp;order=ASC">Giá (Thấp &gt; Cao)</option>
                <option value="http://divineshop.vn/steam?sort=p.price&amp;order=DESC">Giá (Cao &gt; Thấp)</option>
                <option value="http://divineshop.vn/steam?sort=rating&amp;order=DESC">Đánh giá (Cao nhất)</option>
                <option value="http://divineshop.vn/steam?sort=rating&amp;order=ASC">Đánh giá (Thấp nhất)</option>
                <option value="http://divineshop.vn/steam?sort=p.model&amp;order=ASC">Kiểu (A - Z)</option>
                <option value="http://divineshop.vn/steam?sort=p.model&amp;order=DESC">Kiểu (Z - A)</option>
            </select>
            </div>
            </div>

        <div class="col-md-3 col-xs-6">
          <div class="form-group input-group input-group-sm">
            <label class="input-group-addon" for="input-limit">Hiển thị:</label>
            <select id="input-limit" class="form-control" onchange="location = this.value;">
            <option value="http://divineshop.vn/steam?limit=15" selected="selected">15</option>
                          <option value="http://divineshop.vn/steam?limit=25">25</option>
                          <option value="http://divineshop.vn/steam?limit=50">50</option>
                          <option value="http://divineshop.vn/steam?limit=75">75</option>
                          <option value="http://divineshop.vn/steam?limit=100">100</option>
          </select>
          </div>
        </div>
                
        </div>
      </div>
      <br>

      <div class="row products-category">      
        <?php 
        include "product.php"; 
        ?>  
          
      </div>
      <div class="row">
        <div class="col-sm-6 text-left"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="http://divineshop.vn/steam?page=2">2</a></li><li><a href="http://divineshop.vn/steam?page=3">3</a></li><li><a href="http://divineshop.vn/steam?page=4">4</a></li><li><a href="http://divineshop.vn/steam?page=5">5</a></li><li><a href="http://divineshop.vn/steam?page=6">6</a></li><li><a href="http://divineshop.vn/steam?page=7">7</a></li><li><a href="http://divineshop.vn/steam?page=8">8</a></li><li><a href="http://divineshop.vn/steam?page=9">9</a></li><li><a href="http://divineshop.vn/steam?page=2">&gt;</a></li><li><a href="http://divineshop.vn/steam?page=125">&gt;|</a></li></ul></div>
        <div class="col-sm-6 text-right">Hiển thị  1 đến 15 trong tổng số 1869 (125 Trang)</div>
      </div>
                  </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$(document).on('click', '#grid-view', function(e){
      $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6');
    
$screensize = $(window).width();
    if ($screensize > 1199) {
    $(".products-category > .clearfix").remove();
        $('.product-grid:nth-child(3n)').after('<span class="clearfix visible-lg-block"></span>');
    }
    if ($screensize < 1199) {
    $(".products-category > .clearfix").remove();
        $('.product-grid:nth-child(3n)').after('<span class="clearfix visible-lg-block visible-md-block"></span>');
    }
  if ($screensize < 991) {
    $(".products-category > .clearfix").remove();
        $('.product-grid:nth-child(3n)').after('<span class="clearfix visible-lg-block visible-sm-block"></span>');
    }
  if ($screensize < 767) {
        $(".products-category > .clearfix").remove();
    $('.product-grid:nth-child(2n)').after('<span class="clearfix visible-lg-block visible-xs-block"></span>');
    }
$( window ).resize(function() {
    $screensize = $(window).width();
    if ($screensize > 1199) {
        $(".products-category > .clearfix").remove();
        $('.product-grid:nth-child(3n)').after('<span class="clearfix visible-lg-block"></span>');
    } 
    if ($screensize < 1199) {
        $(".products-category > .clearfix").remove();
        $('.product-grid:nth-child(3n)').after('<span class="clearfix visible-lg-block visible-md-block"></span>');
    }
  if ($screensize < 991) {
        $(".products-category > .clearfix").remove();
        $('.product-grid:nth-child(3n)').after('<span class="clearfix visible-lg-block visible-sm-block"></span>');
    }
  if ($screensize < 767) {
        $(".products-category > .clearfix").remove();
    $('.product-grid:nth-child(2n)').after('<span class="clearfix visible-lg-block visible-xs-block"></span>');
    }
});
localStorage.setItem('display', 'grid');
$('.btn-group').find('#grid-view').addClass('selected');
$('.btn-group').find('#list-view').removeClass('selected');
  });   
if (localStorage.getItem('display') == 'list') {
    $('#list-view').trigger('click');
  } else {
    $('#grid-view').trigger('click');
  }
});
</script>
</div>

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