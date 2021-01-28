<?php
session_start();
ob_start();
include('connection.php');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs==================================================-->
    <title>Saraswathichandra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS==================================================-->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="script1.js"></script>
    <script type="text/javascript" src="script2.js"></script>
    <!-- <script type="text/javascript">
    history.pushState(null,null,'index.php');
    window.addEventListener('popstate',function(event)
    {
        history.pushState(null,null,'index.php');
    });
</script> -->
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
<style type="text/css">
  body{
    background: #f5f5f5 !important;
  }
  .mn-shdcmmn {
    background: #fff;
    margin-bottom: 30px;
    border: 1px solid #f5f5f5;
}

.xpr-wrap {
    display: inline-block;
    overflow: visible;
    padding: 0;
    width: 100%;
}
.service-block {
    display: block;
    box-shadow: 0px 0px 2px #eeeeee;
    margin: 20px 0 20px 0;
    cursor: pointer;
    position: relative;
}
.select-service, .select-service-cities {
    height: 150px;
    position: relative;
}

.select-service, .select-service-cities {
    background: #fff;
    text-align: center;
    padding: 10px;
}
.exp {
    color: #6c55da;
    font-size: 16px;
    font-weight: 400;
}
.service-head {
    color: #5d5d5d;
    font-size: 21px;
    font-weight: 400;
    margin-top: 10px;
}
.service-of-rupees {
    font-weight: 100;
    font-size: 20px;
    margin: 30px 0;
    position: absolute;
    bottom: 5px;
    margin: 0;
    text-align: left;
    padding: 10px 10px 0 10px;
    left: 0;
    right: 0;
}
.service-checkbox {
    background: url(//media.monsterindia.com/seeker_2014/mcom/service-sprite.png) 0 0;
    width: 53px;
    height: 28px;
    display: inline-block;
    float: right;
}
.mn-shdcmmn {
    background: #fff;
    margin-bottom: 30px;
    border: 1px solid #f5f5f5;
}

.maylike-box {
    font-weight: 300;
    padding: 20px 10px;
    overflow: auto;
}
#career-banners {
    width: 100%;
    max-height: 180px;
    padding-bottom: 20px;
}

.xpressbanner {
    background: green;
    color:white;
}
</style>
<body>

<div class="wrapper">
    <?php
    
    include 'userheader.php';
    
    ?>

