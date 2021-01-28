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
#headingOne{
  background-color: black;
  padding: 1px 11px;
  color:white!important;
}
.fixedForm .row .leadFormTxtArea textarea, body, dd, div, dl, dt, input, li, p, pre, select, td, textarea {
    font-size: 12px;
}

* {
    padding: 0;
    margin: 0;
    font-family: Roboto,sans-serif;
}

div {
    display: block;
}
.leftCol, .rightCol {
    float: left;
    color: #444;
}
.paymnt .order {
    text-align: right;
    padding: 20px 15px;
    border-bottom: 1px solid #e2e2e2;
    overflow: hidden;
}
.paymnt .order .grid1 {
    width: 65%;
    text-align: left;
    font-size: 13px;
    line-height: 21px;
}
.paymnt .order .grid {
    float: left;
}
.paymnt .order .hd {
    color: #002c42;
    font-size: 16px;
}

.pb10 {
    padding-bottom: 10px;
}
.paymnt .order .hd {
    color: #002c42;
    font-size: 16px;
}
.rupee17b {
    background-position: 0 -37px;
}
.rupee17, .rupee17b, .rupee17r {
    width: 9px;
    height: 14px;
    margin: 0;
}

.rupee13, .rupee15, .rupee17, .rupee17b, .rupee17r, .rupee28, .rupee28b, .rupee31b {
    background: url(../i/rupeeIc_v2.png) no-repeat;
    display: inline-block}
    .blueLink.mR {
    margin: 0 20px 0 0;
    visibility: visible;
}
.paymnt .order .grid1 {
    width: 65%;
    text-align: left;
    font-size: 13px;
    line-height: 21px;
}

.blueLink {
    margin-left: 30px;
    padding: 3px 15px;
    font-size: 10px;
    background: #315875;
    color: #fff;
}
.cancel, .removeIt {
    margin-top: 10px;
    text-decoration: underline;
    cursor: pointer;
    display: inline-block;
    color: #666;
}

.font_vsmall {
    font-size: 10px;
}
.paymnt .order {
    text-align: right;
    padding: 20px 15px;
    border-bottom: 1px solid #e2e2e2;
    overflow: hidden;
}
.paymnt .order .grid4 {
    width: 86%;
}

.paymnt .order .grid {
    float: left;
}
.font_16 {
    font-size: 16px;
}
.txtBrightRed {
    color: #ec2828;
}
.font_16 {
    font-size: 16px;
}
.mT10 {
    margin-top: 10px;
}
.rupee17b {
    background-position: 0 -37px;
}

.rupee17, .rupee17b, .rupee17r {
    width: 9px;
    height: 14px;
    margin: 0;
}
.paymnt .bdrT0 {
    border-width: 0;
}

.paymnt .order {
    text-align: right;
    padding: 20px 15px;
    border-bottom: 1px solid #e2e2e2;
    overflow: hidden;
}
.paymnt .order .grid4 {
    width: 86%;
}

.paymnt .order .grid {
    float: left;
}
.font_16 {
    font-size: 16px;
}
.font_medium {
    font-size: 13px;
}

.mT3 {
    margin-top: 3px;
}
.fl {
    float: left;
}
.sucesIc {
    background-position: -14px 0;
}

.errIc, .sucesIc {
    height: 12px;
    width: 12px;
    background-position: 0 0;
    float: left;
    margin: 2px 0 0;
}
.paymnt .order {
    text-align: right;
    padding: 20px 15px;
    border-bottom: 1px solid #e2e2e2;
    overflow: hidden;
}
.elPromo {
    float: left;
    padding: 0 0 15px 2px;
}
.elPromo .promoLnk {
    color: #444;
    text-decoration: underline;
}

.dspN {
    display: none;
}
.white_btn {
    background: #fff;
    border: 1px solid #315875;
    color: #315875;
    padding: 5px 10px;
    min-width: 90px;
}
.transprnt_btn, .white_btn {
    font-size: 13px;
    cursor: pointer;
    display: inline-block;
}
.red_btnBig, .red_btnSmal {
    background: #d61f14;
    border: 1px solid #af1503;
    color: #fff;
    font-size: 22px;
    padding: 5px 20px;
    cursor: pointer;
    display: inline-block;
}
.paymnt .order {
    text-align: right;
    padding: 20px 15px;
    border-bottom: 1px solid #e2e2e2;
    overflow: hidden;
}

