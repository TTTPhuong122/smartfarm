<?php
include("config/config.php");
include("config/firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
?>
<?php
   $data = $db->retrieve("system", "id_user", null, $_GET['userid']);
   $data = json_decode($data, 1);
   if(is_array($data)){
	$id_system = $data['id_system'];
	header("Location: status.php?id_system={$id_system}");
   }
   
   else{
	echo "không có vườn";
 	}
   ?>


