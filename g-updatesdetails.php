<?php
ob_start();
session_start();
include("connection.php");


if(isset($_SESSION['id']))
{
     $id = $_SESSION['id'];
     $sql=mysqli_query($con,"select * from user_reg where id='$id'");
     $row=mysqli_fetch_array($sql);
     if($row)
     {
         $id = $row['id'];
         $name = $row['uname'];
         $ema = $row['email'];
         $_SESSION['id'] = $id;
     }
}
else
{
    header('location:index.php');
}




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
	<style type="text/css">
	.xx{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 115%;
}

	</style>
</head>
<body>
   
   <div class="wrapper">  
			
			<!-- Start Navigation -->
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Company Detail Start -->
		
			<!-- Company Detail End -->
			
			




<center>

<div class="container">
<br> 
<hr>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<div class="xx">
	
	<h3>Please Complete all fields</h3>
	<form method="POST" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;  ?>">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
        <input name="uname" class="form-control" value="<?php echo $name;  ?>" type="text" disabled>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
        <input name="email" class="form-control" value="<?php echo $ema;  ?>" type="email" disabled>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
        <input name="number" class="form-control" placeholder="Contact Number" type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
        <input name="location" class="form-control" placeholder="Current Location" type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <select class="form-control" name="qual">
			<option value="select">--Select Qualification--</option>
			<option value="PGDCA">PGDCA</option>
			<option value="M-Tech">M-Tech</option>
			<option value="CFA">CFA</option>
			<option value="MCA">MCA</option>
			<option value="BCA">BCA</option>
			<option value="B-Tech">B-Tech</option>
			<option value="LLM">LLM</option>
			<option value="ICWA">ICWA</option>
			<option value="MBA">MBA</option>
		</select>
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <select class="form-control" name="exp">
			<option value="">--Experience--</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="More than 20 year">More than 20 year</option>
			
		</select>
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <select class="form-control" name="month">
			<option value="">-- Month--</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			
			

		</select>
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <select class="form-control" name="industry">
			<option value="">-- Industry--</option>
			<option value="Accounting">Accounting</option>
			<option value="Airlines/Aviation">Airlines/Aviation</option>
			<option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
			<option value="Alternative Medicine">Alternative Medicine</option>
			<option value="Animation">Animation</option>
			<option value="Apparel/Fashion">Apparel/Fashion	</option>
			<option value="Architecture/Planning">Architecture/Planning</option>
			<option value="Arts/Crafts">Arts/Crafts	</option>
			<option value="Automotive">Automotive</option>
			<option value="Aviation/Aerospace">Aviation/Aerospace</option>
			<option value="Banking/Mortgage">Banking/Mortgage</option>
			<option value="Biotechnology/Greentech">Biotechnology/Greentech	</option>
			<option value="Broadcast Media">Broadcast Media	</option>
			<option value="Building Materials">Building Materials	</option>
			<option value="Business Supplies/Equipment">Business Supplies/Equipment	</option>
			<option value="Computer Hardware">Computer Hardware</option>
			<option value="Computer Networking">Computer Networking</option>
			<option value="Computer Software/Engineering">Computer Software/Engineering</option>
			<option value="Consumer Goods">Consumer Goods</option>
			<option value="Cosmetics">Cosmetics</option>
			<option value="Education Management">Education Management</option>
			<option value="Design">Design</option>
			


		</select>
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       <select class="form-control" name="job_fun">
			<option value="">--Job Function--</option>
			<option value="Accountancy">Accountancy</option>
			<option value="Administration">Administration</option>
			<option value="BPO">BPO</option>
		</select>
    </div>
     <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
        <input name="skill" class="form-control" placeholder="Key Skill" type="text">
    </div>
     <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
        <input name="des" class="form-control" placeholder="Describe Yourself" type="text">
    </div>
     <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">  </span>
		 </div>
       Upload your Resume  <input name="file" class="form-control" placeholder="" type="file"><br>
        Upload your Photo <input name="uploadedfile" class="form-control" placeholder="Upload your Photo" type="file">
    </div>
   <!-- form-group// -->
    <!-- form-group end.// -->
    <!-- form-group// -->
     <!-- form-group// -->                                      
    <div class="form-group">
    <input type="submit" name="submit" value="Update" class="btn btn-primary btn-block">
    </div> <!-- form-group// -->      
</form>
</article>
</div>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>


</center>  
</body>
</html>


<?php
    
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $number=$_POST['number']; 
    $location=$_POST['location']; 
    $qual=$_POST['qual'];
    $exp=$_POST['exp'];
    $month=$_POST['month'];
    $industry=$_POST['industry'];
    $job_fun=$_POST['job_fun'];
    $skill=$_POST['skill'];
    $des=$_POST['des'];
        
    $regsts = "completed";
    
    $name= $_FILES['file']['name'];

    $tmp_name= $_FILES['file']['tmp_name'];



$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);


if (isset($name)) {

$path= 'cv/';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {





$img_name=$_FILES["uploadedfile"]["name"];
if (($_FILES["uploadedfile"]["type"]=="image/gif"
|| $_FILES["uploadedfile"]["type"]=="image/jpeg"
|| $_FILES["uploadedfile"]["type"]=="image/pjpeg"
&& $_FILES["uploadedfile"]["size"]<20000))
{
if ($_FILES["uploadedfile"]["error"]>0)
{
echo "Return Code:".$_FILES["uploadedfile"]["error"]."<br />";
}
else
{
$i=1;
$success=false;
$new_img_name=$img_name;
while(!$success)
{
if (file_exists("upload1/".$new_img_name))
{
$i++;
$new_img_name="$i".$img_name;
}
else
{
$success=true;
}
}
move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],"upload1/".$new_img_name);





   
    $sql=mysqli_query($con,"UPDATE `user_reg` SET `number`='$number',`location`='$location',`qual`='$qual',`exp`='$exp',`month`='$month',`industry`=' $industry',`job_fun`='$job_fun',`skill`='$skill',`des`='$des',`filename`='$name',`img_filename`='$new_img_name',`reg_details`='$regsts' WHERE `id` = '$id '");
    if($sql)
    {
        header('location:profile.php');
    }
    else
    {
        echo mysqli_error($con);
    }
    
}
}
}
}
}
}
    
    
    
    
?>