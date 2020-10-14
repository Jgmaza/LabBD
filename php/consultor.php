<?php

$message = "";
require("Connection.php");

$sql = mysqli_query($conection, "SELECT id_caso,fecha_diagnostico FROM ayuda");

while($result = mysqli_fetch_array($sql)) { 
    $id = $result['id_caso'];
    $fecha = $result['fecha_diagnostico'];

    $message .='
    <tr>
    <td>'. $id .'</td>
    <td>'. $fecha .'</td>
    </tr>';
}
echo $message;
?>