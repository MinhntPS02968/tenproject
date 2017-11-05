<?php 
include_once ("../model/cart.php");
include_once ("../model/connect.php");
include_once ("../model/customer.php");
include_once ("../model/order.php");
include_once ("../model/product.php");
include_once ("../model/admin.php");
include_once('../model/Message.php');
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Manager</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link href="css/sb-admin.css" rel="stylesheet">
<link href="css/plugins/morris.css" rel="stylesheet">
<link  type="text/css" href="../controller/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="../controller/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../controller/js/jquery.min.js"></script>
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
    }
    
    div table tr td img{
        width:50px;
        height:50%;
    }
    span {
        margin-top: 100px;
    }
 </style>
</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.html">ADMIN</a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="../controller/admincontroller.php?action=manager&table=customer"><i class="fa fa-fw fa-dashboard"></i> Customers</a>
                    </li>
                    <li>
                        <a href="../controller/admincontroller.php?action=manager&table=product"></i> Products</a>
                    </li>
                    <li>
                        <a href="../controller/admincontroller.php?action=manager&table=order"></i> Orders</a>
                    </li>
                    <li>
                        <a href="../controller/admincontroller.php?action=home"></i> Return Home</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    <div class="col-sm-10" style="padding-top:65px; ">
        <?php 
        if($table == "customer"){ 
            $user = new user();
            $results = $user->getAllCustomers();
        ?>f
        <h3>Customers</h3>
        <table class="table table-striped table-bordered table-list" class="table-hover">
        <thead>
            <tr style="text-align: center;">
                <td class="hidden-xs">ID</td>
                <td class="hidden-xs">Name</td>
                <td class="hidden-xs">Email</td>
                <td class="hidden-xs">Phone</td>
                <td class="hidden-xs">Password</td>
                <td ><em class="fa fa-cog"></em></td>
                <td ><em class="fa fa-cog"></em></td>
            </tr>
        </thead>
            <?php  while ($result = $results->fetch()): ?>
            <tr>
                <td><?php echo $result['user_id'] ?></td>
                <td><?php echo $result['full_name'] ?></td>
                <td><?php echo $result['email'] ?></td>
                <td><?php echo $result['phone'] ?></td>
                <td><?php echo $result['password'] ?></td>                
                <td><a href="admincontroller.php?action=update_customer_view&user_id=<?php echo $result['user_id'];?>"class="btn btn-default"><em class="fa fa-pencil"></em></a></td>
                <td><a href="admincontroller.php?action=remove_customer&user_id=<?php echo $result['user_id'];?>""class="btn btn-danger"><em class="fa fa-trash"></em></a></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <?php 
        } else if ($table == "product") { 
            $product = new Product();
            $results = $product->getList();
        ?>
        <a href="admincontroller.php?action=add_product_view"><button type="button" id="button-review" class="btn btn-primary">Add new product</button></a>
        <table class="table table-striped table-bordered table-list" class="table-hover">
            <tr style="text-align: center;">
                <td>ID</td>
                <td class="hidden-xs">Name</td>
                <td class="hidden-xs">Image</td>
                <td class="hidden-xs">Price</td>
                <td class="hidden-xs">Discount Price</td>
                <td class="hidden-xs">Category Name</td>
                <td class="hidden-xs">Detail</td>
                <td ><em class="fa fa-cog"></em></td>
                <td ><em class="fa fa-cog"></em></td>
            </tr>
            <?php  while ($result = $results->fetch()): ?>
            <tr>
                <td><?php echo $result['product_id'] ?></td>
                <td><?php echo $result['product_name'] ?></td>
                <td><img src="<?php echo '../controller/images/'.$result['product_images'] ?>" style="width: 80%;"/></td>
                <td><?php echo $result['price'] ?></td>
                <td><?php echo $result['discount_price'] ?></td>
                <td><?php echo $result['category_name'] ?></td>
                <td><?php echo $result[6] ?></td>
                
                <td><a href="admincontroller.php?action=update_product_view&product_id=<?php echo $result['product_id'];?>"class="btn btn-default"><em class="fa fa-pencil"></em></a></td>
                <td><a href="admincontroller.php?action=remove_product&product_id=<?php echo $result['product_id'];?>"class="btn btn-danger"><em class="fa fa-trash"></em></a></td>
            </tr>
        <?php endwhile;?>
        </table>
        <?php
        } else {
            $order = new order();
            $results = $order->getAllOrders();
        ?>
        <h3>Orders</h3>
        <table class="table table-striped table-bordered table-list">
            <tr>
                <td class="hidden-xs">ID</td>
                <td class="hidden-xs">Customer</td>
                <td class="hidden-xs">Total</td>
                <td class="hidden-xs">Date create</td>
                <td ><em class="fa fa-cog"></em></td>
            </tr>

            <?php  while ($result = $results->fetch()): ?>
            <tr>
                <td><?php echo $result['order_id'] ?></td>
                <td><?php echo $result['full_name'] ?></td>
                <td><?php echo $result['total'] ?>VNĐ</td>
                <td><?php echo $result['date_create'] ?></td>
                <td><a href="admincontroller.php?action=remove_order&order_id=<?php echo $result['order_id'];?>"class="btn btn-danger"><em class="fa fa-trash"></em></a></td>
            </tr>
        <?php endwhile;?>
        </table>
        <?php } ?>
    </div>
</body>
</html>
