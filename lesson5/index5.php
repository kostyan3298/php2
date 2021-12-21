<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    .red{
    color:red;
    font-weight: bold;
    }
    </style>


<?php
$countries=["Польша", "Полинезия", "Португалия", "Боливия","Япония","Беларусия",];
$country_list="<ul>";
foreach ($countries as $country) {
    $country_list.="<li>$country</li>";
}
$country_list.="</ul>";
if(isset($_POST["username"])){
    $search=$_POST["username"];
    $country_list=str_replace($search,"<span class='red'>$search</span>",$country_list);
}


echo "<form action='index5.php' method='POST'>
<input type='text' name='username' value='{$_POST["username"]}'>
<input type='submit' name='submit' value='ИСКАТЬ'><br/>
</form>";

echo "$country_list";

?>


</body>
</html>