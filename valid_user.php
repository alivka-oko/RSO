<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Регистрация</title>
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
<?php
//чтение
/*$Name=$_POST['Name'];
$Tel=$_POST['Tel'];
$Address=$_POST['Address'];*/
$first_name = filter_input(INPUT_POST, 'first_name', FILTER_VALIDATE_REGEXP, array('options'=> array('regexp'=>'/(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)/u')));
$last_name= filter_input(INPUT_POST, 'last_name', FILTER_VALIDATE_REGEXP, array('options'=> array('regexp'=>'/(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)/u')));
$email= filter_input(INPUT_POST, 'email' );
$username = filter_input(INPUT_POST, 'username',FILTER_VALIDATE_REGEXP, array('options'=> array('regexp'=>'/^[\w]+$/u')));
$Password_hash= Password_hash($_POST['Password'], PASSWORD_DEFAULT);

//запись
$connect=mysqli_connect('localhost', 'localhost', '123', 'rso')
or handl_error("Возникла ошибка при подключении к базе данных", mysqli_connect_error($connect));
mysqli_set_charset($connect, "utf8");

$inset_clients="INSERT INTO user (first_name, last_name, email, username, password)
 VALUES('{$first_name}', '{$last_name}', '{$email}', '{$username}', '{$Password_hash}')" ;
$msqq=mysqli_query($connect, $inset_clients)
or handl_error("Ошибка кода оказалась критической", mysqli_error($connect));
$num=strval(mysqli_insert_id($connect));
//die('Пользователь '.$num. ' записан');

//Добавление пользователя при помощи подготовленного выражения
/*$stmt= mysqli_prepare($connect, 'INSERT INTO user(first_name, last_name, email, username, password) VALUES((?), (?), (?), (?), (?))');
mysqli_stmt_bind_param($stmt, 'ssssssi', $first_name, $last_name, $email,$username, $Password_hash);
$answ= mysqli_stmt_execute($stmt);
mysqli_close($connect)
or handl_error("Ошибка кода оказалась критической", mysqli_error($connect));
header("Location: show_user.php");


//ошибка
function handl_error($error_message, $system_error_message){
    header("Location: error.php?" . "error_message={$error_message}&" .
        "system_error_message={$system_error_message}");
    exit();}

//перенаправление
header('Location: show_user.php?id='. $num) or handl_error;*/
?>
<div class="text-center">
    <h2 class="mb-4 ">Добро пожаловать,   <strong><?php echo $first_name . ' ' . $last_name ?></strong></h2>
    <h4>Ваши регистрационные данные:</h4>
</div>
<div class="d-flex flex-row flex-wrap m-5 ">
    <div class="p-2">
        <table class='New'>
            <tr><td>Фото</td><td><?php //echo $username?></td></tr>
        </table>

    </div>

    <div class="p-2" style="font-size: 1.5em">

        <p> Логин:  <?php echo $username?></p>
        <p> Имя:  <?php echo $first_name ?></p>
        <p> Фамилия:  <?php echo $last_name ?></p>
        <p> Электронная почта:  <?php echo $email ?> </p>

    </div>

    <div class="p-2 m-3 " style="font-size: 1.2em"><?php $check=0;
        if ($check!=1){
            echo "<p class='error' >Адрес электронной почты не подтвержден, зайдите на почту. Аккаунт будет удален 
    в течение 30 дней, в случае отсутствия подтверждения!</p>";
        }?>
        <?php echo  '<a href=index.html><strong>Выйти из приложения</strong></a>';?>
    </div>

</div>

<!--
<form class="form text-center">
    <table class='head'>
        <tr><td rowspan="2">Здесь будет ваше изображение</td>
            <td></td></tr>



        <tr><td><h2 class="">Добро пожаловать, <strong><?php echo $first_name . ' ' . $last_name ?></strong></h2>

                <p>Ваши регистрационные данные:</p><br>

            </td></tr>
    </table>
    <br>
    <table class='New'>
        <tr><td>Логин</td><td><?php echo $username?></td></tr>
        <tr><td>Имя</td><td><?php echo $first_name ?></td></tr>
        <tr><td>Фамилия</td><td><?php echo $last_name ?></td></tr>
        <tr><td>Электронная почта</td><td><?php echo $email ?></td></tr>
         тут был адрес вк
    </table>
    <?php $check=0;
    if ($check!=1){
        echo "<p class='error'>Адрес электронной почты не подтвержден, зайдите на почту. Аккаунт будет удален 
    в течении 30 дней, в случае отсутствия подтверждения!</p>";
    }?>
    <?php echo  '<a href=index.html><strong>Выйти из приложения</strong></a>';?>

    <br></form> -->


<div style="height: 78px" >

</div>

<footer class="text-center text-lg-start bg-light text-muted">


    <!-- Section: Links  -->
    <section class="mt-5 bgclr">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-5 mx-auto mb-3 mt-3">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>я боец РСО
                    </h6>
                    <p>
                        Молодежная общероссийская общественная организация «Российские Студенческие Отряды» (РСО)  развивает творческий и спортивный потенциал молодежи.
                    </p>
                </div>

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-5 mx-auto mb-md-0 mb-3 mt-3">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Контакты</h6>
                    <p> г.Москва, Лефортовский переулок, 8, строение 1 </p>
                    <p>
                        pkgh@example.com
                    </p>
                    <p>+ 7 (999) 111-11-11</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class=" bgclr2 text-center p-4" >
        ©  1959-2022 РОССИЙСКИЕ СТУДЕНЧЕСКИЕ ОТРЯДЫ. Все права защищены.
    </div>
    <!-- Copyright -->
</footer>
</body>
</html>