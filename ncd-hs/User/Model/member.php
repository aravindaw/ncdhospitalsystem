<?php

require_once 'Connection.php';

class member
{

    public function add_user($fname, $lname, $dob, $nic, $email, $phone, $user_name, $password, $role, $profile_pic)
    {
        $sql = "INSERT INTO tbl_user
        VALUES('','$user_name', '$password', '$role', '$fname', '$lname', '$dob', '$nic',
        '$email', '$phone', '$profile_pic')";
        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }


    public function get_members()
    {
        $sql = "SELECT usr.*, rls.role_id, rls.role_type
        FROM tbl_user as usr
        INNER JOIN tbl_role as rls
        ON usr.role_id = rls.role_id";
        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }

    Public function get_member_by_id($user_id)
    {
        $sql = "SELECT usr.*, rls.role_id, rls.role_type
        FROM tbl_user as usr
        INNER JOIN tbl_role as rls
        ON usr.role_id = rls.role_id
        WHERE usr.user_id='$user_id'";
        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }

    Public function delete_user($user_id)
    {
        $sql = "DELETE FROM tbl_user WHERE user_id='$user_id'";
        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }


    Public function update_member($user_name, $password, $role, $fname, $lname, $dob, $nic, $email, $phone, $pic, $user_id)
    {

        $sql = "UPDATE tbl_user
        SET user_name='$user_name', password='$password',
        role_id='$role', fname='$fname' ,
        lname='$lname', dob='$dob', nic='$nic' ,
        email='$email' , phone='$phone' ,pic='$pic'
        WHERE user_id= '$user_id'";

        $db = new Connection();
        $result = $db->query($sql);
        return $result;
    }


    Public function getUserNameByName($user_name)
    {
        $sql = "SELECT user_name FROM tbl_user WHERE user_name = '$user_name'";
        $db = new Connection();
        $result = $db->query($sql);
        return mysql_fetch_assoc($result);
    }

    Public function getUserNameByID($user_id)
    {
        $sql = "SELECT user_id FROM tbl_user WHERE user_id = '$user_id'";
        $db = new Connection();
        $result = $db->query($sql);
        return mysql_fetch_assoc($result);
    }

}

?>