<?php

require_once("connect.php");

$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password2']);
$sql = "SELECT * FROM user_account WHERE email = '".$email."' AND password ='".$password."'  ";
$query = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
if($rows != 0)
{
    session_start();

    $_SESSION["user_id"] = $result['user_id'];

    echo "<meta http-equiv='refresh' content='0;URL=user_list.php'>";   
}
else
{

	echo "<meta http-equiv='refresh' content='0;URL=index.php'>";   

}


?>