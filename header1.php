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
							
							<!-- <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dashboard</a>
								<ul class="dropdown-menu megamenu-content" role="menu">
									<li>
										<div class="row">
										
											<div class="col-menu col-md-12">
												<h6 class="title">For Employer</h6>
												<div class="content">
													<ul class="menu-col">
														<li><a href="create-job.php">Post a Job</a></li>
                                                <li><a href="create-company.php">Create Company</a></li>
                                                 <li><a href="blogcreate.php">Create Blog</a></li>
                                                <li><a href="manage-company.php">Manage Company</a></li>
                                                <li><a href="manage-candidate.php">Manage Candidate</a></li> 
                                                                                             
                                               
                                               
                                               
                                                
													</ul>
												</div>
											</div>    
											
										</div>
									</li>
								</ul>
							</li> -->
							<li class="">
	                        	<a href="employer-profile.php" class="dropdown-toggle" data-toggle="dropdown">Dashboard</a>
	                    	</li>
							<li class="">
	                        	<a href="create-job.php" class="dropdown-toggle" data-toggle="dropdown">Post a Job</a>
	                    	</li>
							<li class="">
	                        	<a href="create-company.php" class="dropdown-toggle" data-toggle="dropdown">Create Company</a>
	                    	</li>
	                    	<li class="">
	                        	<a href="blogcreate.php" class="dropdown-toggle" data-toggle="dropdown">Create Blog</a>
	                    	</li>
	                    	<li class="">
	                        	<a href="manage-company.php" class="dropdown-toggle" data-toggle="dropdown">Manage Company</a>
	                    	</li>
	                    	<li class="">
	                        	<a href="manage-candidate.php" class="dropdown-toggle" data-toggle="dropdown">Manage Candidate</a>
	                    	</li>
	                    	
						</ul>
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                   <li><a href="logout.php">Logout</a></li>                </ul>

						</ul>
					</div><!-- /.navbar-collapse -->
				</div>   
			</nav>