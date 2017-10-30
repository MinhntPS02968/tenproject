<?php

class product{

    var $product_id = null;
    var $product_name = null;
    var $product_images = null;
    var $description = null;
    var $price = null; 
    var $discount_price = null;
    var $quantity = null;
    var $category_id = null;
    var $status = null;
	
	public function __construct(){
        $this->db = new connect();
    }

	function getProduct()
    {
        $select = "SELECT * FROM `product`";
        $result = $this->db->getList($select);
        return $result;
    }

    function getProductById($product_id) {
        $select = "SELECT * FROM `product` WHERE `product_id`` = " . $product_id ;
        $result = $this->db->getInstance($select);
        return $result;
    }

    function addProduct($param){
        $sql = "INSERT INTO `product`(`product_id`, `product_name`, `product_images`, `description`, `price`, `discount_price`, `quantity`, `category_id`, `status`)"
                . "VALUES ('".$param['product_name']."', "
                . "'".$param['product_images']."', "
                . "'".$param['description']."', "
                . "'".$param['price']."', "
                . "'".$param['discount_price']."', "
                . "'".$param['quantity']."', "
                . "'".$param['category_id']."', "
                . "'".$param['status']."');";
        $this->db->exec($sql);
    }
    function updateProduct($param) {
        $sql = "UPDATE `product` SET `product_name`=".$param['product_name'].",`product_images`=".$param['product_images'].",`description`=".$param['description'].",`price`=".$param['price'].",`discount_price`=".$param['discount_price'].",`quantity`=".$param['quantity'].",`category_id`=".$param['category_id'].",`status`=".$param['status']." WHERE `product_id` = " . $param['product_id'] . ";";
        $this->db->exec($sql);
    }
}


?>