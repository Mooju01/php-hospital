<?php

session_start();
if(isset($_SESSION["user_id"]))
{
    echo "<meta http-equiv='refresh' content='0;URL=user_list.php'>";  
}
else{

 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body style="background-color: #0AB564;">
<div class="container-fluid">


<div class="row">
<div class="col-sm-3">
    
    </div>
  <div class="col-sm-6 card-login">
    <div class="card card-radius">
      <div class="card-body">
        <h5 class="card-title login"><i class="far fa-hospital"></i></h5>
        <h5 style="text-align:center;">โรงพยาบาลสงขลานครินทร์</h5>
        <form id="fform" name="fform" action="check_signin.php" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" autocomplete="off">
         </div>
        <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Password</label>
          <input type="password" class="form-control" name="password2" id="password" placeholder="********" autocomplete="off">
        </div>
     
        <center><button type="button" id="signin" class="btn btn-primary btn-lg btn-block"><i class="fas fa-sign-in-alt"></i> Sign In</button> 
        <a href="register.php" class="btn btn-secondary btn-lg btn-block"><i class="fas fa-user-plus"></i> Register</a> </center>
      </div>
      </form>
    </div>
  </div>
  <div class="col-sm-3">
    
  </div>
</div>



</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="asset/js/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="asset/js/app.js"></script>

</body>
</html>