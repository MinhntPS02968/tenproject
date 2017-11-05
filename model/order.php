<?php
class order {
    public function __construct() {
        ;
    }
    
    public function addOrder($user_id){
        $db = new connect();
        $date = new DateTime("now");
        $date_create = $date->format("Y-m-d");
        $total  = Cart::get_subtotal();
        $db->exec("INSERT into divine_shop.order values(null, '$user_id', 0, '$date_create')");
        
        $user_id = $_SESSION['user_id'];
        $result = $db->getInstance("SELECT divine_shop.order.order_id, divine_shop.order.user_id, divine_shop.order.total, divine_shop.order.date_create 
		from divine_shop.order join divine_shop.user on divine_shop.order.user_id = divine_shop.user.user_id
		where divine_shop.user.user_id = '$user_id'
		order by divine_shop.order.order_id DESC
		limit 1");
        return $result['order_id'];
    }
    
    public function updateOrder($order_id, $total){
        $db = new connect();
        $db->exec("UPDATE divine_shop.order set total = '$total' where order_id = '$order_id'");
    }
    
    public function insertOrderDetail($order_id, $product_id, $price, $quantity){
        $db = new connect();
        $db->exec("INSERT into divine_shop.order_detail values('$order_id', '$product_id', '$price', '$quantity')");
    }
    
    public function updateOrderDetail($order_id, $quantity){
        $db = new connect();
        $db->exec("UPDATE divine_shop.order_detail set quantity = '$quantity' where divine_shop.order_id = '$order_id'");
    }
    
    public function deleteOrderDetail($order_id, $product_id){
        $db = new connect();
        $db->exec("DELETE from divine_shop.order_detail where divine_shop.order_id = '$order_id' AND divine_shop.product_id = '$product_id'");
    }
    

    public function getOrderById($order_id){
        $db = new connect();
        return $db->getInstance("SELECT divine_shop.order.order_id, divine_shop.order.date_create, divine_shop.order.total, divine_shop.user.user_id, divine_shop.user.full_name
        from divine_shop.order join user on order.user_id = user.user_id
        where divine_shop.order.order_id = $order_id");
    }
    
    public function getOrderDetailById($order_id){
        $db = new connect();
        return $db->getList("SELECT divine_shop.order_detail.order_id, divine_shop.order_detail.product_id, divine_shop.order_detail.price, divine_shop.order_detail.quantity, divine_shop.product.product_name, divine_shop.product.product_images
		from divine_shop.order_detail join divine_shop.product on divine_shop.order_detail.product_id = divine_shop.product.product_id
		where divine_shop.order_detail.order_id = $order_id");
    }
    
    public function getAllOrders(){
        $db = new connect();
        return $db->getList("SELECT divine_shop.order.order_id, divine_shop.user.full_name, divine_shop.order.total, divine_shop.order.date_create
		FROM divine_shop.order JOIN divine_shop.user on divine_shop.order.user_id = divine_shop.user.user_id");
    }
    
    public function removeOrder($order_id){
        $db = new connect();
        $db->exec("DELETE from divine_shop.order where divine_shop.order.order_id = $order_id");
    }
    
    public function removeOrderDetail($order_id){
        $db = new connect();
        $db->exec("DELETE from divine_shop.order_detail where divine_shop.order.order_id = $order_id");
    }
    
    public function removeOrderDetailByProductId($product_id){
        $db = new connect();
        $db->exec("DELETE from divine_shop.order_detail where divine_shop.product_id = $product_id");
    }
    
    public function removeOrderByCustomerId($user_id){
        $db = new connect();
        $db->exec("DELETE from divine_shop.order where divine_shop.user_id = $user_id");
    }
    
    public function getOrderByCustomerId($user_id){
         $db = new connect();
         return $db->getList("SELECT * from divine_shop.order where divine_shop.user_id = $user_id");
    }
}
