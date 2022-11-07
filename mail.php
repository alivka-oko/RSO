<?php
$subject='Регистрация на сайте «Наша социальная сеть»';
$message="<html>
<head>
 <title>Регистрация на сайте «Наша социальная сеть»</title>
 <style type='text/css'>
 *{
background-color: #F0FFF0;
font-family: Tahoma;
color: #008B8B;
padding-left: 2%;
}
 </style>
</head>
<body>
<h1>Добро пожаловать на сайт «Наша социальная сеть»!</h1>
<p>Для того чтобы завершить процесс регистрации перейдите по ссылке:
<a href='http://student.rus/check_email.php?email={$email}&massage={$Date_reg}'>
    Подтвердить почту</a></p>
<footer>С уважением, администрация, student.rus</footer>
</body>
</html>";
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Administrator <ilyushenkov.pkgh@gmail.com>\r\n";
$mail=mail($email, $subject, $message, $headers); ?>

