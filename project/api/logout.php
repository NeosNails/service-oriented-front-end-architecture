<?php
include('config.php');
$login = null;

// Check session - user ID exist or not
session_start();
if(isset($_SESSION['user_id'])) {
	// Kill session user ID
	session_destroy();
	$login = false;
}

// Print JSON output
echo json_encode(Array("login"=>$login));
?>