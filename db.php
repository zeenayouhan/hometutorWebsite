<?php
$conn=new MySQLi("localhost","root","","wasara");
if($conn->connect_error)
{
	die("Connection Error:". $conn->connect_error);
	}




?>