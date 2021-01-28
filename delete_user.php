<?php 
include("connection.php");

if(isset($_GET['id']))
{
	$delete_id = $_GET['id'];
	$delete_funds = "delete from user_reg where id='$delete_id'";
	$run_delete = mysqli_query($con, $delete_funds);
	if($run_delete)
	{
		echo "<script>window.open('manage-candidate.php','_self')</script>";
	}
}
?>