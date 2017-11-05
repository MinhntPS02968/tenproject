<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Manager</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/sb-admin.css" rel="stylesheet">
<link href="css/plugins/morris.css" rel="stylesheet">
<script type="text/javascript" src="../controller/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../controller/js/jquery.min.js"></script>
<style type="text/css">
@media(min-width:768px) {
    .side-nav {
        left: 225px;
        }
    h3 {
        text-transform: uppercase;
        font-weight: bold;
        margin-left: 0px;
    }
    form {
        background-color: #fff;
    }
    div table tr {
        max-height:80px;
        height:50px;
    }
    
    div table tr td{
        padding-left:30px;
        padding-top:30px ;
    }
    
    div table tr td img{
        width:50px;
        height:75px;
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


    <div class="col-sm-10" style="padding-top:15px;">
        <?php 
        if($table == "customer"){ 
            $user = new User();
            $result = $user->getCustomerById($user_id);
        ?>
        <form action="../controller/admincontroller.php?action=update_customer" method="POST">
            <table width="300">
                <input type="hidden" value="update_customer" name="action"/>
                <input type="hidden" value="<?php echo $user_id ?>" name="user_id"/>
                <tr>
                    <td colspan="2"><h3>Update Customer</h3></td>
                </tr>
                <tr>
                    <td width="80">Fullname</td>
                    <td wdith="200"><input type="text" name="fullname" value="<?php echo $result['full_name']?>" class="form-control"></td>
                </tr>                
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $result['email']?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" value="<?php echo $result['phone']?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" value="<?php echo $result['password']?>" class="form-control"></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="right"><input type="submit" class="btn btn-primary" value="UPDATE"></td>
                </tr>
            </table>
                
        </form>
        <?php 
        } else if ($table == "product") { 
            $product = new Product();
            $result = $product->getProductById($product_id);
            $old_image = $result['product_images'];
        ?>
        <form action="../controller/admincontroller.php?action=update_product" method="POST" enctype="multipart/form-data">
            <table width="400">
                <input type="hidden" value="update_product" name="action"/>
                <input type="hidden" value="<?php echo $product_id ?>" name="product_id"/>
                <input type="hidden" value="<?php echo $old_image ?>" name="old_image"/>
                <tr>
                    <td colspan="2"><h3>Update Product</h3></td>
                </tr>
                <tr>
                    <td width="100">Name</td>
                    <td wdith="200"><input type="text" name="name" value="<?php echo $result['product_name']?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><img src="<?php echo '../controller/images/'.$result['product_images'] ?>" style="width: 80%;"/></td>
                </tr>
                <tr>
                    <td colspan="2"> 
                        <?php
                        if(isset($error)){
                            echo $error;
                        }
                        ?>
                    </td>
                </tr>
                 <tr>
                    <td>New image</td>
                    <td><input type="file" name="image"/></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" value="<?php echo $result['price']?>" class="form-control"></td>
                </tr>

                <tr>
                    <td>Discount Price</td>
                    <td><input type="text" name="discount_price" value="<?php echo $result['discount_price']?>" class="form-control"></td>
                </tr>

                <tr>
                    <td>Category Name</td>
                    <td><input type="text" name="category_name" value="<?php echo $result['category_name']?>" class="form-control"></td>
                </tr>
                
                <tr>
                    <td width="100">Detail</td>
                    <td wdith="200"><input type="text" name="detail" value="<?php echo $result['detail']?>" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" class="btn btn-primary" value="UPDATE"></td>
                </tr>
            </table>
                
        </form>
        <?php
        } 
        ?>
    </div>
</body>
</html>
