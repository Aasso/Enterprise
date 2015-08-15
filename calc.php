<?php
/**
 * Created by PhpStorm.
 * User: X_MAN
 * Date: 14.08.2015
 * Time: 15:48
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <style>
  body{
        position:absolute;
      	top: 100px;
      	left: 200px;
  }
    </style>
</head>
<body>
<form action="" method="POST">
    <label for="one">Первое число</label>
    <input type="text" id="one" name="first">
    <label for="operator">Введите оператор</label>
    <input type="text" id="operator" name="oper">
    <label for="two">Второе число</label>
    <input type="text" id="two">
    <input type="submit" value="Вычислить">
</form>
</body>
</html>

