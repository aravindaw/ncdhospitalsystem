<?php

$action = $_POST['action'];

switch ($action) {
    case "notification_email_request":
        send_request_to_email();
        break;
    case "notification_email_html":
        sendEmailNotificationshtml();
        break;
}

function send_request_to_email()
{
    $receiver = $_POST['receiver'];
    $subject = $_POST['subject'];
    $sender = $_POST['sender'];
    $sendDate = $_POST['sendDate'];
    $approved_by = $_POST['approved_by'];


    require_once '../Model/email.php';
    $obj_email = new email();
    $result = $obj_email->add_email($receiver, $subject, $sender, $sendDate, $approved_by);
    if ($result == 1) {
        header("location: ../View/success_msg.php");
    } else {
        error_log("error");
    }

}


function sendEmailNotificationshtml()
{
    $ID = $_POST['ID'];
    $email = $_POST['receiver'];
    $notification_subject = $_POST['subject'];
    $email_list = explode(",", $email);
    $errors = array_filter($email_list);

    if (!empty($errors)) {
        error_reporting(E_ALL);
        error_reporting(E_STRICT);

        date_default_timezone_set('Asia/Colombo');


        include("../../phpmailer/class.phpmailer.php");
        $mail = new PHPMailer();

        $body = file_get_contents('../../admin/view/template_email.html');
        $mail->IsHTML(true);
        $mail->Body = $body;
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPDebug = 2; // enables SMTP debug information (for testing)

        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com"; // sets the SMTP server
        $mail->Port = 465; // set the SMTP port for the GMAIL server
        $mail->Username = "kataweerasekara20000@gmail.com"; // SMTP account username
        $mail->Password = "kata@weerasekara"; // SMTP account password

        $mail->SetFrom('kataweerasekara20000@gmail.com', 'Patient Details');

        $mail->Subject = $notification_subject . " " . date("Y-M-D");

        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->AddEmbeddedImage("../View/images/logo.png", "NCD-hs");


        $mail->AddAddress($email);

        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            echo "<br/>";
            echo "<br/>";
            echo "Not sent";
            header("location: ../View/email_notification_html.php?emailsent=added");
        } else {
            echo "Message sent to " . $email . " successfully";
            echo "<br/>";
            require_once '../Model/email.php';
            $obj_email = new email($ID);
            $obj_email->update_approve($ID);
            echo "<a href='../View/email_notification_html.php'>Click here </a> to go back";
        }
        $address = NULL;

    } else {
        echo "No email input";
    }
}

?>
