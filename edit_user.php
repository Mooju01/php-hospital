<?php

include("connect.php");

$sql2 = "SELECT * FROM user_account WHERE user_id = '".$_POST['user_id']."' ";
$query2 = mysqli_query($conn,$sql2);
$rows2 = mysqli_num_rows($query2);
$result2=mysqli_fetch_array($query2,MYSQLI_ASSOC);


?>
<div id="showdata" style="display:block;">
<div class="modal-body">
        <form id="edit_form" action="update_user.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?=$result2['firstname']?>">
            <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?=$_POST['user_id']?>">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Last name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname"  value="<?=$result2['lastname']?>">
          </div>

          <div class="form-group" id="border-bd">
            <label for="recipient-name" class="col-form-label">Birth date:</label>
            <input type="date" class="form-control" id="date" name="date"  value="<?=$result2['birthdate']?>" >

          </div>

          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email"  value="<?=$result2['email']?>" >
          </div>
        </form>
</div>
<div class="modal-footer">
    
    <center>  <button type="button" id="submit_form" class="btn btn-primary">Save</button> </center> 
   </div>
</div>