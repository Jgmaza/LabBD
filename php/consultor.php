<?php

$message = "";
require("Connection.php");
$sql = mysqli_query($conection, "SELECT Id_caso,Fecha_diagnostico FROM Casos Where Id_caso < 11");

while($result = mysqli_fetch_array($sql)) { 
    $id = $result['Id_caso'];
    $fecha = $result['Fecha_diagnostico'];
    $message .='
    <tr>
    <td>'. $id .'</td>
    <td>'. $fecha .'</td>
    </tr>';
}
echo $message;
?>