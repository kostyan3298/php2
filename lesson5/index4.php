<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод текста</title>
</head>
<body>
<form action="index4.php" method="POST">
        <input type="text" name="username">
        <input type="submit" name="submit" value="Вывести текст"><br/>


<?php
if(isset($_POST["submit"])){
 echo "<p>{$_POST['username']}</p>";
echo "</form>";
}
?>
        

   


</body>
</html>