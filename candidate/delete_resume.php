<?php
include("connection.php");
$id=$_GET['id'];

$sql=mysqli_query($con,"delete from user_reg where id='$id'");
header("location:manageresume.php");
?>