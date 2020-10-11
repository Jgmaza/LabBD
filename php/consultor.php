<?php

$message = "";
require("Connection.php");
$sql = mysqli_query($connection, "SELECT id_caso,fecha_diagnostico FROM prueba");

while($result = mysql_fetch_array($sql)) { 
    $id = Sresult['id_caso'];
    $fecha = Sresult['fecha_diagnostico'];
    $message .='
    <tr>
    <td>'. $id .'</td>
    <td>'. $fecha .'</td>
    </tr>';
}
echo $message;
?>