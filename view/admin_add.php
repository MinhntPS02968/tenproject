<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Manager</title>
<link href="css/sb-admin.css" rel="stylesheet">
<link href="css/plugins/morris.css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="../controller/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../controller/js/jquery.min.js"></script>
<style type="text/css">

    div table tr {
        max-height:80px;
        height:50px;
    }
    
    div table tr td{
        padding:15px 0px;
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
    <div class="col-sm-9" style="padding-top:65px;">
        <form method="POST" action="admincontroller.php" enctype="multipart/form-data">
            <input type="hidden" value="add_product" name="action"/>
            <table>
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
                    <td width="100">Name</td>
                    <td><input type="text" class="form-control" name="name"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" class="form-control" name="price"></td>
                </tr>
                <tr>
                    <td>Discount Price</td>
                    <td><input type="text" class="form-control" name="discount_price"></td>
                </tr>
                <tr>
                    <td>Category Name</td>
                    <td><input type="text" class="form-control" name="category_name"></td>
                </tr>
                 
                 <tr>
                    <td>Detail</td>
                    <td><input type="text" class="form-control" name="detail"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" value="ADD" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
