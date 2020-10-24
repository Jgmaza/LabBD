<?php
//Casos recuperados
$message2 = "";
require("Connection.php");

$sql4 = mysqli_query($conection, "SELECT m.total total
                                  FROM (SELECT MONTH(str_to_date(c.Fecha_recuperado, '%d/%m/%Y')) meses, COUNT(*) total 
                                  FROM Casos c
                                  WHERE MONTH(str_to_date(c.Fecha_recuperado, '%d/%m/%Y')) is not NULL and c.Ubicacion = 'Recuperado'
                                  GROUP BY meses
                                  ORDER BY meses asc) m");

while($result = mysqli_fetch_array($sql4)) { 
    $id = $result['total'];

    $message2 .= $id.'-';
}
echo $message2;
?>