<?php
ob_start();
include("connection.php");
session_start();
if(!isset($_SESSION['id']))
{
    header('location:emp-login.php');
}
$msg='';


//how to use a class
if(isset($_POST['submit']))
{
     if(isset($_SESSION['id']))
     {
         $emp_id = $_SESSION['id'];
         $company_name=$_POST['company_name'];
        $job_title=$_POST['job_title'];
        $skill=$_POST['skill'];
        $job_type=$_POST['job_type'];
        $experience=$_POST['experience'];   
        $salary=$_POST['salary'];
        $location=$_POST['location'];
        $position=$_POST['position'];
        $description = $_POST['description'];
        $age = $_POST['age'];
        $language = $_POST['language'];
        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];
        $linkedin = $_POST['linkedin'];
        $instagram = $_POST['instagram'];
        $pinterest = $_POST['pinterest'];
        
        $image = $_FILES['image']['name'];
        $temp_name1 = $_FILES['image']['tmp_name'];
         move_uploaded_file($temp_name1,"upload/$image");


         $sql = "insert into job_vacancy (emp_id,company_name,job_title,job_type,skill,experience,salary,location,position,image,description,age,language,facebook,twitter,linkedin,instagram,pinterest) values('$emp_id','$company_name','$job_title','$job_type','$skill','$experience','$salary','$location','$position','$image','$description','$age','$language','$facebook','$twitter','$linkedin','$instagram','$pinterest')";
        
        $run_items = mysqli_query($con,$sql);
      
      if($run_items)
      {
          echo "<script>alert('Sucessfully Inserted')</script>";
          echo "<script>window.open('create-job.php','_self')</script>";
              
      }
  }
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

<!-- create-job41:39-->
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
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    
	</head>
	<body>
	
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php
			include('header1.php');
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
					<h1>Post a  Job</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			
			<!-- General Detail Start -->
			
			<!-- General Detail End -->
			
			<!-- Basic Full Detail Form Start -->
			<section class="full-detail">
				<div class="container">
					<div class="row bottom-mrg extra-mrg">
						<?php if($msg !=''){?> <div class="alert alert-success"><b><?php echo $msg?></b> </div><?php }?>
						<form method="POST" enctype="multipart/form-data">
							<h2 class="detail-title">Job Information</h2>
							
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-flag"></i></span>
									<input type="text" class="form-control" placeholder="Company Name" name="company_name" required="">
								</div>	
							</div>
							
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
									<input type="text" class="form-control" placeholder="Job Title" name="job_title" required="">
								</div>	
							</div>
							
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
									<input type="text" class="form-control" placeholder="Job type ex : part time" name="job_type" required="">
								</div>	
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" placeholder="Skills" name="skill" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" placeholder="Experience" name="experience" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" placeholder="Salary" name="salary" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" placeholder="Location" name="location" required="">
								</div>	
							</div>
							
                              <div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" placeholder="Position  eg : java developer" name="position" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="file" class="form-control" placeholder="" name="image" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<textarea class="form-control" rows="5" name="description" placeholder="Description" required=""></textarea>
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" placeholder="Age" name="age" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" placeholder="Language Known" name="language" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
									<input type="text" class="form-control" placeholder="facebook link" name="facebook" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-twitter"></i></span>
									<input type="text" class="form-control" placeholder="twitter link" name="twitter" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
									<input type="text" class="form-control" placeholder="linkedin link" name="linkedin" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-instagram"></i></span>
									<input type="text" class="form-control" placeholder="instagram link" name="instagram" required="">
								</div>	
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
									<input type="text" class="form-control" placeholder="pinterest link" name="pinterest" required="">
								</div>	
							</div>

							

							<input type="submit" name="submit" value="Submit" class="btn btn-success btn-primary small-btn">
						</form>
					</div>
				
					
				</div>
			</section>
			<!-- Basic Full Detail Form End -->
			
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
			<!-- Date dropper js-->
			<script src="http://themezhub.com/"></script>
			
			<!-- Custom Js -->
			<script src="assets/js/custom.js"></script>
			
			<script>
				$('#company-dob').dateDropper();
			</script>
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
		<script>
                        CKEDITOR.replace( 'desc' );
                </script>
	</body>

<!-- create-job41:40-->
</html>