<?php

$message = "";
require("Connection.php");

$sql3 = mysqli_query($conection, "SELECT m.total total
                                  FROM (SELECT MONTH(str_to_date(c.Fecha_diagnostico, '%d/%m/%Y')) meses, COUNT(*) total 
                                  FROM Casos c
                                  WHERE MONTH(str_to_date(c.Fecha_diagnostico, '%d/%m/%Y')) is not NULL 
                                  GROUP BY meses
                                  ORDER BY meses asc) m");

while($result = mysqli_fetch_array($sql3)) { 
    $id = $result['total'];

    $message .= $id.'-';
}
echo $message;
?>