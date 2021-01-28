
<?php
ob_start();
session_start();
include('connection.php');


                    if(isset($_SESSION['id']))
                    {
                         $id = $_GET['id'];
                         $q = "SELECT * FROM `job_reg` WHERE job_id = '$id'";
                         $query = mysqli_query($con,$q);
                         $row = mysqli_fetch_array($query);
                    }
                    else
                    {
                            header('location:emp-login.php');
                    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Job </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="assets/plugins/css/plugins.css">
    
    <!-- Custom style -->
    <link href="assets/css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
</head>
<body>
    <div class="Loader"></div>
   <?php 
    include 'header1.php';
    ?>
    
    <div class="row" style="padding-top: 100px;">
       <div class="col-sm-12 col-md-12">
         <form action="" method="post">
          <div class="row no-mrg">
									<input type="hidden" name="jobid" value="<?php echo $row['job_id']; ?>">
										<h3>Edit Job Details</h3>
										<div class="edit-pro">
											<div class="col-md-4 col-sm-6">
												<label>Company Name</label>
												<input type="text" name="name" class="form-control" value="<?php echo $row['cname']; ?>" >
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Job Title</label>
												<input type="text" name="tit" class="form-control" value="<?php echo $row['jobtitle']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>skill</label>
												<input type="text" name="skl" class="form-control" value="<?php echo $row['skill']; ?>" >
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Experience</label>
												<input type="text" class="form-control" name="exp" value="<?php echo $row['experience']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Salary</label>
												<input type="text" name="sal" class="form-control" value="<?php echo $row['salary']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>City</label>
												<input type="text" name="cty" class="form-control" value="<?php echo $row['city']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Position</label>
												<input type="text" name="pos" class="form-control" value="<?php echo $row['pos']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Language Known</label>
												<input type="text" name="lan" class="form-control" value="<?php echo $row['lang']; ?>">
											</div>
											
											<div class="col-md-4 col-sm-6">
												<label>Description</label>
												<textarea name="des"><?php echo $row['description'];?></textarea>
											</div>
											<div class="col-sm-12">
												<button type="submit" name="update" class="update-btn">Update Now</button>
											</div>
										</div>
									</div>
               
         </form>
           
       </div>
        
    </div>					
									
<?php
    
    include 'footer.php';
    
    
    ?>
    <!-- Scripts
			================================================== -->
			<script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
			<script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
			<script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
			<script type="text/javascript" src="assets/plugins/js/loader.js"></script>
			<script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
			<!-- Custom Js -->
			<script src="assets/js/custom.js"></script>
			<script src="assets/js/jQuery.style.switcher.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}

				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
    
</body>
</html>

<?php


                    if(isset($_POST['update']))
                    {
                            $id = $_POST['jobid'];
                            $cname = $_POST['name'];
                            $jtitle = $_POST['tit'];
                            $skill = $_POST['skl'];
                            $exper = $_POST['exp'];
                            $sal = $_POST['sal'];
                            $city = $_POST['cty'];
                            $pos = $_POST['pos'];
                            $lan = $_POST['lan'];
                            $des = $_POST['des'];
                        
                         $q1 = "UPDATE `job_reg` SET cname='$cname',jobtitle='$jtitle',skill='$skill',experience='$exper',salary='$sal',city='$city',pos='$pos',description='$des',lang='$lan' WHERE job_id = '$id'";
                          $query = mysqli_query($con,$q1);
                        if($query)
                        {
                             header('location:employer-profile.php');
                        }
                        else
                        {
                            echo mysqli_error($con);
                        }
                    
                    }
                   








?>