<?php
    $name ="Буряков Станислав";
    $age = 32;
    $email ="stasburyakow@gmail.com";
    $city ="Липецк";
    $about ="Менеджер, общественник, еще не програмист";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
        <title>PHP28</title>
    <meta name="description" content="Нетология - PHP28">
</head>
<body>
<h1>Страница Станислава</h1>
<table>
    <tr>
        <td width="150px">Имя:</td>
        <td><?php echo $name ?></td>
    </tr>
    <tr>
        <td>Возраст:</td>
        <td><?php echo $age ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><a href="mailto:stasburyakow@gmail.com"><?php echo $email ?></a></td>
    </tr>
    <tr>
        <td>Город:</td>
        <td><?php echo $city ?></td>
    </tr>
    <tr>
        <td>Обо мне:</td>
        <td><?php echo $about ?></td>
    </tr>
</table>
</body>
</html>
