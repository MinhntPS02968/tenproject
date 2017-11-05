<?php
class User {
   
    public function __construct() {;}
    
    //Đang nhập
    public function login($email, $password){
        $db = new connect();
        return $db->getInstance("select * from user where email = '$email' AND password = '$password'");
    }

    // Lấy danh sách khách hang  
    public function getAllCustomers(){
    $db =  new connect();
    $select = "select * from user";
    return $db->getList($select);
    }

    //Lấy User theo ID
    public function getCustomerById($user_id){
    $db = new connect();
    $select = "select * from user where user_id=$user_id";
    $result = $db -> getList($select);
    $query = $result ->fetch();
    return $query;
}
    //Thêm User
    public function addUser($fullname, $email, $phone, $password){
        $db = new connect();
        $db->exec("insert into user values(null, '$fullname', '$email', '$phone', '$password')");
    }
    
    //Update User
    public function updateUser($user_id, $fullname, $email, $phone, $password){
        $db = new connect();
        $db->exec("update user set full_name = '$fullname', email = '$email', phone = '$phone', password = '$password' where user_id = $user_id");
    }    
    
    //Xóa User
    public function removeCustomer($user_id){
        $db = new connect();
        $db->exec("delete from user where user_id = $user_id");
    }
    
}
