<?php
$connect=mysqli_connect('localhost', 'localhost', '123', 'rso')
or handl_error("Возникла ошибка при подключении к базе данных", mysqli_connect_error($connect));
?>