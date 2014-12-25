<?php

require_once 'Connection.php';

class patient
{

    public function add_patient($nic, $fname, $lname, $dob, $address, $blood_g)
    {
        $sql = "INSERT INTO patient_data
        VALUES ('' ,'$nic', '$fname', '$lname', '$dob','$address', '$blood_g')";
        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }

    public function new_patient_note
    ($patientID, $user_id, $chan_date, $weight, $blood_su, $blood_pre, $doctor_note)
    {
        $sql = "INSERT INTO channel_his
        VALUES (null, '$patientID', '$user_id', '$chan_date', '$weight', '$blood_su',
        '$blood_pre', '$doctor_note')";
        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }

    public function get_patients()
    {
        $sql = "SELECT * FROM patient_data";
        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }


    public function patient_note()
    {
        $sql = "SELECT * FROM channel_his";

//        $sql = "SELECT patient.*, channel.*
//        FROM channel_his as channel
//        INNER JOIN patient_data as patient ON
//        channel.patientID = patient.patientID";


        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }

    Public function get_patient_by_id($patientID) {
        $sql = "SELECT *
        FROM patient_data
        WHERE patientID='$patientID'";
        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }

    Public function get_patient_by_id_count($patientID) {
        $sql = "SELECT *
        FROM patient_data
        WHERE patientID='$patientID'";
        $db = new Connection();
        $result = $db->query2($sql);
        return mysql_fetch_assoc($result);
    }

    Public function get_patient_note_by_id($cln_no) {
        $sql = "SELECT *
        FROM channel_his
        WHERE cln_no='$cln_no'";
        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }



    Public function update_patient($fname, $lname, $dob, $address, $blood_g, $patientID) {

        $sql = "UPDATE patient_data
        SET fname='$fname' ,
        lname='$lname', dob='$dob', address='$address' ,blood_g='$blood_g'
        WHERE patientID= '$patientID'";

        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }

    Public function update_patient_note
    ($cln_no, $user_id, $chan_date, $weight, $blood_su, $blood_pre, $doctor_note, $patientID) {

        $sql = "UPDATE channel_his
        SET patientID= '$patientID' , user_id='$user_id', chan_date='$chan_date',
        weight='$weight', blood_su='$blood_su' ,blood_pre='$blood_pre', doctor_note='$doctor_note'
        WHERE cln_no='$cln_no'";

        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }

    Public function delete_patient($patientID) {
        $sql = "DELETE FROM patient_data WHERE patientID='$patientID'";
        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }
    Public function delete_patient_note($cln_no) {
        $sql = "DELETE FROM channel_his WHERE cln_no='$cln_no'";
        $db = new Connection();
        $result = $db->query2($sql);
        return $result;
    }
    Public function get_patient_by_nic($nic) {
        $sql = "SELECT * FROM patient_data
        WHERE nic='$nic'";
        $db = new Connection();
        $result = $db->query2($sql);
        return mysql_num_rows($result);
    }
    Public function add_drug_list($patent_id, $user_id, $drug, $time_period1,$time_period2,$time_period3,$time_period4, $count, $note) {
        $sql = "INSERT INTO drugs
        VALUES (null, '$patent_id', '$user_id', '$drug', '$time_period1', '$time_period2','$time_period3','$time_period4', '$count', '$note')";
        $db = new Connection();
        $result = $db->query2($sql);
        return($result);
    }

}

?>
