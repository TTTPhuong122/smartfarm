<?php
require("config/database.php");
$sql = 'SELECT humidity, light, temparature 
        FROM system 
        WHERE id_user = 1 
        ORDER BY id_system DESC 
        LIMIT 1';
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
echo json_encode($data);
?>