<?php
require_once 'Connection.php';

class Publisher{
    public function getAllPublishers()
    {
        $sql = "SELECT * FROM tbl_publishers";
        $db = new Connection();
        $results = $db->query($sql);
        return $results;
    }
}
?>
