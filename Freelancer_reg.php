<?php
session_start();
ob_start();
include 'connection.php';


if(!isset($_SESSION["gmail"]) && !isset($_SESSION["email"]) && !isset($_SESSION["accesstoken"]))
{
    header('location:new-login-signup.php');
}
    
if(isset($_SESSION["gmail"]))
{
    $ema = $_SESSION["gmail"];
    $q1 = "SELECT * from freelance_register WHERE Email ='$ema' ";
    $query1 = mysqli_query($con,$q1);
    $row = mysqli_fetch_array($query1);
    if($row)
    {
        $id = $row['ID'];
    }
   
     
}
if(isset($_SESSION["email"]))
{
    $ema = $_SESSION["email"];
    $q1 = "SELECT * from freelance_register WHERE Email ='$ema' ";
    $query1 = mysqli_query($con,$q1);
    $row = mysqli_fetch_array($query1);
    if($row)
    {
        $id = $row['ID'];
    }
    if(isset($_SESSION["new_user"])=="no")
    {
         
         $sl=mysqli_query($con,"select * from freelance_register where Email ='$ema'");
         $ro=mysqli_fetch_array($sl);
         if($ro)
         {
                $status = $ro['reg_details'];
                if($status=="completed")
                {
                     $_SESSION['id'] = $id;
                     header('location:freelancer-detail.php');
                }
                
         }
        
    } 
     
}
if(isset($_SESSION["accesstoken"]))
{
    $email = $_SESSION["userdata"]['email'];
    $q1 = "SELECT * from freelance_register WHERE Email ='$email' ";
    $query1 = mysqli_query($con,$q1);
    $row = mysqli_fetch_array($query1);
    if($row)
    {
        $id = $row['ID'];
    }
    if(isset($_SESSION["alredyReg"])=="No")
    {
         $sl=mysqli_query($con,"select * from freelance_register where Email ='$email'");
         $ro=mysqli_fetch_array($sl);
         if($ro)
         {
                $status = $ro['reg_details'];
                if($status=="completed")
                {
                     $_SESSION['id'] = $id;
                     header('location:freelancer-detail.php');
                }
                
         }
        
    }
   
    
    
}


?>
<!doctype html>
<html lang="en">

<!-- create-job41:39-->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
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
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">

				<div class="container">            
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<a class="navbar-brand" href="#">
							<img src="assets/img/logo.png" class="logo logo-scrolled" alt="">
						</a>
					</div>
				</div>   
			</nav>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Header Title Start -->
			<div class="clearfix"></div>
			<!-- Header Title End -->
			
			<!-- General Detail Start -->
			<div class="detail-desc section">
			<form class="add-feild" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			
				<div class="container white-shadow">
				
					<div class="row">
						<div class="detail-pic js">
							<div class="box">
								<input type="file" name="upload-pic" id="upload-pic" class="inputfile" />
								<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
							</div>
						</div>
					</div>
					
					<div class="row bottom-mrg">
						
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="profile" placeholder="Profile e.g. PHP developer">
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="exp" placeholder="Experience">
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<select class="form-control input-lg" name="status">
										<option>Select status</option>
										<option>Available</option>
										<option>Working</option>
									</select>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="age" placeholder="Age">
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<input type="text" name="location" class="form-control" placeholder="Location,e.g. London Quel Mark">
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" name="descr" placeholder="Freelancer Description"></textarea>
							</div>
						
					</div>
					
					<div class="row no-padd">
						<div class="detail pannel-footer">
							<div class="col-md-12 col-sm-12">
								<div class="detail-pannel-footer-btn pull-right">
									<input type="submit" name="submit" value="Submit" class="btn btn-success" >
								</div>
							</div>
						</div>
					</div>
					
				</div>
				</form>
				
			</div>
			
			
			<footer class="footer">
				<div class="row lg-menu">
					<div class="container">
						<div class="col-md-4 col-sm-4">
							<img src="assets/img/footer-logo.png" class="img-responsive" alt="" /> 
						</div>
						<div class="col-md-8 co-sm-8 pull-right">
							<ul>
								<li><a href="#" title="">Home</a></li>
								<li><a href="#" title="">Blog</a></li>
								<li><a href="#" title="">404</a></li>
								<li><a href="#" title="">FAQ</a></li>
								<li><a href="#" title="">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row no-padding">
					<div class="container">
						<div class="col-md-3 col-sm-12">
							<div class="footer-widget">
							<h3 class="widgettitle widget-title">About Job Stock</h3>
							<div class="textwidget">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
							<p>7860 North Park Place<br>
							San Francisco, CA 94120</p>
							<p><strong>Email:</strong> Support@careerdesk</p>
							<p><strong>Call:</strong> <a href="tel:+15555555555">555-555-1234</a></p>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-4">
							<div class="footer-widget">
							<h3 class="widgettitle widget-title">All Navigation</h3>
							<div class="textwidget">
								<div class="textwidget">
								<ul class="footer-navigation">
									<li><a href="#" title="">Front-end Design</a></li>
									<li><a href="#" title="">Android Developer</a></li>
									<li><a href="#" title="">CMS Development</a></li>
									<li><a href="#" title="">PHP Development</a></li>
									<li><a href="#" title="">IOS Developer</a></li>
									<li><a href="#" title="">Iphone Developer</a></li>
								</ul>
							</div>
							</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-4">
							<div class="footer-widget">
							<h3 class="widgettitle widget-title">All Categories</h3>
							<div class="textwidget">
								<ul class="footer-navigation">
									<li><a href="#" title="">Front-end Design</a></li>
									<li><a href="#" title="">Android Developer</a></li>
									<li><a href="#" title="">CMS Development</a></li>
									<li><a href="#" title="">PHP Development</a></li>
									<li><a href="#" title="">IOS Developer</a></li>
									<li><a href="#" title="">Iphone Developer</a></li>
								</ul>
							</div>
							</div>
						</div>
							
						<div class="col-md-3 col-sm-4">
							<div class="footer-widget">
							<h3 class="widgettitle widget-title">Connect Us</h3>
							<div class="textwidget">
							<form class="footer-form">
								<input type="text" class="form-control" placeholder="Your Name"> 
								<input type="text" class="form-control" placeholder="Email">
								<textarea class="form-control" placeholder="Message"></textarea>
								<button type="submit" class="btn btn-primary">Login</button>
							</form>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row copyright">
					<div class="container">
						<p><a href="https://www.templatespoint.net" target="_blank">Templates Point</a></p>
					</div>
				</div>
			</footer>
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
	</body>

