<?php
require_once '../model/User.php';
$action = $_POST['action']; //method and value name 

switch ($action){
    case "login";
        //to do...
        User_login();
        break;
    case "log_out";
        //to do......
        User_logout();
        break;
}
function User_login()
{
    $user_name = $_POST['user_name'];
    $password =  $_POST['password'];
    $obj_user = new User();
    $results = $obj_user->Login($user_name,$password);
    $count = mysql_num_rows($results);
    if($count==1)
    {
        $row = mysql_fetch_array($results);
        session_start();
        $_SESSION['cur_name'] = $row['user_name'];
        $_SESSION['role_id'] = $row['role_id'];
        $_SESSION['role_type'] = $row['role_type'];
        header("location:../view/member.php");
    }
      else
   {
        header('location:../view/login.php');
   }

}
?>
