<?php
    session_start();
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

<head>
    <!-- Basic Page Needs==================================================-->
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
    history.pushState(null,null,'index.php');
    window.addEventListener('popstate',function(event)
    {
        history.pushState(null,null,'index.php');
    });
</script>
<style type="text/css">
  body{
    background: #666!important;
  }
    .tab { 
  }
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
<!---->
@media (max-width: 1024px)
{
nav.navbar.bootsnav ul.nav>li>a {
    padding: 8px 0px 26px 0px;
    font-weight: 400;
    font-size: 12px;
}
nav.navbar .navbar-brand img.logo {
   
    margin-left: -8px;
}
nav.navbar .navbar-brand img.logo-display {
   
   display:none;
}
}
@media (max-width: 992px)
{
nav.navbar.bootsnav ul.nav li.dropdown ul.dropdown-menu {
  display:block!important;
  }
nav.navbar.bootsnav .dropdown .megamenu-content .col-menu ul>li>a {
    display: block!important;
    width: 100%;}
.attr-nav>ul>li.dropdown>a.dropdown-toggle:before, nav.bootsnav .megamenu-content .content {
    display: block!important;
}
ul{
 list-style: none!important;
}
.tabbing .nav-item .nav-link.active {
    padding-bottom: 10px;
    border-bottom: 4px solid #09c;
}
.nav-pills>li.active>a:hover{
  border-bottom: 4px solid #09c!important;
}
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
<div class="clearfix"></div>
    <div class="banner" style="background-image:url(assets/img/<?php echo $banner_image; ?>);">
        <div class="container">
            <div class="banner-caption">
                <div class="col-md-12 col-sm-12 banner-text">
                    <h1><?php echo $banner_title; ?></h1>
                    <form class="form-horizontal" method="POST">
                        <div class="col-md-4 no-padd">
                            <div class="input-group">
                                <input type="text" class="form-control right-bor" name="search" id="search" placeholder="Search By Job Title" required="">
                            </div>
                        </div>
                        <div class="col-md-3 no-padd">
                            <div class="input-group">
                                <input type="text" class="form-control right-bor" name="search1" id="search1" placeholder="Search By Location.." required="">
                            </div>
                        </div>
                        <div class="col-md-3 no-padd">
                            <div class="input-group">
                                <input type="text" class="form-control right-bor" name="search2" id="search2" placeholder="Search By Skill.." required="">
                            </div>
                        </div>
                        <div class="col-md-2 no-padd">
                            <div class="input-group">
                                <button type="submit" name="btnsearch" class="btn btn-primary">Search Job</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="clearfix"></div>
<section style="background: #707c88">
    <div class="container">
        <div class="row">
            <div class="main-heading">
                <p></p>
                <h2>Featured <span>Jobs</span></h2>
            </div>
            <div class="row" style="background: white">
                <div class="col-md-12" style="text-align:left;">
                    <ul class="nav nav-pills mb-3 tabbing" id="pills-tab" role="tablist" style="   background-color: #efefef;margin-left: 33px">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-Sector" role="tab" aria-controls="pills-home" aria-selected="true" style="padding-bottom: 10px;    background-color: #d4d4d4;border-bottom: 4px solid #09c;"><b>All Sector</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-Technology" role="tab" aria-controls="pills-profile" aria-selected="false"><b>Information Technology</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-Manufacturing" role="tab" aria-controls="pills-contact" aria-selected="false"><b>Manufacturing</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-Services" role="tab" aria-controls="pills-contact" aria-selected="false"><b>Services</b></a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane   active" id="pills-Sector" role="tabpanel" aria-labelledby="pills-home-tab">
                            
                                    <?php
                                        $get_about = "SELECT DISTINCT job_title FROM job_vacancy";
                                        $run_about = mysqli_query($con, $get_about);
                                        while ($row_about = mysqli_fetch_array($run_about))
                                        {
                                            $job_titlee = $row_about['job_title'];

                                            echo "
                                                <li class='mainHed'><b>$job_titlee</b></li>
                                                
                                            ";
                                            $get_job = "select * from job_vacancy where job_title='$job_titlee'";
                                        $run_job = mysqli_query($con, $get_job);
                                        while ($row_job = mysqli_fetch_array($run_job))
                                        {
                                            $job_title = $row_job['job_title'];
                                            $id = $row_job['id'];
                                            $company_name = $row_job['company_name'];
                                            
                                            echo "
                                            <div class='col-md-2'>
                                            <ul style='list-style: none;text-align:left;'>
                                                <a href='job_sector.php?job=$company_name'>
                                                <li class='mainHed'>$company_name</li>
                                                
                                                </a>
                                                </ul>
                                            </div>
                                            ";
                                        }}
                                    ?>
                                    
                                
                            
                             
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-Technology" role="tabpanel" aria-labelledby="pills-profile-tab">
                                
                        <?php
                            
                                $get_jobb = "select * from job_vacancy where job_title='information technology'";
                            $run_jobb = mysqli_query($con, $get_jobb);
                            while ($row_jobb = mysqli_fetch_array($run_jobb))
                            {
                                $job_title = $row_jobb['job_title'];
                                $id = $row_jobb['id'];
                                $company_name = $row_jobb['company_name'];
                                
                                echo "
                                <div class='col-md-2'>
                                <ul style='list-style: none;text-align:left;'>
                                <li class='mainHed'><b style='list-style: none;'>Infomation Technology</b></li>
                                    <a href='job_sector.php?job=$company_name'>
                                    <li class='mainHed'>$company_name</li>
                                    
                                    </a>
                                    </ul>
                                </div>
                                ";
                            }
                        ?>
                
                
                
              </div>  
        </div>
      </div>
    </div>
  </div>
</div>
           


</section>
    <div class="clearfix"></div>
    <section class="video-sec dark" id="video" style="background-image:url(assets/img/banner-10.jpg);">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>Best For Your Projects</p>

                    <h2>Watch Our <span>video</span></h2>
                </div>
            </div>
            <div class="video-part"><a href="<?php echo $video_link; ?>" target="_blank" data-toggle="modal" class="video-btn"><i
                    class="fa fa-play"></i></a></div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="how-it-works">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="main-heading">
                        <p>Working Process</p>

                        <h2>How It <span>Works</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $get_work = "select * from how_works";
                    $run_work = mysqli_query($con, $get_work);
                    while ($row_work = mysqli_fetch_array($run_work))
                    {
                        $title = $row_work['title'];
                        $id = $row_work['id'];
                        $image = $row_work['image'];
                        $details = $row_work['details'];
                        
                        echo "
                <div class='col-md-4 col-sm-4'>
                    <div class='working-process'>
                        <span class='process-img'><img src='assets/img/$image' class='img-responsive' alt=''/><span
                                class='process-num'>01</span></span>
                        <h4>$title</h4>

                        <p>$details</p>
                    </div>
                </div>
                ";
            }
            ?>


            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>What Say Our Client</p>

                    <h2>Our Success <span>Stories</span></h2>
                </div>
            </div>
            <div class="row">
                <div id="client-testimonial-slider" class="owl-carousel">
                    <?php
                    $get_client = "select * from our_client";
                    $run_client = mysqli_query($con, $get_client);
                    while ($row_client = mysqli_fetch_array($run_client))
                    {
                        $name = $row_client['name'];
                        $id = $row_client['id'];
                        $image = $row_client['image'];
                        $details = $row_client['details'];
                        
                        echo "

                    <div class='client-testimonial'>
                        <div class='pic'><img src='assets/img/$image' alt=''></div>
                        <p class='client-description'>$details</p>

                        <h3 class='client-testimonial-title'>$name</h3>
                        <ul class='client-testimonial-rating'>
                            <li class='fa fa-star-o'></li>
                            <li class='fa fa-star'></li>
                            <li class='fa fa-star'></li>
                        </ul>
                    </div>
                    ";
                }
                ?>

                    
                </div>
            </div>
        </div>
    </section>
    <section class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <p>Top Freelancer</p>

                        <h2>Hire Expert <span>Freelancer</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $get_freelancer = "select * from our_freelancer";
                    $run_freelancer = mysqli_query($con, $get_freelancer);
                    while ($row_freelancer = mysqli_fetch_array($run_freelancer))
                    {
                        $name = $row_freelancer['name'];
                        $id = $row_freelancer['id'];
                        $image = $row_freelancer['image'];
                        $address = $row_freelancer['address'];
                        $details = $row_freelancer['details'];
                        $skill = $row_freelancer['skill'];
                        $status = $row_freelancer['status'];
                        $price = $row_freelancer['price'];
                        
                        
                        echo "
                <div class='col-md-4 col-sm-6'>
                    <div class='freelance-container style-2'>
                        <div class='freelance-box'>
                            <span class='freelance-status'>$status</span>
                            <h4 class='flc-rate'>$price</h4>
                            <div class='freelance-inner-box'>
                                <div class='freelance-box-thumb'>
                                    <img src='assets/img/$image' class='img-responsive img-circle' alt=''/>
                                </div>
                                <div class='freelance-box-detail'>
                                    <h4>$name</h4>
                                    <span class='location'>$address</span>
                                </div>
                                <div class='rattings'>
                                    <i class='fa fa-star fill'></i>
                                    <i class='fa fa-star fill'></i>
                                    <i class='fa fa-star fill'></i>
                                    <i class='fa fa-star-half fill'></i>
                                    <i class='fa fa-star'></i></div>
                                </div>
                                <div class='freelance-box-extra'>
                                    <p>$details</p>
                                    <ul>
                                        $skill
                                    </ul>
                                </div>
                                <a href='freelancer_details.php?id=$id' class='btn btn-freelance-two bg-info' style='width: 100%;'>View Detail</a>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
            </div>
            <div class="row">
                <!-- <div class="col-md-12 col-sm-12">
                    <div class="text-center"><a href="#" class="btn btn-primary">Load More</a></div>
                </div> -->
            </div>
        </div>
    </section>
    
    
    
    <section class="download-app" style="background-image:url(assets/img/banner-7.jpg);">
        <div class="container">
            <div class="col-md-5 col-sm-5 hidden-xs"><img src="assets/img/iphone.png" alt="iphone"
                                                          class="img-responsive"/></div>
            <div class="col-md-7 col-sm-7">
                <div class="app-content">
                    <h2>Coming soon Best Apps</h2>
                    <h4>Best oppertunity in your hand</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui
                        non, semper orci. Curabitur blandit, diam ut ornare ultricies.</p>
                    <a href="#" class="btn call-btn"><i class="fa fa-apple"></i>Coming Soon</a><a href="#"
                                                                                               class="btn call-btn"><i
                        class="fa fa-android"></i>Coming Soon</a>
                </div>
            </div>
        </div>
    </section>
   
    <div class="clearfix"></div>
    <?php
    include('footer.php');
    ?>
    <div class="clearfix"></div>
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
                                  <?php if($msg !=''){?> <div class="alert alert-success"><b><?php echo $msg?></b> </div><?php }?>
                                <form class="form-inline" method="post">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required="">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                         <input type="text" name="password" class="form-control" placeholder="Password" required="">
                                         <input type="text" name="password1" class="form-control" placeholder="Confirm Password" required="">
                                        

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
   
    <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
        <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <ul id="styleOptions" title="switch styling">
            <li><a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a></li>
            <li><a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a></li>
        </ul>
    </div>
    <!-- Scripts==================================================-->
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
    <script>function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }</script>
</div>

</body>

</html>








<?php
    if(isset($_POST['btnsearch']))
    {
        $jobtitle = $_POST['search'];
        $jobloc = $_POST['search1'];
        $jobskill = $_POST['search2'];
         
        if(empty($jobtitle) && empty($jobloc) && empty($jobskill))
        {
            echo "
                <script type='text/javascript'>
                    alert('Please enter any keyword to search')
                </script>
                ";
            die(); 
        }
        if(!empty($jobtitle) && !empty($jobloc) && !empty($jobskill))
        {
            $_SESSION["jtitle"] = $jobtitle;
            $_SESSION["jloc"] = $jobloc;
            $_SESSION["jskill"] = $jobskill;
            header('location:searchjob.php'); 
        } 
        if(!empty($jobtitle))
        {
            $_SESSION["jtitle"] = $jobtitle;
        }
        if(!empty($jobloc))
        {
            $_SESSION["jloc"] = $jobloc;
        }
        if(!empty($jobskill))
        {
            $_SESSION["jskill"] = $jobskill;
        }
        header('location:searchjob.php');  
    }                                            
?>