<?php

$action = $_POST['action'];

switch ($action) {
    case "notification_email":
        sendEmailNotifications();
        break;
    case "notification_email_html":
        sendEmailNotificationshtml();
        break;
        case "notification_email_multi":
        sendEmailNotificationsmulti();
        break;
}
//
//function sendEmailNotifications() {
//    $email = $_POST['user_email'];
//    $notification = $_POST ['notification'];
//    $notification_subject = $_POST['email_subject'];
//    if (($_FILES['file_upload']["type"] == "image/jpeg")
//            || ($_FILES['file_upload']["type"] == "image/jpeg")
//            || ($_FILES['file_upload']["type"] == "image/gif")
//            || ($_FILES['file_upload']["type"] == "image/jpg")
//            || ($_FILES['file_upload']["type"] == "image/png")
//            && ($_FILES['file_upload']["size"] < 2000000)
//    ) {
//        $image_name = date('U') . "_" . $_FILES['file_upload']['name'];
//        move_uploaded_file($_FILES['file_upload']['tmp_name'], "../../phpmailer/examples/images/mail/" . $image_name);
//    } else {
//        header("location: ../view/email_notification.php?emailsent=imgerror");
//    }
//
//
//    if (!empty($email)) {
//        error_reporting(E_ALL);
//        error_reporting(E_STRICT);
//
//        date_default_timezone_set('Asia/Colombo');
//
////        require_once('../class.phpmailer.php');
//        include("../../phpmailer/class.phpmailer.php");
//        include("../../phpmailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
//
//        $mail = new PHPMailer();
//
////        $body = file_get_contents('../../jts/support_agent/view/template.html');
////        $body = preg_replace('/[\]/', '', $body);
//        $mail->IsHTML(false);
//        $mail->Body = $notification;
//        $mail->IsSMTP(); // telling the class to use SMTP
////        $mail->Host = "smtp.gmail.com"; // SMTP server
//        $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
//        // 1 = errors and messages
//        // 2 = messages only
//        $mail->SMTPAuth = true;                  // enable SMTP authentication
//        $mail->SMTPSecure = "ssl";
//        $mail->Host = "smtp.gmail.com"; // sets the SMTP server
//        $mail->Port = 465;                    // set the SMTP port for the GMAIL server
//        $mail->Username = "saliyabanda2000@gmail.com"; // SMTP account username
//        $mail->Password = "dasana456";        // SMTP account password
//
//        $mail->SetFrom('saliyabanda2000@gmail.com', 'BookSales');
//
//        $mail->AddReplyTo("saliyabanda2000@gmail.com", "BookSales");
//
//        $mail->Subject = $notification_subject . " " . date("Y-M-D");
//
//        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
////        $mail->MsgHTML($body);
//
//        $address = $email;
//        $mail->AddAddress($address);
//
//        $mail->AddAttachment("../../phpmailer/examples/images/mail/" . $image_name);      // attachment
////        $mail->AddAttachment("../../phpmailer/examples/images/phpmailer_mini.gif"); // attachment
//
//        if (!$mail->Send()) {
//            echo "Mailer Error: " . $mail->ErrorInfo;
//            header("location: ../view/email_notification.php?emailsent=error");
//        } else {
//            header("location: ../view/email_notification.php?emailsent=sent");
//            echo "Message sent!";
//        }
//    }
//    unlink("../../phpmailer/examples/images/mail/" . $image_name);
//}

