<?php
include("connect.php");

$query="DELETE FROM user_account where user_id = '".$_POST['user_id']."'  ";
$result=mysqli_query($conn,$query);

echo "<meta http-equiv='refresh' content='0;URL=user_list.php'>";


?>