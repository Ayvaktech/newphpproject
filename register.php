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
        $banner_image = $row_home['banner_image'];
        $video_link = $row_home['video_link'];
        $sector_image = $row_home['sector_image'];
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
	    <?php
	    
	    include 'userheader.php';
	    
	    
	    ?>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/<?php echo $sector_image;?>);">
				<div class="container">
					<h1>Register</h1>
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
<article class="card-body mx-auto" style="max-width: 650px;">
	<div class="xx">
	
	<h3>Candidate Register</h3>
	<form method="POST" action="" enctype="multipart/form-data">
	<div class="row">
	    <div class="col-sm-6 col-md-6">
        <div class="form-group input-group">
		<div class="input-group-prepend">
                <span class="input-group-text">  </span>
             </div>
            <input name="uname" class="form-control" placeholder="Full name" type="text" required="">
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
	    <div class="col-sm-12 col-md-12">
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
       <select class="form-control" name="qual" required="">
			<option value="select">--Select Qualification--</option>
			<option value="PGDCA">PGDCA</option>
			<option value="M-Tech">M-Tech</option>
			<option value="CFA">CFA</option>
			<option value="MCA">MCA</option>
			<option value="BCA">BCA</option>
			<option value="B-Tech">B-Tech</option>
			<option value="LLM">LLM</option>
			<option value="ICWA">ICWA</option>
			<option value="MBA">MBA</option>
			<option value="Others">Others</option>
		</select>
    </div>
	        
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-6 col-md-6">
        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <select class="form-control" name="exp" required="">
			<option value="">--Experience--</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="More than 20 year">More than 20 year</option>
			
		</select>
    </div>
	        
	    </div>
	    <div class="col-sm-6 col-md-6">
        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <select class="form-control" name="month" required="">
			<option value="">-- Month--</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			
			

		</select>
    </div>
	        
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-6 col-md-6">
        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <select class="form-control" name="industry" required="">
			<option value="">-- Industry--</option>
			<option value="Accounting">Accounting</option>
			<option value="Airlines/Aviation">Airlines/Aviation</option>
			<option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
			<option value="Alternative Medicine">Alternative Medicine</option>
			<option value="Animation">Animation</option>
			<option value="Apparel/Fashion">Apparel/Fashion	</option>
			<option value="Architecture/Planning">Architecture/Planning</option>
			<option value="Arts/Crafts">Arts/Crafts	</option>
			<option value="Automotive">Automotive</option>
			<option value="Aviation/Aerospace">Aviation/Aerospace</option>
			<option value="Banking/Mortgage">Banking/Mortgage</option>
			<option value="Biotechnology/Greentech">Biotechnology/Greentech	</option>
			<option value="Broadcast Media">Broadcast Media	</option>
			<option value="Building Materials">Building Materials	</option>
			<option value="Business Supplies/Equipment">Business Supplies/Equipment	</option>
			<option value="Computer Hardware">Computer Hardware</option>
			<option value="Computer Networking">Computer Networking</option>
			<option value="Computer Software/Engineering">Computer Software/Engineering</option>
			<option value="Consumer Goods">Consumer Goods</option>
			<option value="Cosmetics">Cosmetics</option>
			<option value="Education Management">Education Management</option>
			<option value="Design">Design</option>
			


		</select>
    </div>
	        
	    </div>
	    <div class="col-sm-6 col-md-6">
        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <select class="form-control" name="job_fun" required="">
			<option value="">--Job Function--</option>
			<option value="Accountancy">Accountancy</option>
			<option value="Administration">Administration</option>
			<option value="BPO">BPO</option>
		</select>
    </div>
	        
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-12 col-md-12">
	        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
        <input name="skill" class="form-control" placeholder="Key Skill" type="text" required="">
    </div>
	    </div>
    </div>
    <div class="row">
	    <div class="col-sm-12 col-md-12">
	        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
        <input name="des" class="form-control" placeholder="Describe Yourself" type="text" required="">
    </div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-6 col-md-6">
        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <br>
         Upload your Resume  <input name="file" class="form-control" placeholder="" type="file" required="">
        </div>
	       
	    </div>
	    <div class="col-sm-6 col-md-6">
        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <br>
         Upload your Photo <input name="uploadedfile" class="form-control" placeholder="Upload your Photo" type="file" required="">
        </div>
	       
	    </div>
	</div>
	
     
   <!-- form-group// -->
    <!-- form-group end.// -->
    <!-- form-group// -->
     <!-- form-group// -->                                      
    <div class="form-group">
    <input type="submit" name="submit" value="Create" class="btn btn-primary btn-block">
    </div> <!-- form-group// -->      
</form>
</article>
</div>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

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
if(isset($_POST['submit']))
{
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number']; 
    $location=$_POST['location']; 
    $qual=$_POST['qual'];
    $exp=$_POST['exp'];
    $month=$_POST['month'];
    $industry=$_POST['industry'];
    $job_fun=$_POST['job_fun'];
    $skill=$_POST['skill'];
    $des=$_POST['des'];
    
    $regwith = "portal";
    $regsts = "completed";
    
    $filename= $_FILES['file']['name'];
    $img_filename= $_FILES['uploadedfile']['name'];

move_uploaded_file($_FILES['file']['tmp_name'],"cv/$filename");
move_uploaded_file($_FILES['uploadedfile']['tmp_name'],"upload/$img_filename");
   
$sql=mysqli_query($con,"insert into user_reg(uname,email,password,number,location,qual,exp,month,industry
	,job_fun,skill,des,filename,img_filename,register_with,reg_details) values('$uname','$email','$password','$number','$location','$qual','$exp','$month','$industry','$job_fun','$skill','$des','$filename','$img_filename','$regwith','$regsts')");


if($sql)
{
	echo "<script> alert('Candidate registered successfully');
	window.location='login.php';
	</script>";
}
else
{
	echo "<script> alert('Failed');
	window.location='register.php';
	</script>";
}
}
?>