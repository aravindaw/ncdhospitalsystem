<html>
<head>
<title>PHPMailer - SMTP (Gmail) advanced test</title>
</head>
<body>

<?php
require_once('../../phpmailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "mail.yourdomain.com"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "kataweerasekara20000@gmail.com";  // GMAIL username
  $mail->Password   = "kata@weerasekara";            // GMAIL password
  $mail->AddAddress("aravindaw@hsenidmobile.com", 'NCD_Head_Office');
  $mail->SetFrom('kataweerasekara20000@gmail.com', 'NCD-Clinic_Avissawella');
  $mail->AddReplyTo('kataweerasekara20000@gmail.com', 'NCD-Clinic_Avissawella');
  $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML(file_get_contents('../../phpmailer/examples/contents.html'));
  $mail->AddAttachment('../../phpmailer/examples/images/phpmailer.gif');      // attachment
  $mail->AddAttachment('../../phpmailer/examples/images/phpmailer_mini.gif'); // attachment
  $mail->Send();
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>

</body>
</html>
