<?php
session_start();
ob_start();
require 'paymentSetting.php';
include 'connection.php';
if(isset($_SESSION['id']))
{
     $id = $_SESSION['id'];
     $q = "SELECT * FROM `emp_reg` WHERE emp_id = '$id'";
     $query = mysqli_query($con,$q);
     $row = mysqli_fetch_array($query);
     if($row)
     {
         $id = $row['emp_id'];
         $name = $row['name'];
         $email = $row['email'];
         $amount = $_SESSION["totamt"];
         $jobslot  = $_SESSION["jobslot"];
         //echo "my amount is " .  $amount;
         

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
    <meta charset="UTF-8">
    <title>Document</title>
     <meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-camo.css">
    <meta name="viewport" content="width=device-width">
    <style>
        .razorpay-payment-button
        {
             background: #11b719;
        border-color: #11b719;
        color: #fff;
        outline: 0;
            
        }
           
    
    </style>
</head>
<body>
    <?php
    
   include('header1.php');
    
    ?>
   <div class="container-fluid text-center" style="padding-top:30px;">
   <form action="charge.php" method="POST">
   
   <table align=center border="1">
         <tr>

					<td><label>CustName ::*</label></td>
					<td>
					
					
					<!--<label  id="CUST_NAME" tabindex="2" maxlength="12" size="12" name="CUST_NAME" autocomplete="off"><?php echo $name ; ?></label>-->
					
					
				<input id="CUST_NAME" tabindex="2" maxlength="12" size="12" name="CUST_NAME" autocomplete="off" value="<?php echo $name ; ?>">
				
         </tr>
      	<tr>

					<td><label>CUSTID ::*</label></td>
					<td>
                    
                    <!--<label  id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off"><?php echo $id ; ?></label>-->
					    
					    
					    
					    <input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $id; ?>">
					    </td>
      </tr>
      <tr>
					<td><label>txnAmount*</label></td>
					<td>
					
					<!--<label   tabindex="2" maxlength="12" size="12" name="TXN_AMOUNT" autocomplete="off">350</label>-->
					
					<input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $amount; ?>" >
					</td>
					
					
    </tr>
    
   </table>
   

   
<!-- Note that the amount is in paise = 50 INR -->
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $razor_api_key; ?>"
    data-amount="<?php echo $amount."00"; ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Saraswathichandra"
    data-description="Payment for job Posting"
    data-image="https://your-awesome-site.com/your_logo.jpg"
    data-prefill.name="<?php echo $name;  ?>"
    data-prefill.email="<?php echo $email;  ?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" value="Hidden Element" name="hidden">
</form>
    </div> 
    
</body>
</html>