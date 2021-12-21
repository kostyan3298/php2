<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>

<?php
$form= "<form action='index6.php' method='POST'>
<input type='text' name='login' placeholder='Введите логин'>
<input type='password' name='password' placeholder='Введите пароль'>
<input type='submit' value='ВОЙТИ'>
</form>";
if (!isset($_POST["login"])) {
    echo $form;
}
else {
    $login='Vasya';
    $password='gfhjkm';
    if ($_POST["login"]==$login&$_POST["password"]==$password) {
       echo "<form action='hello.html' ></form>";
    }

    else {
        echo $form;
        echo "<p>Вы ввели некорректные данные. Попробуйте ещё раз или <a 
        href='register6.html'>Зарегистрируйтесь</a></a> </p>";
    }
}
?>
</body>
</html>