<?php

include('connect.php');
$sql = "UPDATE user_account SET 
firstname = '".addslashes($_POST["firstname"])."' ,
lastname = '".$_POST["lastname"]."',
birthdate = '".$_POST["date"]."',
email = '".$_POST["email"]."'
WHERE user_id = '".$_POST["user_id"]."' ";
$query = mysqli_query($conn,$sql);

echo "<meta http-equiv='refresh' content='0;URL=user_list.php'>";  

?>
