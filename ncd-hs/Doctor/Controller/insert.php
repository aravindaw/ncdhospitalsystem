<?php

$action = $_REQUEST['action'];

switch ($action) {
    case "add_patient";
        add_patient();
        break;
    case "delete_patient";
        delete_patient();
        break;
    case "update_patient";
        update_patient();
        break;
    case "update_patient_note";
        update_patient_note();
        break;
    case "new_patient_note";
        new_patient_note();
        break;
    case "delete_patient_note";
        delete_patient_note();
        break;
    case "drug_list";
        drug_list();
        break;
}


function add_patient()
{
    $nic = $_POST['nic'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $blood_g = $_POST['blood_g'];

    require_once '../Model/insert.php';

    $obj_patient = new patient();
    $result = $obj_patient->add_patient($nic, $fname, $lname, $dob, $address, $blood_g);

    if ($result == 1) {
        header('location: ../view/patient_data.php?record=added');
    } else {
        header('location: ../view/patient_data.php?record=added');
    }
}

function new_patient_note()
{
    $patientID = $_POST['patientID'];
    $user_id = $_POST['user_id'];
    $chan_date = $_POST['chan_date'];
    $weight = $_POST['weight'];
    $blood_su = $_POST['blood_su'];
    $blood_pre = $_POST['blood_pre'];
    $doctor_note = $_POST['doctor_note'];

    require_once '../Model/insert.php';

    $obj_patient = new patient();
    $result = $obj_patient->new_patient_note($patientID, $user_id, $chan_date, $weight, $blood_su, $blood_pre, $doctor_note);

    if ($result == 1){
        header('location: ../view/new_patient_note.php?record=added');
    } else {
        header('location: ../view/new_patient_note.php?record=added');
    }
}

function update_patient() {
    $patientID = $_POST['patientID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $blood_g = $_POST['blood_g'];


    require_once '../Model/insert.php';
    $obj_member = new patient();
    $result = $obj_member->update_patient($fname, $lname, $dob, $address, $blood_g, $patientID);

    if ($result == 1) {
        header('location: ../view/view_patients.php?added=updated');
    } else {
        header('location: ../view/view_patients.php?added=failed');
    }
}

function update_patient_note() {
    $cln_no = $_POST['cln_no'];
    $patientID = $_POST['patientID'];
    $user_id = $_POST['user_id'];
    $chan_date = $_POST['chan_date'];
    $weight = $_POST['weight'];
    $blood_su = $_POST['blood_su'];
    $blood_pre = $_POST['blood_pre'];
    $doctor_note = $_POST['doctor_note'];


    require_once '../Model/insert.php';
    $obj_member = new patient();
    $result = $obj_member->update_patient_note($cln_no, $user_id, $chan_date, $weight, $blood_su, $blood_pre, $doctor_note, $patientID);

    if ($result == 1) {
        header('location: ../view/view_patient_notes.php?added=updated');
    } else {
        header('location: ../view/view_patient_notes.php?added=failed');
    }
}

function delete_patient() {
    require_once '../Model/insert.php';
    $obj_member = new patient();
    $patientID = $_GET['patientID'];
    $result = $obj_member->delete_patient($patientID);
    if ($result == 1) {
        header("location:../view/view_patients.php?del=1");
    } else {
        header("location:../view/view_patients.php?del=0");
    }
}
function delete_patient_note() {
    require_once '../Model/insert.php';
    $obj_member = new patient();
    $cln_no = $_GET['cln_no'];
    $result = $obj_member->delete_patient_note($cln_no);
    if ($result == 1) {
        header("location:../view/view_patient_notes.php?del=1");
    } else {
        header("location:../view/view_patient_notes.php?del=0");
    }
}

function drug_list() {
    $patent_id = $_POST['patientID'];
    $user_id = $_POST['userID'];
    $drug = $_POST['drug'];
    $time_period1 = $_POST['time_period1'];
    $time_period2 = $_POST['time_period2'];
    $time_period3 = $_POST['time_period3'];
    $time_period4 = $_POST['time_period4'];
    $count = $_POST['count'];
    $note = $_POST['note'];


    require_once '../Model/insert.php';
    $obj_member = new patient();
//    $result =
        $obj_member->add_drug_list($patent_id, $user_id, $drug,$time_period1, $time_period2, $time_period3, $time_period4, $count, $note);
//
//    if ($result == 1) {
//        header("location:../view/view_patient_notes.php?del=1");
//    } else {
//        header("location:../view/view_patient_notes.php?del=0");
//    }
}
?>