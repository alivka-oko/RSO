<?php
//чтение формы
/*
$first_name = filter_input(INPUT_POST, 'first_name', FILTER_VALIDATE_REGEXP, array('options'=> array('regexp'=>'/(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)/u')));
$last_name= filter_input(INPUT_POST, 'last_name', FILTER_VALIDATE_REGEXP, array('options'=> array('regexp'=>'/(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)/u')));
$email= filter_input(INPUT_POST, 'email' );
$username = filter_input(INPUT_POST, 'username',FILTER_VALIDATE_REGEXP, array('options'=> array('regexp'=>'/^[\w]+$/u')));
$Password_hash= Password_hash($_POST['Password'], PASSWORD_DEFAULT);*/

// запись в базу
/*$connect=mysqli_connect('localhost', 'localhost', '123', 'rso');
mysqli_set_charset($connect, "utf8");
$inset_users="INSERT INTO user (first_name, last_name, email, username, password)
 VALUES('{$first_name}', '{$last_name}', '{$email}', '{$username}', '{$Password_hash}')" ;
$msqq=mysqli_query($connect, $inset_users)or
die(mysqli_error($connect)) ;
$num=strval(mysqli_insert_id($connect));

//перенаправление
header("Location: valid_user.php?user_id=" . $num);*/ ?>

<?php

$connect=mysqli_connect('localhost', 'localhost', '123', 'rso')
or handl_error("Возникла ошибка при подключении к базе данных", mysqli_connect_error($connect));


function handl_error($error_message, $system_error_message){
    header("Location: error.php?" . "error_message={$error_message}&" .
        "system_error_message={$system_error_message}");
    exit();}

?>


<?php
//require_once('app_config.php');//функция обработки ошибок
$image_fieldname="user_pic";//файл загружался с этой меткой в html форме
$php_errors=array(1 => 'Превышен максимальный размер файла',
    2 => 'Превышен максимальный размер файла',
    3 => 'Была отправлена только часть файла',
    4 => 'Файл для отправки не был выбран');//возможные ошибки

$first_name= filter_input(INPUT_POST, 'first_name', FILTER_VALIDATE_REGEXP,
    array('options'=> array('regexp'=>'/(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)/u'))) or
$err=true;
$last_name= filter_input(INPUT_POST, 'last_name', FILTER_VALIDATE_REGEXP,
    array('options'=> array('regexp'=>'/(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)/u'))) or
$err=true;
$email= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or $err=true;
$first_name= filter_input(INPUT_POST, 'first_name', FILTER_VALIDATE_REGEXP,
    array('options'=> array('regexp'=>'/(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)/u'))) or
$err=true;


//Проверим загрузку файла и является ли он изображением
($_FILES[$image_fieldname]['error']==0) or
handl_error("Сервер не может получить выбранное Вами изображение", $php_errors[$_FILES[$image_fieldname]['error']]);
@is_uploaded_file($_FILES[$image_fieldname]['tmp_name']) or
handl_error("Укажите путь к файлу", "Неопределен путь" . $_FILES[$image_fieldname]['tmp_name']);
$b=@getimagesize($_FILES[$image_fieldname]['tmp_name']) or
handl_error("Вы выбрали файл, не являющийся изображением", $_FILES[$image_fieldname]['tmp_name'] . "is not image");
$password_hash= password_hash($_POST['password'], PASSWORD_DEFAULT);
require 'error.php';

//Проверка существования пользователя с таким же именем
$username= filter_input(INPUT_POST, 'username', FILTER_VALIDATE_REGEXP,
    array('options'=>array('regexp'=>'/^[\w]+$/')));
$stmt= mysqli_prepare($connect, 'SELECT id FROM user WHERE username=(?)');
mysqli_stmt_bind_param($stmt, 's', $username);
$answ= mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $user_id);
mysqli_stmt_fetch($stmt);
if (!$user_id==null){$err=true;}
if ($err===true){handl_error('Ошибка загрузки данных', "Пользователь с таким именем уже существует");}
//есть данные непрошедшие через входной фильтр
$mysqli_set_charset = mysqli_set_charset($connect, "utf8");



//Добавляем пользователя в базу
//die($Date_reg);
$stmt= mysqli_prepare($connect, 'INSERT INTO user(first_name, last_name, email, user_pic_path, username, password) VALUES((?), (?), (?), (?), (?), (?))');
mysqli_stmt_bind_param($stmt, 'ssssss', $first_name, $last_name, $email, $upload_filename, $username, $password_hash);
$answ= mysqli_stmt_execute($stmt) or handl_error('Ошибка добавления пользователя', mysqli_stmt_error($stmt));
$num=strval(mysqli_stmt_insert_id($stmt));

//Создадим имя файла и переместим в папку profile на сервере
$upload_filename='profile/avatar_' . $num . '_' . $_FILES[$image_fieldname]['name'];
//имя файла=avatar_ID_Имя загруженного файла
@move_uploaded_file($_FILES[$image_fieldname]['tmp_name'], $upload_filename) or
handl_error("Ошибка перемещения файла", "Ошибка доступа: " . $upload_filename);
$qery="UPDATE user set user_pic_path='{$upload_filename}' WHERE id={$num}";
$ans= mysqli_query($connect, $qery);
//Поместим путь к файлу в базу данных
mysqli_close($connect);
header("Location: valid_user.php?user_id={$num}"); ?>

