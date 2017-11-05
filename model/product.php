<?php
class product {
    // var $product_id = null;
    // var $product_name = null;
    // var $product_images="../images/";
    // var $price=null;
    // var $discount_price=null;
    // var $category_id=null;
    // var $detail=null;

    public function __construct() {}
    
    //Thêm sản phẩm
    public function addProduct($product_name, $product_images, $price, $discount_price, $category_name, $detail){
        $db = new connect();
        $db->exec("insert into product values(null, '$product_name', '$product_images', '$price', '$discount_price', '$category_name', '$detail')");
    }
   
    // Lấy danh sách sản phẩm
    function getList()
    {
        $db = new connect();
        $select = "select * from product";
        $result = $db->getList($select);
        return $result;
    }
    
    // Lấy danh sách sản phẩm theo trang   
    function getListPage($from,$to)
    {
        $db = new connect();
        $select = "select * from product limit $from,$to";
        $result = $db->getList($select);
        return $result;
    }
    // search san phẩm
    function getSearchProduct($seachkey)
    {
        $db = new connect();
        $select = "SELECT * FROM `product` WHERE `product_name` LIKE ' % ".$seachkey." % ' ";
        $result = $db->getList($select);
        return $result;
    }

    //Update Sản phẩm
    public function updateProduct($product_id, $name, $image, $price, $discount_price, $category_name, $detail){
        $db = new connect();
        $db->exec("update product set product_name = '$name', product_images = '$image', price = '$price' , discount_price = '$discount_price', category_name = '$category_name' , detail = '$detail' where product_id = '$product_id'");
    }
    
    
    // Lấy danh sách sản phẩm theo ID
    public function getProductById($product_id){
        $db = new connect();
        return $db->getInstance("select * from product where product_id = $product_id");
    }
      
    
    // Lấy danh sách sản phẩm theo Name
	 function getProductByName($name)
    {
        $db = new connect();
        $select = "select * from product where name like '%$name%'";
        $result=$db->getList($select);
        return $result;
    } 
    
    // Xóa Sản phẩm
    public function removeProduct($product_id){
        $db = new connect();
        $db->exec("delete from product where product_id = $product_id");
    }

}
?>
