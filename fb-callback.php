<?php
include 'connection.php';
require_once('fconfig.php');

try{
    $accessToken = $handler->getAccessToken();
    
    
}catch(\Facebook\Exceptions\FacebookResponseException $e){
    echo "Response Exception:". $e->getMessage();
    exit();
}catch(\Facebook\Exceptions\FacebookSDKException $e){
    echo "SDK exception :" . $e->getMessage();
    exit();
}


if(!$accessToken)
{
    header('location:login.php');
    exit();
}

$oAuth2Client = $FBobject->getOAuth2Client();
if($accessToken)
{
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    $response = $FBobject->get("/me?fields=id,first_name, last_name,email, picture.type(large)",$accessToken);
    $userdata = $response->getGraphNode()->asArray();
    $_SESSION["userdata"] = $userdata;
    $_SESSION["accesstoken"] = (string) $accessToken;
    
    $name = $_SESSION["userdata"]['first_name'] . $_SESSION["userdata"]['last_name'] ;
    $email =$_SESSION["userdata"]['email'];
    $sts = "pending";
    $logwith ="Facebook";
    
    $chkuser = mysqli_query($con,"SELECT * FROM `user_reg` WHERE email ='$email'");
    $row = mysqli_fetch_array($chkuser);
    if($row>=1)
    {
        $_SESSION["alredyReg"] = "yes";
        header('location:profile.php');
    }
    else
    {
         $_SESSION["alredyReg"] = "No";
         $q = "INSERT INTO `user_reg`(`uname`,`email`,`register_with`,`reg_details`)values('$name','$email','$logwith','$sts') ";
        $que = mysqli_query($con,$q);
        if($que)
        {
            header('location:profile.php');
        }
        
    }
   
    
    /*echo $_SESSION["userdata"]['id']."<br>";
    echo $_SESSION["userdata"]['first_name']."<br>";
    echo $_SESSION["userdata"]['last_name']."<br>";
    echo $_SESSION["userdata"]['email']."<br>";*/
    
    exit();
}





?>