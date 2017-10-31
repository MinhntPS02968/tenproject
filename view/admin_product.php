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
                <a href="../view/more-product.php" class="btn btn-primary">add product</a>
                    <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr style="text-align: center;">
                                    <td class="hidden-xs">Tên Sản Phẩm</td>
                                    <td class="hidden-xs">Hình Ảnh</td>
                                    <td class="hidden-xs">Mô Tả</td>
                                    <td class="hidden-xs">Giá</td>
                                    <td class="hidden-xs">Giá Giảm</td>
                                    <td class="hidden-xs">Số Lượng</td>
                                    <td class="hidden-xs">Thể Loại</td>
                                    <td class="hidden-xs">Tình Trạng</td>
                                    <td><em class="fa fa-cog"></em></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $product = new product;
                                $list_items = $product->getProduct();
                                foreach ($list_items as $item) :
                                    ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $item['product_name']; ?></td>
                                        <td><img class="img-responsive" src="<?php echo $item['product_images']; ?>"></td>
                                        <td><?php echo $item['description']; ?></td>
                                        <td><?php echo $item['price']; ?></td>
                                        <td><?php echo $item['discount_price']; ?></td>
                                        <td><?php echo $item['quantity']; ?></td>
                                        <td><?php echo $item['category_id']; ?></td>
                                        <td><?php echo $item['status']; ?></td>
                                        <td>
                                            <a href="index.php?action=admin_product&edit=<?php echo $item['product_id']; ?>"class="btn btn-default"><em class="fa fa-pencil"></em></a>   
                                            <a href="index.php?action=admin_product&delete=<?php echo $item['product_id']; ?>"class="btn btn-danger"><em class="fa fa-trash"></em></a>
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