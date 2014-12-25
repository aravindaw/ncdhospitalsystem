<html>

<style type="text/css" title="currentStyle">
    @import "css/main.css";
    @import "css/layout.css";
    @import "css/account.css";
    @import "css/style.css";
    @import "css/custom-theme/jquery-ui-1.9.2.custom.css";
    @import "css/validationEngine.jquery.css";
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.1.custom.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>

<script type="text/javascript">
    $(function(){
        $("#dob").datepicker({
            dateFormat:'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            showOn: "both",
            buttonImage: "images/calendar.png",
            buttonImageOnly:true,
            buttonText:"Calender",
            maxDate:'0'
            //minDate:'0'
        })
    })


</script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        $("#update_patient").validationEngine({
            'custom_error_messages': {
                '#fname': {
                    'required': {'message': "First Name cannot be Blank"}
                },
                '#lname': {
                    'required': {'message': "Last Name cannot be Blank"}
                },
                '#dob': {
                    'required': {'message': "Date of Birth cannot be Blank"}
                },
                '#address': {
                    'required': {'message': "NIC cannot be Blank"}
                },
                '#blood_g': {
                    'required': {'message': "Email cannot be Blank"}
                }

            }
        })

    });

</script>


<?php
if (isset($_GET['patientID'])) {
    $patientID = $_GET['patientID'];
    require_once '../Model/insert.php';
//    require_once '../Model/User.php';
    $obj_member = new patient();
    $results = $obj_member->get_patient_by_id($patientID);
    $row = mysql_fetch_assoc($results);
}
?>

<form action="../Controller/insert.php" method="post" enctype="multipart/form-data" id="update_patient">
    <table>
        <tr>
            <th colspan="2">
                <h2>Patient Details....</h2>
            </th>
        </tr>
        <tr>
            <td>ID</td>
            <td>:<input readonly="" id="fname" type="text" name="fname" value="<?php echo $row ['patientID']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>NIC</td>
            <td>:<input readonly="" id="fname" type="text" name="fname" value="<?php echo $row ['nic']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td>:<input id="fname" type="text" name="fname" value="<?php echo $row ['fname']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>last Name</td>
            <td>:<input id="lname" type="text" name="lname" value="<?php echo $row ['lname']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td>:<input id="dob" type="text" name="dob" value="<?php echo $row ['dob']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:<input id="address" type="address" name="address" value="<?php echo $row ['address']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Blood Group</td>
            <td>:<input id="blood_g" type="text" name="blood_g" value="<?php echo $row ['blood_g']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="patientID" value="<?php echo $row ['patientID']; ?>"/>
                <input type="hidden" name="action" value="update_patient"/>
                <input type="submit" name="submit" value="Update">
                <input type="reset"  name="reset" value="Reset">
            </td>
        </tr>

    </table>
</form>

</html>
