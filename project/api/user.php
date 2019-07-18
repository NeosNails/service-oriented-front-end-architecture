<?php
include('config.php');
$login = null;

// Check session - user ID exist or not
session_start();
if(isset($_SESSION['user_id'])) {
	$login = true;
} else {
	$login = false;
}

// Print JSON output
echo json_encode(Array("login"=>$login));
?>