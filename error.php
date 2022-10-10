<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ошибка</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<header>
    <div class="d-flex justify-content-center">
        <img class="  p-2" src="img/24-5.PNG" style=" height: 100px">
        <h1 class="  titleSH p-4   "> Личный кабинет</h1>
    </div>
</header>
<div class="d-flex justify-content-center">
    <h1 class="  titleSH p-4   "> Произошла ошибка</h1>
</div>
<table><tr>
        <td><img src="img/котыСКАУТЫ.jpg"  class="m-3" alt="Умная сова"></td>
        <td class="p-4">Уважаемый, Пользователь!<br>
            Наша система не смогла обработать Ваше последнее действие. Мы уже в курсе проблемы и предпримем все возможные действия, чтобы Вас не огорчать.<br>
            С уважением, группа поддержки.<br>
            Если хотите вернуться назад, то можете <a href="javascript:history.go(-1)">щелкнуть здесь</a><br>
            Обратиться лично: forestmarket@yandex.ru
    </tr></table><br>
<p>Технические детали:<br></p>
<?php
if (isset($_GET['error_message'])){
    $error_message=preg_replace("/\\\\/", '', $_GET['error_message']);}
else {
    $error_message="Вы здесь оказались из-за сбоя в программе.";}

if (isset($_GET['system_error_message'])){
    $system_error_message=preg_replace("/\\\\/", '', $_GET['system_error_message']);}
else {$system_error_message="Сообщения о системных ошибках отсутствуют";}
echo ("<p>" . $error_message . "</p>");
echo("<p>Было получено сообщение системного характера:</p>
 <b>{$system_error_message}</b>");?>
<br><br>
</body>
</html>
