<?php
include 'connection.php';
$id = $_GET['id'];
$q = "SELECT * FROM `blog` WHERE id='$id'";
$que = mysqli_query($con,$q);
$row = mysqli_fetch_array($que);
if($row)
{
    $tit = $row['title'];
    $des = $row['description'];
    $img = $row['imgurl'];
    
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
</head>
<style type="text/css">
	body{font-family: 'Yanone Kaffeesatz', sans-serif;}
</style>
<body>
  <?php
    
    include 'userheader.php';
    
    ?>
<div class="container">
   <div class="row text-center" style="padding-top:100px;">
       <div class="col-sm-12 col-md-12">
           <h1 class="w3-content w3-left" class="w3-xlarge"><b><?php echo $tit; ?></b></h1>
       </div>
   </div>
   <div class="row text-center" style="padding-top:15px;">
       <div class="col-sm-12 col-md-12">        
           <img src="blogimages/<?php echo $img;?>" class="img-responsive">
       </div>
   </div>
    <div class="row" style="padding-top:15px;">
       <div class="col-sm-12 col-md-12">    
         <p>
            <?php echo $des; ?>
         </p>    
          
       </div>
   </div>
	
	</div>
	<?php
    
    include 'footer.php';
    
    ?>
</body>
<script type="text/javascript">
	
</script>
</html>