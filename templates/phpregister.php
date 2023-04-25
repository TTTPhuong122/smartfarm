
<?php
include("config/config.php");
include("config/firebaseRDB.php");
include("config/helper.php");
$db = new firebaseRDB($databaseURL);
session_start();
?>
<?php

$name = validate_input(isset($_POST['name'])?$_POST['name']:'');
$gender = validate_input(isset($_POST['Sex'])?$_POST['Sex']:'');
$phone = validate_input(isset($_POST['phone'])?$_POST['phone']:'');
$address = validate_input(isset($_POST['address'])?$_POST['address']:'');
if($_SERVER['REQUEST_METHOD']==='POST' && is_array($_POST)){
    if (!isset($_POST[userid])){
        echo $_POST[userid];
    }
    else{
        echo "huhu";
    }
    // $insert = $db->insert("user", [$_GET[userid]]);
// 	$insert = $db->insert("user/".$_GET[userid], [
//    "user_name"     => $name,
//    "phone" => $phone,
//    "address"      => $address,
//    "gender"    => $gender
// ]);
}else{
    echo "chưa vô được";
	// header( "Location: login.php" ); die;
}
?>