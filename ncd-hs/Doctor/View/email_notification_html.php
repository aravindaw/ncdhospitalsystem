<?php
require_once '../Model/email.php';
$obj_email = new email();
$results = $obj_email->get_emails();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>View Members</title>
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
    <script type="text/javascript">
    </script>
</head>
<body>
<?php require_once 'common/admin_header.php'; ?>
<div id="contentWrapper">
    <div id="content">
        <table cellpadding="0" cellspacing="0" class="display" id="test_table">
            <thead>
            <tr>
                <th>ID</th>
                <th>E-mail Sender</th>
                <th>E-mail receiver</th>
                <th>Subject</th>
                <th>Sent date</th>
                <th>Approved By</th>
                <th>Approved</th>
                <th>Click to Approve</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysql_fetch_assoc($results)) {
                ?>
                <tr>
                    <td align="center"><?php echo $row['ID'] ?></td>
                    <td align="center"><?php echo $row['sender'] ?></td>
                    <td align="center"><?php echo $row['receiver'] ?></td>
                    <td align="center"><?php echo $row['subject'] ?></td>
                    <td align="center"><?php echo $row[trim('send_date')] ?></td>
                    <td align="center"><?php echo $row['approved_by'] ?></td>
                    <td align="center"><?php echo $row['approval'] ?></td>
                    <td colspan="2" align="center">
                        <form action="../Controller/notification.php" method="post">
                            <input type="hidden" name="action" value="notification_email_html"/>
                            <input type="hidden" name="subject" value="<?php echo $row['subject'] ?>"/>
                            <input type="hidden" name="receiver" value="<?php echo $row['receiver'] ?>"/>
                            <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>"/>
                            <input type="submit" name="submit" class="submitButton"
                                   value="Approve" <?php if ($row['approval'] == "yes") {
                                echo "disabled";
                            } ?>/>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_GET['emailsent'])) {
                $record = $_GET['emailsent'];
                if ($record == 'sent') {
                    echo "<p style='color:green;'>Record added</p>";
                } else if ($record == 'faild') {
                    echo "<p style='color:green;'>No record added</p>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'common/admin_footer.php'; ?>
</body>
</html>
