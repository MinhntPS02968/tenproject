<?php
class Cart {
    public function __construct() {
        ;
    }
    
    // Lấy sản phẩm vào giỏ hàng
    public function add_item($product_id, $quantity){
        $db = new connect();
        $product = new product();
        $result = $product->getProductById($product_id);
        $cart = new Cart();
        if(isset($_SESSION['cart'][$product_id])){
            $quantity += (int)$_SESSION['cart'][$product_id]['quantity']; 
            $cart->update_item($product_id, $quantity); 
            return;     
        }
        $price = $result['price']; 
        $total = $price * $quantity;
        
        $item = array( 
            'name' => $result['product_name'], 
            'price' => $price, 
            'quantity' => $quantity, 
            'total' => $total 
         ); 
    
        $_SESSION['cart'][$product_id]= $item; 
    }
    
    // Sửa đổi thông tin giỏ hàng
    function update_item($product_id ,$quantity) {    
        $quantity = (int) $quantity; 
        if($quantity <= 0) {
           unset($_SESSION['cart'][$product_id]); 
        }   
        else { 
            $_SESSION['cart'][$product_id]['quantity'] = $quantity; 
            $total = $_SESSION['cart'][$product_id]['price'] * $_SESSION['cart'][$product_id]['quantity']; 
            $_SESSION['cart'][$product_id]['total'] = $total; 
        }      
    } 
    
    // Lấy sản phẩm ra khỏi giỏ hàng
    public function delete_item($product_id){
        unset($_SESSION['cart'][$product_id]);
    }
    
    // Thanh toán         
    static function get_subtotal() {
        $subtotal = 0; 
        foreach($_SESSION['cart'] as $item) {
            $subtotal += $item['total']; 
        } 
        return $subtotal; 
    }
    static function get_quantitytotal() {
        $quantitytotal = 0; 
        foreach($_SESSION['cart'] as $item) {
            $quantitytotal += $item['quantity']; 
        } 
        return $quantitytotal; 
    }  
}
