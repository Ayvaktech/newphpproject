                <?php
                ob_start();
                include 'connection.php';
                session_start();
                    if(isset($_SESSION['id']))
                    {
                        $id = $_SESSION['id'];
                        $q = "SELECT * FROM `emp_reg` WHERE emp_id = '$id'";
                        $query = mysqli_query($con,$q);
                        $row = mysqli_fetch_array($query);
                        /*if($row)
                        {
                            echo "<script type='text/javascript'>
                            alert('data is retrieving');
                            </script>";

                        }*/
                    }
                    else
                    {
                            header('location:emp-login.php');
                    }

                    if(isset($_SESSION["confirm"]))
                    {
                         echo "<script type='text/javascript'>
                        alert('Call letter send');
                        </script>";
                        unset($_SESSION["confirm"]);
                        
                    }
                    if(isset($_SESSION["jobcreated"]))
                    {
                         echo "<script type='text/javascript'>
                        alert('Job Created successfully');
                        </script>";
                        unset($_SESSION["jobcreated"]);
                        
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
  
<!doctype html>
<html lang="en">

<!-- employer-profile41:42-->
<head>
	<!-- Basic Page Needs
	================================================== -->
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
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php
			include('header1.php');
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Employer Profile</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
		
		<!-- Candidate Profile Start -->
        <section class="detail-desc advance-detail-pr gray-bg">
                 
            <div class="container white-shadow">
                <div class="row">
                    <div class="detail-pic"><img src="profile/<?php echo $row['emp_image'];?>" class="img" alt="" /><a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a></div>
                    <!-- <div class="detail-status"><span>Active Now</span></div> -->
                </div>
				
                <div class="row bottom-mrg">
                    <div class="col-md-12 col-sm-12">
                        <div class="advance-detail detail-desc-caption">
                            <h4><?php   echo $row['name'];  ?></h4><span class="designation"><?php   echo $row['email'];  ?></span>
                        </div>
                    </div>
                </div>
				
                <div class="row no-padd">
                    <div class="detail pannel-footer">
                        <div class="col-md-5 col-sm-5">
                            <!-- <ul class="detail-footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul> -->
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="detail-pannel-footer-btn pull-right"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="footer-btn grn-btn" title="">Edit Below</a><!-- <a href="#" class="footer-btn blu-btn" title="">Save Draft</a> --></div>
                        </div>
                    </div>
                </div>
				
            </div>
        </section>
		
        <section class="full-detail-description full-detail gray-bg">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <div class="full-card">
                      <div class="deatil-tab-employ tool-tab">
							<ul class="nav simple nav-tabs" id="simple-design-tab">
								<li class="active"><a href="#about">About</a></li>
								<li><a href="#address">Company Info</a></li>
								<li><a href="#post-job">Job Posted</a></li>
								<li><a href="#messages"> Candidate Job Application </a></li>
								<li><a href="#freelancer"> Freelancer Job Application </a></li>
								<li><a href="#settings">Settings</a></li>
							</ul>
							<!-- Start All Sec -->
							<div class="tab-content">
								<!-- Start About Sec -->
								<div id="about" class="tab-pane fade in active">
									<ul class="job-detail-des">
										<li><span>Employee Id :</span><?php echo $row['emp_id'];?></li>
										<li><span>Name :</span><?php echo $row['name'];?></li>
										<li><span>Email :</span><?php echo $row['email'];?></li>
										<li><span>Mobile :</span><?php echo $row['mobile'];?></li>
										<li><span>Location :</span><?php  echo $row['location'];?></li>
										
										<li><span>Registration date:</span><?php echo $row['regdate'];?></li>
									</ul>
								</div>
								<!-- End About Sec -->
								
								<!-- Start Address Sec -->
								<div id="address" class="tab-pane fade">
									<h3>Company Info</h3>
									<ul class="job-detail-des">
										<li><span>Name:</span><?php echo $row['cmp_name'];?></li>
										<li><span>Address:</span><?php echo $row['cmp_address'];?></li>
										<li><span>Details:</span><?php echo $row['abt_company'];?></li>
										<li><span>Image : <img src="profile/<?php echo $row['cmp_img'];?>" width="200" height="100" class="img" alt=""  /></li>
										
									</ul>
								</div>
								<!-- End Address Sec -->
								
								<!-- Start Job List -->
								<div id="post-job" class="tab-pane fade">
									<h3>You have <?php $sql = "select count(id) AS total from job_vacancy where emp_id = '$id' ";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows; 
                                    ?>  job post</h3>
									<div class="item-click">
                     <?php 
                        
                         if(isset($_SESSION['id']))
                                        {
                                            $id = $_SESSION['id'];
                                            $q1 = "SELECT * FROM `job_vacancy` WHERE emp_id = '$id'";
                                            $query1 = mysqli_query($con,$q1);
                                            while($row1 = mysqli_fetch_array($query1))
                                            {
                                             ?>
						<article>
							
							
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href=""><img src="upload/<?php echo $row1['image']; ?>" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-5 col-sm-5">
									<div class="brows-job-position">
										<a href=""><h3><?php echo $row1['job_title'];  ?></h3></a>
										<p>
											<span></span><span class="brows-job-sallery"><i class="fa fa-money"></i><?php   echo $row1['salary'];  ?></span>
											<span class="job-type cl-success bg-trans-success"><?php   echo $row1['position'];  ?></span>
										</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i><?php   echo $row1['location'];  ?></p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="" class="btn btn-default"><?php   echo $row1['experience'];  ?></a>
									</div>
								</div>
								<div class="col-md-1 col-sm-1">
									<div class="brows-job-link">
										<a href="delete_emp_job.php?id=<?php echo $row1['id'] ?>">&nbsp;&nbsp;<i class="fa fa-trash-o"></i></a>
										<!-- <a name="details" href="job_details.php?id=1" class="btn btn-success">View Details</a> -->
									</div>
								</div>
								
							</div>
							
							<span class="tg-themetag tg-featuretag"><?php   echo $row1['date'];  ?></span>
						</article>
						<?php
                                            }
                                        }
                                        else
                                        {
                                                header('location:emp-login.php');
                                        }


                                    ?>
							
					</div>
									<!-- <div class="row">
										<ul class="pagination">
											<li><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div> -->
								</div>
								<!-- End Job List -->
								
								<!-- Start Friend List -->
								
								<!-- End Friend List -->
								
								<!-- Start Message -->
								<div id="messages" class="tab-pane fade">
								
								<h3>You have <?php $sql = "select count(can_jobappid) AS total from candidate_jobapp where cjobstatus='pending' ";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows; 
                                    ?> job application</h3>
									<div class="row">
									<?php
                                        
                                        if(isset($_SESSION['id']))
                                        {
                                            $id1 = $_SESSION['id'];
                                            $q2 = "SELECT * FROM `candidate_jobapp` WHERE emp_id='$id1' AND  cjobstatus ='pending'";
                                            $query2 = mysqli_query($con,$q2);
                                            while($row2 = mysqli_fetch_array($query2))
                                            {
                                                ?>
                                                
                                                <article>
											<div class="mng-company">
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-name">
														<h5><b>Name : </b><br><span class="cmp-tagline"><?php echo $row2['can_name']; ?></span></h5></div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-name">
														<h5><b>Mobile : </b><br><span class="cmp-tagline"><?php echo $row2['can_mob']; ?></span></h5></div>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-location">
														<h5><b>Qualification : </b><br><?php echo $row2['can_quali']; ?> </h5>
													</div>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-location">
														<h5><b>Skill : </b><br><?php echo $row2['can_skill']; ?> </h5>
													</div>
												</div>
												<div class="col-md-1 col-sm-1">
													<div class="mng-company-location">
														<h5><b>Experience  </b><br><?php echo $row2['can_exp']; ?> </h5>
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="mng-company-action">
													   <a class="btn btn-success" href="jobConfirmation.php?id=<?php echo $row2['candidate_ID']; ?>">Accept</a>
													    &nbsp;&nbsp;
                                                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to remove?')" href="deletejbstatus.php?id=<?php echo $row2['candidate_ID']; ?>">Reject</a>
													</div>
												</div>
												
											</div>
											<!--<span class="tg-themetag tg-featuretag">Premium</span>-->
										</article>
                                                
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                                header('location:emp-login.php');
                                        }


                                    ?>
									</div>
									<!-- <div class="row">
										<ul class="pagination">
											<li><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div> -->
									
								</div>
								
								
								<div id="freelancer" class="tab-pane fade">
								
								<h3>You have <?php $sql = "select count(appID) AS total from freelancer_jobapplication where fjobstatus='pending' ";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows; 
                                    ?> job application</h3>
									<div class="row">
									<?php
                                        
                                        if(isset($_SESSION['id']))
                                        {
                                            $id2 = $_SESSION['id'];
                                            $q3 = "SELECT * FROM `freelancer_jobapplication` WHERE   fjobstatus ='pending'";
                                            $query3 = mysqli_query($con,$q3);
                                            while($row3 = mysqli_fetch_array($query3))
                                            {
                                                ?>
                                                <article>
											<div class="mng-company">
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-name">
														<h5><b>Name : </b><br><span class="cmp-tagline"><?php echo $row3['free_name']; ?></span></h5></div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-name">
														<h5><b>Email : </b><br><span class="cmp-tagline"><?php echo $row3['free_email']; ?></span></h5></div>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-location">
														<h5><b>Job Title : </b><br><?php echo $row3['job_title']; ?> </h5>
													</div>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-location">
														<h5><b>Skill : </b><br><?php echo $row3['job_skill']; ?> </h5>
													</div>
												</div>
												<div class="col-md-1 col-sm-1">
													<div class="mng-company-location">
														<h5><b>Experience  </b><br><?php echo $row3['job_exp']; ?> </h5>
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="mng-company-action">
													   <a class="btn btn-success" href="freelancer_jobconf.php?id=<?php echo $row3['Freelancer_ID']; ?>">Accept</a>
													    &nbsp;&nbsp;
                                                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to remove?')" href="delete_freelancer_jobstatus.php?id=<?php echo $row3['Freelancer_ID']; ?>">Reject</a>
													</div>
												</div>
												
											</div>
											<!--<span class="tg-themetag tg-featuretag">Premium</span>-->
										</article>
                                                
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                                header('location:emp-login.php');
                                        }


                                    ?>
									</div>
									<!-- <div class="row">
										<ul class="pagination">
											<li><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div> -->
									
								</div>
								<!-- End Message -->
								
								<!-- Start Settings -->
								
								<div id="settings" class="tab-pane fade">
								<form method="POST" action="" enctype="multipart/form-data">
									<div class="row no-mrg">
									<input type="hidden" name="empid" value="<?php echo $row['emp_id']; ?>">
										<h3>Edit Profile</h3>
										<div class="edit-pro">
											<div class="col-md-4 col-sm-6">
												<label>Full Name</label>
												<input type="text" name="name" required="" class="form-control" value="<?php echo $row['name']; ?>" >
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Email</label>
												<input type="email" name="email" required="" class="form-control" value="<?php echo $row['email']; ?>" >
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Phone</label>
												<input type="text" name="mobile" required="" class="form-control" value="<?php echo $row['mobile']; ?>" >
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Password</label>
												<input type="password" class="form-control" name="password" required=""value="<?php echo $row['password']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Profile</label>
												<input type="text" name="emp_profile" required="" class="form-control" value="<?php echo $row['emp_profile']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Location</label>
												<input type="text" name="location" required="" class="form-control" value="<?php echo $row['location']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Company Name</label>
												<input type="text" name="cmp_name" required="" class="form-control" value="<?php echo $row['cmp_name']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Company Address</label>
												<input type="text" name="cmp_address" required="" class="form-control" value="<?php echo $row['cmp_address']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Company Details</label>
												<input type="text" name="abt_company" required="" class="form-control" value="<?php echo $row['abt_company']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Employee Image</label>
												<img src="profile/<?php echo $row['emp_image']; ?>">
												<input type="file" name="emp_image" required="" class="form-control">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Company Image</label>
												<img src="profile/<?php echo $row['cmp_img']; ?>">
												<input type="file" name="cmp_img" required="" class="form-control" >
											</div>
											
											
											<div class="col-sm-12">
												<button type="submit" name="update" class="update-btn">Update Now</button>
											</div>
										</div>
									</div>
									</form>
								</div>
								
								<!-- End Settings -->
							</div>
							<!-- Start All Sec -->
						</div>  
                    </div>
                </div>
            </div>
        </section>
			<!-- Footer Section Start -->
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

<!-- employer-profile41:42-->
</html>
<?php
if(isset($_POST['update']))
{
    $id = $_POST['empid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $emp_profile = $_POST['emp_profile'];
    $location = $_POST['location'];
    $cmp_name = $_POST['cmp_name'];
    $cmp_address = $_POST['cmp_address'];
    $abt_company = $_POST['abt_company'];

    $emp_image = $_FILES['emp_image']['name'];
      $cmp_img = $_FILES['cmp_img']['name'];   
      //Image temp names
      $temp_name1 = $_FILES['emp_image']['tmp_name'];
      $temp_name2 = $_FILES['cmp_img']['tmp_name'];
      
      //uploading images to its folder
      move_uploaded_file($temp_name1,"profile/$emp_image");
      move_uploaded_file($temp_name2,"profile/$cmp_img");
    
    $q = "UPDATE `emp_reg` SET `name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password',`emp_profile`='$emp_profile',`location`='$location',`cmp_name`='$cmp_name',`cmp_address`='$cmp_address',`abt_company`='$abt_company',`emp_image`='$emp_image',`cmp_img`='$cmp_img' WHERE  emp_id = '$id'";
    
    $query = mysqli_query($con,$q);
    if($query)
    {
        echo "<script type='text/javascript'>
        alert('Information Updated successfully');
        </script>";
        
    }
    else
    {
        echo "error in data ".mysqli_error($con);
    }
}


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
         echo "<script type='text/javascript'>
        alert('Call letter send');
        </script>";
        
    }
    else
    {
         echo "<script type='text/javascript'>
        alert('not send error ian dat');
        </script>";
        
    }
    
    }






?>
