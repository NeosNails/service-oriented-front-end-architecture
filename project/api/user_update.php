<?php
//db connection file 
include 'config.php';
//initialize status
$status = false;
//get field to update and changes  
$fieldUpdate = $_REQUEST['field'];
$valueUpdate = $_REQUEST['value'];
//get session user id
session_start();
if(isset($_SESSION['user_id'])) {	
	$userId = $_SESSION['user_id']; 
}


//update data for table user 
$qUserUpdate = "UPDATE user SET user_info_id=$userId ";
//get field to update
if($fieldUpdate == 'rv_username') {	 
	$qUserUpdate .= ",username='$valueUpdate' ";
}
if($fieldUpdate == 'rv_password') {	
	$password = md5($valueUpdate); 
	$qUserUpdate .= ",password='$password' ";
}
if($fieldUpdate == 'rv_email') {	
	$qUserUpdate .= ",email='$valueUpdate' ";
}
if($fieldUpdate == 'rv_role') {	
	$qUserUpdate .= ",role='$valueUpdate' ";
}

$qUserUpdate .= "WHERE user_info_id=$userId ";
//execute query
$rsUserUpdate = $dbc->query($qUserUpdate);


//if success, update status true
if(mysqli_affected_rows($dbc) > 0){
	$status = true;
}


//update query for user information table
$qUserUpdateInfo = "UPDATE user_info SET id=$userId ";
//get field to update
	if($fieldUpdate == 'rv_fullName') {	
		$qUserUpdateInfo .= ",fullname='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_screenName') {	
		$qUserUpdateInfo .= ",screenname='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_gender') {	
		$qUserUpdateInfo .= ",gender='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_age') {	
		$qUserUpdateInfo .= ",age=$valueUpdate ";
	}
	if($fieldUpdate == 'rv_school_name') {	
		$qUserUpdateInfo .= ",school_name='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_school_level') {	
		$qUserUpdateInfo .= ",school_level='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_class_name') {	
		$qUserUpdateInfo .= ",class_name='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_address') {	
		$qUserUpdateInfo .= ",address='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_postcode') {	
		$qUserUpdateInfo .= ",postcode='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_city') {	
		$qUserUpdateInfo .= ",city='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_state') {	
		$qUserUpdateInfo .= ",state='$valueUpdate' "; 
	}
	if($fieldUpdate == 'rv_email') {	
		$qUserUpdateInfo .= ",email='$valueUpdate' ";
	}
	if($fieldUpdate == 'rv_phoneNo') {	
		$qUserUpdateInfo .= ",phone_no='$valueUpdate' ";
	}



	$qUserUpdateInfo .= "WHERE id=$userId";
	//execute query
	$rsUserUpdateInfo = $dbc->query($qUserUpdateInfo);
//update status if success update to true
	if(mysqli_affected_rows($dbc) > 0){
		$status = true;
	}



//sent status to frontend
$arr = array("items"=>array("status"=>$status));
//close db connection
mysqli_close($dbc);
//print to json format
echo json_encode($arr);

?>