<?php

include 'connection.php';
ob_start();
session_start();

                    if(isset($_SESSION['id']))
                    {
                        $id = $_GET['id'];
                        $q = "SELECT * FROM `candidate_jobapp` WHERE candidate_ID = '$id'";
                        $query = mysqli_query($con,$q);
                        $row = mysqli_fetch_array($query);
                    }
                    else
                    {
                            header('location:emp-login.php');
                    }


$get_home= "select * from home LIMIT 1";
    $run_home = mysqli_query($con, $get_home);
    while ($row_home = mysqli_fetch_array($run_home))
    {
        $title = $row_home['title'];
        $logo = $row_home['logo'];
        $banner_title = $row_home['banner_title'];
        $banner_image = $row_home['banner_image'];
        $video_link = $row_home['video_link'];
    }
                


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
	================================================== -->
	<title><?php echo $title; ?> </title>
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
              <?php
			include('header1.php');
			?>
			
			<!-- Start Navigation -->
			 <form method="post">
			<div class="row text-center">
            <div class="col-sm-2 col-md-2">
            
            </div>
            <input type="hidden" name="canid" value="<?php echo $row['candidate_ID']; ?>">
           
               <div class="col-sm-8 col-md-8">
          <div class="row text-center" style="padding-top: 100px; padding-bottom:10px;">
             <div class="col-sm-12 col-md-12">
                 <h2>Interview Call Letter</h2>
             </div>
              
          </div>
           <div class="row text-center">
                                                <div class="col-sm-3 col-md-3">
                                                     Interview Date :
                                                </div>
                                                <div class="col-sm-9 col-md-9">
                                                    <input type="date" name="dat" class="form-control" required=""> 
                                                </div>
                                                <div class="col-sm-3 col-md-3">
                                                     Time:
                                                </div>
                                                <div class="col-sm-9 col-md-9">
                                                    <input type="text" name="time" class="form-control" required="" placeholder="time"> 
                                                </div>
                                                <div class="col-sm-3 col-md-3">
                                                    Address:
                                                </div>
                                                <div class="col-sm-9 col-md-9">
                                                    <textarea name="addr" class="form-control" required="" placeholder="Address"></textarea>
                                                   
                                                       
                                                   </textarea>
                                                </div>
                                                <div class="col-sm-3 col-md-3">
                                                    Description:
                                                </div>
                                                <div class="col-sm-9 col-md-9">
                                                   <textarea name="des" class="form-control" required="" placeholder="Description"></textarea>
                                                       
                                                   </textarea>
                                                </div>
                                                <div class="col-sm-12 col-md-12">
                                                   <input type="submit" name="add" value="Send" class="btn btn-success">
                                                </div>
                                              </div>
            
            </div>
                
            
			 
            <div class="col-sm-2 col-md-2">
            
            </div>
			</div>
                                           
                                            </form>
			                                    
    
    
    
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

if(isset($_POST['add']))
{
    $canid = $_POST['canid'];
    $dat  = $_POST['dat'];
    $tim = $_POST['time'];
    $add = $_POST['addr'];
    $des = $_POST['des'];
    
    $que = "INSERT INTO `can_job_status`(`canid`,`Int_date`,`Int_timee`,`address`, `description`) VALUES ('$canid','$dat','$tim','$add','$des')";
    $query5 = mysqli_query($con, $que);
    if($query5)
    {
        $_SESSION["confirm"] =  $canid;
        
        $updatestatus = "UPDATE `candidate_jobapp` SET cjobstatus ='completed' WHERE candidate_ID='$canid' "; 
        $upquery = mysqli_query($con,$updatestatus);
        if($upquery)
        {
            header('location:employer-profile.php');
        }   
    }
    else
    {
        echo mysqli_error($con);
        
    }
    
}







?>