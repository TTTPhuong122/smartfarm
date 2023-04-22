<?php
function validate_input($data) {
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}
function display_error($class_name,$message) {
  	echo "<div class='alert $class_name'>$message</div>";
}
function get_one($table,$field,$key,$value) {
  	$sql = "SELECT $field FROM $table WHERE $key = '$value' LIMIT 1";
	$result = $GLOBALS['conn']->query($sql);
	if ($result->num_rows > 0) {
    	$data = $result->fetch_assoc();
    	return $data;
	}else{
		return FALSE;
	}	
}
function get_multiple($table,$field,$key,$value) {
  	$sql = "SELECT $field FROM $table WHERE $key = '$value'";
	$result = $GLOBALS['conn']->query($sql);
	if ($result->num_rows > 0) {
    	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    	return $data;
	}else{
		return FALSE;
	}	
}

function fetch_custom($sql) {
	$result = $GLOBALS['conn']->query($sql);
	if ($result->num_rows > 0) {
    	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    	return $data;
	}else{
		return FALSE;
	}	
}
function insert($table,$data) {
	// retrieve the keys of the array (column titles)
    $fields = array_keys($data);
    $sql = "INSERT INTO ".$table." (`".implode('`,`', $fields)."`) VALUES('".implode("','", $data)."')";
	if ($GLOBALS['conn']->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
function get_user_id($email){
	$data = get_one('user','id_user','email',$email);
	if($data){
		return $data;
	}else{
		return FALSE;
	}
}
function validate_user($email,$password){
    //hass_password
	$password = md5($password);
	$sql = "SELECT * FROM user WHERE email='$email' AND user_password='$password' LIMIT 1";
	$data = fetch_custom($sql);
	if($data){
		return TRUE;
	}else{
		return FALSE;
	}
}

function get_nowID($table){
    $id = 'id_'.$table;
    $sql = "SELECT $id FROM $table ORDER BY $id DESC LIMIT 1";
	return $GLOBALS['conn']->query($sql)->fetch_assoc()[$id][0];
}

function logout_user(){
	unset($_SESSION['MEMBER_ID']);
	unset($_SESSION['FIRST_NAME']);
	unset($_SESSION['LAST_NAME']);
}

function check_register($email){
	$sql = "SELECT email FROM user WHERE email='$email' LIMIT 1";
	$data = fetch_custom($sql);
	if($data){
		return FALSE;
	}else{
		return TRUE;
	}
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>