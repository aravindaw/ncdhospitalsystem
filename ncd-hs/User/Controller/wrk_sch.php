<?php

$action = $_REQUEST['action'];

switch ($action) {
    case "add_wrk_sch";
        add_wrk_sch();
        break;
        break;
    case "update_wrk_sch";
        update_wrk_sch();
        break;
    case "delete_wrk_sch";
        delete_wrk_sch();
        break;
}


function add_wrk_sch()
{
    $user_id = $_POST['user_id'];
    $schedule = $_POST['schedule'];
    $date_time = $_POST['date_time'];
    $attendance = $_POST['attendance'];

    require_once '../Model/wrk_sch.php';

    $obj_wrk_sch = new wrk_sch();
    $result = $obj_wrk_sch->add_wrk_sch($user_id, $schedule, $date_time, $attendance);

    if ($result == 1) {
        header('location: ../view/new_wrk_sch.php?record=added');
    } else {
        header('location: ../view/new_wrk_sch.php?record=added');
    }
}

function update_wrk_sch() {
    $clinic_id = $_POST['clinic_id'];
    $user_id = $_POST['user_id'];
    $schedule = $_POST['schedule'];
    $date_time = $_POST['date_time'];
    $attendance = $_POST['attendance'];


    require_once '../Model/wrk_sch.php';
    $obj_member = new wrk_sch();
    $result = $obj_member->update_wrk_sch($user_id, $schedule, $date_time, $attendance, $clinic_id);

    if ($result == 1) {
        header('location: ../view/view_wrk_sch.php?added=updated');
    } else {
        header('location: ../view/view_wrk_sch.php?added=failed');
    }
}
function delete_wrk_sch() {
    require_once '../model/wrk_sch.php';
    $obj_member = new wrk_sch();
    $clinic_id = $_GET['clinic_id'];
    $result = $obj_member->delete_wrk_sch($clinic_id);
    if ($result == 1) {
        header("location:../view/view_wrk_sch.php?del=1");
    } else {
        header("location:../view/view_wrk_sch.php?del=0");
    }
}
