
<?php
require("config/database.php");
require("config/helper.php");

$name = validate_input(isset($_POST['name'])?$_POST['name']:'');
$email = validate_input(isset($_POST['rEmail'])?$_POST['rEmail']:'');
$password = validate_input(isset($_POST['rPassword'])?$_POST['rPassword']:'');
$gender = validate_input(isset($_POST['Sex'])?$_POST['Sex']:'');
$phone = validate_input(isset($_POST['phone'])?$_POST['phone']:'');
$address = validate_input(isset($_POST['address'])?$_POST['address']:'');
if($_SERVER['REQUEST_METHOD']==='POST' && is_array($_POST) && check_register($email)){
	$data = array("id_user" => get_nowID("user")+1, "user_name"=>$name,"user_password"=>md5($password),
    "phone"=>$phone,"email"=>$email,"address"=>$address,"gender"=>$gender);
    insert("user",$data);
}else{
    alert("This email is already registered with an account. Try another account");
	echo '<script type="text/javascript">'; 
    echo 'window.location.href = "login.html";';
    echo '</script>';
}
?>