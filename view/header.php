<div id="header">
  <header class="header-row">
    <div class="container">
      <div class="table-container">
        <nav class="htop col-md-9 pull-right flip inner" id="top">
          <div id="top-links" class="nav pull-right flip">
            <ul>
              <li><a href="<?php if(!(isset($_SESSION['user_id'])))
              echo "usercontroller.php?action=login_view";
              else
              echo "usercontroller.php?action=logout"; ?>">
              <?php 
              if(!(isset($_SESSION['user_id'])))
              echo "<p>Đăng Nhập</p>";

              else
              echo "<p>LOG OUT</p>";
              ?>
              </a>
              </li>
              <li>
              <a href="<?php if(!(isset($_SESSION['user_id'])))
                echo "usercontroller.php?action=signin_view";
                ?>">
                <?php 
                if(!(isset($_SESSION['user_id'])))
                echo "<p>Đăng Ký</p>";

                else
                echo $_SESSION['full_name'];
                ?>
              </a></li>
            </ul>
          </div>
          <div class="pull-right flip left-top">
            <div class="links">
              <ul>
              </ul>
            </div>
          </div>
        </nav>

        <div class="col-table-cel col-md-3 col-sm-4 col-xs-12 inner">
          <div id="logo" style="padding-top:10px;"><a href="../controller/usercontroller.php?action=home">
          <img class="img-responsive" src="../controller/images/logo.png" title="Divine Shop" alt="Divine Shop"></a></div>
        </div>

        <div class="col-md-4 col-md-push-5 col-sm-8 col-xs-12 inner">
          <div class="links_contact pull-right flip">
            <ul>
              <li class="email"><a href="mailto:thanhtoan@divineshop.vn"><i class="fa fa-envelope"></i>thanhtoan@divineshop.vn</a></li>
            </ul>
          </div>
        </div>

        <div class="clearfix visible-sm-block visible-xs-block"></div>
        <div class="col-md-5 col-md-pull-4 col-sm-8 col-xs-12 inner2">
        <div id="search" class="input-group">
          <form method="post">
        <input id="filter_name" type="text" name="search" value="" placeholder="Tìm kiếm" class="form-control input-lg ac_input" autocomplete="off">
          <button type="button" class="button-search"><i class="fa fa-search"></i></button>
        </form>
        </div>
        </div>
        <div class="col-md-9 pull-right flip col-sm-4 col-xs-12 inner"> <div id="cart">
  <button type="button" data-toggle="dropdown" data-loading-text="Đang tải..." class="heading dropdown-toggle">
  <div class="pull-left flip">
    <h4></h4>
  </div>
  <?php if (isset($_SESSION['cart'])) :?>
    <span id="cart-total"><?php echo Cart::get_quantitytotal()?> sản phẩm - <?php echo Cart::get_subtotal()?> VNĐ</span> 
  <?php
  else :
  ?>
    <span id="cart-total">0 sản phẩm - 0 VNĐ</span>
  <?php
  endif;
  ?>
  <i class="fa fa-caret-down"></i></button>
  <ul class="dropdown-menu">
    <li>
      <?php if (isset($_SESSION['cart'])) :?>
        <p style="color:black" class="text-center">Có <?php echo Cart::get_quantitytotal()?> sản phẩm trong giỏ hàng!</p>
      <?php
      else :
      ?>
        <p style="color:black" class="text-center">Không có sản phẩm trong giỏ hàng!</p>
      <?php
      endif;
      ?>
    </li>
  </ul>
</div>
 </div>
      </div>
    </div>
  </header>
</div>