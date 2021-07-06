<?php
ini_set('display_errors', 1);
error_reporting(~0);
$serverName	= "localhost";
$userName = "root";
$userPassword = "";
$dbName = "psu_hospital";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_query($conn,"SET NAMES UTF8");
if (mysqli_connect_errno())
{
	echo "Database Connect Failed : " . mysqli_connect_error();
}
else
{
		//echo "Database Connected.";
}
	
date_default_timezone_set('Asia/Bangkok');

/*
$serverName	= "61.91.202.6";
$userName = "root";
$userPassword = "t.logical898";
*/
?>