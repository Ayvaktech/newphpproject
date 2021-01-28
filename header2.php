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
<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav" style="padding-left:75px;">

				<div class="container">            
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">
							<img src="assets/img/logo/<?php echo $logo; ?>" class="logo logo-scrolled" alt="">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
			<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
							<li><a href="freelancer-detail.php">Dashboard</a></li>
							<li><a href="freelancing-jobs.php">Freelancing Jobs</a></li>
							<!-- <li><a href="job-apply-detail.php">New Apply Job</a></li> -->
							
							
						</ul>
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    
                   <li><a href="logout.php">Logout</a></li>                </ul>

						</ul>
					</div><!-- /.navbar-collapse -->
				</div>   
			</nav>