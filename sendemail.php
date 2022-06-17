<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$title = "Письмо с сайта ' '";
$body = "
<h2>Новое письмо</h2>
<b>Почта:</b> $email<br>
<b>Номер:</b> $num<br>
<b>Сообщение:</b><br>$message
";

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = "smtp.mail.ru";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = ssl;
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('$email');
    $mail->addAddress('xlebnailavka@mail.ru');
}
?>