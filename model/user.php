<?php

class user{

    var $id = null;
    var $username = null;
    var $password = null;
    var $fullname = null;
    var $email = null; 
    var $gender = null;
    var $birthday = null;
    var $avatar = null;
	
	public function __construct(){
        $this->db = new connect();
    }

	function getUser($param)
    {
        $select = "SELECT * FROM `user` WHERE `username` = '".$param['username']."' AND `password` = '".$param['password']."'";
        $result = $this->db->getInstance($select);
        return $result;
    }

    function getUserById($id) {
        $select = "SELECT * FROM `user` WHERE `id` = " . $id ;
        $result = $this->db->getInstance($select);
        return $result;
        var_dump($result);
    }

    function addUser($param){
        $sql = "INSERT INTO `user`( `username`, `password`, `fullname`, `email`, `gender`, `birthday`, `avatar`)"
                . "VALUES ('".$param['username']."', "
                . "'".$param['password']."', "
                . "'".$param['fullname']."', "
                . "'".$param['email']."', "
                . "'', "
                . "'', "
                . "'');";
        $this->db->exec($sql);
    }
    function update($param) {
        $sql = "UPDATE `user` SET `username` = '" . $param['username'] . "', `password` = '" . $param['password'] . "', `fullname` = '" . $param['fullname'] . "', `email` = '" . $param['email'] . "', `gender` = '" . $param['gender'] . "', `birthday` = '" . $param['birthday'] . "' WHERE `user`.`id` = " . $param['id'] . ";";
        if (isset($param['password']) && !empty($param['password'])) :
            $sql .= ", `password` = '" . $param['password'] . "' ";
        endif;

        $sql .= "WHERE `user`.`id` = " . $param['id'] . ";";
        $this->db->exec($sql);
    }
}


?>