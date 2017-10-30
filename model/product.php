<?php

class user{

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

	function getProduct($param)
    {
        $select = "SELECT * FROM `product`WHERE `status` = 1";
        $result = $this->db->getList($select);
        return $result;
    }

    function getUserById($product_id) {
        $select = "SELECT * FROM `product` WHERE `product_id`` = " . $product_id ;
        $result = $this->db->getInstance($select);
        return $result;
    }

    function addUser($param){
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
    function update($param) {
        $sql = "UPDATE `product` SET `product_name`=".$param['product_name'].",`product_images`=".$param['product_images'].",`description`=".$param['description'].",`price`=".$param['price'].",`discount_price`=".$param['discount_price'].",`quantity`=".$param['quantity'].",`category_id`=".$param['category_id'].",`status`=".$param['status']." WHERE `product_id` = " . $param['product_id'] . ";";
        $this->db->exec($sql);
    }
}


?>