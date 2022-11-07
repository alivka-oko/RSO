<?php
require 'db_connect.php';

//Проверка существования пользователя с таким же именем
$username= filter_input(INPUT_POST, 'username', FILTER_VALIDATE_REGEXP,
    array('options'=>array('regexp'=>'/^[\w]+$/')));
$stmt= mysqli_prepare($connect, 'SELECT id FROM user WHERE username=(?)');
mysqli_stmt_bind_param($stmt, 's', $username);
$answ= mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $user_id);
mysqli_stmt_fetch($stmt);
if(!$user_id==null){
    $result=true;
}
else{
    $result=false;
}
echo $result;




//if ($user_err===true){handl_error('Ошибка загрузки данных', "Пользователь с таким именем уже существует");}
//есть данные непрошедшие через входной фильтр
//$mysqli_set_charset = mysqli_set_charset($connect, "utf8");

?>

