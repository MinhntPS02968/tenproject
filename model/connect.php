<?php
class connect {
    var $db=null;
    
    public function __construct() {
        $dsn = 'mysql:host=localhost; dbname=divine_shop';
        $user = 'root';
        $pass = '';
        $this->db = new PDO($dsn,$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    
    
    public function getList($query){
        return $this->db->query($query);
    }

    public function getInstance($select){
        $results = $this->db->query($select);
        $result = $results->fetch();
        return $result;
    }
        
    
    public function exec($query)
    {
        $results=$this->db->exec($query);
        return $results;
    }
}
?>