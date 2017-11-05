<?php
session_start();
include_once ("../model/cart.php");
include_once ("../model/connect.php");
include_once ("../model/customer.php");
include_once ("../model/order.php");
include_once ("../model/product.php");
include_once ("../model/admin.php");
include_once('../model/Message.php');

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
            
    case "login":
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $user = new user();
        $result = $user->login($email, $password);
        if($result == null){
            $status = "wrong";
            include "../view/login.php";
        }
        else{
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['full_name'] = $result['full_name'];
            $_SESSION['cart'] = array();
            include "../view/home.php";
        }
        break;
    
    case "logout":
        if (isset($_SESSION['cart'])){
        unset($_SESSION['cart']);
        }
        session_destroy();
        header("Location:./usercontroller.php");
        break;

    case "signin_view":
        include "../view/signin.php";
        break;    

    case "admin_login_view":
        include "../view/sigin.php";
        break;

    case "admin_view":
        include "../view/admin.php";
        break;         
        
    case "register":
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];        
        $password = md5($_POST['password']);
        $re_password = md5($_POST['re_password']);
                
        $user = new User();
        if(!($re_password === $password)){
            
            $status = "wrong";
            include "../view/signin.php";
        }
        if(empty($fullname)||empty($email)||empty($phone)||empty($password)||empty($re_password)){
        $status = "empty";
            include "../view/signin.php";
        }
        else{
            $user->addUser($fullname, $email, $phone, $password);
            $status = "createSuccess";
            include "../view/login.php";
        }
        break;

    case "steam":
        include "../view/steam.php";
        break;       
    
    case "origin":
        include "../view/origin.php";
        break;

    case "battle_net":
        include "../view/battle_net.php";
        break;

    case "steam_wallet":
        include "../view/steam_wallet.php";
        break;

    case "lienhe":
        include "../view/lien_he.php";
        break;        

    case "gioithieu":
        include "../view/gioi_thieu.php";
        break;

    // Thêm sản phẩm vào giỏ hàng
    case "add_cart":
        if(!(isset($_SESSION['user_id']))){
            $status = "notLogin";
            include "../view/login.php";
        }
        else{
            $product_id = $_GET['product_id'];
            if(isset($_GET['quantity']))
                $quantity = $_GET['quantity'];
            else
            $quantity = 1;
            $cart = new Cart();
            $cart->add_item($product_id, $quantity);
            include "../view/cart_view.php";
        }
        break;
    
        
    case "update_item":
        $cart = new Cart();
    	$new_list = $_POST['new_quantity'];         
    	foreach($new_list as $product_id => $quantity){
            if($_SESSION['cart'][$product_id] != $quantity){ 
            $cart->update_item($product_id, $quantity); 
            }    
        }                
        include "../view/cart_view.php";
        break;
      
    
    case "view_product":
        $product_id = $_GET['product_id'];
        include "../view/product_details.php";
        break;
    
    case "products_view":
        include "../view/products_view.php";
        break;
    
    case "delete_item":
        $cart = new Cart();
        $product_id = $_GET['product_id'];
        $cart->delete_item($product_id);
        include "../view/cart_view.php";
        break;
    
    // Thanh toán
    case "order":
        $order = new order();
        $order_id = $order->addOrder($_SESSION['user_id']);
        $total = 0;
        foreach($_SESSION['cart'] as $product_id => $item){
            $order->insertOrderDetail($order_id, $product_id, $item['price'], $item['quantity']);
            $total += $item['price'] * $item['quantity'];
        }
        $order->updateOrder($order_id, $total);
        include "../view/order.php";
        break;
     
    
    case "update_cart":
        $new_list = $_POST['newqty'];
        foreach($new_list as $key => $qty)
        {
            if($_SESSION['cart'][$key] != $qty)
            {
                $cart->update_item($key,$qty);
            }
        }
        include '../view/cart_view.php';
        break;
           
    case "show_cart":
        include '../view/cart_view.php';
        break;
        
    case "view_product":
        
        $productid = $_GET['productid'];
        include "../view/product_details.php";
        
        break;
    
    case "show_add_item":
        include '../view/home.php';
        break;
    
     // case "add_cart":
     //    echo $cart->add_item($_POST['productkey'],$_POST['itemqty']);
     //    include '../view/cart_view.php';
     //    break;

    case "empty_cart":
        unset($_SESSION['cart']);
        include '../view/cart_view.php';
        break;
        
   case "clearfind":
        $setname['name'] = "";
        $setname['price'] = "";
        include '../view/admin_view.php';
        break;
    
   case "find":
        $find = $_POST['namefind'];
        $prot = new product();
        $resulta = $prot->getProductByName($find);
        $resultb = $resulta->fetchAll();
        include '../view/admin_view.php';
        break;
    
    case "showproduct":
        include '../view/admin_view.php';
        break;
    
            
    case 'send_mail':
		$from = $_POST['from'];
                $passuser = $_POST['passuser'];
		$to = $_POST['to'];
		//$subject = $_POST['subject'];
		$body = $_POST['message'];
		try {
			send_email($to, $from,$passuser, $body);
			echo '<script type="text/javascript">alert("Send Success! Thanks you!");</script>';
			include '../view/home.php';			
		} catch (Exception $e) {
			echo $error = $e->getMessage();		
		}
		break;       
        
}


?>