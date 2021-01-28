<?php
include("connection.php");
$id=$_GET['id'];

$sql=mysqli_query($con,"delete from comp_reg where com_id='$id'");
header("location:viewcomp.php");
?>