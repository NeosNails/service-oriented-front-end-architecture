<?php
include('config.php');											//call database connection file
session_start();
$userId = $_SESSION['user_id'];									//get paramater user id
$userArr = Array();												//define array variable

$queryUser = "SELECT user_info.id,fullname,screenname,gender,age,			
				school_name,school_level,class_name,address,
				postcode,city,state,user_info.email,phone_no,username,role,
				CASE WHEN status = 1 THEN 'Active' ELSE 'Inactive' END as status
				FROM user_info INNER JOIN user ON user.user_info_id = user_info.id WHERE user_info.id = ".$userId;			//set query to get data from database

$resultUser = $dbc->query($queryUser);							//execute query statement

while($rowUser = $resultUser->fetch_array(MYSQLI_ASSOC)){		//loop all data and get result from the query
	
	$userId = $rowUser['id'];
	$fullname = $rowUser['fullname'];
	$screenname = $rowUser['screenname'];
	$gender = $rowUser['gender'];
	$age = $rowUser['age'];
	$schoolName = $rowUser['school_name'];
	$schoolLevel = $rowUser['school_level'];
	$className = $rowUser['class_name'];
	$address = $rowUser['address'];
	$postcode = $rowUser['postcode'];
	$city = $rowUser['city'];
	$state = $rowUser['state'];
	$email = $rowUser['email'];
	$phoneNo = $rowUser['phone_no'];
	$username = $rowUser['username'];
	$role = $rowUser['role'];
	$status = $rowUser['status'];

	$school = array("name"=>$schoolName,"level"=>$schoolLevel,"class"=>$className);	//assign to array school
	$address = array("address"=>$address,"postcode"=>$postcode,"city"=>$city,"state"=>$state);	//assign to array address

	//insert result data to array
	$userArr = array(	"id"=>$userId,
										"username"=>$username,
										"role"=>$role,
										"status"=>$status,					
							      "fullname"=>$fullname,
							      "screenname"=>$screenname,
							      "gender"=>$gender,
							      "age"=>$age,
							      "school"=>$school,  //get from array school
							      "address"=>$address,	//get from array address
							      "email"=>$email,
							      "phone_no"=>$phoneNo);
}

$arr = array("items"=>$userArr);								//pack all data
mysqli_close($dbc);												//close database connection
echo json_encode($arr,JSON_NUMERIC_CHECK);						//display as json format

?>