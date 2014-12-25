<?php
require_once '../Model/insert.php';

$nic = $_GET['patient_id'];

if (isset($nic)) {
    $obj = new patient();
    $results = $obj->get_patient_by_nic($nic);
    echo $results;
}