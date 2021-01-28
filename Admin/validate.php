<php
if(isset($_post["fname"]))
{
	$errflag=false;
	$POST["fname"]=*required;

}
if(isset($_post["lname"]))
{
	$errflag=false;
	$POST["lname"]=*required;
}
if(isset($_post["address"]))
{
	$errflag=false;
	$POST["address"]=*required;
}
if(isset($_post["dob"]))
{
	$errflag=false;
	$POST["dob"]=*required;
}
if(isset($_post["phone"]))
{
	$errflag=false;
	$POST["phone"]=*required;
}
if(isset($_post["image"]))
{
	$errflag=false;
	$POST["image"]=*required;
}
if(errflag=false)
{
	$conkey mysqli_connect("localhost","root","");
	$q=select * from reg where phone number=phone number
}
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<form method="POST"/form>
		<table>
			<tr>
				<td>fname</td>
				<td><input type="text" name="fname"></td>
            </tr>
            <tr>
				<td>lname</td>
				<td><input type="text" name="lname"></td>
            </tr>
            <tr>
				<td>address</td>
				<td><input type="text" name="address"></td>
            </tr>
            <tr>
				<td>dob</td>
				<td><input type="text" name="dob"></td>
            </tr>
            <tr>
				<td>phone</td>
				<td><input type="text" name="phone"></td>
            </tr>
            <tr>
				<td>image</td>
				<td><input type="image" name="img"></td>
            </tr>
		</table>
	</body>
	</html>



		
