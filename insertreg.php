<?php

include("connection.php");

    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number']; 
    $location=$_POST['location']; 
    $qual=$_POST['qual'];
    $exp=$_POST['exp'];
    $month=$_POST['month'];
    $industry=$_POST['industry'];
    $job_fun=$_POST['job_fun'];
    $skill=$_POST['skill'];
    $des=$_POST['des'];
    
    $regwith = "portal";
    $regsts = "completed";
    
    $filename= $_FILES['file']['name'];
    $img_filename= $_FILES['uploadedfile']['name'];

move_uploaded_file($_FILES['file']['tmp_name'],"cv/$filename");
move_uploaded_file($_FILES['uploadedfile']['tmp_name'],"upload/$img_filename");
   
$sql=mysqli_query($con,"insert into user_reg(uname,email,password,number,location,qual,exp,month,industry
	,job_fun,skill,des,filename,img_filename,register_with,reg_details) values('$uname','$email','$password','$number','$location','$qual','$exp','$month','$industry','$job_fun','$skill','$des','$filename','$img_filename','$regwith','$regsts')");
$sql=mysqli_query($con,"insert into user_login(uname,password) value('$uname','$password')");

if($sql)
{
	echo "<script> alert('Candidate registered successfully');
	window.location='login.php';
	</script>";
}
else
{
	echo "<script> alert('Failed');
	window.location='register.php';
	</script>";
}

?>