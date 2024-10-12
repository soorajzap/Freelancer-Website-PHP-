
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
session_start();
$em=$_SESSION['ff'];
require 'Exception.php'; 
require 'PHPMailer.php'; 
require 'SMTP.php'; 
include '../connection.php';
$sql=mysqli_query($con,"SELECT `uname`, `pword` , `emails` FROM `free` WHERE `emails`='$em'");
$rows=mysqli_fetch_array($sql);
if(!empty($rows['pword']))
{
$pass=$rows['pword'];
$eemail=$rows['emails'];
}
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'demoproject8977@gmail.com';                     //SMTP username
    $mail->Password   = 'xthyovlkzagkwsoc';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('demoproject8977@gmail.com', 'Freelancer');
    $mail->addAddress($eemail);     //Add a recipient
//	$mail->AddAddress( "919447498692@vtext.com" ); 
  //  $mail->addAddress('ellen@example.com');               //Name is optional
  //  $mail->addReplyTo('info@example.com', 'Information');
  //  $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
   /// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    if(!empty($rows['pword']))
    {
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Welcome to freelancer';
    $mail->Body    = 'Your password : '.$pass;
    $mail->AltBody = 'Thanks For your Interest';


    $mail->send();
    
    echo "<script>alert('Message has been Sent');window.location.href='../homepage.php';</script>";
    }
    else
    {
        echo "<script>alert('Invalid user');window.location.href='../homepage.php';</script>"; 
    }
   
} catch (Exception $e) {
    echo $eemail;
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}