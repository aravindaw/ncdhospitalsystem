<?php
require_once 'Connection.php';

class Authors{
    public function getAuthersById($user_name)
    {
        $sql = "SELECT * FROM tbl_user WHERE user_name='$user_name'";
        $db = new Connection();
        $results = $db->query($sql);
        return $results;
    }
}
?>
