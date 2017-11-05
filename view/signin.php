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
    <li><a href="#">Đăng Kí</a></li>
  </ul>

<!--Đăng ký--> 
<div class="row">                
<div id="content" class="col-sm-9">      
<h1>Đăng Kí Tài Khoản</h1>
  <p>Nếu bạn đã đăng kí tài khoản, vui lòng đăng nhập tại <a href="#">đây</a>.</p>

  <!--Form Đăng ký-->
  <form action="usercontroller.php?aticon=register" method="post" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" value="register" name="action"/>
    <span style="color:red">
    <?php
        if(isset($status)){
            if($status == "createSuccess"){
                echo "Register success";
            }
            if($status == "empty"){
                echo "Không được để trống";
            }
            if($status == "wrong"){
                echo "Xát nhập mật khẩu không đúng";
            }
            if($status == "notLogin"){
                echo "Cần phải đăng nhập để mua hàng";
            }
        }
    ?>
    </span>
    <fieldset id="account">
      <legend>Thông tin cá nhân</legend>
      <div class="form-group required" style="display: none;">
        <label class="col-sm-2 control-label">Nhóm khách hàng</label>
        <div class="col-sm-10">
        <div class="radio">
          <label>
            <input type="radio" name="customer_group_id" value="1" checked="checked">
            Default</label>
        </div>
        </div>
      </div>          

      <div class="form-group required">
        <label class="col-sm-2 control-label" for="input-lastname">Họ và Tên</label>
        <div class="col-sm-10">
          <input type="text" name="fullname" value="" placeholder="Họ và Tên" id="input-lastname" class="form-control">
        </div>
      </div>
      <div class="form-group required">
        <label class="col-sm-2 control-label" for="input-email">Địa chỉ E-Mail</label>
        <div class="col-sm-10">
          <input type="email" name="email" value="" placeholder="Địa chỉ E-Mail" id="input-email" class="form-control">
        </div>
      </div>
      <div class="form-group required">
        <label class="col-sm-2 control-label" for="input-telephone">Điện Thoại</label>
        <div class="col-sm-10">
          <input type="tel" name="phone" value="" placeholder="Điện Thoại" id="input-telephone" class="form-control">
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>Mật khẩu</legend>
      <div class="form-group required">
        <label class="col-sm-2 control-label" for="input-password">Mật Khẩu</label>
        <div class="col-sm-10">
          <input type="password" name="password" value="" placeholder="Mật Khẩu" id="input-password" class="form-control">
        </div>
      </div>
      <div class="form-group required">
        <label class="col-sm-2 control-label" for="input-confirm">Nhập lại Mật Khẩu</label>
        <div class="col-sm-10">
          <input type="password" name="re_password" value="" placeholder="Nhập lại Mật Khẩu" id="input-confirm" class="form-control">
        </div>
      </div>
    </fieldset>
    <script src="../controller/js/api.js" type="text/javascript"></script>

    
    <div class="buttons">
      <div class="pull-right">Tôi đã đọc và đồng ý với điều khoản <a class="fancybox" href="http://divineshop.vn/index.php?route=information/information/agree&amp;information_id=3" alt="Chính sách bảo mật"><b>Chính sách bảo mật</b></a>                        
      <input type="checkbox" name="agree" value="1">
                    &nbsp;
      <input type="submit" value="Tiếp tục" class="btn btn-primary">
      </div>
    </div>
  </form><!--END Form Đăng ký-->
  </div>

<aside id="column-right" class="col-sm-3 hidden-xs">
<h3><span>Tài khoản</span></h3>
<div class="list-group">
  <ul class="list-item">
    <li><a href="#">Đăng nhập</a></li>
    <li><a href="#">Đăng kí</a></li>
    <li><a href="#">Quên Mật Khẩu</a></li>
    <li><a href="#">Tài Khoản Của Tôi</a></li>
    <li><a href="#">Danh sách địa chỉ</a></li>
    <li><a href="#">Giỏ hàng</a></li>
    <li><a href="#">Lịch sử đơn hàng</a></li>
    <li><a href="#">Tải về</a></li>
    <li><a href="#">Chi trả theo định kỳ</a></li>
    <li><a href="#">Điểm thưởng</a></li>
    <li><a href="#">Quay lại</a></li>
    <li><a href="#">Giao dịch</a></li>
    <li><a href="#">Thư thông báo</a></li>
  </ul>
</div>  
</aside>
</div>
</div>

<!-- <script type="text/javascript">
// Sort the custom fields
$('#account .form-group[data-sort]').detach().each(function() {
  if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {
    $('#account .form-group').eq($(this).attr('data-sort')).before(this);
  }

  if ($(this).attr('data-sort') > $('#account .form-group').length) {
    $('#account .form-group:last').after(this);
  }

  if ($(this).attr('data-sort') == $('#account .form-group').length) {
    $('#account .form-group:last').after(this);
  }

  if ($(this).attr('data-sort') < -$('#account .form-group').length) {
    $('#account .form-group:first').before(this);
  }
});

$('#address .form-group[data-sort]').detach().each(function() {
  if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#address .form-group').length) {
    $('#address .form-group').eq($(this).attr('data-sort')).before(this);
  }

  if ($(this).attr('data-sort') > $('#address .form-group').length) {
    $('#address .form-group:last').after(this);
  }

  if ($(this).attr('data-sort') == $('#address .form-group').length) {
    $('#address .form-group:last').after(this);
  }

  if ($(this).attr('data-sort') < -$('#address .form-group').length) {
    $('#address .form-group:first').before(this);
  }
});

$('input[name=\'customer_group_id\']').on('change', function() {
  $.ajax({
    url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
    dataType: 'json',
    success: function(json) {
      $('.custom-field').hide();
      $('.custom-field').removeClass('required');

      for (i = 0; i < json.length; i++) {
        custom_field = json[i];

        $('#custom-field' + custom_field['custom_field_id']).show();

        if (custom_field['required']) {
          $('#custom-field' + custom_field['custom_field_id']).addClass('required');
        }
      }


    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
    }
  });
});

$('input[name=\'customer_group_id\']:checked').trigger('change');
</script> -->

<!-- <script type="text/javascript">
$('button[id^=\'button-custom-field\']').on('click', function() {
  var node = this;

  $('#form-upload').remove();

  $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

  $('#form-upload input[name=\'file\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if ($('#form-upload input[name=\'file\']').val() != '') {
      clearInterval(timer);

      $.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData($('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          $(node).button('loading');
        },
        complete: function() {
          $(node).button('reset');
        },
        success: function(json) {
          $(node).parent().find('.text-danger').remove();

          if (json['error']) {
            $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            $(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    }
  }, 500);
});
</script> -->


<!-- <script type="text/javascript">
$('.date').datetimepicker({
  pickTime: false
});

$('.time').datetimepicker({
  pickDate: false
});

$('.datetime').datetimepicker({
  pickDate: true,
  pickTime: true
});
</script> -->
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