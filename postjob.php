<?php
include 'connection.php';
session_start();
ob_start();
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
</head>
<style type="text/css">
	

.ha-bg-parallax {
	background: url(https://i.ytimg.com/vi/Lnr0NxxioVg/maxresdefault.jpg) 50% -0 no-repeat fixed;
	-moz-background-size: cover;
	-o-background-size: cover;
	-webkit-background-size: cover;
	background-size: cover;
	min-height: 650px;
	margin: 0 auto;
	width: 100%;
	display: table;
	vertical-align: middle;
	position: relative;
}
.ha-parallax-body {
	vertical-align: middle;
	background: rgba(0,0,0,0.45);
	text-align: center;
	color: #FFFFFF;
	min-height: 650px;
}
.vertical .carousel-inner {
	height: 100%;
}
.carousel.vertical .item {
	-webkit-transition: 0.6s ease-in-out top;
	-moz-transition: 0.6s ease-in-out top;
	-ms-transition: 0.6s ease-in-out top;
	-o-transition: 0.6s ease-in-out top;
	transition: 0.6s ease-in-out top;
}
.carousel.vertical .active {
	top: 0;
}
.carousel.vertical .next {
	top: 100%;
}
.carousel.vertical .prev {
	top: -100%;
}
.carousel.vertical .next.left, .carousel.vertical .prev.right {
	top: 0;
}
.carousel.vertical .active.left {
	top: -100%;
}
.carousel.vertical .active.right {
	top: 100%;
}
.carousel.vertical .item {
	left: 0;
}
.carousel-indicators {
	position: absolute;
	bottom: 10px;
	left: unset;
	right: 2%;
	z-index: 15;
	width: 1%;
	padding-left: 0;
	margin-left: -30%;
	text-align: right;
	list-style: none;
	top: 30%;
}
#carousel-example-generic {
	top: 200px;
}
.carousel-indicators li {
	float: none
}
#carousel-example-generic h3 {
	font: normal 50px poppinsregular;
	color: #FFFFFF;
	margin: 0;
	text-shadow: 0 0 10px #666;
}
#carousel-example-generic h1 {
	font: normal 80px/61px poppinssemibold;
	color: #FFFFFF;
	margin: 0;
	text-shadow: 0 0 10px #666;
}
</style>
<style type="text/css">
	

