<?php
session_start();
include_once ("../model/cart.php");
include_once ("../model/connect.php");
include_once ("../model/customer.php");
include_once ("../model/order.php");
include_once ("../model/product.php");
include_once ("../model/admin.php");


if(isset($_GET["action"]))
    $action=$_GET["action"];

elseif (isset($_POST['action']))
    $action=$_POST["action"];

else
    $action="home";

switch($action){

    case "home":
        include "../view/home.php";
        break;
    
    case "login_view":
        include "../view/login.php";
        break;        
        
    case "admin_view":
        include "../view/admin.php";
        break;
       
    case "admin_login":
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $admin = new Admin();
        $result = $admin->Login($email, $password);
        if($result == null){
            echo "<p style='width:100%; text-align:center'> Hảy nhập ID và Password </p>";
            include "../view/admin_login.php";
        }
        
        else{
            header("Location:./admincontroller.php?action=manager");
        }  
        
        break;
                    
    case "logout":
        if (isset($_SESSION['cart'])){
        unset($_SESSION['cart']);
                            }
        session_destroy();
        header("Location:./controller.php");
        break;
        
    case "manager":
        if(isset($_GET['table']))
            $table = $_GET['table'];
        else
            $table = "customer";
        include "../view/admin.php";
        break;    
        
    case "remove_customer":
        $user_id = $_GET['user_id'];
        $order = new Order();
        $results = $order->getOrderByCustomerId($user_id);
        while($result = $results->fetch()){
            $order->removeOrderDetail($result['order_id']);
        }
        $order->removeOrderByCustomerId($user_id);
        $user = new User();
        $user->removeCustomer($user_id);
        $table = "customer";
        include "../view/admin.php";
        break;
        
    case "remove_product":
        $product_id = $_GET['product_id'];
        $order = new Order();
//        $order->removeOrderDetailByProductId($product_id);
        $product = new Product();
        $result = $product->getProductById($product_id);
        $image = $result[2];
//        unlink("images/$image");
        $table = "product";
        $product->removeProduct($product_id);
        include "../view/admin.php";
        break;
        
    case "remove_order":
        $order_id = $_GET['order_id'];
        $order = new order();
        $order->removeOrderDetail($order_id);
        $order->removeOrder($order_id);
        $table = "order";
        include "../view/admin.php";
        break;

    case "update_customer_view":
        $user_id = $_GET['user_id'];
        $table = "customer";
        include "../view/admin_update.php";
        break;

    case "update_product_view":
        $product_id = $_GET['product_id'];
        $table = "product";
        include "../view/admin_update.php";
        break;
    
    case "update_customer":
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];        
        $user_id = $_POST['user_id'];
        $user = new User();
        $user->updateUser($user_id, $fullname, $email, $phone, $password);
        $table = "customer";
        include "../view/admin.php";
        break;
    
    case "update_product":
        $name = $_POST['name'];
        $image = $_FILES["image"]["name"];
        $price = $_POST['price'];
        $discount_price = $_POST['discount_price'];
        $category_name = $_POST['category_name'];
        $detail = $_POST['detail'];
        $product_id = $_POST['product_id'];
        $old_image = $_POST['old_image'];
        $table = "product";
        $dir = "../controller/images/";
        $file = $dir.basename($_FILES["image"]["name"]);
        $imageFileType = pathinfo($file, PATHINFO_EXTENSION);
        if($_FILES['image']['name'] == null){ // Không upload hình mới
            $product = new Product();
            $product->updateProduct($product_id, $name, $old_image, $price, $discount_price, $category_name, $detail);
            include '../view/admin.php';
        }
        else { // Up hình mới
            if($imageFileType == "png" || $imageFileType == "jpg" || $imageFileType == "jpeg"){
                $table = "product";
                move_uploaded_file($_FILES["image"]["tmp_name"], $file);
                $product = new Product();
                unlink("../controller/images/$old_image");
                $product->updateProduct($product_id, $name, $image, $price, $discount_price, $category_name, $detail);
                include "../view/admin.php";
            }
            else {
                $error = "Image is wrong format";
                include "../view/admin_update.php";
            }
        }
        break;
    
    case "add_product_view":
        include "../view/admin_add.php";
        break;
        
        
    case "add_product":
        
        $product_name = $_POST['name'];
        $price = $_POST['price'];
        $discount_price = $_POST['discount_price'];
        $category_name = $_POST['category_name'];  
        $detail = $_POST['detail'];
        $product_images = $_FILES['image']['name'];
        $image_dir = "../controller/images/";
        $file = $image_dir.basename($_FILES["image"]["name"]);
        $imageFileType = pathinfo($file, PATHINFO_EXTENSION);
        if($imageFileType == "png" || $imageFileType == "jpg" || $imageFileType == "jpeg"){
            $table = "product";
            move_uploaded_file($_FILES["image"]["tmp_name"], $file);
            $product = new product();
            $product->addProduct($product_name, $product_images, $price, $discount_price, $category_name, $detail);
            include "../view/admin.php";
        }
        else {
            $error = "Image is wrong format";
            include "../view/admin_add.php";
        }
        break;      
        
    
    case "view_product":
        $product_id = $_GET['product_id'];
        include "../view/ctsp2.php";
        break;

                
}


?>