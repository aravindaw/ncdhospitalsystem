<?php
require_once '../Model/insert.php';

$patientID = $_GET['patient_id'];

if (isset($patientID)) {
    $obj = new patient();
    $results = $obj->get_patient_by_id_count($patientID);
    echo $results;
}