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
    $(function () {
        $("#date_time").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            showOn: "both",
            buttonImage: "images/calendar.png",
            buttonImageOnly: true,
            buttonText: "Calender",
            maxDate: '0'
            //minDate:'0'
        })
    })


</script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        $("#update_wrk_sch").validationEngine({
            'custom_error_messages': {
                '#user_id': {
                    'required': {'message': "First Name cannot be Blank"}
                },
                '#schedule': {
                    'required': {'message': "Last Name cannot be Blank"}
                },
                '#date_time': {
                    'required': {'message': "Date of Birth cannot be Blank"}
                },
                '#attendance': {
                    'required': {'message': "NIC cannot be Blank"}
                }
            }
        })

    });

</script>


<?php
if (isset($_GET['clinic_id'])) {
    $clinic_id = $_GET['clinic_id'];
    require_once '../Model/wrk_sch.php';
    $obj_member = new wrk_sch();
    $results = $obj_member->get_wrk_sch_by_id($clinic_id);
    $row = mysql_fetch_assoc($results);
}
?>

<form action="../Controller/wrk_sch.php" method="post" enctype="multipart/form-data" id="update_wrk_sch">
    <table>
        <tr>
            <th colspan="2">
                <h2>Work Scheduler..</h2>
            </th>
        </tr>
        <tr>
            <td>Attending ID</td>
            <td>:<input readonly="" id="clinic_id" type="text" name="clinic_id" value="<?php echo $row ['clinic_id']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>User ID</td>
            <td>:<input readonly="" id="user_id" type="text" name="user_id" value="<?php echo $row ['user_id']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Schedule</td>
            <td>:<input id="schedule" type="text" name="schedule" value="<?php echo $row ['schedule']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Date</td>
            <td>:<input id="date_time" type="text" name="date_time" value="<?php echo $row ['date_time']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <tr>
            <td>Attendance</td>
            <td>
                <div>
                    <input id="attendance" type="radio" name="attendance" value="Yes">YES<br>
                    <input id="attendance" type="radio" name="attendance" value="No">NO
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="clinic_id" value="<?php echo $row ['clinic_id']; ?>"/>
                <input type="hidden" name="action" value="update_wrk_sch"/>
                <input type="submit" name="submit" value="Update">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>

    </table>
</form>

</html>
