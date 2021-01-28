<?php
include("connection.php");
$id=$_GET['id'];

$sql=mysqli_query($con,"delete from job_reg where job_id='$id'");
header("location:manage-company.php");
?>