<!-- create-job41:40-->
</html>

<?php




 if(isset($_POST['submit']))
    {
        $fid = $_POST['id'];
        $target1 = "Freelance_Images/".basename($_FILES['upload-pic']['name']);
        
        $image = $_FILES['upload-pic']['name'];
        $profile = $_POST['profile'];
        $exp = $_POST['exp'];
        $sts = $_POST['status'];
        $age = $_POST['age'];
        $loc = $_POST['location'];
        $desc = $_POST['descr'];
        $rewi1 ="portal";
        $rewi = "google";
        $rewi2 ="Facebook";
        $rede ="completed";

        $q = "INSERT into `freelancer_details` (`ID`,`FreProfile`,`Experience`,`Frestatus`,`Age`,`location`,`description`,`ImageUrl`)values('$fid','$profile','$exp','$sts','$age',' $loc','$desc','$image')";

        $query = mysqli_query($con,$q);
        
        $moveimg1 = move_uploaded_file($_FILES['upload-pic']['tmp_name'],$target1);

        if($query)
        {
            
            if(isset($_SESSION["email"]))
            {
                 $q1 = "UPDATE `freelance_register` set `register_with`='$rewi' , `reg_details` = '$rede' WHERE ID = '$fid' ";
                 $qu = mysqli_query($con,$q1);
                 unset($_SESSION["email"]);
                 $_SESSION['id'] = $fid;
                 header('location:freelancer-detail.php');
                
            }
            else if(isset($_SESSION["accesstoken"]))
            {
                 $q1 = "UPDATE `freelance_register` set `register_with`='$rewi2' , `reg_details` = '$rede' WHERE ID = '$fid' ";
                 $qu = mysqli_query($con,$q1);
                 unset($_SESSION["accesstoken"]);
                 $_SESSION['id'] = $fid;
                 header('location:freelancer-detail.php');
                
            }
            else
            {
                  $q1 = "UPDATE `freelance_register` set `register_with`='$rewi1' , `reg_details` = '$rede' WHERE ID = '$fid' ";
                  $qu = mysqli_query($con,$q1);
                  header('location:new-login-signup.php');
            }
           
        }
        else
        {
            //echo mysqli_error($con);
            echo "<script type='text/javascript'> 
            alert('Error in data');
            </script>";

        }

    }



?>