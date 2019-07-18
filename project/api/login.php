<?php
include('config.php');
$userID = null;
$login = null;
$message = "";

// Get value from frontend
$userEmail = $_REQUEST['email'];
$userPassword = $_REQUEST['password'];

// Query from user table
$query = "SELECT user.user_info_id AS id FROM user WHERE user.email = '$userEmail' AND user.password = MD5('$userPassword')";
$rs = mysqli_query($dbc,$query);
$row = mysqli_fetch_assoc($rs);
$userID = $row['id'];

// Check if user ID exist
if(!is_null($userID)) {
	$login = true;
	// Create Session
	session_start();
	$_SESSION['user_id'] = $userID;
	$message = "Login Successfully";
} else {
	$login = false;
	$message = "Login Failed!! Invalid email or password";
}

// Print JSON output
echo json_encode(Array("login"=>$login, "message"=>$message));
?>