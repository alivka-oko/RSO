<?php
//чтение формы
$first_name = filter_input(INPUT_POST, 'first_name', FILTER_VALIDATE_REGEXP, array('options'=> array('regexp'=>'/(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)/u')));
$last_name= filter_input(INPUT_POST, 'last_name', FILTER_VALIDATE_REGEXP, array('options'=> array('regexp'=>'/(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)/u')));
$email= filter_input(INPUT_POST, 'email' );
$username = filter_input(INPUT_POST, 'username',FILTER_VALIDATE_REGEXP, array('options'=> array('regexp'=>'/^[\w]+$/u')));
$Password_hash= Password_hash($_POST['Password'], PASSWORD_DEFAULT);

// запись в базу
$connect=mysqli_connect('localhost', 'localhost', '123', 'rso');
mysqli_set_charset($connect, "utf8");
$inset_users="INSERT INTO user (first_name, last_name, email, username, password)
 VALUES('{$first_name}', '{$last_name}', '{$email}', '{$username}', '{$Password_hash}')" ;
$msqq=mysqli_query($connect, $inset_users)or
die(mysqli_error($connect)) ;
$num=strval(mysqli_insert_id($connect));

//перенаправление
header("Location: valid_user.php?user_id=" . $num); ?>

<?php

$connect=mysqli_connect('localhost', 'localhost', '123', 'rso')
or handl_error("Возникла ошибка при подключении к базе данных", mysqli_connect_error($connect));


function handl_error($error_message, $system_error_message){
    header("Location: error.php?" . "error_message={$error_message}&" .
        "system_error_message={$system_error_message}");
    exit();}

?>
