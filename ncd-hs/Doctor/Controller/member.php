<?php

$action = $_REQUEST['action'];

switch ($action) {
//    case "save_member";
//        add_user();
//        break;
    case "save_member";
        add_user();
        break;
    case "delete_member";
        delete_member();
        break;
    case "update_member";
        update_member();
        break;
//    case "role_add";
//        role_add();
//        break;
}

function add_user() {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $password2 = $_POST['re_password'];
    $role = $_POST['role'];

    $profile_pic = $_FILES['profile_pic']['tmp_name'];
    if (($_FILES['profile_pic']["type"] == "image/jpeg") || ($_FILES['profile_pic']["type"] == "image/gif") || ($_FILES['profile_pic']["type"] == "image/jpg") || ($_FILES['profile_pic']["type"] == "image/png") && ($_FILES['profile_pic']["size"] < 2000000)
    ) {
        $image_name = date('U') . "_" . $_FILES['profile_pic']['name'];
        move_uploaded_file($_FILES['profile_pic']['tmp_name'], "../view/images/user_image/" . $image_name);
    } else {
        header("location:../View/new_user.php?feedback=img_error");
    }
    if ($password !== $password2) {
        header("location: ../View/new_user.php");
    }
    require_once '../Model/member.php';
    $obj_member = new member();
    $result = $obj_member->add_user($fname, $lname, $dob, $nic, $email, $phone, $user_name, $password, $role, $image_name);
    if ($result == 1) {
        header("location: ../View/new_user.php?record=added");
    } else {
        header("location: ../View/new_user.php?record=faild");
    }
}

function delete_member() {
    require_once '../model/member.php';
    $obj_member = new member();
    $user_id = $_GET['user_id'];
    $result = $obj_member->delete_user($user_id);
    if ($result == 1) {
        header("location:../view/view_members.php?del=1");
    } else {
        header("location:../view/view_members.php?del=0");
    }
}

function update_member() {
    $user_name = $_POST['user_name'];
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role_name'];
    $password = $_POST['new_password'];
    $pic = $_FILES['profile_pic']['name'];


    if ($password == '') {
        $old_pw = $_POST ['old_pw'];
        $password = $old_pw;
    }

    if ($pic != '') {
        $allowed = array('gif', 'png', 'jpg', 'jpeg');
        $ext = pathinfo($pic, PATHINFO_EXTENSION);

        if (in_array($ext, $allowed)) {
            $image_name = date('U') . "_" . $_FILES['profile_pic']['name'];
            move_uploaded_file($_FILES['profile_pic']['tmp_name'], "../View/images/user_image/" . $image_name);
        } else {
            header("location: ../view/view_members.php?added=wrong_image_type");
//            die;
        }
    } else {
        $old_img = $_POST ['old_image'];
        $image_name = $old_img;
    }


    require_once '../Model/member.php';
    $obj_member = new member();
    $result = $obj_member->update_member($user_name, $password, $role, $fname, $lname, $dob, $nic, $email, $phone, $image_name, $user_id);

    if ($result == 1) {
        header('location: ../view/view_members.php?added=updated');
    } else {
        header('location: ../view/view_members.php?added=failed');
    }
}

?>
