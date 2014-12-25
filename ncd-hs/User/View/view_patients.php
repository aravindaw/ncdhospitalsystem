<?php
require_once '../model/insert.php';
$obj_users = new patient();
$results = $obj_users->get_patients();
?>



<?php
//require_once '../model/insert.php';
//$obj_users = new patient();
//$results = $obj_users->patient_note();
//?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>View Patients</title>
    <style type="text/css" title="currentStyle">
        @import "css/main.css";
        @import "css/account.css";
        @import "css/style.css";
        @import "css/layout.css";
        @import "css/redmond/jquery-ui-1.10.1.custom.css";
        @import "css/demo_page.css";
        @import "css/demo_table.css";
        @import "facebox/facebox.css";
    </style>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="facebox/facebox.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">

        jQuery(document).ready(function () {
            $('a[rel*=facebox]').facebox({
                loadingImage: 'facebox/loading.gif',
                closeImage: 'facebox/closelabel.png'
            });

            $('#test_table').dataTable({
                "bStateSave": true,
                "bJQueryUI": true,
                "bFilter": true,
                "bPaginate": true,
                "bInfo": true,
                "bSort": true
            });
        });
        function confirm_delete(del_id) {
            var del_user = confirm("do you really wanna delete...!!!");
            if (del_user == true) {
                location.href = "../controller/insert.php?action=delete_patient&patientID=" + del_id;
            }
            else {

                return false;
            }
        }
    </script>
</head>
<body>
<?php require_once 'common/admin_header.php'; ?>
<div id="contentWrapper">
    <div id="content">
        <table>
            <tr>
                <td>
                    <?php
                    if (isset($_GET['added'])) {
                        $record = $_GET['added'];
                        if ($record == 'updated') {
                            echo "<p style='color:green; font-size:16px;'>Record Updated</p>";
                        } else if ($record == 'failed') {
                            echo "<p style='color:red; font-size:16px;'>No record Updated</p>";
                        } else if ($record == 'wrong_image_type') {
                            echo "<p style='color:red; font-size:16px;'>Invalid Image Type</p>";
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>


        <table cellpadding="0" cellspacing="0" class="display" id="test_table" class="fixed">
            <thead>
            <tr>
                <th width="8%">id</th>
                <th width="8%">NIC</th>
                <th width="13%">First Name</th>
                <th width="13%">Last Name</th>
                <th width="15%">DOB</th>
                <th width="20%">Address</th>
                <th width="5%">Blood Group</th>
                <th width="5%">View</th>
                <th width="20%">userID</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysql_fetch_assoc($results)) {
                ?>
                <tr>
                    <td><?php echo $row['patientID'] ?></td>
                    <td><?php echo $row['nic'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td align="center"><?php echo $row['blood_g'] ?></td>
                    <td>

                        <a rel="facebox" href="view_patient.php?patientID=<?php echo $row['patientID']; ?>;">
                            <img width="20" height="20" src="images/full_page.png"/></a>
                    </td>
                    <td><a rel="facebox" href="view_member.php?user_id=<?php echo $row['user_id']; ?>;"><?php echo $row['user_id'] ?></td>
                    <td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <?php
        if (isset($_GET['del'])) {
            $del = $_GET['del'];
            if ($del == 1) {
                echo "<script>alert('User Deleted');</script>";
            } else if ($del == 2) {
                echo "<script>alert('User Not Deleted');</script>";
            }
        }
        ?>

    </div>
</div>
<?php require_once 'common/admin_footer.php'; ?>
</body>
</html>

