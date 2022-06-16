<?php
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $text = $_POST['text'];

	$to = "xlebnailavka@mail.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Почта: $email /n
    Телефон: $phone /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Форма отправлена</p>
