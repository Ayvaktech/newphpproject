<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php


if(isset($_GET['ref']))
{
?>
<input type="text" value="<?php echo $_GET['ref'];?>" disable>
<?php
}
else
{
	echo "no referal code ";
}


?>
</body>
</html>