<?php
if (isset($_GET["submit"])) {
    echo 'Добро пожаловать , '.$_GET["username"];
    echo '!Ваш пароль'.$_GET["userpassword"].'<br />';
}
else {
    echo "НЕТ ДАННЫХ";
}


?>