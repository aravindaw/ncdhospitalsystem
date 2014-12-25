<?php
/**
 * Created by IntelliJ IDEA.
 * User: aravindaweerasekara
 * Date: 6/22/14
 * Time: 3:01 PM
 * To change this template use File | Settings | File Templates.
 */
require_once '../model/wrk_sch.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title></title>
    <style type="text/css" title="currentStyle">
        @import "css/main.css";
        @import "css/layout.css";
        @import "css/account.css";
        @import "css/style.css";
        @import "css/custom-theme/jquery-ui-1.9.2.custom.css";
        @import "css/validationEngine.jquery.css";
    </style>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.1.custom.js"></script>
    <script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="js/jquery.validationEngine.js"></script>
    <script type="text/javascript">
        //            jQuery(document).ready(function() {
        //                jQuery("#add_user").validationEngine();
        //            });

    </script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $("#add_wrk_sch").validationEngine({
                'custom_error_messages': {
                    '#user_id': {
                        'required': {'message': "First Name cannot be Blank"}
                    },
                    '#schedule': {
                        'required': {'message': "Last Name cannot be Blank"}
                    },
                    '#date_time': {
                        'required': {'message': "Date of Birth cannot be Blank"}
                    }
                }
            })

        });

        $(function () {
            $("#date_time").datepicker({
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    showOn: "both",
                    buttonImage: "images/calendar.png",
                    buttonImageOnly: true,
                    buttonText: "Calender",
                    maxDate: '1000',
                    yearRange:"-7:+10"
                    //        minDate:'0'
                }
            );
        });

    </script>
</head>
<body>
<?php require_once 'common/admin_header.php'; ?>
<div id="contentWrapper">
    <div id="content">
        <form method="post" action="../Controller/wrk_sch.php" enctype="multipart/form-data" id="add_wrk_sch">
            <table align="center" id="ADD_new_work_schedule">
                <th align="center">ADD new work schedule</th>
                <tr>
                    <td>Doctor ID:</td>
                    <td><input type="text" name="user_id" id="user_id" data-validation-engine="validate[required]" style="width: 200px;"/>
                    </td>
                </tr>
                <tr>
                    <td>Schedule:</td>
                    <td><input type="text" name="schedule" id="schedule" data-validation-engine="validate[required]" style="width: 200px;"/>
                    </td>
                </tr>
                <tr>
                    <td>Date & Time:</td>
                    <td><input type="text" name="date_time" id="date_time" data-validation-engine="validate[required]" style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>Attendance:</td>
                    <td><input readonly="" type="text" name="attendance" id="attendance" value="attending set" style="width: 200px;"/>
                    </td>
                </tr>
                <tr>
                <td>
                    <a href="view_wrk_sch.php"><input type="button" name="submit" value="View Work Schedules" align="right"></a>
                </td>
                <td>
                    <input type="reset" name="reset" id="reset" value="Clear"/>
                </td>
                <td colspan="3" align="right">
                    <input type="hidden" name="action" value="add_wrk_sch"/>
                    <input type="submit" name="submit" id="submit" value="Submit"/>
                </td>

                </tr>
            </table>
        </form>
        <?php
        if (isset($_GET['record'])) {
            $record = $_GET['record'];
            if ($record == 'added') {
                echo "<p style='color:green;'>Record added</p>";
            } else if ($record == 'faild') {
                echo "<p style='color:green;'>No record added</p>";
            }
        }
        ?>
    </div>
</div>
<?php require_once 'common/admin_footer.php'; ?>
</body>
</html>