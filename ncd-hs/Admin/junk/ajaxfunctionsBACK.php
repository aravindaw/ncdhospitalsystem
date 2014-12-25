<?php
require_once '../Model/user_val.php';

if(isset($_POST['user_name']) && $_POST['user_name'] != '' )
{
//    $user_name = $_POST['user_name'];
    $obj_username = new User_val();
    $results = $obj_username->getUserValName($user_name);
    while ($row = mysql_fetch_assoc($results)) {
        $data[] = $row;
    }
    echo json_encode($data);
}
?>
