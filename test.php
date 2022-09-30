<html>
<head>
    <meta charset="UTF-8">
    <title>Ведомость</title>
</head>
<body>
<style type="text/css">
    table{
        border-collapse: collapse;
    }
    td{
        width: 20%;
        border: 1px solid black;
    }
</style>
<h1>Библеотека (4 вариант)</h1>
<table>
    <tr>
        <td>№ п/п</td>
        <td>ФИО студента</td>
        <td>Кол-во учебников в начале</td>
        <td>Кол-во учебников в конце</td>
    </tr>       <!--Это шапка таблицы-->
    <?php
    $student = array('Ларьков А.Л.'=>6, 'Павлов А.Д.'=>0, 'Алксандров А.Ж.'=>4, 'Иванова И.П.'=>3, 'Марков П.Н.'=>9);
    $sum=0;

    foreach ($student as $key => $value)    // Переберем созданный ранее массив $student
    {
        $j++;
        $sum+=$value;
        $next=$value+5;

        if ($next>=10){
            $next=10;
        }

        $table .= "<tr>
  <td>{$j}</td>
  <td>{$key}</td>
  <td>{$value}</td>
  <td>{$next}</td>
</tr>";
    }
    echo $table; //Вывод переменной, содержащей заполнение таблицы на страницу
    echo '</table>';
    $mean=$sum/count($student);
    ?>


    <h1>Виды молока (5 вариант)</h1>
    <table>
        <tr>
            <td>№ п/п</td>
            <td>Марка</td>
            <td>Емкость (л.) </td>
            <td>Ошибка (л.)</td>
        </tr>       <!--Это шапка таблицы-->


        <?php
        $milk = array('Пискаревское'=>0.9 , 'Луговое'=>1.0 , 'Петмол'=>0.85 , 'Брест Литовское'=>1.0 , 'Савушкин хуторок'=>0.94);
        $sum2=0;

        foreach ($milk as $key2 => $value2)    // Переберем созданный ранее массив $student
        {
            $j2++;
            $sum2+=$value2;

            if ($key2 =='Пискаревское'){
                $error = 0;
            }
            else{
                $error = 1-$value2;
            }



            $table2 .= "<tr>
  <td>{$j2}</td>
  <td>{$key2}</td>
  <td>{$value2}</td>
  <td>{$error}</td>
</tr>";
        }
        echo $table2; //Вывод переменной, содержащей заполнение таблицы на страницу
        echo '</table>';
        $mean2=$sum2/count($milk);
        ?>

       <!-- <h1>Данные о движении поездов (1 вариант)</h1>
        <table>
            <tr>
                <td>№ п/п</td>
                <td>Название поездов</td>
                <td>Время в пути</td>
                <td>Новые сведения</td>
            </tr>       Это шапка таблицы-->


</body>
</html>