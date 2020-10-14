<?php

$message = "";
require("Connection.php");

$sql2 = mysqli_query($conection, "SELECT fecha_diagnostico FROM ayuda");

while($result = mysqli_fetch_array($sql2)) { 
    $id = $result['fecha_diagnostico'];

    $message .= $id.'-';
}
echo $message;
?>