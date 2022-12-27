<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'G:\xamp\htdocs\Agencia\js\Exception.php';
require 'G:\xamp\htdocs\Agencia\js\PHPMailer.php';
require 'G:\xamp\htdocs\Agencia\js\SMTP.php';

$mail = new PHPMailer(true);


try{

$nameUser = $_POST['name'];
$emailUser = $_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST['message'];

$mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tecplay34@gmail.com';                     //SMTP username
    $mail->Password   = 'danielpinzon784512';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587; 
    
    
    //Recipients
    $mail->setFrom('tecplay34@gmail.com', 'Mailer');
    $mail->addAddress('tecplay34@gmail.com', 'Joe User');     //Add a recipient
$mail = "";
$to = 'tecplyay34@gmail.com';
$mail .= "De: " .$nameUser. "\r\n";
$mail = "Correo " .$emailUser. "\r\n";
$mail = "Mensaje " .$message. "\r\n";

$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>