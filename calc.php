<?php
/**
 * Created by PhpStorm.
 * User: X_MAN
 * Date: 14.08.2015
 * Time: 15:48
 */
if(isset($_POST['first']) AND $_POST['first']!= null ){
    $first = $_POST['first'];
}
if(isset($_POST['oper']) AND $_POST['oper']!= null ){
    $oper = $_POST['oper'];
}
if(isset($_POST['two']) AND $_POST['two']!= null ){
    $two = $_POST['two'];
}
if(isset($_POST)){
    echo "FIRST: ".$first."<br/>OPER: ".$oper."<br/>TWO: ".$two;
    $result = $first + $two;
    echo "Результат = ".$result;
}

?>
<!doctype html>
<html lang="ru">
<head>
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
<form action="" method="POST">
     <label for="one">first</label><br />
     <input type="text" id="one" name="first"><br />
     <label for="operator">operation</label><br />
     <input type="text" id="operator" name="oper"><br />
     <label for="two">second</label><br />
     <input type="text" id="two" name="two"><br />
    <input type="submit" value="Отправить">
</form>
</body>
</html>

