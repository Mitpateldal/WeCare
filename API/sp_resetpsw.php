<?php

require "connect.php";

$data= json_decode(file_get_contents('php://input'),
			 true);


$sp_password      = $data["sp_password"];
$sp_id	=$data["sp_id"];


$output     = array();

$sql_query = "UPDATE servicepersonal SET sp_password = '".$sp_password."' WHERE sp_id = '".$sp_id."'";

		

if(mysqli_query($conn,$sql_query))
{
	$output["response"]=1;
	$output["message"] = "Password reset succsessful.";
} else {
	$output["response"]=0;
	$output["message"] = "Password reset not succsessful.";
}
echo json_encode($output);
?>