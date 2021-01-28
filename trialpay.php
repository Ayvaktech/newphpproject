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
body{margin-top:50px;}
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }
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
 <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
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
          
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span>1 &nbsp
                            </span>Order Summary</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div id="ordTabXpnd" class="acord_cont paymnt open" style="display: block;"><div class="orderWrp"><div class="order" id="cartRJConnect"><div class="grid grid1"><p class="hd pb10"><input type="hidden" id="cartRJConnect_SrvID" value="83"><span class="title">RecruiterConnection - 10 Credits</span></p><div class="servcTime radioCol" style="display:none"><div class="editWrp"></div><p><a href="javascript:void(0)" class="blueLink mR update">UPDATE</a><a href="javascript:void(0)" class="cancel font_vsmall">CANCEL</a></p></div><div class="slctdRadio">Credits: <span class="count">10</span> Credits<p><a href="javascript:void(0)" class="blueLink mR editIt">EDIT</a><a href="javascript:void(0)" class="removeIt font_vsmall">REMOVE</a></p></div></div><div class="hd fr"><span class="txtPrc"><span class="rupee17b"></span> 1,650</span></div></div></div><div class="bold order"><div colspan="2" class="font_16 grid4 grid">
            Subtotal
            <p class="txtBrightRed font_16 mT10">Discount Applied</p></div><div class="hd font_16" valign="top"><span class="rupee17b"></span><span name="b4DisPrc" id="b4DisPrc">1,650</span><p class="txtBrightRed font_16 mT10">(-) <span class="rupee17r"></span><span id="discountAmt">0</span></p></div></div><div class="bold order bdrT0"><div class="font_16 grid4 grid"><div id="promoSuccess" class="font_medium mT3 fl" style="text-align:left;display:none"><em class="sucesIc"></em><p class="errPd">Promo Code applied successfully</p></div>
            Total Payble Amount
            <p class="font_medium mT10">Inclusive of all taxes</p></div><div class="hd font_16 bdrT0"><span class="rupee17b"></span><span id="totPrc1" name="totPrc" class="totPrc">1,650</span></div></div><div class="order"><div class="elPromo"><div class="font_medium mT3" id="promoSuccess" style="display:none;"><em class="sucesIc"></em><p class="errPd">Promo Code applied successfully</p></div><a href="javascript:void(0)" class="promoLnk dspN">Promo code</a><div class="aplyPromo dspN"><form method="post" action="" name=""><input type="text" name="promoCode" class="fl" id="code" pattern=".{3,15} required title=" 3="" to="" 15="" characters=""><button class="fl" id="prmAply" type="button">Apply<em></em></button><small class="erLbl err" id="prmAply_err" style="display:none">Coupon code expired / invalid. Please check</small></form></div></div><!-- <a href="https://resume.naukri.com/" onclick="tracking.track('PAYMENT_CONTINUE_SHOPPING');" class="white_btn fl clr"><em class="left"></em>Continue Shopping</a> --><a href="javascript:void(0)" class="red_btnBig viewUp" id="proceed" onclick="tracking.track('PAYMENT_PROCEED_TO_PAYMENT');">Proceed to Payment <em></em></a><p class="font_small mT10 fl" id="forTop"></p></div></div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span >2 &nbsp
                            </span>Login</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="login">
                                <div class="row">
                                    <div class="col-md-6" style="border-right: 1px solid gray">
                                    <p class="font_14 pb15">Existing Naukri User</p>
                                    <form name="naukrimember" style="display:" id="loginnaukri" action="" method="post">
                                        <input type="radio" name="matchemail" value="1" id="emailchk" checked="">
                                        <label for="emailchk">Email Id </label>

                                        <input type="radio" name="unamechk" value="1" id="emailchk" checked="">
                                        <label for="unamechk">Username </label>
                                        <div class="row" id="emailsec">
                                            <input type="text" class="loginTxt saveVal" id="email_id" name="USERNAME" maxlength="100" value="" autocomplete="off" placeholder="Enter your email ID" rel="required:3002,custom:3006">
                                        <small id="email_id_err" class="erLbl"></small>
                                    </div>
                                    <div class="row" id="userNameSec" style="display:none">
                                        <input id="userName" class="loginTxt saveVal" type="text" maxlength="100" name="USERNAME" placeholder="Enter your username" altrel="required:3014">
                                      <small id="userName_err" class="erLbl"></small>
                                    </div>

                                    <div class="row">
                                        <input type="password" rel="required:3012" value="" minl="6" placeholder="Enter password" name="PASSWORD" id="password" autocomplete="off" class="loginTxt">
                                        <small id="password_err" class="erLbl"></small>
                                    </div>
                                    <input type="hidden" name="URL" value="URL">
                                    <input type="hidden" name="Wml" value="1">
                                    <input type="hidden" name="Login" value="1">
                                    <input type="submit" onclick="javascript:parent.tracking.track('PAYMENT_CONTINUE_TO_PAY');" class="red_btnSmal cntinue" id="submitMembr" value="Continue to pay">
                                    <br>
                                </form>

                                <a href="">Forgot Login Details?</a>

                <p class="sml">In case you are using a public/shared computer we recommend that you logout after payment to prevent any un-authorized access to your account.</p>
            </div>
       

            <div class="col-md-6">
                <div id="loginLB" class="ltBx lightbox"> 
                                   <iframe class="dspN" width="0" height="0" name="login-iframe" id="login-iframe"></iframe> 
            </div> 
        </div>


        <script type="text/javascript">
            var promoApplicable = '';
            $(document).ready(function() {
                resetLoginForm();
                $('.loginTxt').focus(function() {
                    $(this).addClass('txtWrapShadow');
                }).blur(function() {
                    $(this).removeClass('txtWrapShadow');
                });

                $('.saveVal').on('blur', function() {
                    $("[name='USERNAME']").val($(this).val());
                });

                $("[name=USERNAME]").on('blur', function() {
                    $("#login_err").hide();
                });

                
                
                                $('#emailChk').on('click', function() {
                            chng(true);
                        });
                        $('#usernameChk').on('click', function() {
                            chng(false);
                        });
                    });
                </script>

                <div class="ltCont close" tabindex="0"><div class="ltLayer close"></div></div>

                <iframe scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/widget_iframe.097c1f5038f9e8a0d62a39a892838d66.html?origin=https%3A%2F%2Fresume.naukri.com" title="Twitter settings iframe" style="display: none;"></iframe>

                <a id="dspLoginPgBtn" href="javascript:void(0);" class="white_btn" style="display:none">Click here to Login</a>


                <div class="divider"><small>OR</small></div>

                <div class="login">
                    <div style="">
                        <p class="font_14 pb15" id="createAcntText">Not a Registered Member?</p>
                      
                        
                    <a href="javascript:void(0);" onclick="tracking.track('PAYMENT_CREATE_YOUR_ACCOUNT');" id="regUsrBtn" class="white_btn">Create your Account</a>
                </div>
            </div>
             </div>
             </div>             


                          </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Reports</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        
      </div>
    </div>
   </div>

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
