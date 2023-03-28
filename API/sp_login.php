<?php

require "connect.php";

$data = json_decode(file_get_contents('php://input'), true);

$sp_email=$data["sp_email"];
$sp_password = $data["sp_password"];



$sql_query = "SELECT * FROM servicepersonal WHERE sp_email='$sp_email' and sp_password='$sp_password'";


$result = mysqli_query($conn,$sql_query);  
$value = array();
$check = mysqli_fetch_array($result);
//if we got some result 
 if(isset($check)){


$output["response"]=1;
$output["sp-id"]=$check['sp_id'];
$output["data"]=$check;
$output["message"] = "Login Successful";
} else {
$output["response"]=0;
$output["sp_id"]=0;
$output["data"]=null;
$output["message"] = "Login Fail";
}

echo json_encode($output);

?>