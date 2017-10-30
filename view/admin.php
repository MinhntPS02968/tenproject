<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Admin Page</title>
<script src="../view/responsiveslides.min.js"></script>
<script src="../view/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="../view/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="../view/js/bootstrap.min.js" type="text/javascript"></script>
<link href="../view/catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--Code Css-->
<link rel="stylesheet" type="text/css" href="../view/css/stylesheet.min.css" />
<link href="../view/catalog/view/theme/bigshop/stylesheet/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link rel="stylesheet" type="text/css" href="../view/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../view/css/product.css">
<link rel="stylesheet" type="text/css" href="../view/css/responsive.min.css" />
<!--Code menu-->
<script type="text/javascript" src="../view/js/custom.min.js"></script>
<!--code slide-->
<script type="text/javascript" src="../view/js/common.min.js"></script>
<script type="text/javascript" src="../view/js/jquery-2.1.1.min.js"></script>
<script src="../view/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<!--<link href="css/slideshow.min.css" type="text/css" rel="stylesheet" media="screen" />-->


<style type="text/css">
body { background-image: url("../view/images/logo.png");
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
</style>
</head>
<body class="common-home">
<?php include 'template/headeradmin.php' ?>

<div id="container">
                    <table class="container-fluid" border="1" class="manage">
                            <thead>
                                <tr style="text-align: center;">
                                    <td class="col-sm-2">Họ và Tên</td>
                                    <td class="col-sm-2">E-Mail</td>
                                    <td>Điện Thoại</td>
                                    <td>Giới Tính</td>
                                    <td>Ngày Sinh</td>
                                    <td class="col-sm-2">Địa Chỉ</td>
                                    <td>Mã Pin</td>
                                    <td>Tên Tài Khoản</td>
                                    <td>Hình ảnh</td>
                                    <td>Tác vụ</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $user = new user;
                                $list_items = $user->getUserList();
                                foreach ($list_items as $item) :
                                    ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $item['full_name']; ?></td>
                                        <td><?php echo $item['email']; ?></td>
                                        <td><?php echo $item['phone']; ?></td>
                                        <td><?php echo $item['gender']; ?></td>
                                        <td><?php echo $item['birthday']; ?></td>
                                        <td><?php echo $item['address']; ?></td>
                                        <td><?php echo $item['pincode']; ?></td>
                                        <td><?php echo $item['password']; ?></td>
                                        <td><?php echo $item['avatar']; ?></td>
                                        <td><?php echo $item['role']; ?></td>
                                        <td>
                                            <a href="index.php?action=admin&edit=<?php echo $item['id']; ?>">Sửa</a> | 
                                            <a href="index.php?action=admin&delete=<?php echo $item['id']; ?>">Xóa</a>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                                ?>                            
                            </tbody>
                        </table>

    
</div>

<!--Footer-->

<?php include 'template/footer.php' ?>
</body>
</html>