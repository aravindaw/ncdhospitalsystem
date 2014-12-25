<?php
require_once 'Connection.php';

class Authors{
    public function getAuthersById($publisher_id)
    {
        $sql = "SELECT * FROM tbl_authors WHERE publisher_id='$publisher_id'";
        $db = new Connection();
        $results = $db->query($sql);
        return $results;
    }
}
?>
