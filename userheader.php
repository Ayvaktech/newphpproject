<?php
 
    ob_start();
    include('connection.php');

    $get_home= "select * from home LIMIT 1";
    $run_home = mysqli_query($con, $get_home);
    while ($row_home = mysqli_fetch_array($run_home))
    {
        $title = $row_home['title'];
        $logo = $row_home['logo'];
        $banner_title = $row_home['banner_title'];
    }
?>

<!doctype html>
<html lang="en">

<head>
   <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS==================================================-->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="script1.js"></script>
    <script type="text/javascript" src="script2.js"></script>
    <script type="text/javascript">
    //history.pushState(null,null,'index.php');
   // window.addEventListener('popstate',function(event)
   // {
    //    history.pushState(null,null,'index.php');
    //});
</script>
<style type="text/css">
    .tab { 
background-color: #f1f1f1;}

.tabcontent {display: none; padding: 6px 12px; border: 1px solid #ccc;
    border-top: none;}
    
.tab button {background-color: inherit; float: left; border: none;
    outline: none; cursor: pointer; padding: 14px 16px; 
    transition: 0.3s;}
    
.tab button:hover {background-color: #ddd;}

.tab .active {background-color: #ccc;}

.tabcontent {display: none; padding: 6px 12px;

border: 1px solid #ccc; border-top: none;}

table {font-family: arial, sans-serif; border-collapse: collapse;
    width: 100%;}



/*Change color to gray*/
tr:nth-child(even) {
    background-color: #dddddd;}

.actived a{color:green}
.actived a:hover{ font-weight: bold}

.deactivated a{color:red}
.deactivated a:hover{ font-weight: bold}

.available {color:green; }
.disable{ color: red; font-weight: bold}
.intraining{color: blue; font-weight: bold}
.vacation{ font-weight: bold}

</style>
<script type="text/javascript">
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";}
        
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");}

document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";}
</script>
</head>

<body>
<div class="wrapper">
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav" style="    background-color: green;padding-left:75px;">
                <div class="container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">    <i class="fa fa-bars"></i></button>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php">
                                <div class="hidden-sm hidden-xs">
                                    <img src="assets/img/logo/<?php echo $logo; ?>" class="logo logo-display" alt="">
                                    <img src="assets/img/logo/<?php echo $logo; ?>" class="logo logo-scrolled" alt="">
                                </div>
                                <div class="hide-on-desktop">
                                    <img src="assets/img/logo/<?php echo $logo; ?>" class="logo logo-display" alt="">
                                    <img src="assets/img/logo/<?php echo $logo; ?>" class="logo logo-scrolled" alt="" >
                                </div>
                            </a>
                        </div>
                        <style type="text/css">
                            @media only screen and (min-width:600px)
                            {
                                .hide-on-desktop, * [aria-labelledby='hide-on-desktop']
                                {
                                display:none;
                                max-height:0;overflow:hidden;
                                }
                            }
                            .nav>li>a 
                            {
                                position: relative;
                                display: block;
                                padding: 10px 96px;
                            }
                        </style>
        <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">  
        <li><a href="Advertisejob.php">Advertise jobs</a></li>
        <li><a href="postjob.php">Post jobs</a></li>
        <li><a href="blog.php">Employer Blog</a></li>
        <li><a href="salary.php">Salary</a></li>
        <!-- <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Candidate Login</a></li>-->
        <!-- <li><a href="register.php"><i class="fa fa-registered" aria-hidden="true"></i>Candidate Register</a></li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hiring Solutions</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
                <li>
                    <div class="row">
                        <div class="col-menu col-md-12">
                            <div class="content">
                                <ul class="menu-col">
                                    <li><a href="hiringsolution.php">Urgent or hard to fill roles</a></li>
                                    <li><a href="oneofhiring.php">One-off hiring</a></li>   
                                     <li><a href="Nationwidehiring.php">Nationwide hiring </a></li>
                                      <li><a href="internationalhiring.php">international hiring</a></li>                       
                                </ul>
                            </div>
                        </div>
                               
                    </div>
                </li>
            </ul>
        </li>         
    </ul>
    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="dropdown ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login Here</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
                <li>
                    <div class="row">
                        <div class="col-menu col-md-12">
                            <div class="content">
                                <ul class="menu-col">
                                    
                                    <li><a href='login.php'>Candidate Login</a></li>
                                    <li><a href="emp-login.php">Employer Login</a></li>
                                    <li><a href="new-login-signup.php">Freelancer Login</a></li>     
                                </ul>
                            </div>
                        </div> 
                    </div>
                </li>
            </ul>
        </li>
    </ul>        
    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="dropdown ">
            <a href="Resumewriting.php" class="dropdown-toggle" data-toggle="dropdown">CV </a>
            <ul class="dropdown-menu megamenu-content" role="menu">
                <li>
                    <div class="row">
                        <div class="col-menu col-md-12">
                           

                            <div class="content">
                                <ul class="menu-col">
                                    <li><a href="Resumewriting.php">Resume Writing</a></li>
                                    <li><a href="cv_display.php">CV Display</a></li>
                                    <li><a href="xpressresume.php">Xpress Resume</a></li>
                                    <li><a href="rightresume.php">Right Resume</a></li>
                                    <li><a href="careerbooster.php">Career Booster</a></li>
                                    <li><a href="resumehighlighter.php">Resume Highlighter</a></li>
                                    <!-- <li><a href="professional-cv.php">Professional CV</a></li> -->                       
                                    
                                    
                                </ul>
                            </div>
                        </div>
                               
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse Jobs</a>
                <ul class="dropdown-menu megamenu-content" role="menu">
                    <li>
                        <div class="container">
                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'Servers')" style="margin:25px;">Jobs By Sector</button>
                                <button class="tablinks" onclick="openCity(event, 'Fruits')" style="margin:25px;">Jobs By Location</button>
                                <button class="tablinks" onclick="openCity(event, 'Workers')" style="margin:25px;">Jobs By Company</button>
                                <button class="tablinks" onclick="openCity(event, 'Services')" style="margin:25px;">Popular Searches</button>
                                <button class="tablinks" onclick="openCity(event, 'Job')" style="margin:25px;">Part Time Jobs</button>
                            </div>
                            <div id="Servers" class="tabcontent">
                                <?php 
                                    //$sql=mysqli_query($con,"SELECT * from job_title ");
                                    $sql1=mysqli_query($con,"SELECT `job_title`,COUNT(*) FROM `job_vacancy` GROUP BY `job_title`");
                                    //$r1 = mysqli_fetch_array($sql1);
                                    while($r1=mysqli_fetch_array($sql1))
                                    {
                                    ?>
                                    <div class="col-md-4">
                                        <a href="job_sector.php?job=<?php echo $r1['job_title'];?>"><?php echo $r1['0'];  ?>(<span><?php echo $r1[1]; ?></span>)</a>
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>
                            <div id="Fruits" class="tabcontent">
                                <?php 
                                    //$sql=mysqli_query($con,"SELECT * from job_title ");
                                    $sql1=mysqli_query($con,"SELECT `location`,COUNT(*) FROM `job_vacancy` GROUP BY `location`");
                                    //$r1 = mysqli_fetch_array($sql1);
                                    while($r1=mysqli_fetch_array($sql1))
                                    {
                                    ?>
                                    <div class="col-md-4">
                                        <a href="job_sector.php?job=<?php echo $r1['location'];?>"><?php echo $r1['0'];  ?>(<span><?php echo $r1[1]; ?></span>)</a>
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>
                            <div id="Workers" class="tabcontent">
                                <?php 
                                    //$sql=mysqli_query($con,"SELECT * from job_title ");
                                    $sql1=mysqli_query($con,"SELECT `company_name`,COUNT(*) FROM `job_vacancy` GROUP BY `company_name`");
                                    //$r1 = mysqli_fetch_array($sql1);
                                    while($r1=mysqli_fetch_array($sql1))
                                    {
                                    ?>
                                    <div class="col-md-4">
                                        <a href="job_sector.php?job=<?php echo $r1['company_name'];?>"><?php echo $r1['0'];  ?>(<span><?php echo $r1[1]; ?></span>)</a>
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>
                            <div id="Services" class="tabcontent">
                                 <?php 
                                    //$sql=mysqli_query($con,"SELECT * from job_title ");
                                    $sql1=mysqli_query($con,"SELECT `job_title`,COUNT(*) FROM `job_vacancy` GROUP BY `job_title`");
                                    //$r1 = mysqli_fetch_array($sql1);
                                    while($r1=mysqli_fetch_array($sql1))
                                    {
                                    ?>
                                    <div class="col-md-4">
                                        <a href="job_sector.php?job=<?php echo $r1['job_title'];?>"><?php echo $r1['0'];  ?>(<span><?php echo $r1[1]; ?></span>)</a>
                                    </div>
                                    <?php
                                    }
                                ?>
                                </div>
                                <div id="Job" class="tabcontent">
                                <?php 
                                    //$sql=mysqli_query($con,"SELECT * from job_title ");
                                    $sql1=mysqli_query($con,"SELECT `job_type`,COUNT(*) FROM `job_vacancy` GROUP BY `job_type`");
                                    //$r1 = mysqli_fetch_array($sql1);
                                    while($r1=mysqli_fetch_array($sql1))
                                    {
                                    ?>
                                    <div class="col-md-4">
                                        <a href="job_sector.php?job=<?php echo $r1['job_type'];?>"><?php echo $r1['0'];  ?>(<span><?php echo $r1[1]; ?></span>)</a>
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>               
        </ul>
    </div>
</div>
</nav>
    
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
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jQuery.style.switcher.js"></script>
    <script type="text/javascript">$(document).ready(function () {
        $('#styleOptions').styleSwitcher();
    });</script>
    
    
    