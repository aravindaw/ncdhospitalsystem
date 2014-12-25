<?php

require_once '../Model/User.php';
$action = $_POST['action']; //method and value name 

switch ($action) {
    case "login";
        //to do...
        User_login();
        break;
    case "log_out";
        //to do......
        User_logout();
        break;
}

function User_login() {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $obj_user = new User();
    $results = $obj_user->Login($user_name, $password);
    $count = mysql_num_rows($results);
    $user = mysql_fetch_assoc($results);
    if ($count == 1) {
//        session_start();
//        $_SESSION['cur_name'] = $user['user_name'];
//        $_SESSION['role_id'] = $user['role_id'];
//        $_SESSION['role_type'] = $user['role_type'];
//        header("location:../../".$user['role_type']."/view/member.php");


        if ($user ['role_type'] == "admin") {
            session_start();
            $_SESSION['cur_name'] = $user['user_name'];
            $_SESSION['role_id'] = $user['role_id'];
            $_SESSION['role_type'] = $user['role_type'];
            header("location:../../Admin/view/member.php");

        } else if ($user ['role_type'] == "staff") {
            session_start();
            $_SESSION['cur_name'] = $user['user_name'];
            $_SESSION['role_id'] = $user['role_id'];
            $_SESSION['role_type'] = $user['role_type'];
            header("location:../../Staff/view/member.php");
        }
    } else {
        header('location:../view/login.php');
    }
}

?>
