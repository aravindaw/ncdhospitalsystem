<?php
require_once '../model/wrk_sch.php';
$obj_users = new wrk_sch();
$results = $obj_users->get_wrk_sch();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>View Work Schedules</title>
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
        jQuery(document).ready(function() {
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
            var del_schedule = confirm("do you really wanna delete...!!!");
            if (del_schedule == true) {
                location.href = "../controller/wrk_sch.php?action=delete_wrk_sch&$clinic_id=" + del_id;
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
        <table cellpadding="0" cellspacing="0"  class="display" id="test_table" >
            <thead>
            <tr><a href="new_wrk_sch.php"><input type="submit" name="submit" value="Add new work Schedule" align="right"></a></tr>
            <tr>
                <th>Clinic ID </th>
                <th>User ID</th>
                <th>Schedule</th>
                <th>Date & Time</th>
                <th>Attendance</th>
                <th>Edit  |  Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysql_fetch_assoc($results)) {
                ?>
                <tr>
                    <td width="10%" align="center"><?php echo $row['clinic_id'] ?></td>

                    <td><a rel="facebox" href="view_member.php?user_id=<?php echo $row['user_id']; ?>;"><?php echo $row['user_id'] ?>
                        <img width="20" height="20" src="images/full_page.png"/></a></td>

                    <td width=" 30%"><?php echo $row['schedule'] ?></td>

                    <td><?php echo $row['date_time'] ?></td>

                    <td align="center"><?php echo $row['attendance'] ?></td>

                    <td align="center">
                        <a rel="facebox" href="update_wrk_sch.php?clinic_id=<?php echo $row['clinic_id']; ?>;">
                            <img width="20" height="20" src="images/icon_edit.png"/>
                        </a> |
                        <a href="#" onclick="confirm_delete(<?php echo $row['clinic_id']; ?>);">
                            <img width="20" height="20" src="images/delete.png"/>
                        </a>
                    </td>
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
                echo "<script>alert('Work schedule Deleted');</script>";
            } else if ($del == 0) {
                echo "<script>alert('Work schedule not Deleted');</script>";
            }
        }
        ?>

    </div>
</div>
<?php require_once 'common/admin_footer.php'; ?>
</body>
</html>
