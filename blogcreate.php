<?php

    include('connection.php');

    $get_home= "select * from home LIMIT 1";
    $run_home = mysqli_query($con, $get_home);
    while ($row_home = mysqli_fetch_array($run_home))
    {
        $title = $row_home['title'];
        $logo = $row_home['logo'];
        $banner_title = $row_home['banner_title'];
        $banner_image = $row_home['banner_image'];
        $video_link = $row_home['video_link'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title><?php echo $title; ?></title>
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
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
	
</style>
<body>
<?php
    
    include 'header1.php';
    
    ?>
    
    <div class="container-fluid">
       <div class="row text-center" style="padding-top:100px;">
          <div class="col-sm-12 col-md-12">
              <h1>Create Blog</h1>
          </div>
           
       </div>
       <form method="post" enctype="multipart/form-data">
           
      
       <div class="row text-center">
         <div class="col-sm-2 col-md-2">
             
         </div>
          <div class="col-sm-8 col-md-8">
              <div class="row text-center">
                  <div class="col-sm-3 col-md-3">
                     Select Category :
                  </div>
                  <div class="col-sm-9 col-md-9">
                      <select class="form-control" name="cat">
                          <option>Select</option>
                          <option>Talent Acquisition</option>
                          <option>Uncategorized</option>
                          <option>Job Advertising</option>
                          <option>News and Events</option>
                          <option>Employee Engagement</option>
                          <option>Industry Trends</option>
                          <option>Customer Success</option>
                          <option>How To Use Glassdoor</option>
                          <option>Featured</option>
                          <option>Hiring & Recruiting</option>
                          <option>Employee Retention & Benefits</option>
                          <option>HR Management & Planning</option>
                          <option>Events & Conferencing</option>               
                          <option>Manage Your Brand</option>               
                          <option>Best Places to Work</option>               
                          <option>Top CEOs</option>               
                          <option>Events & Conferences</option>               
                          <option>Employer Branding</option>  
                          <option>other</option>               
                          </select>
                  </div>
              </div>
              <div class="row text-center">
                  <div class="col-sm-3 col-md-3">
                      Blog Title :
                  </div>
                  <div class="col-sm-9 col-md-9">
                      <input type="text" name="title" class="form-control">
                  </div>
              </div>
               <div class="row text-center">
                  <div class="col-sm-3 col-md-3">
                     Description :
                  </div>
                  <div class="col-sm-9 col-md-9">
                      <textarea class="form-control" name="des" id="des" rows="20">
                          
                      </textarea>
                  </div>
              </div>
              <div class="row text-center">
                  <div class="col-sm-3 col-md-3">
                     upload image :
                  </div>
                  <div class="col-sm-9 col-md-9">
                      <input type="file" name="file" class="form-control">
                  </div>
              </div>
              <div class="row text-center">
                 
                  <div class="col-sm-9 col-md-9">
                      <input type="submit" name="createblog" class="btn btn-success">
                  </div>
              </div>
          </div>
          <div class="col-sm-2 col-md-2">
             
         </div>
           
       </div>
         </form>
    </div>
			
<?php
        
        include 'footer.php';
        ?>
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
			<!-- Custom Js -->
			<script src="assets/js/custom.js"></script>
			<script src="assets/js/jQuery.style.switcher.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}

				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
			 <script>
                     /*tinymce.init({
                            selector: '#editor3'
                          });*/
                      CKEDITOR.replace( 'des');
                 </script>  
</body>

</html>
<?php
include 'connection.php';

if(isset($_POST['createblog']))
{
    //echo "<script>alert('working')</script>";
    $tit = $_POST['title'];
    $des = $_POST['des'];
    $file = $_FILES['file']['name'];
    $cate = $_POST['cat'];
    $path = "blogimages/".$file;
    
    $img = $_FILES['file']['tmp_name'];
    
    if(move_uploaded_file($img,$path))
    {
        $q = "INSERT INTO `blog`( `title`,`category`, `description`, `imgurl`) VALUES ('$tit','$cate','$des','$file')";
        $query = mysqli_query($con,$q);
        if($query)
        {
            echo "<script>alert('Blog Created')</script>";
        }
        else
        {
            echo mysqli_query($con);
        }
    }
    
    
}




?>