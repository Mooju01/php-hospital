<?php

include("connect.php");


$sql = "INSERT INTO user_account SET 
    firstname = '".addslashes($_POST["firstname"])."' ,
    lastname = '".$_POST["lastname"]."',
    birthdate = '".$_POST["birthdate"]."',
    email = '".$_POST["email"]."',
    password = '".$_POST["password"]."'";
    $query = mysqli_query($conn,$sql);
    

    echo "<meta http-equiv='refresh' content='0;URL=index.php'>";   

?>