/* Slideshow container */
.slideshow-container {
  max-width: 1400px;
  position: relative;
  margin: auto;
  align-self: center;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 4px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<style type="text/css">
	{
  box-sizing: border-box;
}
	.sm-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: default;
  font-size: 20px;
  border: 10px  #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 400px;
  padding: 40px;
  text-align: center;
</style>
<body>

<?php
    
include 'userheader.php';
?>
<div class="container-fluid">
  
  <div class="row" style="padding-top:100px;padding-bottom:15px;background:url('blogimages/employee-development.jpg');background-repeat:no-repeat;height:400px;">
    <div class="col-sm-8 col-md-8">
    
    </div>
     <div class="col-sm-4 col-md-4" style="    background: white;right: 20px;width: 310px;height: 290px;">
       <form method="post">
     
        <p style="top: 10px;color: black;font-size: 20px;"><b>Hire the right fit for your business.</b></p><br>
        <p style="color: black;">
    		How many jobs can we help you hire for?
    	</p>
    	<select class="form-control" name="job">
    	    <option>Select</option>
    	    <option>1 job</option>
    	    <option>2 jobs</option>
    	    <option>3 jobs</option>
            <option>4 jobs</option>
            <option>5 jobs</option>
            <option>6 to 10 jobs</option>
            <option>10 to 20 jobs</option>
            <option>20 to 50 jobs</option>
            <option>50 to 100 jobs</option>
            <option>100 + jobs</option>
    	</select>
      <button class="btn btn-info" name="post">Post For Job free</button>  
            
       </form>
     </div>
      
  </div>
  <div class="row text-center" style="padding-top:20px;">
     <div class="col-sm-12 col-md-12">
        <img src="https://www.jazzhr.com/wp-content/uploads/2019/01/plans_plus_inner-panels_post-once-publish-jobs-everywhere-alt2-768x513.jpg" style="margin-left: 250px;" align="center">
     </div>
  </div>
  <div class="row text-center">
     <div class="col-sm-12 col-md-12">
        <h2 align="center">Better candidates. Better hires.</h2>
<h4 align="center">Over 40 million reviews and insights help Glassdoor job seekers make better<br> decisions about where to work. That means better results for employers. 2</h4>
         
     </div>
      
  </div>
  <div class="row text-center">
     <div class="col-sm-12 col-md-12">
        <h2 align="center">Better candidates. Better hires.</h2>
<h4 align="center">Over 40 million reviews and insights help Glassdoor job seekers make better<br> decisions about where to work. That means better results for employers. 2</h4>
         
     </div>
      
  </div>
  <div class="row text-center">
     <div class="col-sm-12 col-md-12">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7IzQEeMDqB0Y9GYV3z5OBBP0aRJTOizaYS9EE57_caj4PIDCkOw" width="100s">
			<br><h3>Less time sifting through resumes</h3>
<h5>It takes half the resumes to make a hire on Glassdoor. 3</h5>
     </div>
      
  </div>
  <div class="row text-center">
    <div class="col-sm-12 col-md-12">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2rk1ToP9XcA147rMU4oRD2uFtf4oim9hT2KJcxwuxvZcQ0t_U_A" width="100s">
			<br><h3>Hire for the long-term</h3>
<h5>30% better retention rates mean Glassdoor hires stay longer. 4</h5>
      </div>
  </div>
  <div class="container">
      
  
  <div class="row text-center">
    <div class="col-sm-12 col-md-12">
    <h1 align="center">Recruit With the Same Solution as Leading Companies</h1>
      </div>
      
      <div class="col-sm-3 col-md-3">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTOFmwzeZikQzgQqWqy1apKkL6GcN-Rog8egESc_xU_-GO-iYjvw" width="150">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQcOdMbR5cNIvDHxgIPlG8GyPNr1BDcKFbGhs5BRrWLXUVVmHVRA" width="150">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH4Uwb2lWRKDbH4Lg847nLopzhtFLG5Ga0Fw34OIGic8GHUDyQWA" width="150">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://embedwistia-a.akamaihd.net/deliveries/b4f78c28afccdc22b38a70f04eee7811c2e00659.jpg?image_crop_resized=1280x720" width="150">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/General_Electric_logo.svg/500px-General_Electric_logo.svg.png" width="100">	
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://slackhq.com/wp-content/uploads/2019/02/Slack_RGB.png" width="190">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://updraftplus.com/wp-content/uploads/2013/01/dropbox-02-1024x1024.png" width="150">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="http://investors.godaddy.net/files/images/aboutus1.png" width="150">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://www.brainsway.com/wp-content/uploads/2017/12/Stanford-Healthcare.png" width="190">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Dyson_logo.svg/1200px-Dyson_logo.svg.png" width="170">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://d1qb2nb5cznatu.cloudfront.net/startups/i/78720-5fd32474df5e2975289243a099b78635-medium_jpg.jpg?buster=1442496993" width="150">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="http://www.kiplinger.com/slideshow/investing/T001-S003-best-t-rowe-price-funds-for-401-k-retirement-saver/images/intro.jpg" width="190">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://s3-eu-central-1.amazonaws.com/centaur-wp/designweek/prod/content/uploads/2018/08/16171240/01_Evernote_logo.jpg" width="190">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://jnj-content-lab.brightspotcdn.com/ed/89/5e6ef7f5492391d0df08115fdbd6/logo-site-white-header.ebc00039f680cf6954c3c7e2f8c25d20.png" width="250">
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e4/Unilever.svg/1200px-Unilever.svg.png" width="150"><br><br>
      </div>
      <div class="col-sm-3 col-md-3">
          <img src="https://s3.ap-southeast-1.amazonaws.com/images.deccanchronicle.com/dc-Cover-pvni2mn785olqgjqjrvng2cvb5-20180320154945.Medi.jpeg" width="150">
      </div>
  </div>
  </div>

 
</div>

<?php
    
    include 'footer.php';
    
    ?>

</body>

<script type="text/javascript">
	var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
</html>

<?php

if(isset($_POST['post']))
{
    $totaljobs = $_POST['job'];
    $_SESSION['totl'] = $totaljobs;
    header('location:emp-login.php');
}






?>