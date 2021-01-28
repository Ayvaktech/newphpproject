


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    session_start();
    ob_start();
    include 'connection.php';
    
                    if(isset($_SESSION['id']))
                    {
                         $id = $_GET['id'];
                         $q = "DELETE FROM `job_reg` WHERE job_id = '$id'";
                         $query = mysqli_query($con,$q);
                         header('location:employer-profile.php');
                         
                       
                    }
                    else
                    {
                            header('location:emp-login.php');
                    }
    ?>
    
</body>
</html>