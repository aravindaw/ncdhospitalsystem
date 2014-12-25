<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Email</title>
        <link href="../View/css/main.css" rel="stylesheet" type="text/css" />
        <link href="../View/css/account.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../View/css/style.css" type="text/css" media="all" title="stylsheet"  />
        <link href="../View/css/layout.css" rel="stylesheet" type="text/css" />
        <script src="../View/js/jquery.js"></script>
        <script type="text/javascript">
            function addNewEmail()
            {
                $('#email_list_tbl').append ("<tr><td>User Email</td><td><input type ='text' name='user_email[]'/></td><td>Subject</td><td> <input type='text' name='email_subject[]'/></td><td>");
                $('#removeTrSpan').css('display', 'block');
            }
            function removeLastEmail()
            {
                var Count = $('#email_list_tbl tr').length;
                if (Count>1)
                {
                    $('#email_list_tbl tr:last').remove();
                    if (Count==2)
                    {
                        $('#removeTrSpan').css('display', 'none');
                    }
                }
                else
                {
                    alert ("cannot delete the first row");

                }
            }
        </script>
    </head>
    <body>
        <?php include 'common/admin_header.php'; ?>
        <div id="contentWrapper">
            <div id="content">
                <form action="../Controller/notification.php" method ="post" enctype="multipart/form-data">
                    <table id="email_list_tbl">
                        <tr>
                            <td>User Email</td>
                            <td><input type ="text" name="user_email[]"/> </td>
                            <td>Subject</td>
                            <td>: <input type="text" name="email_subject[]"/></td>
                            <td>
                                <span id="addTrSpan"><img onclick="addNewEmail();" src="../View/images/plus.png"/> </span>
                                <span id="removeTrSpan" style="display:none"><img onclick="removeLastEmail();" src="../View/images/Minus.png"/></span>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="2" align="right">
                                <input type ="hidden" name="action" value="notification_email_multi"/>
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