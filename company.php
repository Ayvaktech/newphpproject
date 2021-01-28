<?php
include 'connection.php';
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
	@import url('https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700');

    li{
        text-decoration: none;
    }
#amintion {
	width: 100%;
	padding: 50px 0;
}
.text {
	margin-top: 8%;
	text-align: center;
	display: block;
	overflow: hidden;
}
.text h1 {
	color: white;
	font-size: 69px;
	margin-bottom: 2%;
	font-weight: 600;
}
.text h2 {
	color: white;
	font-size: 37px;
	word-spacing: 11px;
	margin-bottom: 10px;
}
.text a {
	background: red;
	color: white;
	font-size: 16px;
	padding: 12px 43px;
	margin-top: 10px;
	display: inline-block;
	border-radius: 6px;
	font-weight: 400;
}
/************************box-section***************************************/

/*************************************SECTION-NAME*******************************************/
#name {
	display: block;
	overflow: hidden;
	text-align: center;
	margin-top: 50px;
}
#name h1 {
	color: red;
	font-size: 48px;
	font-weight: 600;
}
</style>
<style type="text/css">
	section{
    padding:60px 0px;
    font-family: 'Raleway', sans-serif;
}

h2 {
    color: #4C4C4C;
    word-spacing: 5px;
    font-size: 30px;
    font-weight: 700;
    margin-bottom:30px;
    font-family: 'Raleway', sans-serif;
}

.ion-minus{
    padding:0px 10px;
}

.blog{
	background-color:#f6f6f6;
}

.blog .card {
    background-color: #FFF;
    border: 1px solid #eceaea;
    margin: 20px 0px;
}

.blog .card-block {
    padding: 15px;
}

.btn.btn-default {
    background-color: #5db4c0;
    color: #fff;
    border-radius: 0;
    border: none;
    padding: 13px 20px;
    font-size: 13px;
    font-weight: 600;
    margin-top: 10px;
}
</style>
<style type="text/css">
	.pagination {
  display: block;
}

