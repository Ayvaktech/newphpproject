<?php
session_start();
ob_start();
include 'connection.php';
?>


<!doctype html>
<html lang="en">

<!-- job-apply-detail41:48-->
<head>
	<!-- Basic Page Needs
	================================================== -->
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
		<div class="wrapper">  
			
			<!-- Start Navigation -->
				<!-- Start Navigation -->
			<?php
			include('header2.php');
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-page">
				<div class="container">
					
					<div class="col-md-8">
						<div class="left-side-container">
							<div class="freelance-image"><a href="#"><img src="assets/img/com-2.jpg" class="img-responsive" alt=""></a></div>
							<div class="header-details">
								<h4>Front End Developer</h4>
								<p>Google</p>
								<ul>
									<li><a href="http://themezhub.com/"><i class="fa fa-user"></i> 7 Vacancy</a></li>
									<li>
										<div class="star-rating" data-rating="4.2">
											<span class="fa fa-star fill"></span>
											<span class="fa fa-star fill"></span>
											<span class="fa fa-star fill"></span>
											<span class="fa fa-star fill"></span>
											<span class="fa fa-star-half fill"></span>
										</div>
									</li>
									<li><img class="flag" src="assets/img/gb.svg" alt=""> United Kingdom</li>
									<li><div class="verified-action">Verified</div></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 bl-1 br-gary">
						<div class="right-side-detail">
							<ul>
								<li><span class="detail-info">Availability</span>Full Time</li>
								<li><span class="detail-info">Experience</span>5 Year</li>
								<li><span class="detail-info">Age</span>22+ Year</li>
							</ul>
							<ul class="social-info">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Job Detail Start -->
			<section>
				<div class="container">
					
					<div class="col-md-8 col-sm-8">
					
					<?php
                        if(isset($_SESSION["id"]))
						{
							 $q = "SELECT  * from `job_reg`";
                        $query = mysqli_query($con,$q);
                        while($row = mysqli_fetch_array($query))
                        {
                        ?>
                        <form method="POST">
						<div class="container-detail-box">
						<input type="hidden" name="jobid" value="<?php echo $row['job_id']; ?>">
                       <input type="hidden" name="empid" value="<?php echo $row['emp_id']; ?>">
                        <input type="hidden" name="cname" value="<?php echo $row['cname']; ?>">
                        <input type="hidden" name="jobtit" value="<?php echo $row['jobtitle']; ?>">
                        <input type="hidden" name="jskill" value="<?php echo $row['skill']; ?>">
                        <input type="hidden" name="exp" value="<?php echo $row['experience']; ?>">
                        <input type="hidden" name="city" value="<?php echo $row['city']; ?>">
                        <input type="hidden" name="age" value="<?php echo $row['age']; ?>">
                        <input type="hidden" name="cimage" value="<?php echo $row['img_filename']; ?>">
							<div class="apply-job-header">
								<h4><?php echo $row['jobtitle']; ?></h4>
								<a href="#" class="cl-success"><span><i class="fa fa-building"></i>Google</span></a>
								<span><i class="fa fa-map-marker"></i>United Kingdom</span>
							</div>
							
							<div class="apply-job-detail">
								<p><?php echo  $row['description']; ?></p>
							</div>
							
							<div class="apply-job-detail">
								<h5>Skills</h5>
								<ul class="skills">
									<li><?php echo $row['skill']; ?></li>
									<li><?php echo $row['skill']; ?></li>
									<li><?php echo $row['skill']; ?></li>
									<li><?php echo $row['skill']; ?></li>
									<li><?php echo $row['skill']; ?></li>
									<li><?php echo $row['skill']; ?></li>
								</ul>
							</div>
							
							<div class="apply-job-detail">
								<h5>Requirements</h5>
								<ul class="job-requirements">
									<li><span>Availability</span> Hourly</li>
							    	<li><span>Education</span> Graduate</li>
									<li><span>Age</span><?php echo $row['age']; ?> </li>
									<li><span>Experience</span> <?php echo $row['experience']; ?></li>
									<li><span>Language</span><?php echo $row['lang'] ?></li>
								</ul>
							</div>
							
							<input type="submit" name="apply" value="Apply for this job" class="btn btn-success">
							
						</div>
                             </form>
						<?php
                        
                        }
                        }
						else
						{
							  header('location:new-login-signup.php');

						}
                        
                        ?>



                       
                       
						
						<!-- Similar Jobs -->
						<div class="container-detail-box">
						
							<div class="row">
								<div class="col-md-12">
									<h4>Similar Jobs</h4>
								</div>
							</div>
							
							<div class="row">
								<div class="grid-slide-2">
									
									<!-- Single Freelancer & Premium job -->
									<div class="freelance-box">
										<div class="popular-jobs-container">
											<div class="popular-jobs-box">
												<span class="popular-jobs-status bg-success">hourly</span>
												<h4 class="flc-rate">$17/hr</h4>
												<div class="popular-jobs-box">
													<div class="popular-jobs-box-detail">
														<h4>Google Inc</h4>
														<span class="desination">Software Designer</span>
													</div>
												</div>
												<div class="popular-jobs-box-extra">
													<ul>
														<li>Php</li>
														<li>Android</li>
														<li>Html</li>
														<li class="more-skill bg-primary">+3</li>
													</ul>
													<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
												</div>
											</div>
											<a href="http://themezhub.com/" class="btn btn-popular-jobs bt-1">View Detail</a>
										</div>
									</div>
									
									<!-- Single Freelancer & Premium job -->
									<div class="freelance-box">
										<div class="popular-jobs-container">
											<div class="popular-jobs-box">
												<span class="popular-jobs-status bg-warning">Monthly</span>
												<h4 class="flc-rate">$570/Mo</h4>
												<div class="popular-jobs-box">
													<div class="popular-jobs-box-detail">
														<h4>Duff Beer</h4>
														<span class="desination">Marketting</span>
													</div>
												</div>
												<div class="popular-jobs-box-extra">
													<ul>
														<li>Php</li>
														<li>Android</li>
														<li>Html</li>
														<li class="more-skill bg-primary">+3</li>
													</ul>
													<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
												</div>
											</div>
											<a href="http://themezhub.com/" class="btn btn-popular-jobs bt-1">View Detail</a>
										</div>
									</div>
									
									<!-- Single Freelancer & Premium job -->
									<div class="freelance-box">
										<div class="popular-jobs-container">
											<div class="popular-jobs-box">
												<span class="popular-jobs-status bg-info">Weekly</span>
												<h4 class="flc-rate">$200/We</h4>
												<div class="popular-jobs-box">
													<div class="popular-jobs-box-detail">
														<h4>Cyberdyne Systems</h4>
														<span class="desination">Human Resource</span>
													</div>
												</div>
												<div class="popular-jobs-box-extra">
													<ul>
														<li>Php</li>
														<li>Android</li>
														<li>Html</li>
														<li class="more-skill bg-primary">+3</li>
													</ul>
													<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
												</div>
											</div>
											<a href="http://themezhub.com/" class="btn btn-popular-jobs bt-1">View Detail</a>
										</div>
									</div>
									
									<!-- Single Freelancer & Premium job -->
									<div class="freelance-box">
										<div class="popular-jobs-container">
											<div class="popular-jobs-box">
												<span class="popular-jobs-status bg-danger">Yearly</span>
												<h4 class="flc-rate">$2000/Pa</h4>
												<div class="popular-jobs-box">
													<div class="popular-jobs-box-detail">
														<h4>Wayne Enterprises</h4>
														<span class="desination">App Designer</span>
													</div>
												</div>
												<div class="popular-jobs-box-extra">
													<ul>
														<li>Php</li>
														<li>Android</li>
														<li>Html</li>
														<li class="more-skill bg-primary">+3</li>
													</ul>
													<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
												</div>
											</div>
											<a href="http://themezhub.com/" class="btn btn-popular-jobs bt-1">View Detail</a>
										</div>
									</div>
							
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Sidebar Start-->
					<div class="col-md-4 col-sm-4">
						
						<!-- Job Detail -->
						<div class="sidebar-container">
							<div class="sidebar-box">
								<span class="sidebar-status">Full Time</span>
								<h4 class="flc-rate">20K - 30K</h4>
								<div class="sidebar-inner-box">
									<div class="sidebar-box-thumb">
										<img src="assets/img/com-2.jpg" class="img-responsive" alt="" />
									</div>
									<div class="sidebar-box-detail">
										<h4>Google Info</h4>
										<span class="desination">App Designer</span>
									</div>
								</div>
								<div class="sidebar-box-extra">
									<ul>
										<li>Php</li>
										<li>Android</li>
										<li>Html</li>
										<li class="more-skill bg-primary">+3</li>
									</ul>
									<ul class="status-detail">
										<li class="br-1"><strong>Canada</strong>Location</li>
										<li class="br-1"><strong>748</strong>View</li>
										<li><strong>03</strong>Post</li>
									</ul>
								</div>
							</div>
							<a href="http://themezhub.com/" class="btn btn-sidebar bt-1 bg-success">Apply For This</a>
						</div>
						
						<!-- Share This Job -->
						<div class="sidebar-wrapper">
							<div class="sidebar-box-header bb-1">
								<h4>Share This Job</h4>
							</div>
						
							<ul class="social-share">
								<li><a href="#" class="fb-share"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="tw-share"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="gp-share"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="in-share"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="li-share"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="be-share"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
						
					</div>
					<!-- End Sidebar -->
					
				</div>
			</section>
			<!-- Job Detail End -->
						
			<!-- Footer Section Start -->
				<!-- Start Navigation -->
			<?php
			include('footer.php');
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="tab" role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
								<li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content" id="myModalLabel2">
								<div role="tabpanel" class="tab-pane fade in active" id="login">
									<img src="assets/img/logo.png" class="img-responsive" alt="" />
									<div class="subscribe wow fadeInUp">
										<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="email"  name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control"  placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="login-btn" class="submit-btn"> Login </button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade" id="register">
								<img src="assets/img/logo.png" class="img-responsive" alt="" />
									<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text"  name="email" class="form-control" placeholder="Your Name" required="">
													<input type="email"  name="email" class="form-control" placeholder="Your Email" required="">
													<input type="email"  name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control"  placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="subscribe" class="submit-btn"> Create Account </button>
													</div>
												</div>
											</div>
										</form>
								</div>
							</div>
							</div>
						</div>
						</div>
				</div>
			</div>   
			<!-- End Sign Up Window -->
			<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
			<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
				<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
				<ul id="styleOptions" title="switch styling">
					<li>
						<a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
					</li>
				</ul>
			</div>
			
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
		</div>
	</body>

