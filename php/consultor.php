<?php

$message = "";
echo 'Hola mundo';
require("Connection.php");
$sql = mysqli_query($connection, "SELECT Id_caso,FechaNot FROM Casos WHERE Id_caso < 11");

while($result = mysql_fetch_array($sql)) { 
    $id = Sresult['Id_caso'];
    $fecha = Sresult['FechaNot'];
    $message .='
    <tr>
    <td>'. $id .'</td>
    <td>'. $fecha .'</td>
    </tr>';
}
echo $message;
?>