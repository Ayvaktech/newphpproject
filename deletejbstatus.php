<?php
include 'connection.php';
$id = $_GET['id'];

$q = "UPDATE `candidate_jobapp` SET  cjobstatus ='Rejected' WHERE candidate_ID = '$id'";
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