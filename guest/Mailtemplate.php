<?php 
 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
 
$mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.sendgrid.net';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'apikey';   // SMTP username 
$mail->Password = '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';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('jismonsanthisoft@gmail.com', 'Santhigiri admission'); 
$mail->addReplyTo('jismonsanthisoft@gmail.com', 'Santhigiri admission'); 
 
// Add a recipient 
$mail->addAddress($mailtoaddress); 
 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Registration successfully '; 
 
// Mail body content 

$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
} 
?>