function sendEmailNotificationshtml() {
    $email = $_POST['user_email'];
    $notification_subject = $_POST['email_subject'];
    $email_list = explode(",", $email);
    $errors = array_filter($email_list);

//    $email_list= explode(",", $email);
////    print_r ($email_list);
////    die;
//    $count = count($email_list);
////    echo $count;
////    die;
//    for ($X=0; $count>$X; $X++)
//    {
////echo $email_list[$X];
//    }


    if (!empty($errors)) {
        error_reporting(E_ALL);
        error_reporting(E_STRICT);

        date_default_timezone_set('Asia/Colombo');

//        require_once('../class.phpmailer.php');
        include("../../phpmailer/class.phpmailer.php");
//        include("../../phpmailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

        $mail = new PHPMailer();

        $body = file_get_contents('../../admin/view/template_email.html');
//        $body = preg_replace('/[\]/', '', $body);
        $mail->IsHTML(true);
        $mail->Body = $body;
        $mail->IsSMTP(); // telling the class to use SMTP
//        $mail->Host = "smtp.gmail.com"; // SMTP server
        $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
        // 1 = errors and messages
        // 2 = messages only
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com"; // sets the SMTP server
        $mail->Port = 465;                    // set the SMTP port for the GMAIL server
        $mail->Username = "kataweerasekara20000@gmail.com"; // SMTP account username
        $mail->Password = "kata@weerasekara";        // SMTP account password

        $mail->SetFrom('aravindaw@hsenidmobile.com' , 'patient');

        $mail->AddReplyTo('aravindaw@hsenidmobile.com' , 'patient');

        $mail->Subject = $notification_subject . " " . date("Y-M-D");

        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->AddEmbeddedImage("../../phpmailer/examples/images/mail/booklogo.jpg", "booklogo");
//        $mail->MsgHTML($body);
//        $address = $email_list[$X];
//       $email_list= explode(",", $email);
        $count = count($email_list);
        for ($X = 0; $count > $X; $X++) {
            $address = $email_list[$X];


            $mail->AddAddress($address);

//            $mail->Send();
//        $mail->AddBCC($address);
 
//        $mail->AddAttachment("../../phpmailer/examples/images/mail/" . $image_name);      // attachment
//        $mail->AddAttachment("../../phpmailer/examples/images/phpmailer_mini.gif"); // attachment
//    }

            if (!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
                echo "<br/>";
                echo "<br/>";
                echo "Not sent";
//            header("location: ../view/email_notification.php?emailsent=error");
            } else {
//            header("location: ../view/email_notification.php?emailsent=sent");
                echo "Message sent to " .$address ;
                echo "<br/>";
                echo "<br/>";
            }
            $address=NULL;
    }
    }
    else{
        echo "No email input";
    }
}
//
//function sendEmailNotificationsmulti() {
//    $email = $_POST['user_email'];
//    $email_count=count($email);
//    echo $email_count;
//    echo "<br/>";
//    print_r($email);
//    echo "<br/>";
//    $notification_subject = $_POST['email_subject'];
//    print_r($notification_subject);
//    die;
//    $email_list = explode(",", $email);
//    $errors = array_filter($email_list);
//
////    $email_list= explode(",", $email);
//////    print_r ($email_list);
//////    die;
////    $count = count($email_list);
//////    echo $count;
//////    die;
////    for ($X=0; $count>$X; $X++)
////    {
//////echo $email_list[$X];
////    }
//
//
//    if (!empty($errors)) {
//        error_reporting(E_ALL);
//        error_reporting(E_STRICT);
//
//        date_default_timezone_set('Asia/Colombo');
//
////        require_once('../class.phpmailer.php');
//        include("../../phpmailer/class.phpmailer.php");
//        include("../../phpmailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
//
//        $mail = new PHPMailer();
//
//        $body = file_get_contents('../../admin/view/template_email.html');
////        $body = preg_replace('/[\]/', '', $body);
//        $mail->IsHTML(true);
//        $mail->Body = $body;
//        $mail->IsSMTP(); // telling the class to use SMTP
////        $mail->Host = "smtp.gmail.com"; // SMTP server
//        $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
//        // 1 = errors and messages
//        // 2 = messages only
//        $mail->SMTPAuth = true;                  // enable SMTP authentication
//        $mail->SMTPSecure = "ssl";
//        $mail->Host = "smtp.gmail.com"; // sets the SMTP server
//        $mail->Port = 465;                    // set the SMTP port for the GMAIL server
//        $mail->Username = "saliyabanda2000@gmail.com"; // SMTP account username
//        $mail->Password = "dasana456";        // SMTP account password
//
//        $mail->SetFrom('saliyabanda2000@gmail.com', 'BookSales');
//
//        $mail->AddReplyTo("saliyabanda2000@gmail.com", "BookSales");
//
//        $mail->Subject = $notification_subject . " " . date("Y-M-D");
//
//        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
//        $mail->AddEmbeddedImage("../../phpmailer/examples/images/mail/booklogo.jpg", "booklogo");
////        $mail->MsgHTML($body);
////        $address = $email_list[$X];
////       $email_list= explode(",", $email);
//        $count = count($email_list);
//        for ($X = 0; $count > $X; $X++) {
//            $address = $email_list[$X];
//
//
//            $mail->AddAddress($address);
//
////            $mail->Send();
////        $mail->AddBCC($address);
//
////        $mail->AddAttachment("../../phpmailer/examples/images/mail/" . $image_name);      // attachment
////        $mail->AddAttachment("../../phpmailer/examples/images/phpmailer_mini.gif"); // attachment
////    }
//
//            if (!$mail->Send()) {
//                echo "Mailer Error: " . $mail->ErrorInfo;
//                echo "<br/>";
//                echo "<br/>";
//                echo "Not sent";
////            header("location: ../view/email_notification.php?emailsent=error");
//            } else {
////            header("location: ../view/email_notification.php?emailsent=sent");
//                echo "Message sent to " .$address ;
//                echo "<br/>";
//                echo "<br/>";
//            }
//            $address=NULL;
//    }
//    }
//    else{
//        echo "No email input";
//    }
//}
?>
