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
<style type="text/css">
  h3 {
        padding:30px 0;
        text-transform: uppercase;
        font-weight: bold;
    }
    div table tr {
        max-height:80px;
        height:50px;
    }
    
    div table tr td{
        padding:15px 0px;
        text-align: center;
        background-color: #fff;
        font-weight: bold;
    }
    
    div table tr td img{
        width:200px;
    }
</style>
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
        $order = new order();
        $result = $order->getOrderById($order_id);

        // $db = new connect();
        // $result = $db->getInstance("SELECT divine_shop.user.full_name, divine_shop.order.date_create, divine_shop.order.order_id
        // from divine_shop.order join divine_shop.user on divine_shop.order.user_id = divine_shop.user.user_id
        // where divine_shop.use.user_id = $user_id
        // order by divine_shop.order.order_id desc
        // limit 1");
        ?> 
      
      <div id="content" class="col-sm-9"> 
        <section align="center">
        <h3>Customer: <?php echo $result['full_name']?></h3>
        <p>Order: <?php echo $result['order_id']?></p>
        <p>Date Create: <?php echo $result['date_create']?></p>
        <p>Total: $<?php echo $result['total']?></p>
    </section>
    <table  class="table table-striped table-bordered table-list" >
        <tr sstyle="text-align: center;">
            <td class="hidden-xs">IMAGE PRODUCT</td>
            <td class="hidden-xs">PRODUCT NAME</td>
            <td class="hidden-xs">UNIT PRICE</td>
            <td class="hidden-xs">QUANTITY</td>
            <td class="hidden-xs">SUBTOTAL</td>
        </tr>
        <?php foreach($_SESSION['cart'] as $key => $item):?>
        <?php
            $connect = new connect();
            $result = $connect->getInstance("select * from product where product_id = '$key'");
        ?>
        <tr>
            <td ><img src="images/<?php echo $result['product_images'];?>"/></td>
            <td><?php echo $item['name']?></td>
            <td>$<?php echo $item['price']?></td>
            <td><?php echo $item['quantity']?></td>
            <td>$<?php echo $item['total']?></td>
        </tr>
    <tr>
      <td colspan="5" style="border-bottom: 1px solid gray;"></td>
    </tr>
        <?php endforeach;?>
    </table>
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