.pagination a {
  color: black;
  float: center;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

    li{
        text-decoration: none;
    }

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<body>

 <?php
include 'userheader.php';
?>
<div class="container-fluid" style="padding-top: 80px">
  <div class="container">
  <form class="row" method="post" action="">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
      <input type="text">
    </div>
  </form>
</div>

<!-- <div class="container-fluid">
  <div class="row text-center" style="padding-top:100px;background: yellowgreen;">
   <div class="col-sm-12 col-md-12">
   <div class="row text-center">
     <div class="col-sm-12 col-md-12">
         <h1>Employer Blog</h1>
     </div>
      
    </div>
    <div class="row text-center">
     <div class="col-sm-12 col-md-12">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">-->
                        <!--left-animation-->

                       <!--fade-animation-->
                    <!-- <h2 class="wow wow fadeInUp" data-wow-duration="2s">Get the latest trends and tips for recruiting, retention and branding.</h2> -->
                       <!--right-animation-->
                   <!--  <a class="wow  wow bounceInRight" data-wow-duration="4s" href="#">Subscribe to Our Blog</a>
                </div>
            </div>
        </div>
    </div>
     </div>
      
    </div>
     
      </div>
  </div> -->
  <!-- <div class="row text-center" style="padding-top:15px;">
  <div class="col-sm-12 col-md-12">
    <div class="row">
       <div class="col-sm-3 col-md-3">
       <h4 align="left">Latest Post</h4>
        </div>
         <div class="col-sm-9 col-md-9" style="float:right">
         <select class="form-control form-control-sm" name="category" id="validationCustom03" onchange="ChangecatList()" required>
         <option>Select</option>
         <?php
             
             $q = "SELECT DISTINCT category FROM blog";
             $ldeque = mysqli_query($con,$q);
             while($row = mysqli_fetch_array($ldeque))
             {
                 ?>
                 <option><?php echo $row['category']; ?></option>
                 <?php
             }
             
             
             ?>

        </select>
       
        </div>
      </div>
  </div>
  </div> -->
            <!--box-1-->
   

<!-- <div class="row text-center">
   <div class="col-sm-12 col-md-12">
      <div class="blog">
      <div class="container">   
           <div class="row">
           <?php
               
               $qu = "SELECT * FROM `blog`";
               $ldblog = mysqli_query($con,$qu);
               while($rs = mysqli_fetch_array($ldblog))
               {
                   ?>
                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
					 <div class="card text-center">
                        <img class="img-responsive" src="blogimages/<?php echo $rs['imgurl']; ?>" alt="" width="100%">
                        <div class="card-block">
                            <h4 class="card-title"><?php  echo $rs['curdate']; ?></h4>
                            <p class="card-text"><?php  echo $rs['title']; ?></p>
                            <a class="btn btn-default" href="createblog.php?id=<?php echo $rs['id']; ?>">Read More</a>
                        </div>
                     </div>
                </div>
                   
                   <?php
               }
               
               
               ?>
            </div>
            
    </div>
</div> -->
       
  <!--  </div>
    
</div>

<div class="row text-center">
   <div class="col-sm-3 col-md-3">
                <h2>What We Do</h2>
				<ul style="font-size: 24px;">
				<li><a href="">How It Works</a></li>
				<li><a href="">Find Great Talent</a></li>
				<li><a href="">Respond To Reviews</a></li>
				<li><a href="">Success Stories</a></li>
				<li><a href="">What Is Employer Branding</a></li>
				</ul>
       
   </div>
   <div class="col-sm-3 col-md-3">
                <h2>Community & Partners</h2>
				<ul style="font-size: 24px;">
				<li><a href="">Open Company</a></li>
				<li><a href="">Events & Conferences</a></li>
				<li><a href="">ATS Partners</a></li>
				<li><a href="">Informed Candidates</a></li>
				
				</ul>
   
    </div>
    <div class="col-sm-3 col-md-3">
                <h2>Support</h2>
				<ul style="font-size: 24px;">
				<li><a href="">Technical Support</a></li>
				<li><a href="">Job Postings</a></li>
				<li><a href="">Glassdoors Basics</a></li>
				<li><a href="">Employer Centre Basics</a></li>
				<li><a href="">Manage Company Reviews</a></li>
				<li><a href="">Manage Company Profile</a></li>
				</ul>
        
    </div>
    <div class="col-sm-3 col-md-3">
               <h2>Resource Library</h2>
				<ul style="font-size: 24px;">
				<li><a href="">Hiring & Recruting</a></li>
				<li><a href="">Employee OnBoarding</a></li>
				<li><a href="">Employee Retension & Benifits</a></li>
				<li><a href="">HR Management & Planning</a></li>
				<li><a href="">Employer Blog</a></li>
				
				</ul>
        
    </div>
    
</div> -->
 



    <!-- </div>

    
</div> --> 
    <?php
    
    include 'footer.php';
    
    ?>
</body>
<script type="text/javascript">
	wow = new WOW(
  {
    animateClass: 'animated',
    offset:       100,
    callback:     function(box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
);
wow.init();
document.getElementById('moar').onclick = function() {
  var section = document.createElement('section');
  section.className = 'section--purple wow fadeInDown';
  this.parentNode.insertBefore(section, this);
};
</script>
<script type="text/javascript">
	var cat = {};
cat['Classroom Instruction and Assessment'] = ['Assessment Day', 'Common Assessment Development', 'Data Team', 'Kindergarten Screening', 'Other'];
cat['Curriculum Development and Alignment'] = ['Capstone Development', 'Course Of Study Development / Revision', 'Standards Alignment / Rollout', 'Other'];
cat['District Committee'] = ['Curriculum Council', 'Grading & Assessment Task Force', 'Professional Development Planning Committee', 'Race To The Top Committee', 'Teacher Evaluation Committee', 'Other'];
cat['Meeting'] = ['Academic Support Team', 'ELL / eKLIP Teachers', 'Gifted Intervention Specialist', 'Intervention Assistance Team', 'Intervention Teachers', 'Kindergarten Parent Conference', 'KLIP Teachers', 'Title I Teachers', 'Other'];
cat['Other Category'] = ['Other'];
cat['Professional Conference'] = ['Conference'];
cat['Professional Workshop / Training'] = ['In-District', 'Out-Of-District'];
cat['Pupil Services'] = ['IEP Meeting', 'IEP Writing'];

function ChangecatList() {
    var catList = document.getElementById("validationCustom03");
   
    var selCat = catList.options[catList.selectedIndex].value;
    
    var cats = cat[selCat];
    if (cats) {
        var i;
        for (i = 0; i < cats.length; i++) {
            var cat = new Option(cats[i], i);
            actList.options.add(cat);
        }
    }
} 
</script>