
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);
try {
//Enable SMTP debugging.
$mail->SMTPDebug = 2;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
//Provide username and password     
$mail->Username = "tiwariarushi2405@gmail.com";
$mail->Password = "cjlmdckrhqpplmqj";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;
$mail->From = "tiwariarushi2405@gmail.com";
$mail->FromName = "Arushi";
$mail->addAddress("tiwariarushi2405@gmail.com");
$mail->isHTML(true);
$mail->Subject = "Proftfolio Enquiry";


$mail->Body = "<h1>Portfolio Enquiry form :</h1>\n <h3>Name:".$_POST['name']."</h3>\n <h3>Email:".$_POST['email']."</h3>\n <h3>Message:".$_POST['msg']."</h3></b>"


;
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    //  echo "<script>alert('Message Sent to Arushi Tiwari')</script>";
    //echo "<script>alert('Message Sent to Arushi Tiwari.')</script>";
    echo "<script>alert('Message Sent to Arushi Tiwari')</script>";
  header("location:index.php");
}
} catch (Exception $e) {
  echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}











	
  





    
?>