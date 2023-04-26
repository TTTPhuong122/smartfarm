
<?php
include("config/config.php");
include("config/firebaseRDB.php");
include("config/helper.php");
$db = new firebaseRDB($databaseURL);
session_start();
?>
<?php
$name = validate_input(isset($_POST['name'])?$_POST['name']:'');
$user_id = (isset($_POST['user_id'])?$_POST['user_id']:'');
$gender = validate_input(isset($_POST['Sex'])?($_POST['Sex']=="F"?"Nữ":"Nam"):'');
$phone = validate_input(isset($_POST['phone'])?$_POST['phone']:'');
$address = validate_input(isset($_POST['address'])?$_POST['address']:'');
$name_system = validate_input(isset($_POST['name_system'])?$_POST['name_system']:'');

if($_SERVER['REQUEST_METHOD']==='POST' && is_array($_POST)){
	$insert = $db->insert("user", [
   "user_name"     => $name,
   "phone" => $phone,
   "address"      => $address,
   "gender"    => $gender,
   "user_id" => $user_id,
   "name_system" => $name_system
]);
    header("Location: login.php");
}else{
    echo "chưa vô được";
	// header( "Location: login.php" ); die;
}
?>