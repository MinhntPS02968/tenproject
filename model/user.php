<?php

class user{

    var $user_id = null;
    var $full_name = null;
    var $username = null;
    var $password = null;
    var $phone = null; 
    var $gender = null;
    var $birthday = null;
    var $email = null;
    var $address = null;
    var $avatar = null;
    var $pincode = null;
    var $role = null;
	
	public function __construct(){
        $this->db = new connect();
    }

    function getUserList() {
        $select = "SELECT * FROM `user`";
        $result = $this->db->getList($select);
        return $result;
    }
	function getUser($param)
    {
        $select = "SELECT * FROM `user` WHERE `username` = '".$param['username']."' AND `password` = '".$param['password']."'";
        $result = $this->db->getInstance($select);
        return $result;
    }

    function getUserById($user_id) {
        $select = "SELECT * FROM `user` WHERE `user_id` = " . $user_id ;
        $result = $this->db->getInstance($select);
        return $result;
    }

    function addUser($param){
        $sql = "INSERT INTO `user`(`full_name`, `username`, `password`, `phone`, `gender`, `birthday`, `email`, `address`, `avatar`, `pincode`, `role`)"
                . "VALUES ('".$param['full_name']."', "
                . "'".$param['username']."', "
                . "'".$param['password']."', "
                . "'".$param['phone']."', "
                . "'".$param['gender']."', "
                . "'".$param['birthday']."', "
                . "'".$param['email']."', "
                . "'".$param['address']."', "
                . "'".$param['avatar']."', "
                . "'".$param['pincode']."', "
                . "'".$param['role']."');";
        $this->db->exec($sql);
    }
    function updateUser($param) {
        $sql = "UPDATE `user` SET `full_name`=".$param['full_name'].",`username`=".$param['username'].",`password`=".$param['password'].",`phone`=".$param['phone'].",`gender`=".$param['gender'].",`birthday`=".$param['birthday'].",`email`=".$param['email'].",`address`=".$param['address'].",`avatar`=".$param['avatar'].",`pincode`=".$param['pincode'].",`role`=".$param['role']." WHERE  `user_id` = " . $param['user_id'] . ";";
        if (isset($param['password']) && !empty($param['password'])) :
            $sql .= ", `password` = '" . $param['password'] . "' ";
        endif;

        $sql .= "WHERE  `user_id` = " . $param['user_id'] . ";";
        $this->db->exec($sql);
    }
}


?>