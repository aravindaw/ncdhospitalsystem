<?php
require_once 'Connection.php';

class User_val{
    public function getUserValName($user_name)
    {
        $sql = "SELECT * FROM tbl_user WHERE user_name='$user_name'";
        $db = new Connection();
        $results = $db->query($sql);
        return $results;
    }
}
?>
