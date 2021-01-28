<?php
include 'connection.php';
$id = $_GET['id'];

$q = "UPDATE `freelancer_jobapplication` SET  fjobstatus ='Rejected' WHERE Freelancer_ID = '$id'";
$query = mysqli_query($con,$q);
if($query)
{
    header('location:employer-profile.php');
}
else
{
    echo mysqli_error($con);
}


?>