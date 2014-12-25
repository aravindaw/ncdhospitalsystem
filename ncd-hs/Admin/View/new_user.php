<?php
require_once '../model/user.php';
$obj_roles = new User();
$results = $obj_roles->get_roles();
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
        $("#add_user").validationEngine({
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
                '#nic': {
                    'required': {'message': "NIC cannot be Blank"}
                },
                '#email': {
                    'required': {'message': "Email cannot be Blank"}
                },
                '#phone': {
                    'required': {'message': "Phone Number cannot be Blank"}
                },
                '#user_name': {
                    'required': {'message': "User Name cannot be Blank"}
                },
                '#password': {
                    'required': {'message': "Password cannot be Blank"}
                },
                '#re_password': {
                    'required': {'message': "Re enter the password"}
                },
                '#role': {
                    'required': {'message': "Select a role type"}
                },
                '#profile_pic': {
                    'required': {'message': "Select a Profile pic for upload"}
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
            yearRange:"-100:+50"
//            fontsize(12);
            //minDate:'0'
        });
    });


    function show_login_info() {
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
        var nic = $('#nic').val();
        if (nic === '') {
            alert("Please enter NIC");
            return false;
        }
        var email = $('#email').val();
        if (email === '') {
            alert("Please enter Email");
            return false;
        }
        var phone = $('#phone').val();
        var textBox = document.getElementById("phone");
        var textLength = textBox.value.length;
        if (textLength < 10 || phone === '') {
            alert("Please enter Correct Phone Number");
            return false;
        }
        var uname = $('#user_name').val();
        if (uname === '') {
            alert("Please enter a User Name");
            return false;
        }
        var password = $('#password').val();
        if (password === '') {
            alert("Please enter Password");
            return false;
        }
        var re_password = $('#re_password').val();
        if (re_password === '') {
            alert("Please re-enter the Password");
            return false;
        }
        var pw = $('#password').val();
        var repw = $('#re_password').val();

        if (pw !== repw) {
            alert("Password Mismatch");
            return false;
        }
        var role = $('#role').val();
        if (role === '') {
            alert("Please select Role type");
            return false;
        }
        var pic = $('#profile_pic').val();
        if (pic === '') {
            alert("Please select a Picture");
            return false;
        }
        var pic = $('#pic').val();
        if (pic === '') {
            alert("Please upload your Picture");
            return false;
        }
    }


    //        function getUserName() {
    //            var userName = $('#user_name').val();
    //                console.log("test")
    //            $.ajax({
    //
    //                type: "POST",
    //                url: "../Controller/ajaxfunctions.php"+userName,
    ////                cache: false,
    ////                async: false,
    ////                data: userName,
    //                success: function (theResponse) {
    //                    if (theResponse == 'yes') {
    //                        alert('User Name Already Exist');
    //                        $('#errorUserName').html('User Name Exists');
    //                        return $('#user_name').val(null);
    //                    }
    //                    else {
    //                        $('#errorUserName').html('');
    //                        return true;
    //                    }
    //                }
    //            });
    //
    //        }

    $(function () {
        $("#user_name").blur(function () {
            var userElement = $("#user_name");
            var user_name = userElement.val().trim();
            console.log("execute function")
            console.log(user_name)

            if (user_name != "" && user_name != null) {
                $.ajax({
                    type: "POST",
                    url: "../Controller/ajaxfunctions_for_userName.php?user_name=" + user_name
                }).done(function (data) {
                        if (data != 0) {
                            console.log("User name already exists");
                            userElement.val(null);
                            $("#errorUserName").html("Given Name exists");
                        } else {
                            $("#errorUserName").html("");
                            console.log("Go ahead");
                        }
                    });

            } else {
                console.log("Cannot be empty")
            }
        });
    });


</script>
</head>
<body>
<?php require_once 'common/admin_header.php'; ?>
<div id="contentWrapper">
    <div id="content">
        <form m`ethod="post" action="../Controller/member.php" enctype="multipart/form-data" id="add_user">
            <table align="center" id="personal_info">
                <th align="center">Personal Info</th>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="fname" id="fname" data-validation-engine="validate[required]" style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname" id="lname" data-validation-engine="validate[required]" style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>DOB:</td>
                    <td><input type="text" name="dob" id="dob" data-validation-engine="validate[required]" style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>NIC:</td>
                    <td><input type="text" name="nic" id="nic" data-validation-engine="validate[required]" style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" id="email" data-validation-engine="validate[required]" style="width: 200px;"/></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone" id="phone" data-validation-engine="validate[required]" style="width: 200px;"/></td>
                </tr>

                <th>Login info</th>
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="user_name" id="user_name"
                               data-validation-engine="validate[required]" style="background-color: #fbec88; width: 200px;"
                               autocomplete="off" requaired />
                        <span id="errorUserName"></span>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id="password" data-validation-engine="validate[required]"
                               style="background-color: #fbec88; width: 200px;"/></td>
                </tr>
                <tr>
                    <td>Retype Password:</td>
                    <td><input type="password" name="re_password" id="re_password"
                               data-validatixon-engine="validate[required]" style="background-color: #fbec88; width: 200px;"/></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td>
                        <select name="role" id="role" data-validation-engine="validate[required]">
                            <?php while ($row = mysql_fetch_assoc($results)) {
                                ?>
                                <option value="<?php echo $row['role_id'] ?>">
                                    <?php echo $row['role_type'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <!--                        <tr>
                                            <td>Profile Picture:</td>
                                            <td><input type="file" name="profile_pic" id="profile_pic"/></td>
                                        </tr>-->
                <tr>
                    <td>Profile Picture:</td>
                    <td><input type="file" name="profile_pic" id="profile_pic"
                               data-validation-engine="validate[required]"/></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="hidden" name="action" value="save_member"/>
                        <input type="submit" name="submit" id="submit" value="Register"
                               onclick="return show_login_info();"/>
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