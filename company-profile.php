                <?php
                ob_start();
                include 'connection.php';
                session_start();
                    if(isset($_SESSION['cmp_name']))
                    {
                        $cmp_name = $_SESSION['cmp_name'];
                        $location = $_SESSION['location'];
                        $q = "SELECT * FROM `emp_reg` WHERE cmp_name = '$cmp_name' and location='$location'";
                        $query = mysqli_query($con,$q) or die(mysqli_error($con));
                        $row = mysqli_fetch_array($query);
                        $cmp_name =$row['cmp_name'];
                        $abt_company=$row['abt_company'];
                        $cmp_img=$row['cmp_img'];
                    }

                    


                    ?>    
<!doctype html>
<html lang="en">

<!-- employer-profile41:42-->
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
			<?php
			include('header1.php');
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Company</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
		
		<!-- Candidate Profile Start -->
        <section class="detail-desc advance-detail-pr gray-bg">
                 
            <div class="container white-shadow">
                <div class="row">
                    <div class="detail-pic" >

                    	<?php 
                    		echo "<img src='profile/$cmp_img' class='img' alt='' />";
                    	?>
                    	<a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a></div>
                    <div class="detail-status"><span>Active Now</span></div>
                </div>
				
                <div class="row bottom-mrg">
                    <div class="col-md-12 col-sm-12">
                        <div class="advance-detail detail-desc-caption">
                            <h4><?php echo $cmp_name;?></h4><span class="designation"><?php $abt_company;?></span>
                        </div>
                    </div>
                </div>
				
                <div class="row no-padd">
                    <div class="detail pannel-footer">
                        <div class="col-md-5 col-sm-5">
                            <ul class="detail-footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="detail-pannel-footer-btn pull-right"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="footer-btn grn-btn" title="">Edit Now</a><a href="#" class="footer-btn blu-btn" title="">Save Draft</a></div>
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
								<li><a href="#address">Address</a></li>
								<li><a href="#post-job">Job Posted</a></li>
								<li><a href="#messages"> Candidate Job Application </a></li>
								<li><a href="#freelancer"> Freelancer Job Application </a></li>
								<li><a href="#settings">Settings</a></li>
							</ul>
							<!-- Start All Sec -->
							<div class="tab-content">
								<!-- Start About Sec -->
								<div id="about" class="tab-pane fade in active">
									<h3>About <?php echo $row['cmp_name'];?></h3>
									<p><?php echo $row['abt_company'];?></p>
									
								</div>
								<!-- End About Sec -->
								
								<!-- Start Address Sec -->
								<div id="address" class="tab-pane fade">
									<h3>Address Info</h3>
									<ul class="job-detail-des">
										<li><span>Address:</span><?php echo $row['cmp_address'];?></li>
										<li><span>City:</span><?php echo $row['location'];?></li>
										<li><span>State:</span><?php echo $row['location'];?></li>
										<li><span>Country:</span>India</li>
										<li><span>Zip:</span>520 548</li>
										<li><span>Telephone:</span><?php  echo $row['mobile'];?></li>
										<li><span>Fax:</span>(622) 123 456</li>
										<li><span>Email:</span><?php echo $row['email'];?></li>
									</ul>
								</div>
								<!-- End Address Sec -->
								
								<!-- Start Job List -->
								<div id="post-job" class="tab-pane fade">
									<h3>You have 22 job post</h3>
									<div class="row">
									
									<?php
                                        
                                        if(isset($_SESSION['id']))
                                        {
                                            $id = $_SESSION['id'];
                                            $q1 = "SELECT * FROM `job_reg` WHERE emp_id = '$id'";
                                            $query1 = mysqli_query($con,$q1);
                                            while($row1 = mysqli_fetch_array($query1))
                                            {
                                                ?>
                                                <article>
											<div class="mng-company">
												<div class="col-md-2 col-sm-2">
													<h4><?php echo $row1['jobtitle'];  ?></h4>
												</div>
												
												<div class="col-md-5 col-sm-5">
													<div class="mng-company-name">
														<h4> <span class="cmp-tagline"><?php echo $row1['cname']; ?></span></h4><span class="cmp-time">10 Hour Ago</span></div>
												</div>
												
												<div class="col-md-4 col-sm-4">
													<div class="mng-company-location">
														<p><?php echo $row1['description']; ?> </p>
													</div>
												</div>
												
												<div class="col-md-1 col-sm-1">
													<div class="mng-company-action"><a href="updatejobs.php?id=<?php echo $row1['job_id'] ?>"><i class="fa fa-edit"></i></a><a href="Deletejobs.php?id=<?php echo $row1['job_id'] ?>">&nbsp;&nbsp;<i class="fa fa-trash-o"></i></a></div>
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
									<div class="row">
										<ul class="pagination">
											<li><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
								</div>
								<!-- End Job List -->
								
								<!-- Start Friend List -->
								
								<!-- End Friend List -->
								
								<!-- Start Message -->
								<div id="messages" class="tab-pane fade">
								
								<h3>You have 2 job application</h3>
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
													<h4><?php echo $row2['can_name'];  ?></h4>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-name">
														<h4> <span class="cmp-tagline"><?php echo $row2['can_mob']; ?></span></h4></div>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-location">
														<p><?php echo $row2['can_quali']; ?> </p>
													</div>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-location">
														<p><?php echo $row2['can_skill']; ?> </p>
													</div>
												</div>
												<div class="col-md-1 col-sm-1">
													<div class="mng-company-location">
														<p><?php echo $row2['can_exp']; ?> </p>
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
									<div class="row">
										<ul class="pagination">
											<li><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
									
								</div>
								
								
								<div id="freelancer" class="tab-pane fade">
								
								<h3>You have 2 job application</h3>
									<div class="row">
									<?php
                                        
                                        if(isset($_SESSION['id']))
                                        {
                                            $id2 = $_SESSION['id'];
                                            $q3 = "SELECT * FROM `freelancer_jobapplication` WHERE emp_id='$id2' AND  fjobstatus ='pending'";
                                            $query3 = mysqli_query($con,$q3);
                                            while($row3 = mysqli_fetch_array($query3))
                                            {
                                                ?>
                                                <article>
											<div class="mng-company">
												<div class="col-md-2 col-sm-2">
													<h4><?php echo $row3['free_name'];  ?></h4>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-name">
														<h4> <span class="cmp-tagline"><?php echo $row3['free_email']; ?></span></h4></div>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-location">
														<p><?php echo $row3['job_exp']; ?> </p>
													</div>
												</div>
												
												<div class="col-md-2 col-sm-2">
													<div class="mng-company-location">
														<p><?php echo $row3['job_skill']; ?> </p>
													</div>
												</div>
												<div class="col-md-1 col-sm-1">
													<div class="mng-company-location">
														<p><?php echo $row3['city']; ?> </p>
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="mng-company-action">
													     <a class="btn btn-success" href="">Accept</a>
													    &nbsp;&nbsp;
                                                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to remove?')" href="">Reject</a>
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
									<div class="row">
										<ul class="pagination">
											<li><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
									
								</div>
								<!-- End Message -->
								
								<!-- Start Settings -->
								
								<div id="settings" class="tab-pane fade">
								<form method="POST" action="">
									<div class="row no-mrg">
									<input type="hidden" name="empid" value="<?php echo $row['emp_id']; ?>">
										<h3>Edit Profile</h3>
										<div class="edit-pro">
											<div class="col-md-4 col-sm-6">
												<label>Full Name</label>
												<input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" >
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Email</label>
												<input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Phone</label>
												<input type="text" name="mob" class="form-control" value="<?php echo $row['mobile']; ?>" >
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Zip / Postal</label>
												<input type="text" class="form-control" placeholder="258 457 528">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Address</label>
												<input type="text" name="add" class="form-control" value="<?php echo $row['cmp_address']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Organization</label>
												<input type="text" name="org" class="form-control" value="<?php echo $row['cmp_name']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>City</label>
												<input type="text" name="loc" class="form-control" value="<?php echo $row['location']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>State</label>
												<input type="text"  class="form-control" placeholder="Karnataka">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Country</label>
												<input type="text" class="form-control" placeholder="India">
											</div>
											
											<div class="col-md-4 col-sm-6">
												<label>About you</label>
												<input type="text" name="abtcmp" class="form-control" value="<?php echo $row['abt_company']; ?>">
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
    $mob = $_POST['mob'];
    $add = $_POST['add'];
    $org = $_POST['org'];
    $loc = $_POST['loc'];
    $abtcmp = $_POST['abtcmp'];
    
    $q = "UPDATE `emp_reg` SET `name`='$name',`email`='$email',`mobile`='$mob',`location`='$loc',`cmp_name`='$org',`cmp_address`='$add',`abt_company`='$abtcmp' WHERE  emp_id = '$id'";
    
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
