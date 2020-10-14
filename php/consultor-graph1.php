<?php

$message = "";
require("Connection.php");

$sql = mysqli_query($conection, "SELECT id_caso FROM ayuda");

while($result = mysqli_fetch_array($sql)) { 
    $id = $result['id_caso'];

    $message .= $id.'-';
}
echo $message;
?>