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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
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
.panel-body thead td {
    font-weight: bold;
}
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
                <div class="panel-body"> 
                    <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr style="text-align: center;">
                                    <td class="hidden-xs">Họ và Tên</td>
                                    <td class="hidden-xs">E-Mail</td>
                                    <td class="hidden-xs">Điện Thoại</td>
                                    <td class="hidden-xs">Giới Tính</td>
                                    <td class="hidden-xs">Ngày Sinh</td>
                                    <td class="hidden-xs">Địa Chỉ</td>
                                    <td class="hidden-xs">Mã Pin</td>
                                    <td class="hidden-xs">Tên Tài Khoản</td>
                                    <td class="hidden-xs">Hình ảnh</td>
                                    <td class="hidden-xs">Tác vụ</td>
                                    <td><em class="fa fa-cog"></em></td>
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
                                        <td align="center">

                                            <a href="index.php?action=admin&edit=<?php echo $item['id']; ?>" class="btn btn-default"><em class="fa fa-pencil"></em></a> 
                                            <a href="index.php?action=admin&delete=<?php echo $item['id']; ?>" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                                ?>                            
                            </tbody>
                        </table>
                </div>
    
</div>

<!--Footer-->

<?php include 'template/footer.php' ?>
</body>
</html>