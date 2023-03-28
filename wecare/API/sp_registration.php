<?php

require "connect.php";

$data= json_decode(file_get_contents('php://input'),
			 true);

$sp_name = $data["sp_name"];
$sp_mobile = $data["sp_mobile"];
$sp_email= $data["sp_email"];
$sp_type   = $data["sp_type"];
$sp_password=$data["sp_password"];
$sp_profile	=$data["sp_profile"];
$sp_city=$data["sp_city"];


$output     = array();

$sql_query = "INSERT INTO servicepersonal(sp_name,sp_mobile,sp_email,sp_type,sp_password,sp_profile,sp_city) 
			  VALUES ('".$sp_name."','".$sp_mobile."','".$sp_email."','".$sp_type."','".$sp_password."' ,'".$sp_profile."' ,'".$sp_city."')";

			  
		

if(mysqli_query($conn,$sql_query))
{
	$output["response"]=1;
	$output["id"]=$conn->insert_id;
	$output["message"] = "Registration Successfull.";
} else {
	$output["response"]=0;
	$output["id"]=0;
	$output["message"] = "Registration Fail.";
}
echo json_encode($output);
?>