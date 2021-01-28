<?php
ob_start();
include("connection.php");
session_start();
if(isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
    if(!isset($_SESSION["jobDone"]))
    {
        header('location:create-job.php');
    }
    
}
else
{
    header('location:emp-login.php');
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
                  <p style="color: white;">Step 2 of 3</p>
                   <h2 style="color: white;">Choose the plan that's right for you</h2>
               </div>
                
            </div>
            <div class="container" style="padding-bottom:20px;">
              <form method="post">
             
               <div class="row text-center" style="padding-top:50px;">
               <div class="col-sm-3 col-md-3" style="border: 3px solid #cccc;">
                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p><b>1 Job Slot</b></p>
                        <p>Post 1 job at a time</p>
                    </div>
                 </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <button type="submit" name="job1" class="btn btn-default" style="background: #1861bf;color: white;">Start Free Trial</button>
                    </div>
                 </div><br>
                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p><b>Free for 7 Days</b></p>
                    </div>
                 </div><br>
                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p>$199 per month*</p>
                    </div>
                 </div>
               </div>
               <div class="col-sm-1 col-md-1">
                   
               </div>
               <div class="col-sm-3 col-md-3" style="border: 3px solid #cccc;">
                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p><b>3 Job Slot</b></p>
                        <p>Post up to 3 jobs at a time</p>
                    </div>
                 </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-default" name="job2" style="background: #1861bf;color: white;">Start Free Trial</button>
                    </div>
                 </div><br>
                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p><b>Free for 7 Days</b></p>
                    </div>
                 </div><br>
                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p>$299 per month*</p>
                    </div>
                 </div>
               </div>
               <div class="col-sm-1 col-md-1">
                   
               </div>
               <div class="col-sm-3 col-md-3" style="border: 3px solid #cccc;">
                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p><b>30 Job Slot</b></p>
                        <p>Post up to 30 jobs at a time</p>
                    </div>
                 </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-default" name="job3" style="background: #1861bf;color: white;">Start Free Trial</button>
                    </div>
                 </div><br>
                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p><b>Free for 7 Days</b></p>
                    </div>
                 </div><br>
                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p>$1649 per month*</p>
                    </div>
                 </div>
               </div>
                
              </div>
                   
              </form>
              <div class="row text-center" style="    padding-top: 10px;">
                 <div class="col-sm-12 col-md-12">
                        <p>*After trial ends. Change plans or cancel anytime.</p>
                    </div>
                  
              </div>
               <div class="row text-center" style="padding-top: 20px;padding-botom:20px;background: #cccc;">
                 <div class="col-sm-12 col-md-12">
                   <div class="row text-center" style="padding-top: 20px;">
                     <div class="col-sm-12 col-md-12">

                            <h3>Frequently Asked Questions</h3>
                    </div>
                  
                   </div>
                   <div class="row">
                      <div class="col-sm-5 col-md-5">
                         <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h4><b>How do Job Slots help me get more applicants?</b></h4>
                                <p>Glassdoor will automatically match your roles with the most relevant candidates. Your jobs will show up in more search results and get included in the millions of job alert emails going out daily to Glassdoor users.</p>
                            </div>
                             
                         </div><br>
                         <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h4><b>How many roles can I advertise per Job Slot?</b></h4>
                                <p>You can advertise one role at a time per slot. Switch job posts within each slot anytime. To attract more candidates, you can also post the same job with three different job titles or in related locations.</p>
                            </div>
                             
                         </div><br>
                         <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h4><b>Is there a limit to the number of candidates I can receive?</b></h4>
                                <p>No - every plan we offer allows for unlimited applicants.</p>
                            </div>
                             
                         </div>
                          
                      </div>
                      
                      <div class="col-sm-2 col-md-2">
                          
                      </div>
                      
                      <div class="col-sm-5 col-md-5">
                         <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h4><b>How do Job Slots help me get more applicants?</b></h4>
                                <p>Glassdoor will automatically match your roles with the most relevant candidates. Your jobs will show up in more search results and get included in the millions of job alert emails going out daily to Glassdoor users.</p>
                            </div>
                             
                         </div><br>
                         <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h4><b>How many roles can I advertise per Job Slot?</b></h4>
                                <p>You can advertise one role at a time per slot. Switch job posts within each slot anytime. To attract more candidates, you can also post the same job with three different job titles or in related locations.</p>
                            </div>
                             
                         </div><br>
                         <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h4><b>Is there a limit to the number of candidates I can receive?</b></h4>
                                <p>No - every plan we offer allows for unlimited applicants.</p>
                            </div>
                             
                         </div>
                          
                      </div>
                       
                   </div>
                    
                </div>
                  
              </div>
              
                  
                
            </div>
             <?php
    
    include 'footer.php';
    
     ?>
          
			    
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


</body>
</html>
<?php

if(isset($_POST['job1']))
{
    $amt1 = '199';
    $_SESSION["amount1"] = $amt1;
    header('location:checkout1.php');
}

if(isset($_POST['job2']))
{
    $amt2 = '299';
    $_SESSION["amount2"] = $amt2;
    header('location:checkout1.php');
}

if(isset($_POST['job3']))
{
    $amt3 = '1649';
    $_SESSION["amount3"] = $amt3;
    header('location:checkout1.php');
}



?>