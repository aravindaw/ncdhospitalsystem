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


        $(function () {
            $("#sendDate").datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
                showOn: "both",
                buttonImage: "images/calendar.png",
                buttonImageOnly: true,
                buttonText: "Calender",
                maxDate: '2020',
                yearRange: "-10:+10"
                //minDate:'0'
            });
        });

        jQuery(document).ready(function () {
            $("#request_mail").validationEngine({
                'custom_error_messages': {
                    '#receiver': {
                        'required': {'message': "Receiver cannot be Blank"}
                    },
                    '#subject': {
                        'required': {'message': "Subject cannot be Blank"}
                    },
                    '#sender': {
                        'required': {'message': "Sender add cannot be Blank"}
                    },
                    '#sendDate': {
                        'required': {'message': "Send date cannot be Blank"}
                    }
                }
            });

        });


        function mail_request() {
            var receiver = $('#receiver').val();
            if (receiver === '') {
                alert("Please enter receiver mail add");
                return false;
            }
            var subject = $('#subject').val();
            if (subject === '') {
                alert("Please enter mail Subject");
                return false;
            }
            var sender = $('#sender').val();
            if (sender === '') {
                alert("Please enter sender mail add");
                return false;
            }
            var sendDate = $('#sendDate').val();
            if (sendDate === '') {
                alert("Please enter dending date");
                return false;
            }
        }

    </script>
</head>
<body>
<?php include 'common/admin_header.php'; ?>
<div id="contentWrapper">
    <div id="content">
        <form action="../Controller/notification.php" method="post" enctype="multipart/form-data" id="request_mail">
            <table>
                <tr>
                    <td>Send Email to :</td>
                    <td><input type="text" name="receiver" id="receiver" data-validation-engine="validate[required]"/></td>
                </tr>
                <tr>
                    <td>Add a Subject :</td>
                    <td><input type="text" name="subject" id="subject" data-validation-engine="validate[required]"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Sender's Email add :</td>
                    <td><input type="text" name="sender" id="sender" data-validation-engine="validate[required]"/></td>
                </tr>
                <tr>
                    <td>Send date :</td>
                    <td><input type="text" name="sendDate" id="sendDate" data-validation-engine="validate[required]"/></td>
                </tr>
                <tr>
                    <td>Get Approval from :</td>
                    <td><input type="text" name="approved_by" value="admin@ncdhs.com" readonly="" id="approved_by"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <input type="hidden" name="action" value="notification_email_request"/>
                        <input type="submit" name="submit" class="submitButton" value="Send Email"
                               onclick="return mail_request();"/>
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
