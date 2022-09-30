<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Регистрация</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <script type="text/javascript"src="valid.js"></script> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
 -->
 </head>

 <body onload="controll()">
 <header>
     <div class="d-flex justify-content-center">
         <img class="  p-2" src="img/24-5.PNG" style=" height: 100px">
         <h1 class="  titleSH p-4   "> Регистрация</h1>
     </div>
 </header>

 <div class="d-flex justify-content-center">
     <form action="valid_user.php" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
         <table id="form">
         <!-- Email input -->
        <div class="form-outline mb-4">
            <tr>
                <td><label class="form-label" for="form2Example1" >Имя</label> </td>
                <td><input type="text" class="form-control" placeholder="Иван" name="first_name" data-bs-toggle="tooltip" pattern="(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)"
                           minlength="2" maxlength="30" title="вводится русскими буквами, минимум 2" required/> </td>
                <td class="col2"></td>
            </tr>

            <tr>
                <td></td> <td class="hint" style=" font-size: 0.8em">Введите фамилию русскими или латинскими буквами, минимум
                    2 буквы, максимум 30 букв</td>
            </tr>
        </div>


        <div class="form-outline mb-4">

            <tr>
                <td> <label class="form-label" for="form2Example2">Фамилия</label> </td>
                <td><input type="text" class="form-control" placeholder="Иванов" name="last_name" data-bs-toggle="tooltip" pattern="(^[A-Za-z]+$)|(^[А-ЯЁа-яё]+$)"
                           minlength="2" maxlength="30" title="вводится русскими буквами, минимум 2" required/> </td>
                <td></td></tr>

            <tr>
                <td></td><td class="hint" style=" font-size: 0.8em">Введите фамилию латинскими или русскими буквами, минимум
                        2 буквы, максимум 30 букв</td>
            </tr>

        </div>

        <div class="form-outline mb-4">
            <tr>
            <td><label for="user_pic" class="form-label" for="form2Example2">Изображение профиля</label></td>

            <td><input type="file" name="user_pic" size="50" onchange="filecontrol(4)" class="ml-5" class="form-control"
                       required id="file"/></td>
            <td></td></tr>
            <tr>
                <td></td><td class="hint" style=" font-size: 0.8em">Выберите изображение в формате jpeg или bmp
                    размером не более 2 Мб</label> </td>
            </tr>

        </div>

        <div class="form-outline mb-4">
            <tr>
            <td><label for="email" class="form-label" for="form2Example2">E-mail</label></td>
            <td><input type="email" placeholder="e-mail" class="form-control" name="email"  required/></td>
            <td></td></tr>

            <tr>
                <td></td> <td class="hint" style=" font-size: 0.8em">Предоставьте действующий почтовый адрес</td>
            </tr>

        </div>
        <div class="form-outline mb-4">
            <tr>
            <td><label class="form-label" for="form2Example2">Логин</label></td>
            <td><input type="text" class="form-control" name="username" placeholder="Логин" minlength="3" maxlength="20" required
                   pattern="^[\w]+$" ></td>
                <td></td></tr>
            <tr>
                <td></td> <td class="hint" style=" font-size: 0.8em">От 3 до 20 символов: цифр, аглийских букв и знака _</td>
            </tr>

        </div>

        <div class="form-outline mb-4">
            <tr>
                <td><label for="password" class="form-label">Пароль</label></td>
                <td><input type="password" class="form-control" id="txtNewPassword" placeholder="Пароль" name="Password" minlength="6" maxlength="20" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[A-z0-9]{6,}$"></td>
            <td></td></tr>
            <tr>
                <td></td> <td class="hint" style=" font-size: 0.8em">От 6 до 20 символов, обязательно одна заглавная и строчная английская буква и одна цифра</td>
            </tr>

        </div>


        </table>

        <table>
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <tr>
            <div class="col d-flex justify-content-between">
                <td><button type="submit" id="submit"  class="button btn btn-clr btn-block mb-4 btn-outline-primary" value="Зарегистрироваться" >Зарегистрироваться</button></td>
            </div>
            <div class="col d-flex justify-content-between">
                <td><button type="reset" style="background-color: rgb(89,97,110); color: rgb(254,255,255)" class="button btn  btn-block mb-4 " value="Очистить" >Очистить</button></td>

            </div>
            </tr>
        </div>
        </table>


    </form>

</div>


<!--Валидация для формы-->
<script>
    // Пример стартового JavaScript для отключения отправки форм при наличии недопустимых полей
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Получите все формы, к которым мы хотим применить пользовательские стили проверки Bootstrap
            var forms = document.getElementsByClassName('needs-validation');
            // Зацикливайтесь на них и предотвращайте подчинение
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

//foto
    function filecontrol(row) {
        a=document.getElementById('form');
        b=a.rows[row].cells[1].firstElementChild;
        size=b.files[0].size;
        type=b.files[0].type;
        if ((type=='image/png' || type=='image/jpeg' || type=='image/jpg') && size<2097152) {
            a.rows[row].cells[2].innerHTML='<span class="fa fa-check"></span>';
        }
        else{
            a.rows[row].cells[2].innerHTML='<span class="fa fa-times"></span>';
        }
    }
</script>



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






<!-- Подключаем скрипты -->

<script src="./js/calcCartPrice.js"></script>
<script src="./js/toggleCartStatus.js"></script>
<script src="./js/counter-02.js"></script>
<script src="./js/cart-02.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>
