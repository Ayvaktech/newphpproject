<?php
    session_start();
    ob_start();
    include('connection.php');

    $get_home= "select * from home LIMIT 1";
    $run_home = mysqli_query($con, $get_home);
    while ($row_home = mysqli_fetch_array($run_home))
    {
        $title = $row_home['title'];
        $logo = $row_home['logo'];
        $banner_title = $row_home['banner_title'];
        $sector_image = $row_home['sector_image'];
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
    include 'userheader.php';
    ?>
    
    <div class="clearfix"></div>
    <form action="" method="POST">
        <section class="inner-header-page">
				<div class="container">
				<?php
                    $id = $_GET['id'];
                    if($id)
                    {
                        $q = "SELECT * from `our_freelancer` WHERE id = '$id' ";
                        $query = mysqli_query($con,$q);
                        $row = mysqli_fetch_array($query);
                        
                    }
                    else
                    {
                        header('location:freelancing-jobs.php');
                    }
                   
                ?>
					<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
					<div class="col-md-8">
						<div class="left-side-container">
							<div class="freelance-image"><a href="#"><img src="assets/img/<?php echo $row['image']; ?>" class="img-responsive img-circle" alt=""></a></div>
							<div class="header-details">
								<h4><?php echo $row['name'];?><span class="pull-right"></span></h4>
								<p><b><?php echo $row['price'] ?></b></p>
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
									<li><img class="flag" src="assets/img/gb.svg" alt=""> <?php echo $row['address'] ?></li>
									<li><div class="verified-action">Verified</div></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 bl-1 br-gary">
						<div class="right-side-detail">
							<ul>
								<li><span class="detail-info">Availability</span><span class="available-status"><?php echo $row['status']; ?></span></li>
								<li><span class="detail-info">Location</span><?php echo $row['address']; ?></li>
								<li><span class="detail-info">Experience</span><?php echo $row['experience']; ?></li>
								<li><span class="detail-info">Contact</span><?php echo $row['contact']; ?></li>
								<li><span class="detail-info">Email</span><?php echo $row['email']; ?></li>
								
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
								<h4><?php echo $row['name']; ?></h4>
								<a href="#" class="cl-success"><span><i class="fa fa-building"></i><?php echo $row['status']; ?></span></a>
								<span><i class="fa fa-map-marker"></i><?php echo $row['address']; ?></span>
							</div>
							
							<div class="apply-job-detail">
								<p><?php echo $row['details']; ?></p>
								
							</div>
							
							<div class="apply-job-detail">
								<h5>Skills</h5>
								<ul class="skills">
									<?php echo $row['skill']?>
								</ul>
							</div>
							
							
							<button type="submit" name="submit" class="btn btn-success">Hire Now</button>
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
    $jobid = $_POST['jobid'];
    $_SESSION["jobid"] = $jobid;
    header('location:login.php');
}



?>