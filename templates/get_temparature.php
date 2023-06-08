<?php
include("config/config.php");
include("config/firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
session_start();

$data1 = $db->retrieve("system", "id_system", null, 1);
$data1 = json_decode($data1, 1);

echo $data1['temparature']; 
?>