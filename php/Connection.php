<?php
$host = "localhost";
$user = "root";
$pass = "pruebassql";
$db = "prueba";
$conection = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($conection,"utf8");
?>