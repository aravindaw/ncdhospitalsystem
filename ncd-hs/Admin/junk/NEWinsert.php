<?php

//require_once 'Connection.php';

class patientJUNK {

    public function add_patient($fname, $lname, $dob, $note) {
        //        $con = mysqli_connect("127.0.0.1", "root", "", "patientdb");
// Check connection
        $sql2 = "INSERT INTO patient_data (`patientID`,`fname`,`lname`,`dob`,`note`) VALUES (null, '$fname', '$lname', '$dob','$note')";
        $db = new Connection();
        $result = $db->query2($sql2);
        return $result;

//        if (mysqli_connect_errno()) {
//            echo "Failed to connect to MySQL: " . mysqli_connect_error();
//        }

// escape variables for security
//
//        $fname = mysqli_real_escape_string($con, $_POST['fname']);
//        $lname = mysqli_real_escape_string($con, $_POST['lname']);
//        $dob = mysqli_real_escape_string($con, $_POST['dob']);
//        $note = mysqli_real_escape_string($con, $_POST['note']);
//        
//
//        if (!mysqli_query($con, $sql)) {
//            die('Error: ' . mysqli_error($con));
//        }

//        mysqli_close($db);
    }

}
?>

