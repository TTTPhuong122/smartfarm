
<?php
require("config/database.php");
require("config/helper.php");

$email = validate_input(isset($_POST['email'])?$_POST['email']:'');
$password = validate_input(isset($_POST['password'])?$_POST['password']:'');
if($_SERVER['REQUEST_METHOD']==='POST' && is_array($_POST) && !empty($email) && !empty($password)){
    $user_id = get_user_id($email);    
    $status = validate_user($email,$password);
	if($status){
		header( "Location: status.php" ); die;		
	}else{
		header( "Location: index.php?error=bG9naW4gZXJyb3I=" ); die;
	}
}else{
	header( "Location: index.php" ); die;
}
?>