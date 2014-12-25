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

function password_check(){
       var pw = $('#new_password').val();
       var repw=$('#retype_password').val();

        if(pw != repw)
            {
                alert("Password Mismach");
                return false;
            }
    }

</script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        $("#update_member").validationEngine({
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
                '#role': {
                    'required': {'message': "Select a role type"}
                }

            }
        })

    });

</script>


<?php
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    require_once '../Model/member.php';
    require_once '../Model/User.php';
    $obj_member = new member();
    $results = $obj_member->get_member_by_id($user_id);
    $row = mysql_fetch_assoc($results);
}
?>

<form action="../Controller/member.php" method="post" enctype="multipart/form-data" id="update_member">
    <table>
        <tr>
            <th colspan="2">
                <h2>Member Details....</h2>
            </th>
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
            <td>NIC</td>
            <td>:<input id="nic" type="text" name="nic" value="<?php echo $row ['nic']; ?>"
                         data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:<input id="email" type="email" name="email" value="<?php echo $row ['email']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:<input id="phone" type="text" name="phone" value="<?php echo $row ['phone']; ?>"
                        data-validation-engine="validate[required]"/></td>
        </tr>
        <tr>
            <td>User_Image</td>
            <td>:<img src="images/user_image/<?php echo $row ['pic']; ?>" height="50" width="50">
                <br/>
                <input type="file" name="profile_pic" id="profile_pic"/>
                <input type="hidden" value="<?php echo $row ['pic']; ?>" name="old_image"/>
            </td>
        </tr>
        <tr>
            <td colspan="2"><h3>Login Details</h3></td>
            <td></td>
        </tr>
        <tr>
            <td>User Name</td>
            <td>:<input type="text" name="user_name" value="<?php echo $row ['user_name']; ?>" readonly/></td>
        </tr>

        <tr>
            <td>User Role</td>
            <td>
                <select id="role" name="role_name" data-validation-engine="validate[required]">
                    <?php
                    $role_result = User::get_roles();
                    while ($row1 = mysql_fetch_array($role_result)) {
                        ?>
                        <option <?php if ($row1['role_id'] == $row['role_id']) {
                            echo 'selected';
                        } ?>
                            value="<?php echo $row1 ['role_id'] ?>">
                            <?php echo $row1['role_type'] ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>New Password</td>
            <td>:<input type="password" name="new_password" id="new_password"/>
                <input type="hidden" name="old_pw" value="<?php echo $row ['password']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Re-type Password</td>
            <td>:<input type="password" name="retype_password" id="retype_password"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="user_id" value="<?php echo $row ['user_id']; ?>"/>
                <input type="hidden" name="action" value="update_member"/>
                <input type="submit" name="submit" value="Update" onclick="return password_check();">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>

    </table>
</form>

</html>
