<?php

require_once("connect.php");


$sql = "SELECT * FROM user_account WHERE email = '".$_POST['email']."'  ";
$query = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query);
if($rows != 0)
{
    echo "1";
}
else
{
	echo "0";

}


?>