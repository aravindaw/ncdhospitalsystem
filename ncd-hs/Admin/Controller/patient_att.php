<?php

$action = $_REQUEST['action'];

switch ($action) {
    case "get_patient_id";
        get_patient_id();
        break;
}

    function get_patient_id() {
        $month_id=$_POST['month_id'];
        require_once '../model/wrk_sch.php';
        $obj_member = new patient_att();
        $obj_member->get_patients($month_id);
}
