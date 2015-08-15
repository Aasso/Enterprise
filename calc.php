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
    <title>Calc</title>
    <style>
  body{
        position:absolute;
      	top: 100px;
      	left: 200px;
  }
    </style>
</head>
<body>
<form action="calc.php" method="POST">
     <label for="one">first</label>
     <input type="text" id="one" name="first">
     <label for="operator">operation</label>
     <input type="text" id="operator" name="oper">
     <label for="two">second</label>
     <input type="text" id="two">
    <input type="submit" value="Вычислить">
</form>
</body>
</html>

