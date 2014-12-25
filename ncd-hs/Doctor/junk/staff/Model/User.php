<?php
require_once 'Connection.php';
class User{
    
    public function Login($user_name,$password)
    {
            $sql = "SELECT tbl_user.*, tbl_role.role_type FROM tbl_user
                    INNER JOIN tbl_role ON tbl_user.role_id = tbl_role.role_id  
                    WHERE BINARY tbl_user.user_name='$user_name' AND BINARY tbl_user.password='$password'";
//            echo $sql;
//            die;
            $db = new Connection();
            $results = $db->query($sql);
            return $results;
    }
    public function get_roles()
    {
        $sql = "SELECT * FROM tbl_role";
        $db = new Connection();
        $results = $db->query($sql);
        return $results;
    }
}
?>
