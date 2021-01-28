<?php
ob_start();
include("connection.php");
session_start();
if(isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
}
else
{
    header('location:emp-login.php');
}
if(!isset($_SESSION["amount1"]) && !isset($_SESSION["amount2"]) && !isset($_SESSION["amount3"]))
{
    header('location:Checkout.php');
}
if(isset($_SESSION["amount1"]))
{
     $txt = "1 job slot";
    $amount = $_SESSION["amount1"];
    unset($_SESSION["amount1"]);
    
}
if(isset($_SESSION["amount2"]))
{
     $txt = "3 jobs slot";
     $amount = $_SESSION["amount2"];
     unset($_SESSION["amount2"]);
    
}
if(isset($_SESSION["amount3"]))
{
     $txt = "30 job slot";
     $amount = $_SESSION["amount3"];
     unset($_SESSION["amount3"]);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Saraswathichandra</title>
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
   
   
   <?php
			include('header1.php');
			?>
			
			<div class="container-fluid" >
            <div class="row text-center" style="padding-top:100px;background:black;">
               <div class="col-sm-12 col-md-12">
                  <p style="color: white;">Step 3 of 3</p>
                   <h2 style="color: white;">Enter your payment information</h2>
               </div>
                
            </div>
            <div class="container" style="padding-bottom:30px;">
               <div class="row" style="padding-top:50px;padding-bottom:30px;">
               <div class="col-sm-1 col-md-1">
                   
               </div>
               <div class="col-sm-4 col-md-5" style="    border: 1px solid black;">
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <h3>Standard</h3>
                     <p>hire on a budget</p>
                      <ul>
                          <li>Post jobs to our 62M monthly job seekers</li>
                          <li>Distribution up to 100+ job boards</li>
                      </ul>
                  </div>
                   
               </div>
               
               </div>
               <div class="col-sm-1 col-md-1">
                   
               </div>
               
               <div class="col-sm-4 col-md-4" style="border: 1px solid black;">
                <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <h3>Premium</h3>
                     <p>The best way to hire fast</p>
                      <ul>
                          <li>Post jobs to our 62M monthly job seekers</li>
                          <li>Distribution up to 100+ job boards</li>
                          <li>Premium placement in millions of daily job alert emails</li>
                          <li>Superior ranking in job seeker search results</li>
                      </ul>
                  </div>
                   
               </div>
                 
                
               </div>
               <div class="col-sm-2 col-md-2">
                   
               </div>
                
              </div>
              <div class="row text-center" style="padding-top:30px;border: 1px solid #cccc;">
                 <div class="col-sm-12 col-md-12">
                     <p>You Have selected &nbsp; <?php echo "<b>" . $txt . "</b> &nbsp; of rupees &nbsp;<b> " . $amount ."</b>";  ?>  </p>
                     <a class="btn btn-info" href="Checkout.php" >Change Plan</a><br>
                 </div>
             </div>
            <div class="row text-center" style="padding-top:30px;">
                <form method="post">
                    <input type="hidden" name="amt" value="<?php echo $amount;  ?>">
                    <input type="hidden" name="totjob" value="<?php echo $txt;  ?>">
                
                 <div class="col-sm-2 col-md-2">
                     
                 </div>
                 <div class="col-sm-4 col-md-4">
                     <button class="btn btn-success" name="pay">Pay with Razorpay</button>
                 </div>
                 <div class="col-sm-4 col-md-4">
                     <button class="btn btn-danger" name="free">Continue with free trial</button>
                 </div>
                <div class="col-sm-2 col-md-2">
                     
                 </div>
                 </form>
             </div>
            
          
			    
			</div>
			 <?php
    
    include 'footer.php';
    
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


</body>
</html>
<?php

    if(isset($_POST['free']))
    {
        $msg = "successfull";
        $_SESSION["jobcreated"] = $msg;
        header('location:employer-profile.php');
    }
    if(isset($_POST['pay']))
    {
        $jobslot = $_POST['totjob'];
        $amt = $_POST['amt'];
        $_SESSION["totamt"] = $amt;
        $_SESSION["jobslot"] = $jobslot;
        header('location:Payment.php');
    }
    
    
    
?>