<?php
if(isset($_GET['patientID'])){
    $patientID = $_GET['patientID'];
    require_once '../model/insert.php';
    $obj_member = new patient();
    $results = $obj_member->get_patient_by_id($patientID);
    $row = mysql_fetch_assoc($results);
}

?>
<table>
    <tr>
        <th colspan="2">
            <h2>Patient details</h2>
        </th>
    </tr>
    <tr>
        <td>First Name</td>
        <td>: <?php echo $row['fname'];?></td>
    </tr>
    <tr>
        <td>last Name</td>
        <td>: <?php echo $row['lname'];?></td>
    </tr>
    <tr>
        <td>DOB</td>
        <td>: <?php echo $row['dob'];?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td>: <?php echo $row['address'];?></td>
    </tr>
    <tr>
        <td>Blood Group</td>
        <td>: <?php echo $row['blood_g'];?></td>
    </tr>
</table>
