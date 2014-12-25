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
        $("#chn_date").datepicker({
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
        $("#update_patient_note").validationEngine({
            'custom_error_messages': {
                '#user_id': {
                    'required': {'message': "First Name cannot be Blank"}
                },
                '#chan_date': {
                    'required': {'message': "Last Name cannot be Blank"}
                },
                '#weight': {
                    'required': {'message': "Date of Birth cannot be Blank"}
                },
                '#blood_su': {
                    'required': {'message': "NIC cannot be Blank"}
                },
                '#blood_pre': {
                    'required': {'message': "Email cannot be Blank"}
                },
                '#doctor_note': {
                    'required': {'message': "Email cannot be Blank"}
                }

            }
        })

    });

</script>


<?php
if (isset($_GET['cln_no'])) {
    $cln_no = $_GET['cln_no'];
    require_once '../Model/insert.php';
//    require_once '../Model/User.php';
    $obj_member = new patient();
    $results = $obj_member->get_patient_note_by_id($cln_no);
    $row = mysql_fetch_assoc($results);
}
?>

<form action="../Controller/insert.php" method="post" enctype="multipart/form-data" id="update_patient_note">
    <table>
        <tr>
            <th colspan="2">
                <h2>Channeling History</h2>
            </th>
        </tr>
        <tr>
            <td>Clinic No</td>
            <td>:<input readonly="" id="cln_no" type="text" name="cln_no" value="<?php echo $row ['cln_no']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Patient ID</td>
            <td>:<input readonly="" id="patientID" type="text" name="patientID" value="<?php echo $row ['patientID']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Channeled Dr</td>
            <td>:<input readonly="" id="user_id" type="text" name="user_id" value="<?php echo $row ['user_id']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Channeled date</td>
            <td>:<input id="chan_date" type="text" name="chan_date" value="<?php echo $row ['chan_date']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Weight</td>
            <td>:<input id="weight" type="text" name="weight" value="<?php echo $row ['weight']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Blood Sugar</td>
            <td>:<input id="blood_su" type="blood_su" name="blood_su" value="<?php echo $row ['blood_su']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Blood pressure</td>
            <td>:<input id="blood_pre" type="text" name="blood_pre" value="<?php echo $row ['blood_pre']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Channeling note</td>
            <td>
                <textarea name="doctor_note" id="doctor_note" rows="550" cols="500" style="width:260px; height: 120px; background-color: #D0F18F"><?php echo $row['doctor_note'] ?></textarea>
<!--            <td>:<input id="doctor_note" type="text" name="doctor_note" value="--><?php //echo $row ['doctor_note']; ?><!--"-->
<!--                        data-validation-engine="validate[required]"/></td>-->
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="cln_no" value="<?php echo $row ['cln_no']; ?>"/>
                <input type="hidden" name="action" value="update_patient_note"/>
                <input type="submit" name="submit" value="Update">
                <input type="reset"  name="reset" value="Reset">
            </td>
        </tr>

    </table>
</form>

</html>
