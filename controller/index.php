<?php

include "../model/connect.php";
include "../model/user.php";
include "../model/product.php";

session_start();
if(isset($_GET["action"]))
    $action=$_GET["action"];
elseif (isset($_POST['action']))
    $action=$_POST["action"];
else if(isset($_SESSION['user']))
	$action = 'session_user';
else
    $action="home";

$db = new connect();

switch($action)
{   
	case 'home':
		include '../view/index.php';
		break;

    case 'admin':
        include '../view/admin.php';
        break;
    case 'admin_product':
        include '../view/admin_product.php';
        break;

    case 'login':
    	if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
            // nếu mà đăng nhập rồi thì sẽ tự chuyển URI
            header('Location: index.php?action=home');
        }
        if (isset($_POST['user'], $_POST['pass'])) {
            $param['username'] = $_POST['user'];
            $param['password'] = $_POST['pass'];

            $c = new user();
            $cus = $c->getUser($param);
            $_SESSION['login'] = false;
            if ($cus) {
                $_SESSION['login'] = true;
                $_SESSION['user']['id'] = $cus['id'];
                $_SESSION['user']['name'] = $cus['fullname'];
                $_SESSION['user']['user'] = $cus['username'];
                $_SESSION['user']['email'] = $cus['email'];
                $_SESSION['user']['password'] = $cus['password'];
                $_SESSION['user']['birthday'] = $cus['birthday'];
                //Đăng nhập thành công chuyển đến URI
                header('Location: index.php?action=home');
                die;
            } else {
                // Đăng nhập sai tài khoản
                include '../view/dangnhap.php';
            }
        } else {
            // Chưa thực hiện đăng nhập
            include '../view/dangnhap.php';
        }
        break;

    case "logout":
        session_destroy();
        header('Location:../view/dangnhap.php');
        break;

    case "signup":
        if (isset($_POST)) {
            $user = new user();
            $user->addUser($_POST);
            header('Location:../view/dangky.php');
        }
        else{
        header('Location: index.php?action=home');}
        break;

    case 'update':
        
        $user = new user();
        $user->update($_POST);
        $_SESSION['user'] = $_POST;
        header('Location:../view/updateuser.php');
    	break;

    case 'logout':
    	unset($_SESSION['errorlogin'], $_SESSION['user'], $_SESSION['id_user']);
    	session_destroy();
    	header('Location:../index.php');
    	break;
}

?>