
<?php
/**
 * Created by PhpStorm.
 * User: X_MAN
 * Date: 14.08.2015
 * Time: 15:48
 */
/*if(isset($_POST['first']) AND $_POST['first']!= null ){
    $first = $_POST['first'];
}
if(isset($_POST['oper']) AND $_POST['oper']!= null ){
    $oper = $_POST['oper'];
}
if(isset($_POST['two']) AND $_POST['two']!= null ){
    $two = $_POST['two'];
}*/
// в начале выдавал ошибки в 19 20 21 строке warning
//error_reporting(0);
if(isset($_POST)){
    $first = $_POST['first'];
    $opert = $_POST['opert'];
    $two = $_POST['two'];
//    Очистим от мусора
    //echo "FIRST: ".$first."<br/>OPER: ".$oper."<br/>TWO: ".$two;
    switch ($opert) {
        case "+":
            $result = $first + $two;
            echo "<br/>Результат = " . $result;
            break;
        case "*":
            $result = $first * $two;
            echo "<br/>Результат = " . $result;
            break;
        case "-":
            $result = $first - $two;
            echo "<br/>Результат = " . $result;
            break;
        case "/":
            $result = $first / $two;
            echo "<br/>Результат = " . $result;
            break;
        default:
            echo "<br/>Результат = " . "Вы ввели неверный операнд";
//            На сколько я знаю, тут тоже нужен break
            break;
    }
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
    <?/*
    <label for="one">first</label><br />
    <input type="text" id="one" name="first"><br />
    <label for="operator">operation</label><br />
    <input type="text" id="operator" name="oper"><br />
    <label for="two">second</label><br />
    <input type="text" id="two" name="two"><br />
*/?>

    <input type="button" value="1" name="first" id="two"><input type="button" value="2" name="first" id="two"> <input type="button" value="3" name="first" id="two"><input type="button" value="+" name="opert"><br/>
    <input type="button" value="4" name="first" id="two"><input type="button" value="5" name="first" id="two"><input type="button" value="6" name="first" id="two"><input type="button" value="-" name="opert"><br/>
    <input type="button" value="7" name="first" id="two"><input type="button" value="8" name="first" id="two"><input type="button" value="9" name="first" id="two"><input type="button" value="/" name="opert"><br/>
    <input type="submit" value="Отправить"><input type="button" value="*" style=" position:absolute; left: 82px;" name="opert"><br/>

</form>
</body>
</html>
