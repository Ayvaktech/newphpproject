<?php
include 'connection.php';
ob_start();

  $id = '21';
  $q = "SELECT d.ImageUrl,r.Full_name,r.Email,r.register_with,d.FreProfile,d.Experience,d.Frestatus,d.Age,d.location FROM `freelance_register` as r INNER JOIN freelancer_details as d on r.ID = d.ID
WHERE  r.ID='$id'";
    $query = mysqli_query($con,$q);
    $row = mysqli_fetch_array($query);
    echo json_encode($row);

?>