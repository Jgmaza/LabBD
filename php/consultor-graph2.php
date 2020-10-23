<?php

$message = "";
require("Connection.php");

$sql2 = mysqli_query($conection, "WITH tot (tota) as
(
SELECT Count(*)
FROM Casos c
),
tabla (ubicacion, total) as (
SELECT c.Ubicacion, COUNT(*)*100/t.tota total
FROM Casos c, tot t
GROUP BY c.Ubicacion, t.tota
)
SELECT t.total total
FROM tabla t");

while($result = mysqli_fetch_array($sql2)) { 
    $id = $result['total'];

    $message .= $id.'-';
}
echo $message;
?>