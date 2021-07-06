<?php
    include("session_signin.php");
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body style="background-color: #0AB564;">

<nav class="navbar navbar-expand-md navbar-light bg-light nav-size">
<a class="navbar-brand" style="padding-left: 1rem;" href="#"><h1> <i class="far fa-hospital"></i> </h1> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="logout.php" style="color:red;">Log out <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
  
  </div>
</nav>

<div class="container-fluid">


<div class="row">
<div class="col-sm-3">
    
    </div>
  <div class="col-sm-6 card-login">
    <div class="card card-radius">
      <div class="card-body">
      <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อ</th>
            <th scope="col">นามสกุล</th>
            <th scope="col">วันเกิด</th>
            <th scope="col">อีเมล</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $count=0;
                  $sql = "SELECT * FROM user_account ";
                  $query = mysqli_query($conn,$sql);
                  $rows = mysqli_num_rows($query);
                  while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                  {
                $count++;
          ?>

          <tr>
            <th scope="row"><?=$count;?></th>
            <td><?=$result['firstname'];?></td>
            <td><?=$result['lastname'];?></td>
            <td><?=$result['birthdate'];?></td>
            <td><?=$result['email'];?></td>
            <td> <a href="#" style="padding: 1rem;" data-id="<?php echo $result["user_id"];?>" id="del_user" > <i class="far fa-trash-alt"></i> </a> <a href="#" style="padding: 1rem;" data-id="<?php echo $result["user_id"];?>" id="edit_user"> <i class="far fa-edit"></i></a> </td>
          </tr>
          <?php

                  }

          ?>

        </tbody>
      </table>
      </div>
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



<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
         <h3 > <a href="user_list.php" style="color:black;" > <i class="far fa-times-circle"></i></a></h3>
      </div>
      <div id="showdata">

    </div>
    </div>
  </div>
</div>



</body>
</html>