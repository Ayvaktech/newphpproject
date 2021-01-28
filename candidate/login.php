<?php
 include('connection.php');
session_start();
$msg='';

if(isset($_POST['submit']))
{

 $name=$_POST['name'];
 $password=$_POST['password'];
 if($name!=''&&$password!='')
 {
   $query=mysqli_query($con,"select * from can_login where name='".$name."' and password='".$password."'") or die(mysql_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
       $_SESSION['login_id']=$res[0]['login_id'];
        header('location:adminindex.html');
   }
   else
   {
    $msg='Invalid username or password';
    // header('location:index.php?err='.$msg);
   }
 }

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

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="login.php"><img class="logo-img" src="assets/images/logo/log.png" alt="logo"></a><span class="splash-description">Please enter your Employer information.</span></div>
            <div class="card-body">
             <?php if($msg!=''){?>
                <div class="alert alert-danger"><b><?php echo $msg ?></b></div><?php }?>
                <form  method="POST">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off" name="name">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password" name="password">
                    </div>
                   <input type="submit" name="submit" value="Sign In" class="btn btn-primary btn-lg btn-block">
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="account.php" class="footer-link">Create An Account</a></div>
               
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>