<!-- job-apply-detail41:48-->
</html>

<?php


if(isset($_POST['apply']))
{
    $jid = $_POST['jobid'];
    $emid = $_POST['empid'];
    
    $comname = $_POST['cname'];
    $jbtit = $_POST['jobtit'];
    $jbskl = $_POST['jskill'];
    $exp = $_POST['exp'];
    $city = $_POST['city'];
    
    $_SESSION["jobid"] = $jid;
    if(isset($_SESSION["id"]))
    {
        $freeRegid = $_SESSION["id"];
        $qu = "SELECT * from `freelance_register` WHERE ID = '$freeRegid'";
        $query2 = mysqli_query($con,$qu);
        $row2 = mysqli_fetch_array($query2);
        $name = $row2['Full_name'];
        $email = $row2['Email'];
        
        
        $insq = "INSERT INTO `freelancer_jobapplication`(`jobID`,`emp_id`, `Freelancer_ID`, `free_name`, `free_email`, `company_name`, `job_title`, `job_skill`, `job_exp`, `city`,`fjobstatus`) VALUES ('$jid','$emid','$freeRegid','$name','$email','$comname','$jbtit','$jbskl','$exp','$city','pending')";
        
        $insquery = mysqli_query($con,$insq);
        if($insquery)
        {
            echo "<script type='text/javascript'> 
        alert('Thank you for applying .. we will get back tou you ');
        </script>";
        }
        else
        {
          echo mysqli_error($con);
            
        }
        
        //code for insertion applied job
    }
    else
    {
        
        $_SESSION["jobsess"] = $jid;
        header('location:new-login-signup.php');
    }
    
    
    
}


?>