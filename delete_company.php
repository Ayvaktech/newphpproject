<?php 
include("connection.php");

if(isset($_GET['id']))
{
	$delete_id = $_GET['id'];
	$delete_funds = "delete from comp_reg where com_id='$delete_id'";
	$run_delete = mysqli_query($con, $delete_funds);
	if($run_delete)
	{
		echo "<script>window.open('manage-company.php','_self')</script>";
	}
}
?>