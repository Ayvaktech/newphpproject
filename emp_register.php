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

<!-- company-detail41:39-->
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
	<style type="text/css">
	.xx{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 115%;
}

	</style>
    <style type="text/css">
    .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
    </style>
	</head>
	<body>
	    <?php include 'userheader.php'; ?>
		<div class="wrapper">  
			
			
		</div>   
	
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h2>Employee Register</h2>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Company Detail Start -->
		
			<!-- Company Detail End -->
			
			




<center>

<div class="container">
<br> 
<hr>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 600px;">
	<div class="xx">
	
	<h3>Employee Registration</h3><br>
	<form method="POST" enctype="multipart/form-data">
	<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="row">
           <div class="col-sm-6 col-md-6">
              <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">  </span>
                 </div>
                <input name="ename" class="form-control" placeholder="Employer name" type="text" required="">
            </div>
           </div>
           <div class="col-sm-6 col-md-6">
               <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">  </span>
                 </div>
                <input name="email" class="form-control" placeholder="Email address" type="email" required="">
            </div>
           </div>
            
        </div>
        <div class="row">
           <div class="col-sm-12 col-md-12">
               <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">  </span>
                 </div>
                <input name="cmprofile" class="form-control" placeholder="Company Name" type="text" required="">
            </div>
           </div>
        </div>
        
        <div class="row">
           <div class="col-sm-6 col-md-6">
              <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">  </span>
                 </div>
                <input name="number" class="form-control" placeholder="Contact Number" type="text" required="">
            </div>
               
           </div>
           <div class="col-sm-6 col-md-6">
              <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">  </span>
                 </div>
                <input name="password" class="form-control" placeholder="Create Password" type="password" required="">
            </div>
               
           </div>
            
        </div>
        <div class="row">
           <div class="col-sm-6 col-md-6">
              <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">  </span>
                     </div>
                    <input name="eprofile" class="form-control" placeholder="Employer Profile" type="text" required="">
                </div>
               
           </div>
           <div class="col-sm-6 col-md-6">
            <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">  </span>
             </div>
            <input name="location" class="form-control" placeholder="Current Location" type="text" required="">
            </div>
               
           </div>
            
        </div>
        <div class="row">
           <div class="col-sm-12 col-md-12">
               <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">  </span>
                 </div>
                <input name="cmpadd" class="form-control" placeholder="Comapny Address" type="text" required="">
            </div>
           </div>
            
        </div>
         <div class="row">
           <div class="col-sm-12 col-md-12">
                 <div class="form-group input-group">
                
                <textarea name="abtcmp" class="form-control" placeholder="About company" required="">
                   
                </textarea>
            </div>
              
           </div>
            
        </div>
        <div class="row">
           <div class="col-sm-12 col-md-12">
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">  </span>
                     </div>
                    Upload your Photo <input name="uploadedfile" class="form-control" placeholder="Upload your Photo" type="file" required="">
                </div>
               
           </div>
            
        </div>
        <div class="row">
           <div class="col-sm-12 col-md-12">
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">  </span>
                     </div>
                    Upload Company Photo <input name="uploadedfile1" class="form-control" placeholder="Upload your Photo" type="file" required="">
                </div>
               
           </div>
            
        </div>
        <div class="row">
           <div class="col-sm-4 col-md-4">
               
           </div>
           <div class="col-sm-4 col-md-4">
                <div class="form-group">
                <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block" required="">
                </div>
           </div>
           <div class="col-sm-4 col-md-4">
               
           </div>
            
        </div>
        
    </div>
	    
	</div>
    
         
</form>
    </div>
</article>
</div>
</div> <!-- card.// -->

<br><br>


</center>


			<!-- company full detail End -->
			
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
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign
                                In</a></li>
                            <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
                        </ul>
                        <div class="tab-content" id="myModalLabel2">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">
                                <img src="assets/img/logo/log.png" class="img-responsive" alt=""/>

                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="Username" required="">
                                                       <input type="password" class="form-control" placeholder="Password"  name="password" required="">                                                                                                                                                                 
                                                 

                                                <div class="center">
                                                <input type="submit" name="submit" class="submit-btn" value="Login">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="register">
                                <img src="assets/img/logo/log.png" class="img-responsive" alt=""/>

                                <form class="form-inline" method="post">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                           <input type="text" name="cname" class="form-control" placeholder="Company Name" required="">
                                        <input type="text" name="cpn" class="form-control" placeholder="Contact Person Name" required="">
                                         <input type="text" name="desg" class="form-control" placeholder="Designation" required="">
                                         <input type="text" name="num" class="form-control" placeholder="Contact Number" required="">
                                         <input type="text" name="reg" class="form-control" placeholder="Company Registration Number" required="">
                                         <input type="email" name="email" class="form-control" placeholder="Email Id" required="">
                                         <input type="password" name="password" class="form-control"  placeholder="Password" required="">

                                            <div class="center">
                                            <input type="submit" name="submit" value="Create Account" class="submit-btn">
                                                
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

<!-- company-detail41:39-->
</html>




<?php

include("connection.php");

if(isset($_POST['submit']))
{
    //$targetfolder = "emp_images/".basename($_FILES['uploadedfile']['name']);
    $ename = $_POST['ename'];
    $email = $_POST['email'];
    $mob = $_POST['number'];
    $pass = $_POST['password'];
    $eprofile = $_POST['eprofile'];
    $loc = $_POST['location'];
    $cmpname =$_POST['cmprofile'];
    $cmpadd= $_POST['cmpadd'];
    $abtcmp = $_POST['abtcmp'];
    $status ='pending';
    
    $eimage = $_FILES['uploadedfile']['name'];
    move_uploaded_file($_FILES['uploadedfile']['tmp_name'],"profile/$eimage");
     $eimage1 = $_FILES['uploadedfile1']['name'];
    move_uploaded_file($_FILES['uploadedfile1']['tmp_name'],"profile/$eimage1");
    $q = "INSERT INTO `emp_reg`(`name`, `email`, `mobile`, `password`,`emp_profile`, `location`, `cmp_name`, `cmp_address`, `abt_company`, `emp_image`,`cmp_img`,`PaymentStatus`) VALUES ('$ename','$email','$mob','$pass','$eprofile','$loc','$cmpname','$cmpadd','$abtcmp','$eimage',
    '$eimage1','$status')";
    
    $query = mysqli_query($con,$q);
    
    if($query)
    {
        echo "<script type='text/javascript'>
        alert('Employer created successfully');
        window.location='emp-login.php';
        </script>";
        //header('location:emp-login.php');
    }
    else
    {
        echo mysqli_error($con);
        
    }
    

}
?>