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
.dis {
    color: #b7b7b7 !important;
    cursor: default;
}

.addvcblock {
    display: block;
}
.addcv {
    background-color: #e7e4e4;
    color: #5d5d5d;
    font-size: 15px;
    padding: 10px;
    height: 50px;
    font-weight: 400;
}
.dis .addcvtitle {
    color: #b7b7b7;
}
.addcvtitle {
    display: inline-block;
}
.dis .addcvtitle {
    color: #b7b7b7;
}
.addcvtitle {
    display: inline-block;
}
.showcase {
    background-color: #fafafa;
    padding: 10px;
    position: relative;
    overflow: auto;
    height: 180px;
}
.arrow-addcv {
    background: url(//media.monsterindia.com/seeker_2014/mcom/service-sprite.png) -20px -75px;
    position: absolute;
    top: -5px;
    width: 25px;
    height: 20px;
    display: block;
}
.mn-shdcmmn {
    background: #fff;
    margin-bottom: 30px;
    border: 1px solid #f5f5f5;
}

.coverletter-box {
    background-color: green!important;
    font-weight: 300;
    padding: 20px 10px;
    overflow: auto;
    color: white!important;
}
.dis {
    color: #b7b7b7 !important;
    cursor: default;
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
              <h1 class="seobannerhead"> Get Employers' attention with Resume Highlighter
& Give competitive edge to your resume
                    </h1>
                        </div>
                        <div class="banner-bottom-content col-sm-12">
                            <div>
                                Get noticed by potential employers </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





         <div class="clearfix"></div>
         <div class="container-fluid" style="padding:20px">
          <div class="container">
            <h2 class="css_heading mob-h1 fleft">Resume Highlighter </h2>
            <div class="row">
                <div class="col-md-12 service-main-in">
                            <div class="col-md-12 col-sm-12 col-xs-12 lesspadding singlebox">
                                <div class="service-block" id="forfresher">
                                    <div class="select-service" id="resume_highlighter357" onclick="addtocart(357,'RH');">
                                        <label class="service-head"> Catch the eyeballs of the recruiter </label><span class="exp"> (for 90 days)</span>
                                        <div class="service-of-rupees">
                                            <div class="if-discountmain">
                                                <div class="if-discount">
                                                    <span><span>Rs. 499</span></span>
                                                    </div>
                                                <span class="service-checkbox"></span>
                                            </div>
                                        </div>
                                    </div>
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

