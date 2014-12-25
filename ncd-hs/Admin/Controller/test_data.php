<?php
/**
 * Created by IntelliJ IDEA.
 * User: aravindaweerasekara
 * Date: 11/8/14
 * Time: 11:06 AM
 * To change this template use File | Settings | File Templates.
 */


require_once '../Model/test_data.php';
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