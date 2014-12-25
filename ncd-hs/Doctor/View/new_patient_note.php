<?php
//require_once '../model/insert.php';
//$obj_roles = new User();
//$results = $obj_roles->get_roles();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Patient notes</title>

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


        jQuery(document).ready(function () {
            $("#new_patient_note").validationEngine({
                'custom_error_messages': {
                    '#patientID': {
                        'required': {'message': "Patient ID cannot be Blank"}
                    },
                    '#user_id': {
                        'required': {'message': "Doctor ID cannot be Blank"}
                    },
                    '#chan_date': {
                        'required': {'message': "Channeling date cannot be Blank"}
                    },
                    '#weight': {
                        'required': {'message': "Patient weight cannot be Blank"}
                    },
                    '#blood_su': {
                        'required': {'message': "Blood sugar count cannot be Blank"}
                    },
                    '#blood_pre': {
                        'required': {'message': "Blood pressure count cannot be Blank"}
                    }
                }
            });

        });

        $(function () {
            $("#patientID").blur(function () {
                var patientElement = $("#patientID");
                var patient_id = patientElement.val().trim();
                console.log("entered patient ID [" + patient_id + "]")

                if (patient_id != "" && patient_id != null) {
                    $.ajax({
                        type: "POST",
                        url: "../Controller/ajaxfunctions_for_patientNote.php?patient_id=" + patient_id
                    }).done(function (data) {
                            if (data != 0) {
                                $("#errorPatientId").html("");
                                console.log("Valid patient ID");
                            } else {
                                console.log("Not valid patient ID");
                                $("#errorPatientId").html("Not valid ID");
                                patientElement.val(null);
                            }
                        });
                }
            });
        });

        $(function () {
            $("#user_id").blur(function () {
                var userElement = $("#user_id");
                var user_id = userElement.val().trim();
                console.log("entered patient ID [" + user_id + "]")

                if (user_id != "" && user_id != null) {
                    $.ajax({
                        type: "POST",
                        url: "../Controller/ajaxfunctions_for_userID.php?user_id=" + user_id
                    }).done(function (data) {
                            if (data != 0) {
                                $("#errorUserId").html("");
                                console.log("Valid Doctor ID");
                            } else {
                                console.log("Not valid Doctor ID");
                                $("#errorUserId").html("Not valid ID");
                                userElement.val(null);
                            }
                        });
                }
            });
        });

        $(function () {
            $("#chan_date").datepicker({
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    showOn: "both",
                    buttonImage: "images/calendar.png",
                    buttonImageOnly: true,
                    buttonText: "Calender",
                    maxDate: '0'
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
        <form method="post" action="../Controller/insert.php" enctype="multipart/form-data" id="new_patient_note">
            <table align="center" id="personal_info">
                <th align="center">Patient channel info</th>
                <tr>
                    <td>Patient ID:</td>
                    <td><input type="text" name="patientID" id="patientID" data-validation-engine="validate[required]"
                               style="width: 200px;"/>
                        <span id="errorPatientId"></span>
                    </td>
                </tr>
                <tr>
                    <td>Doctor ID:</td>
                    <td><input type="text" name="user_id" id="user_id" data-validation-engine="validate[required]"
                               style="width: 200px;"/>
                        <span id="errorUserId"></span>
                    </td>
                </tr>
                <tr>
                    <td>channel date:</td>
                    <td><input type="text" name="chan_date" id="chan_date" data-validation-engine="validate[required]"
                               style="width: 200px;"/>
                    </td>
                </tr>
                <tr>
                    <td>Weight:</td>
                    <td><input type="text" name="weight" id="weight" data-validation-engine="validate[required]"
                               style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>Blood Sugar:</td>
                    <td><input type="text" name="blood_su" id="blood_su" data-validation-engine="validate[required]"
                               style="width: 200px;"/>
                    </td>
                </tr>
                <tr>
                    <td>Blood pressure:</td>
                    <td><input type="text" name="blood_pre" id="blood_pre" data-validation-engine="validate[required]"
                               style="width: 200px;"/>
                    </td>
                </tr>
                <tr>
                    <td>Doctor note</td>
                    <br/>
                    <td>
                        <textarea name="doctor_note" id="doctor_note" rows="500" cols="500"
                                  style="width:260px; height: 120px; background-color: #D0F18F"></textarea>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="view_patient_notes.php"><input type="button" name="submit" value="View Patient notes"
                                                                align="right"></a>
                    </td>
                    <td>
                        <input type="reset" name="reset" id="reset" value="Clear"/>
                    </td>
                    <td colspan="3" align="right">
                        <input type="hidden" name="action" value="new_patient_note"/>
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
                echo "<a href='drug_list.php'>
                <input type='submit' name='add_drugs' value='Add Drugs' id='add_drugs' style='width: 100px'></a>";
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