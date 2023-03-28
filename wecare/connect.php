<?php
$conn=mysqli_connect("localhost","root","","wecare");
	
	if(!isset($_SESSION['adlogin'])) 
	{ 
        	session_start(); 
    	} 
?>