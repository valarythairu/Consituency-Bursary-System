<?php
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    require 'connection.php';

  $mail = new PHPMailer(true);
  $mail -> isSMTP(true);
  $mail -> isHTML(true);
  $mail->Host       = "mail.yourdomain.com"; 
  
  $mail->SMTPDebug  = 1;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "ssl";
  $mail->Port       =  587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "hopewanjeri0@gmail.com";
  $mail->Password   = "1005Wanjeri";


  $mail->IsHTML(true);
  $mail->SetFrom('hopewanjeri0@gmail.com', 'Hope');

$mail->AddReplyTo("hopewanjeri0@gmail.com","Hope");

$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test



$address = "zackthyru@gmail.com";
$mail->AddAddress($address, "Isaac");

  $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo "Email sent successfully";
  }
  

}
?>