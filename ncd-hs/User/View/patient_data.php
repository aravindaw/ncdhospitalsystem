<?php
session_start();
?>

<?php
require_once '../model/insert.php';
//$obj_roles = new User();
//$results = $obj_roles->get_roles();
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


        jQuery(document).ready(function () {
            $("#add_patient").validationEngine({
                'custom_error_messages': {
                    '#nic': {
                        'required': {'message': "NIC cannot be Blank"}
                    },
                    '#fname': {
                        'required': {'message': "First Name cannot be Blank"}
                    },
                    '#lname': {
                        'required': {'message': "Last Name cannot be Blank"}
                    },
                    '#dob': {
                        'required': {'message': "Date of Birth cannot be Blank"}
                    }
                }
            });

        });


        $(function () {
            $("#dob").datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
                showOn: "both",
                buttonImage: "images/calendar.png",
                buttonImageOnly: true,
                buttonText: "Calender",
                maxDate: '0',
                yearRange: "-100:+50"
                //minDate:'0'
            });
        });

        //        $(function () {
        //            $("#dob").datepicker({
        //                    dateFormat: 'yy-mm-dd',
        //                    changeMonth: true,
        //                    changeYear: true,
        //                    showOn: "both",
        //                    buttonImage: "images/calendar.png",
        //                    buttonImageOnly: true,
        //                    buttonText: "Calender",
        //                    maxDate: '0'
        //                    //        minDate:'0'
        //                }
        //            );
        //        });


        $(function () {
            $("#nic").blur(function () {
                var nicElement = $("#nic");
                var patient_id = nicElement.val().trim();

                if (patient_id != "" && patient_id != null) {
                    $.ajax({
                        type: "POST",
                        url: "../Controller/ajaxfunctions_for_patientNIC.php?patient_id=" + patient_id
                    }).done(function (data) {
                        if (data != 0) {
                            console.log("NIC already exists");
                            nicElement.val(null);
                            $("#errorNic").html("Given nic already exists");
                        } else {
                            $("#errorNic").html("");
                            console.log("Go ahead");
                        }
                    });

                } else {
                    console.log("Cannot be empty")
                }
            });
        });


        function validate_info() {
            var nic = $('#nic').val();
            if (nic === '') {
                alert("Please enter NIC");
                return false;
            }
            var fname = $('#fname').val();
            if (fname === '') {
                alert("Please enter 1st name");
                return false;
            }
            var lname = $('#lname').val();
            if (lname === '') {
                alert("Please enter last name");
                return false;
            }
            var dob = $('#dob').val();
            if (dob === '') {
                alert("Please enter Date Of Birth");
                return false;
            }
            var address = $('#address').val();
            if (address === '') {
                alert("Please enter an Address");
                return false;
            }
        }
        //


    </script>
</head>
<body>
<?php require_once 'common/admin_header.php'; ?>
<div id="contentWrapper">
    <div id="content">
        <form method="post" action="../Controller/insert.php" enctype="multipart/form-data" id="add_patient">
            <table align="center" id="personal_info">
                <th align="center">Patient Info</th>
                <tr>
                    <td>NIC:</td>
                    <td><input type="text" name="nic" id="nic" data-validation-engine="validate[required]" requaired
                               style="width: 200px;"/>
                        <span id="errorNic"></span>
                    </td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="fname" id="fname" data-validation-engine="validate[required]"
                               style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname" id="lname" data-validation-engine="validate[required]"
                               style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>DOB:</td>
                    <td><input type="text" name="dob" id="dob" data-validation-engine="validate[required]"
                               style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <br/>
                    <td>
                        <textarea name="address" id="address" rows="500" cols="500"
                                  style="width:260px; height: 120px; background-color: #D0F18F"></textarea>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>Blood group</td>
                    <br/>
                    <td>
                        <select name="blood_g" id="blood_g">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <!--adding user name to patient data form
                        ====================================                -->
                    <!--                    <td>-->
                    <!--                        <input name="user_name" id="user_name" value="-->
                    <?php //echo $user_name = $_SESSION['cur_name'];
                    //
                    ?><!--"/>-->
                    <!---->
                    <!--                    </td>-->

                    <!--adding user id to patient data form-->
                    <!--======================================-->

                    <td>
<!--                        user ID <input type="text" name="user_name" value="-->
                        <?php
                        $user_name = $_SESSION['cur_name'];
//                        echo $user_name;
                        if ($_SESSION['cur_name'] == true) {
                            $make_connection = mysqli_connect("localhost", "root", "", "ncdhs");
                            $result = mysqli_query($make_connection, "select tbl_user.user_id from tbl_user WHERE user_name='$user_name' ");
                            $row = mysqli_fetch_array($result);
                            $user_id=  $row['user_id'];

                        }
                        //                        echo $row['user_id'];

                        ?>
                        User ID <input type="text" name="user_id" id="user_id" value="<?php echo $row[$user_id];?>"/>
                    </td>


                </tr>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="hidden" name="action" value="add_patient"/>
                        <input type="submit" name="submit" id="submit" value="Submit"
                               onclick="return validate_info();"/>
                        <input type="reset" name="reset" id="reset" value="Clear"/>
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