.fixedForm .row .leadFormTxtArea textarea, body, dd, div, dl, dt, input, li, p, pre, select, td, textarea {
    font-size: 12px;}
    .card
        {background-color: #fff;
    box-shadow: 1px 1px 9px rgba(0,0,0,.6);
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
   <div class="container-fluid mt-5" style="padding:20px;margin-top: 96px">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne" style="">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:white">
                    Order Summary
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body border">
                  <div id="ordTabXpnd" class="acord_cont paymnt open" style="display: block;"><div class="orderWrp"><div class="order" id="cartRJConnect"><div class="grid grid1"><p class="hd pb10"><input type="hidden" id="cartRJConnect_SrvID" value="83"><span class="title">RecruiterConnection - 10 Credits</span></p><div class="servcTime radioCol" style="display:none"><div class="editWrp"></div><p><a href="javascript:void(0)" class="blueLink mR update">UPDATE</a><a href="javascript:void(0)" class="cancel font_vsmall">CANCEL</a></p></div><div class="slctdRadio">Credits: <span class="count">10</span> Credits<p><a href="javascript:void(0)" class="blueLink mR editIt">EDIT</a><a href="javascript:void(0)" class="removeIt font_vsmall">REMOVE</a></p></div></div><div class="hd fr"><span class="txtPrc"><span class="rupee17b"></span> 1,650</span></div></div></div><div class="bold order"><div colspan="2" class="font_16 grid4 grid">
            Subtotal
            <p class="txtBrightRed font_16 mT10">Discount Applied</p></div><div class="hd font_16" valign="top"><span class="rupee17b"></span><span name="b4DisPrc" id="b4DisPrc">1,650</span><p class="txtBrightRed font_16 mT10">(-) <span class="rupee17r"></span><span id="discountAmt">0</span></p></div></div><div class="bold order bdrT0"><div class="font_16 grid4 grid"><div id="promoSuccess" class="font_medium mT3 fl" style="text-align:left;display:none"><em class="sucesIc"></em><p class="errPd">Promo Code applied successfully</p></div>
            Total Payble Amount
            <p class="font_medium mT10">Inclusive of all taxes</p></div><div class="hd font_16 bdrT0"><span class="rupee17b"></span><span id="totPrc1" name="totPrc" class="totPrc">1,650</span></div></div><div class="order"><div class="elPromo"><div class="font_medium mT3" id="promoSuccess" style="display:none;"><em class="sucesIc"></em><p class="errPd">Promo Code applied successfully</p></div><a href="javascript:void(0)" class="promoLnk dspN">Promo code</a><div class="aplyPromo dspN"><form method="post" action="" name=""><input type="text" name="promoCode" class="fl" id="code" pattern=".{3,15} required title=" 3="" to="" 15="" characters=""><button class="fl" id="prmAply" type="button">Apply<em></em></button><small class="erLbl err" id="prmAply_err" style="display:none">Coupon code expired / invalid. Please check</small></form></div></div><!-- <a href="https://resume.naukri.com/" onclick="tracking.track('PAYMENT_CONTINUE_SHOPPING');" class="white_btn fl clr"><em class="left"></em>Continue Shopping</a> --><a href="javascript:void(0)" class="red_btnBig viewUp" id="proceed" onclick="tracking.track('PAYMENT_PROCEED_TO_PAYMENT');">Proceed to Payment <em></em></a><p class="font_small mT10 fl" id="forTop"></p></div></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   Login
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Collapsible Group Item #3
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
   </div>

    <?php
    include('footer.php');
    ?>
    <div class="clearfix"></div>
    <!-- <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
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
    </div> -->
   
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
  if(isset($_POST['btnsearch'])){
    $search=$_POST['search'];
    $search1=$_POST['search1'];
    $select="select * from emp_reg where cmp_name='$search' and location='$search1'";
    $display=mysqli_query($con,$select) or die(mysqli_error($con));
    if($display){
      $_SESSION['cmp_name'] =$search;
       $_SESSION['location']= $search1;
      echo "<script>
              window.location='company-profile.php';
      </script>";
    }else{
      echo "<script>
              alert('failed');
      </script>";
    }
  }
?>







<!-- <?php
 
 if(isset($_POST['btnsearch']))
 {

     
     $comname = $_POST['search'];
     $comloc = $_POST['search1'];
     /*$jobskill = $_POST['search2'];*/
     
     if(empty($comname) && empty($comloc))
     {
         echo "<script type='text/javascript'>
     alert('Please enter any keyword to search')
     </script>";
         die();
         
     }
     if(!empty($comname) && !empty($comloc))
     {
         $_SESSION["jtitle"] = $comname;
         $_SESSION["jloc"] = $comloc;
         header('location:company-profile.php'); 
        
     }
     
     if(!empty($comname))
     {
          $_SESSION["jtitle"] = $comname;
     }
     if(!empty($comloc))
     {
          $_SESSION["comloc"] = $comloc;
     }
     /*if(!empty($jobskill))
     {
           $_SESSION["jskill"] = $jobskill;
     }*/
     header('location:company-profile.php');  
 }
                                                
?> -->
