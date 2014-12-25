<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Email</title>
<link href="../View/css/main.css" rel="stylesheet" type="text/css" />
<link href="../View/css/account.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../View/css/style.css" type="text/css" media="all" title="stylsheet"  />
<link href="../View/css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include 'common/admin_header.php'; ?>
     <div id="contentWrapper">
        <div id="content"> 
            <form action="../Controller/notification.php" method ="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <?php
            if(isset($_GET['emailsent']))
            {
                $record = $_GET['emailsent'];
                if($record == 'imgerror')
                {
                    echo "<p style='color:red;'>Image Not Sent</p>";
                }
                else
                    if($record == 'sent')
                {
                    echo "<p style='color:green;'>Email Sent</p>";
                }
                else
                    if($record == 'error')
                {
                    echo "<p style='color:red;'>Error: Email Not Sent</p>";
                }
            }

      ?>

                            <?php
                            // prints e.g. 'Current PHP version: 4.1.1'
                            echo 'Current PHP version: ' . phpversion();

                            // prints e.g. '2.0' or nothing if the extension isn't enabled
                            echo phpversion('tidy');
                            ?>


                        </td>
                    </tr>
                    <tr>
                        <td>User Email</td>
                        <td><input type ="text" name="user_email"/> </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Subject</td>
                        <td> <input type="text" name="email_subject"/></td>
                    </tr>
                    <tr>
                        <td>Notification</td>
                        <td><textarea name="notification" cols="40" rows ="5"></textarea></td>
                    </tr>
                    <tr>
                        <td>Add Attachment</td>
                        <td><input type="file" name="file_upload"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type ="hidden" name="action" value="notification_email"/>
                            <input type ="submit" name="submit" class="submitButton" value="Send Email"/>
                        </td>
                    </tr>
                </table>
            </form>
                <br/>
                <br/>
            </div>
        </div>
    
    <?php include 'common/admin_footer.php'; ?>
</body>
</html>