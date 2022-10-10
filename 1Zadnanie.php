<?php
$connect=mysqli_connect('localhost', 'localhost', '123', 'onezadanie');
$query = 'SELECT * FROM user;';
$result = mysqli_query($connect, $query);

?>

<html>
<head>
</head>
<body>
<table>
    <tr>
        <th>Имя </th>
        <th>Год </th>
        <th>E-mail </th>
    </tr>
    <?php

    while ($user=mysqli_fetch_array($result)  ){
        if ($user['year_birth']>2000){
        echo"
<tr> 
            <td>{$user['username']}</td>
            <td>{$user['year_birth']}</td>
            <td>{$user['email']}</td>          
             </tr>";}} ?>
</table>




</body>


</html>
