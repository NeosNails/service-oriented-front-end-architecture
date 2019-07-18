<?php
include('config.php');
//initialize status
$status = false;

//get data from fron end
$fullname = $_REQUEST['fullname'];
$screenName = $_REQUEST['screenname'];
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];
$schoolName = $_REQUEST['school_name'];
$schoolLevel = $_REQUEST['school_level'];
$className = $_REQUEST['class_name'];
$address = $_REQUEST['address'];
$postcode = $_REQUEST['postcode'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$email = $_REQUEST['email'];
$phoneNo = $_REQUEST['phone_no'];

$username = $_REQUEST['username'];
$password = md5($_REQUEST['password']);
$role = $_REQUEST['role'];
$status = 1;

//check email from database. if exist no new user will be added
$qCheckUser = "SELECT * FROM user WHERE email = '$email'";
$rsCheckUser = $dbc->query($qCheckUser);
if(mysqli_num_rows($rsCheckUser) > 0){
	$status = false;
}
else{
	//if email not exist, add new data to database
	$qUserData = "INSERT INTO user_info (fullname,screenname,gender,age,school_name,school_level,class_name,address,postcode,city,state,email,phone_no) VALUES ('$fullname','$screenName','$gender',$age,'$schoolName','$schoolLevel','$className','$address',$postcode,'$city','$state','$email','$phoneNo')";
	$rsUserData = $dbc->query($qUserData);
	if($rsUserData){
		$userInfoId = mysqli_insert_id($dbc);
		$qUserCredential = "INSERT INTO user (user_info_id,username,password,email,role,status) VALUES ($userInfoId,'$username','$password','$email','$role',$status)";
		$rsUserCredential = $dbc->query($qUserCredential);
		if($rsUserCredential){
			$status = true;
		}
		else{
			$status = false;
		}
	}
	else{
		$status = false;
	}
}



$arr = array("items"=>array("status"=>$status));
mysqli_close($dbc);
echo json_encode($arr);

?>