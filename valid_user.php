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
$user_id=$_GET['user_id'];
$select_query="SELECT * FROM user WHERE id=" . $user_id;//* означает выбрать все
$connect=mysqli_connect('localhost', 'localhost', '123', 'rso');
mysqli_set_charset($connect, "utf8");
$result=mysqli_query($connect, $select_query);
if ($result){
    $row=mysqli_fetch_array($result);
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $email=$row['email'];
    $username = $row['username'];
    $img = $row['user_pic_path'];

}
?>


<?php



?>
<div class="text-center">
    <h2 class="mb-4 ">Добро пожаловать,   <strong><?php echo $first_name . ' ' . $last_name ?></strong></h2>
    <h4 >Ваши регистрационные данные:</h4>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <table class='New'>
                <tr><td></td><td><img class="  p-2" src="<?php echo $img ?>" > </td></tr>
            </table>
        </div>
        <div class="col-6" style="font-size: 1.3em">
            <p> Логин:  <?php echo $username?></p>
            <p> Имя:  <?php echo $first_name ?></p>
            <p> Фамилия:  <?php echo $last_name ?></p>
            <p> Электронная почта:  <?php echo $email ?> </p>

        </div>
        <div class="col">
            <div class="p-2 m-3 " style="font-size: 1.2em"><?php $check=0;
                if ($check!=1){
                    echo "<p class='error' >Адрес электронной почты не подтвержден, зайдите на почту. Аккаунт будет удален 
    в течение 30 дней, в случае отсутствия подтверждения!</p>";
                }?>
                <?php echo  '<a href=index.html><strong>Выйти из приложения</strong></a>';?>
            </div>
        </div>
    </div>
</div>




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