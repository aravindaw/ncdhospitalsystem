<?php

require_once '../model/user.php';
$action = $_REQUEST['action']; //method and value name

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
        } else if ($user ['role_type'] == "doctor") {
            session_start();
            $_SESSION['cur_name'] = $user['user_name'];
            $_SESSION['role_id'] = $user['role_id'];
            $_SESSION['role_type'] = $user['role_type'];
            header("location:../../Doctor/view/member.php");
        }else if ($user ['role_type'] == "user") {
            session_start();
            $_SESSION['cur_name'] = $user['user_name'];
            $_SESSION['role_id'] = $user['role_id'];
            $_SESSION['role_type'] = $user['role_type'];
            header("location:../../User/view/member.php");
        }else {
            header('location:../view/login.php?feedback=no_role');
        }
    } else {
        header('location:../view/login.php?feedback=no_match');
    }
}

function user_logout() {
    header('location:../View/Login.php');
    //session_destroy();
    
}

?>
<!--<html><a href="../View/Login.php"/></html-->