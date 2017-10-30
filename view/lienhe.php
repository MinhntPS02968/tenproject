
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Liên hệ</title>
<script src="responsiveslides.min.js"></script>
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--Code Css-->
<link rel="stylesheet" type="text/css" href="css/stylesheet.min.css" />
<link href="catalog/view/theme/bigshop/stylesheet/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/responsive.min.css" />
<!--Code menu-->
<script type="text/javascript" src="js/custom.min.js"></script>
<!--code slide-->
<script type="text/javascript" src="js/common.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<!--<link href="css/slideshow.min.css" type="text/css" rel="stylesheet" media="screen" />-->
<!--maps-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var gmap = new google.maps.LatLng(10.765974,106.689422);
var marker;
function initialize()
{
    var mapProp = {
         center:new google.maps.LatLng(20.964810, 105.827559),
         zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
 
    var map=new google.maps.Map(document.getElementById("googleMap")
    ,mapProp);
 
  var styles = [
    {
      featureType: 'road.arterial',
      elementType: 'all',
      stylers: [
        { hue: '#fff' },
        { saturation: 100 },
        { lightness: -48 },
        { visibility: 'on' }
      ]
    },{
      featureType: 'road',
      elementType: 'all',
      stylers: [
 
      ]
    },
    {
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [
            { color: '#adc9b8' }
        ]
    },{
        featureType: 'landscape.natural',
        elementType: 'all',
        stylers: [
            { hue: '#809f80' },
            { lightness: -35 }
        ]
    }
  ];
 
  var styledMapType = new google.maps.StyledMapType(styles);
  map.mapTypes.set('Styled', styledMapType);
 
  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: gmap
  });
  google.maps.event.addListener(marker, 'click', toggleBounce);
}
 
function toggleBounce() {
 
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
 
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<style type="text/css">
body { background-image: url("images/logo.png");
background-position:top center;
background-repeat:no-repeat;
background-attachment:fixed;
}
 .wrapper-box {
margin:0px auto;
}
#back-top a {
bottom:0px;
}
 .custom-feature-box .feature-box .title {
font-weight:bold;
}
 .custom-feature-box .feature-box .title {
text-transform:uppercase;
}
  @media screen and (max-width:800px) {
}

#content p {
  font-size:20px; line-height: 150%;
}
</style>
</head>
<body class="common-home">
<?php include 'template/header.php' ?>
<div id="container">
    <div class="container">
        
              <ul class="breadcrumb">
                <li>
                  <a href="index.html"><i class="fa fa-home"><dd>Home</dd></i></a>
                </li>
                <li>
                  <a href="lienhe.html">Liên hệ</a>
                </li>
                
              </ul>
      <div class="row">
         <div id="content" class="col-sm-12">
                  <h1>Liên hệ</h1>
                      <p style="font-family:&quot;Times New Roman&quot; font-size:30px;">
                      Các bạn liên hệ theo địa chỉ này để giao dịch trực tiếp:</p>
                  <h2 style="font-size: 30px; color: rgb(255, 102, 0);font-family: &quot;Noto Serif&quot;">Địa chỉ 1:
                  </h2>
                      <p style="font-family:&quot;Times New Roman&quot;"> 
                      SĐT: 0977.040.417 &nbsp;(Hưng)<br>Phòng 3314, Tòa HH2C, Chung cư Linh Đàm, Hoàng Mai, Hà Nội </p>

                      <div id="googleMap" style="width: 100%; height: 450px; margin-top: 30px; margin-bottom: 30px;">Google Map</div>
                  <h2 style="font-size: 30px; color: rgb(255, 102, 0);font-family: &quot;Noto Serif&quot;">Địa chỉ 2:
                  </h2>
                      <p style="font-family:&quot;Times New Roman&quot;"> 
                      SĐT: 0996.555.555 &nbsp;(Hưng)<br>Số 113A/254 Minh Khai, Phường Mai Động, Quận Hoàng Mai, Hà Nội (Ngõ Gốc Đề ngã ba đầu tiên rẽ trái) </p>
                  <h2 style="font-size: 30px; color: rgb(255, 102, 0);font-family: &quot;Noto Serif&quot;">Các địa chỉ Đại lý liên kết:
                  </h2>
                      <p style="font-family:&quot;Times New Roman&quot;"> 
                      <b style="font-family: &quot;Times New Roman&quot;; font-size: 20px;">1. Cần Thơ:&nbsp;</b>Nguyễn Vũ Cyber Game - 174/12 Lê Bình, Phường Hưng Lợi, Tp Cần Thơ. <br>SĐT : 0933 693 169 &nbsp;(Vũ) </p>
                      <p style="font-family:&quot;Times New Roman&quot;"> 
                      <b style="font-family: &quot;Times New Roman&quot;; font-size: 20px;">2. Cần Thơ:&nbsp;</b>Cybercore Gaming Lợi Hưng - 375 đường 30/4 phường Hưng Lợi quận Ninh Kiều tp Cần Thơ<br>SĐT: SĐT : 0907614949 &nbsp;(Quang) </p>
                      <p style="font-family:&quot;Times New Roman&quot;"> 
                      <b style="font-family: &quot;Times New Roman&quot;; font-size: 20px;">3. TP. Hồ Chí Minh:&nbsp;</b>26 Chu Văn An, Phường Tân Thành, Quận Tân Phú, Hồ Chí Minh ( Thời gian: 08:00 -> 19:00)<br>SĐT: 0968.991.475 &nbsp;(Cường) </p>
                      <p style="font-family:&quot;Times New Roman&quot;"> 
                      <b style="font-family: &quot;Times New Roman&quot;; font-size: 20px;">4. TP. Sơn La:&nbsp;</b>26 Give Away Gaming: Số nhà 19, Ngõ 3, Đường Chu Văn Thịnh, TP. Sơn La<br>SĐT: 0962.988.639 &nbsp;(Tùng) </p>
                      <p style="font-family:&quot;Times New Roman&quot;"> 
                      <b style="font-family: &quot;Times New Roman&quot;; font-size: 20px;">5. TP. Hà Tĩnh:&nbsp;</b>Số 56 đường lê duẩn - Phường Trần Phú - Tp Hà Tĩnh - Tỉnh Hà Tĩnh<br>SĐT: SĐT: 0987.043.773 &nbsp;(Dũng) </p>
                      <p style="font-family:&quot;Times New Roman&quot;"> 
                      <b style="font-family: &quot;Times New Roman&quot;; font-size: 20px;">6. TP. Thái Nguyên:&nbsp;</b>Internet H&T - Cổng trường ĐH Nông Lâm Thái Nguyên<br>SĐT: 0968.991.475 &nbsp;(Cường) </p>
         </div>
      </div>

  </div>
</div>

<!--Footer-->

<?php include 'template/footer.php' ?>
</body>
</html>