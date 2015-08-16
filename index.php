<?php

/*
Создать регистрационную форму со следующими полями:
- Имя
- Фамилия
- Логин (Только латинские буквы и цифры)
- Пароль
- Email
- Возраст (вводить только цифры)
- Пол (МУЖ - ЖЕН) (Возможность выбора только одного значения)
- Страна (Выпадающий список с готовыми значениями)

Форму регистрации можешь взять с bootstrap
Удачи!
*/
if(isset($_POST)){
$first = $_POST['first'];
    echo "<br/>Имя = " . $first;
$last = $_POST['two'];
    echo "<br/>Фамилия = " . $last;
$pass = $_POST['pass'];
    echo "<br/>Пароль = " .$pass;
$pocht = $_POST['pocht'];
    echo "<br/>Email = " . $pocht;
$log = $_POST['log'];
    if(!preg_match("/^[a-zA-Z0-9]+$/", $log)) {
        echo "Имя пользователя задано в неправильном формате";
    }else{
        echo "<br/>Логин = " . $log;
    }
$age = (int)$_POST['age'];
    if(!preg_match("/^[0-9]+$/", $age)) {
        echo "Вы ввели не верно";
    }
$pol = $_POST['pol'];
$cont = $_POST['cont'];





    echo "<br/>Возраст = " . $age;
    echo "<br/>Страна = " . $cont;

}
?>
<h2>Регистрация</h2>
<form class="form-horizontal">
  <div class="form-group">
    <label for="lastName">Фамилия:</label>
    <div class="col-xs-9">
      <input type="text"  id="lastName" placeholder="Введите фамилию" name="first">
    </div>
  </div>
  <div class="form-group">
    <label  for="firstName">Имя:</label>
    <div class="col-xs-9">
      <input type="text" id="firstName" placeholder="Введите имя" name="last">
    </div>
  </div>
    <div class="form-group">
        <label  for="login">Логин:</label>
        <div class="col-xs-9">
            <input type="text"  id="login" placeholder="Логин" name="log">
        </div>
    </div>
  <div class="form-group">
    <label for="inputPassword">Пароль:</label>
    <div class="col-xs-9">
      <input type="password"  id="inputPassword" placeholder="Введите пароль" name="pass">
    </div>
  </div>
    <div class="form-group">
        <label for="inputEmail">Email:</label>
        <div class="col-xs-9">
            <input type="email"  id="inputEmail" placeholder="Email" name="pocht">
        </div>
    </div>
  <div class="form-group">
    <label  for="age1">Возраст</label>
    <div class="col-xs-9">
      <input type="tel"  id="age1" placeholder="Введите ваш возраст" name="age">
    </div>
  </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Страна:</label>
        <div class="col-xs-3">
            <select method="POST" action=index.php name="cont">
            <option value="russia">Россия</option>
            <option value="ispaniya">Испания</option>
            <option value="polsha">Польша</option>
            <option value="chehia">Чехия</option>
            <option value="belorusia">Белорусия</option>
            <option value="ykraina">Украина</option></select>
        </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3">Пол:</label>
    <div class="col-xs-2">
      <label class="radio-inline">
        <input type="radio" name="genderRadios" value="male"> Мужской
      </label>
    </div>
    <div class="col-xs-2">
      <label class="radio-inline">
        <input type="radio" name="genderRadios" value="female"> Женский
      </label>
    </div>
  </div>
  <br />
  <div class="form-group">
    <div class="col-xs-offset-3 col-xs-9">
      <input type="submit" value="Регистрация">
      <input type="reset"  value="Очистить форму">
    </div>
  </div>
</form>

</body>
</html>
