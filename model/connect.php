<?php
class connect {
    var $db=null;
    public function __construct()
    {
        $dsn='mysql:host=localhost;dbname=poly-learning';
        $user='root';
        $pass='';
        $this->db=new PDO($dsn,$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    public function getList($select)
    {
        $results=$this->db->query($select);
        return $results;
    }
    public function getInstance($select)
    {
        $results=$this->db->query($select);
        $result=$results->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function exec($query)
    {
        $results=$this->db->exec($query);
        return $results;
    }
}
?>