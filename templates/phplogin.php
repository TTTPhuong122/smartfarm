<?php
include("config/config.php");
include("config/firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
session_start();
?>
<?php
	$_SESSION['userid'] = $_GET['userid'];
   $data = $db->retrieve("system", "id_user", null, $_GET['userid']);
   $data = json_decode($data, 1);
   if(is_array($data)){
	$id_system = $data['id_system'];
	header("Location: status.php?id_system={$_SESSION['id_system']}&{$_SESSION['userid']}");
   }
   
   else{
	echo "không có vườn";
 	}
   ?>


