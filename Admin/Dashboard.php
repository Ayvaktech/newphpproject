<?php
include 'connection.php';
ob_start();

$q = "SELECT * FROM `user_reg`";
$query = mysqli_query($con,$q);
$rowcount = mysqli_num_rows($query);


$q1 = "SELECT * FROM `emp_reg`";
$query1 = mysqli_query($con,$q1);
$rowcount1 = mysqli_num_rows($query1);


$q2 = "SELECT * FROM `freelance_register`";
$query2 = mysqli_query($con,$q2);
$rowcount2 = mysqli_num_rows($query2);

$q3 = "SELECT * FROM `job_reg`";
$query3 = mysqli_query($con,$q3);
$rowcount3 = mysqli_num_rows($query3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h2{
          
        }
    
    
    </style>
</head>
<body>
   <?php include 'AdHeader.php' ?>
    
    <div id="right-panel" class="right-panel">
    <header id="header" class="header">

            <h1>Hello Admin</h1>

    </header>
    <div class="container" style="padding-top:30px;">
       <div class="row text-center">
          <div class="col-sm-12 col-md-12">
              <table class="table" border="1">
                 <tr style="background: blue;color: white;">
                     <th>Sl no </th>
                     <th>Designation </th>
                     <th>Total</th>
                 </tr>
                 <tr>
                     <th>1 </th>
                     <th>Candidates </th>
                     <th><?php echo $rowcount;  ?></th>
                 </tr>
                  <tr>
                     <th>2 </th>
                     <th>Employers </th>
                     <th><?php echo $rowcount1;  ?></th>
                 </tr>
                  <tr>
                     <th>3 </th>
                     <th>Freelancers </th>
                     <th><?php echo $rowcount2;  ?></th>
                 </tr>
                  <tr>
                     <th>4 </th>
                     <th>Total Number of Job Posted </th>
                     <th><?php echo $rowcount3;  ?></th>
                 </tr>
                  
              </table> 
          </div>
       </div>
    </div>
    </div>
</body>
</html>