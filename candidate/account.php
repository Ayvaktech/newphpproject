<?php
include("connection.php");
$msg='';


//how to use a class
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password1=$_POST['password1'];   
$sql=mysqli_query($con,"insert into can_reg(name,email,password,password1) values('$name','$email','$password','$password1')");
$sql1=mysqli_query($con,"insert into can_login(name,password) value('$name','$password')");
$msg="One Employer Added Successfully"; 
}

?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Candidate Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST">
        <div class="card">
            <div class="card-header">
              <?php if($msg !=''){?> <div class="alert alert-success"><b><?php echo $msg?></b> </div><?php }?>
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your  information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" name="password" required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" name="password1" placeholder="Confirm Password">
                </div>
                <div class="form-group pt-2">
                <input type="submit" name="submit" value="Register" class="btn btn-block btn-primary">
                </div>
                <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="login.php" class="footer-link">Login Here</a></div>
               
            </div>
                
            </div>
            
        </div>
    </form>
</body>

 
</html>