</div>
                            </li>
                        </ul>
                    </li>
                   
                </ul>

                 
              
            </div>
        </div>
    </nav>
    <div class="clearfix"></div>
      <div class="container" style="margin-top: 100px">
        <form class="form-horizontal" method="POST">

          <div class="row">
            <div class="col-md-4">
              <div class="form group">
                <input type="text" class="form-control right-bor" name="search" id="search" placeholder="Search By Job Title">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form group dropdown">
                <select type="text" class="form-control" value="">
                  <option>experience</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
               
              </div>
            </div>
            <div class="col-md-3">
              <div class="form group">
                <input type="text" class="form-control right-bor" name="search1" id="search1" placeholder="Location..">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form group">
                <button type="submit" name="btnsearch" class="btn btn-primary">Search</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div id="career-banners" class="xpressbanner">
            <div class="container">
                <div class="banner-panel">
                    <div class="banner-content col-sm-7 col-xs-10 col-md-12">
                        <div class="banner-top-content col-sm-12">
              <h1 class="seobannerhead">Get XpressResume+ Get Noticed.</h1>
                        </div>
                        <div class="banner-bottom-content col-sm-12">
                            <div>
                                Better your chances of getting found &amp; shortlisted </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





         <div class="clearfix"></div>
         <div class="container-fluid" style="padding:20px">
          <div class="container">
            <h2 class="css_heading mob-h1 fleft">XPRESSResume+ </h2>
            <div class="row">
              <div class="mn-shdcmmn service-main xpr-wrap">
                        <div class="col-md-12 service-main-in">
                            <div class="col-md-3 col-sm-6 col-xs-6 lesspadding">
                                <div class="service-block" id="forprofessionals">
                                    <div class="select-service" onclick="addtocart(132,'ER');">
                                        <div class="exp"> XpressResume+ </div>
                                        <label class="service-head">National </label>
                  <div class="service-of-rupees"> <span>Rs. 999</span> <span class="service-checkbox"></span></div>
                  </div>
                                </div>
                                <div class="addedtocart" style="display:none">Added to Cart</div>
                            </div>
              <div class="col-md-3 col-sm-6 col-xs-6 lesspadding">
                                <div class="service-block" id="forprofessionals">
                                    <div class="select-service" onclick="addtocart(133,'ER');">
                                        <div class="exp"> XpressResume+ </div>
                                        <label class="service-head">Gulf </label>
                  <div class="service-of-rupees"> <span>Rs. 1499</span> <span class="service-checkbox"></span></div>
                  </div>
                                </div>
                                <div class="addedtocart" style="display:none">Added to Cart</div>
                            </div>
              <div class="col-md-3 col-sm-6 col-xs-6 lesspadding">
                                <div class="service-block" id="forprofessionals">
                                    <div class="select-service" onclick="addtocart(134,'ER');">
                                        <div class="exp"> XpressResume+ </div>
                                        <label class="service-head">National + Gulf </label>
                  <div class="service-of-rupees"> <span>Rs. 1999</span> <span class="service-checkbox"></span></div>
                  </div>
                                </div>
                                <div class="addedtocart" style="display:none">Added to Cart</div>
                            </div>
              </div>
                    </div>
            </div>
          </div>
         </div>
         <div class="container-fluid">
          <div class="container">
            <div class="row">
                    <div class="maylike-box mn-shdcmmn">
                        <div class="col-md-12 service-details-panel">
                            <label id="disshow1" class="dis-section" role="button">Why XpressResume+</label>
                            <p class="dis-content" id="wxpressresume"></p><ul class="content-xpress">
                            <li>Better your chances of getting found when a recruiter searches for a profile like yours<br></li>
                            <li>It’s upfront when a recruiter takes a look at a large set of shortlisted resumes</li>
                            <li>Your profile is promoted as the most closely matched jobseeker to the search criteria used by recruiters</li>
                            <li>With XpressResume+ your profile is showcased as an active jobseeker, who is keenly looking for a job</li>
                            <li>With XpressResume+ you stand out from the crowd, thus increasing your chances of getting shortlisted</li>
                        </ul><p></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="maylike-box mn-shdcmmn">
                        <div class="col-md-12 service-details-panel">
                            <label id="disshow2" class="dis-section"><h4>How XPRESSResume+ works?</h4></label>
                            <p class="dis-content" id="hxpressresume">Once you subscribe to XPRESSResume+ you’ll get an order confirmation. Within 2 working days, you’ll get a mail from us asking for your latest resume. Once you upload your resume, you would be promoted as an active job seeker in the Monster database. Your resume will be listed at the top of search results, thus boosting your chanc es of getting shortlisted. We not only list your resume at the top but showcase your designation, education &amp; experience, skills, industry, function and role you are in so that it grabs the attention of a recruiter.<br>
                            Your resume will be part of ExpressResume+ database for a period 180 days.
                            </p><div class="clearfix"></div><p></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="maylike-box mn-shdcmmn">
                        <div class="col-md-12 service-details-panel">
                            <label id="disshow" class="dis-section collapsed" role="button" data-toggle="collapse" data-target="#disclaimer" aria-expanded="false" aria-controls="disclaimer">Disclaimer<span class="dis-show"></span></label>
                            <p class="dis-content collapse" id="disclaimer">Monster only displays your profile at the top of the search listing page basis the resume matches the search criteria used by the recruiter(s).</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
          </div>
         </div>
    
   
    <div class="clearfix"></div>
   
    <?php
    include('footer.php');
    ?>
    <div class="clearfix"></div>

   
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

