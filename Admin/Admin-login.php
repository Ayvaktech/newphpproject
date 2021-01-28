<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body style="background: aliceblue;">
   <div class="container">
      
    <div class="row text-center" style="padding-top:120px;">
    
<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="usname" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-sm btn-success" name="login">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</div>
           
    </div>
   </div>
   
   
</body>
</html>


<?php
ob_start();
include 'connection.php';
if(isset($_POST['login']))
{
    $usn = $_POST['usname'];
    $pass = $_POST['password'];
    
    $q = "SELECT * FROM `adminlogin` WHERE `username` = '$usn' AND `PASS` = '$pass' ";
    $query = mysqli_query($con,$q);
    $row = mysqli_fetch_array($query);
    if($row)
    {
        echo "<script>
        window.location.href = 'Dashboard.php';
        </script>";
       //header('location:Dashboard.php');
    }
    else
    {
        echo "<script>alert('Invalid username and password')</script>";
    }
    
    
}





?>