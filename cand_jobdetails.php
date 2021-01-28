<?php
ob_start();
session_start();
include('connection.php');
	
            
            if(isset($_SESSION['id']))
            {
                $cid = $_SESSION['id'];
                $q1 = "SELECT * from `user_reg` WHERE id = '$cid' "; 
                $quer = mysqli_query($con,$q1);
                $data = mysqli_fetch_array($quer);
                
            }
            else
            {
                header('location:login.php');
            }              

?>

<?php

    include('connection.php');

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
    <title><?php echo $title; ?></title>
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
    include 'header.php';
    ?>
    
    <div class="clearfix"></div>
    <form action="" method="post">
       <input type="hidden" name="cname" value="<?php echo $data['uname'] ?>">
                 <input type="hidden" name="email" value="<?php echo $data['email'] ?>">
                <input type="hidden" name="mob" value="<?php echo $data['number'] ?>">
                <input type="hidden" name="loca" value="<?php echo $data['location'] ?>">
                <input type="hidden" name="quali" value="<?php echo $data['qual'] ?>">
                <input type="hidden" name="exp" value="<?php echo $data['exp'] ?>">
                <input type="hidden" name="skill" value="<?php echo $data['skill'] ?>">
        
    
        
        <section class="inner-header-page">
				<div class="container">
				<?php
                    include 'connection.php';
                    
                 
                        $id = $_GET['id'];
                        if($id)
                        {
                            $q = "SELECT * from `job_vacancy` WHERE id = '$id' ";
                            $query = mysqli_query($con,$q);
                            $row = mysqli_fetch_array($query);
                            
                        }
                        else
                        {
                            header('location:freelancing-jobs.php');
                        }
                
                   
                    ?>
					<input type="hidden" name="jobid" value="<?php echo $row['id'] ?>">
					<input type="hidden" name="empid" value="<?php echo $row['emp_id'] ?>">
					<div class="col-md-8">
						<div class="left-side-container">
							<div class="freelance-image"><a href="#"><img src="upload/<?php echo $row['image']; ?>" class="img-responsive img-circle" alt=""></a></div>
							<div class="header-details">
								<h4><?php echo $row['company_name'];?><span class="pull-right"></span></h4>
								<p><?php echo $row['job_title'] ?></p>
								<ul>
									<li><a href="http://themezhub.com/"><i class="fa fa-building"></i> Rating</a></li>
									<li>
										<div class="star-rating" data-rating="4.2">
											<span class="fa fa-star fill"></span>
											<span class="fa fa-star fill"></span>
											<span class="fa fa-star fill"></span>
											<span class="fa fa-star fill"></span>
											<span class="fa fa-star-half fill"></span>
										</div>
									</li>
									<li><img class="flag" src="assets/img/gb.svg" alt=""> <?php echo $row['position'] ?></li>
									<li><div class="verified-action">Verified</div></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 bl-1 br-gary">
						<div class="right-side-detail">
							<ul>
								<li><span class="detail-info">Availability</span><?php echo $row['position']; ?><span class="available-status">Active</span></li>
								<li><span class="detail-info">Location</span><?php echo $row['location']; ?></li>
								<li><span class="detail-info">Experience</span><?php echo $row['experience']; ?></li>
								<li><span class="detail-info">Age</span><?php echo $row['age']; ?></li>
							</ul>
							<ul class="social-info">
								<li><a href="<?php echo $row['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="<?php echo $row['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
								<li><a href="<?php echo $row['pinterest']; ?>"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			
			<section>
			    <div class="container">
			    <div class="container-detail-box">
						
							<div class="apply-job-header">
								<h4><?php echo $row['company_name']; ?></h4>
								<a href="#" class="cl-success"><span><i class="fa fa-building"></i><?php echo $row['position']; ?></span></a>
								<span><i class="fa fa-map-marker"></i><?php echo $row['location']; ?></span>
							</div>
							
							<div class="apply-job-detail">
								<p><?php echo $row['description']; ?></p>
								
							</div>
							
							<div class="apply-job-detail">
								<h5>Skills</h5>
								<ul class="skills">
									<li><?php echo $row['skill']?></li>
								</ul>
							</div>
							
							<div class="apply-job-detail">
								<h5>Language</h5>
								<ul class="language">
									<li><img class="flag" src="assets/img/gb.svg" alt=""><?php echo $row['language']?></li>
									
								</ul>
							</div>
							<button type="submit" name="submit" class="btn btn-success">Apply Now</button>
						</div>
                </div>
			</section>
    </form>
    
    
			
			<?php
			include('footer.php');
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


if(isset($_POST['submit']))
{
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $jobid = $_POST['jobid'];
        $empid = $_POST['empid'];
        $cname = $_POST['cname'];
        $cemail = $_POST['email'];
        $cmob = $_POST['mob'];
        $cloc = $_POST['loca'];
        $cqual = $_POST['quali'];
        $cexp = $_POST['exp'];
        $cskill = $_POST['skill'];
        
       $q2 = "INSERT INTO `candidate_jobapp`(`candidate_ID`, `job_id`,`emp_id`, `can_name`, `can_email`, `can_mob`, `can_loc`, `can_quali`, `can_exp`, `can_skill`,`cjobstatus`) VALUES ('$id','$jobid','$empid','$cname','$cemail','$cmob','$cloc','$cqual','$cexp','$cskill','pending')";
        $query1 = mysqli_query($con,$q2);
        
        if($query1)
        {
            echo "<script type='text/javascript'>
            alert('Thank you for applying the job ...')
            </script>";
            
        }
        else
        {
            echo "<script type='text/javascript'>
            alert('error in data')
            </script>";
            
        }
        
        
        //echo $id . $jobid . $cname . $cemail . $cmob . $cloc  .$cqual . $cexp . $cskill;
    }
    else
    {
        header('location:login.php');

    }

    
}

?>






