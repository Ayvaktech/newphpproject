<?php
    session_start();
    ob_start();
    include('connection.php');

    $get_home= "select * from home LIMIT 1";
    $run_home = mysqli_query($con, $get_home);
    while ($row_home = mysqli_fetch_array($run_home))
    {
        $title = $row_home['title'];
        $logo = $row_home['logo'];
        $banner_title = $row_home['banner_title'];
        $banner_image = $row_home['banner_image'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Basic Page Needs==================================================-->
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS==================================================-->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="script1.js"></script>
    <script type="text/javascript" src="script2.js"></script>
</head>
<body>
   <?php
    include 'userheader.php';
    ?>
    
    <div class="container">
    <div class="row" style="padding-top:100px;padding-bottom:">
      <?php
        if(empty($_SESSION["jtitle"]) && empty($_SESSION["jloc"]) && empty($_SESSION["jskill"]) )
        {
            header('location:index.php');
        }
        if(isset($_SESSION["jtitle"]))
        {
            $qw = "SELECT * FROM `job_vacancy` WHERE job_title LIKE '%".$_SESSION["jtitle"]."'";
            $ldet = mysqli_query($con,$qw);
            $count = mysqli_num_rows($ldet);
        }
        if(isset($_SESSION["jloc"]))
        {
            $qw = "SELECT * FROM `job_vacancy` WHERE location LIKE '%".$_SESSION["jloc"]."'";
            $ldet = mysqli_query($con,$qw);
            $count = mysqli_num_rows($ldet);
        }
        if(isset($_SESSION["jskill"]))
        {   
            $qw = "SELECT * FROM `job_vacancy` WHERE skill LIKE '%".$_SESSION["jskill"]."'";
            $ldet = mysqli_query($con,$qw);
            $count = mysqli_num_rows($ldet);
        }

        ?>
       <div class="col-sm-12 col-md-12">
           <h3><?php echo  $count ."&nbsp;&nbsp jobs found" ?></h3>
       </div>
            
    </div>
    <div class="row" style="background-color: #f2f2f2;border-bottom: 1px solid black;">
        <div class="col-xs-12 col-sm-12 reset-to-row explore-results-main-header">
            <div class="col-sm-3 explore-results-header hidden-xs">
                Explore results
            </div>
            <div class="col-sm-5 suggested-location">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 explore-results" style="background-color: #f2f2f2;border-right: 1px solid #e0e0e0;">
            <div class="refine-keyword-location">
                <form action="/RefineSearch/Search" method="post">        
                    <div class="form-group">
                        <label for="Keywords">Job title </label>
                        <ul>
                            <?php 
                                //$sql=mysqli_query($con,"SELECT * from job_title ");
                                $sql1=mysqli_query($con,"SELECT `job_title`,COUNT(*) FROM `job_vacancy` GROUP BY `job_title`");
                                //$r1 = mysqli_fetch_array($sql1);
                                while($r1=mysqli_fetch_array($sql1))
                                {
                                ?>
                                <li><a style="color: #d17119;" href="job_sector.php?job=<?php echo $r1['job_title'];?>"><?php echo $r1['job_title'];;?>(<span><?php echo $r1[1]; ?></span>)</a></li>
                                <?php
                                }
                            ?>   
                        </ul>
                    </div>
                </form>
            </div>
            <div class="your-filters facet-block">
                <div class="search-tags-list">
                </div>
            </div>
            <div class="facet-scroll">
                <div id="facetListTreeview" class="facet-block">
                    <div class="facet-label"><b>Locations</b></div>
                        <ul>
                            <?php
                                //$sql=mysqli_query($con,"SELECT * from job_title ");
                                $sql1=mysqli_query($con,"SELECT `location`,COUNT(*) FROM `job_vacancy` GROUP BY `location`");
                                //$r1 = mysqli_fetch_array($sql1);
                                while($r1=mysqli_fetch_array($sql1))
                                {
                                ?>
                                <li><a style="color: #d17119;" href="job_sector.php?job=<?php echo $r1['location'];?>"><?php echo $r1['location'];;?>(<span><?php echo $r1[1]; ?></span>)</a></li>
                                <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <div id="facetListCompanyType" class="facet-block ">
                        <div class="facet-label">Company</div>
                        <div class="facet-selection">
                            <ul class="facet-links">
                                <?php
                                //$sql=mysqli_query($con,"SELECT * from job_title ");
                                $sql1=mysqli_query($con,"SELECT `company_name`,COUNT(*) FROM `job_vacancy` GROUP BY `company_name`");
                                //$r1 = mysqli_fetch_array($sql1);
                                while($r1=mysqli_fetch_array($sql1))
                                {
                                ?>
                                <li><a style="color: #d17119;" href="job_sector.php?job=<?php echo $r1['company_name'];?>"><?php echo $r1['company_name'];;?>(<span><?php echo $r1[1]; ?></span>)</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div id="facetListJobType" class="facet-block ">
                        <div class="facet-label">Part Time Jobs</div>
                        <div class="facet-selection">
                            <ul class="facet-links">
                                <?php
                                //$sql=mysqli_query($con,"SELECT * from job_title ");
                                $sql1=mysqli_query($con,"SELECT `job_type`,COUNT(*) FROM `job_vacancy` GROUP BY `job_type`");
                                //$r1 = mysqli_fetch_array($sql1);
                                while($r1=mysqli_fetch_array($sql1))
                                {
                                ?>
                                <li><a style="color: #d17119;" href="job_sector.php?job=<?php echo $r1['job_type'];?>"><?php echo $r1['job_type'];;?>(<span><?php echo $r1[1]; ?></span>)</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>     
                </div>
            </div>
            <div class="col-sm-9 col-md-9">
            <?php
                if(!empty($_SESSION["jtitle"]) && !empty($_SESSION["jloc"]) && !empty($_SESSION["jskill"]) )
                {
                    $tit = $_SESSION["jtitle"];
                    $loc = $_SESSION["jloc"];
                    $skl = $_SESSION["jskill"];
                    $ldjob = "SELECT * FROM `job_vacancy` WHERE  job_title = '$tit' AND location = '$loc' AND skill = '$skl'  ";
                    $sh = mysqli_query($con,$ldjob);
                    while($rf = mysqli_fetch_array($sh))
                    {
                    ?>
                <div class="row" style=" padding-bottom: 20px; border: 9px solid #f2f2f2;">
                    <div class="col-sm-12">
                        <div class="job-title">
                            <a>
                                <h2><?php echo $rf['job_title'];?></h2>
                            </a>                   
                        </div>
                        <div class="detail-body">
                            <div class="row">
                                <div id="headerListContainer" class="col-xs-12 col-sm-8">
                                    <ul class="header-list">
                                        <li class="location">
                                            <span>
	                                            <span>
                                        		    <a href="/jobs/in-london"><?php echo $rf['location'];?></a>
                                        	    </span>
                                            </span>
                                            <div class="commute-time-info hidden" data-jobid="85736347" data-postcode="">
	                                            <div class="commute-time-error"></div>
	                                                <div class="commute-time-content">
		                                                <span class="commute-time"></span> 
		                                                    from 
                                                    		<div class="readonly-postcode">
                                                    			<span class="commute-time-from"></span> - <a class="change-location-link js-change-postcode">Update</a>
                                                    		</div>
                                                    		<div class="update-postcode-inline-form postcode-form">
                                                    			<form onsubmit="">
                                                    				<div class="form-control-wrapper">
                                                    					<input type="text" class="input form-control commute-time-from-input location-input" size="10" placeholder="Postcode" autocomplete="off" />
                                                    				</div>
                                                    				<button type="submit" class="btn btn-default form-control">Update</button>
                                                    			</form>
                                                    		</div>
                                                    	</div>
                                                    </div>
                                                </li>
                                                <li class="salary" title="salary"><b>Skill : </b><?php echo $rf['skill'];?></li>
                                                <li class="salary" title="salary"><b>Experience : </b><?php echo $rf['experience'];?></li>
                                                <li class="salary" title="salary"><b>Salary : </b><?php echo $rf['salary'];?></li>
                                            </ul>
                                        </div>
                                        <div id="recruiterImageContainer" class="col-xs-5 col-sm-4 pull-right">
                                            <div class="recruiter-image">
                                                <a href="job_details.php?id=<?php echo $rf['id'];?>">
                                                    <img class="img-responsive" src="upload/<?php echo $rf['image']; ?>" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 col-sm-8">
                                            <ul class="detail-list">
                                                    <li class="job-type">
                                                        <span title="employment type"><?php echo $rf['position'];?></span>
                                                    </li>
                                                <li class="date-posted" title="posted date">
                                                    <span >
                                                        Posted On : <?php echo $rf['date'];?>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row detail-footer">
                                        <div class="col-sm-12 col-md-10">
                                            <div title="job details">
                                                <p class="job-intro"><?php echo $rf['description'];?></p>
                                            </div>
                                        </div>
                                      
                                        <!-- <div class="email-job-col visible-xs visible-sm col-xs-4 col-md-2 col-sm-4">
                                                <button type="button" class="btn btn-default btn-sendjob" data-job-id="85736347" data-job-token="uUSyVVEqAQP7mzJD7bs7Ly/nBwC1Wx0RrPwCOgqxhre3FMVrBQL9p/5ZeK2eTZ7Z" data-toggle="modal" data-target="#sendJobModal">Send</button>
                                        </div> -->
                                       
                                        <!-- <div class="see-job-col visible-xs visible-sm col-xs-4 col-sm-4 col-md-4 ">
                                            <a class="btn btn-default btn-seejob" href="https://www.cwjobs.co.uk/job/java-developer/networking-people-job85736347"  >See</a>
                                        </div> -->
                                        <!-- <br>
                                        <div class="save-job-col col-xs-4 col-sm-4 col-md-2">
                                                <button id="85736347" class="saved-jobs-icon btn btn-default btn-savejob btn-mobile-hover-fix disabled" disabled="disabled" >Save</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                
                
                
                <?php
            }
                die();
                
         }
            
            
            ?>
            
            
            
            
            
            
            
            <?php
            if(isset($_SESSION["jtitle"]) )
            {
                   $tit = $_SESSION["jtitle"];
                   $ldjob = "SELECT * FROM `job_reg` WHERE  jobtitle = '$tit' ";
                    $sh = mysqli_query($con,$ldjob);
                    while($rf = mysqli_fetch_array($sh))
                    {
                        ?>
                
           
                <div class="row" style=" padding-bottom: 20px; border: 9px solid #f2f2f2;">
         <div class="col-sm-12">
            <div class="job-title">
                <a>
                    <h2><?php echo $rf['jobtitle'];?></h2>
                </a>
                                
            </div>
            <div class="detail-body">
                <div class="row">
                    <div id="headerListContainer" class="col-xs-12 col-sm-8">
                        <ul class="header-list">
                            <li class="location">
                                <span>
	<span>
		<a href="/jobs/in-london"><?php echo $rf['city'];?></a>
	</span>
</span>
<div class="commute-time-info hidden" data-jobid="85736347" data-postcode="">
	<div class="commute-time-error"></div>
	<div class="commute-time-content">
		<span class="commute-time"></span> 
		from 
		<div class="readonly-postcode">
			<span class="commute-time-from"></span> - <a class="change-location-link js-change-postcode">Update</a>
		</div>
		<div class="update-postcode-inline-form postcode-form">
			<form onsubmit="">
				<div class="form-control-wrapper">
					<input type="text" class="input form-control commute-time-from-input location-input" size="10" placeholder="Postcode" autocomplete="off" />
				</div>
				<button type="submit" class="btn btn-default form-control">Update</button>
			</form>
		</div>
	</div>
</div>
                            </li>
                            <li class="salary" title="salary"><?php echo $rf['salary'];?></li>
                        </ul>
                    </div>

<div id="recruiterImageContainer" class="col-xs-5 col-sm-4 pull-right">
    <div class="recruiter-image">
                        <img class="img-responsive" src="upload/<?php echo $rf['img_filename']; ?>" />

            
    </div>
</div>

                    <div class="col-xs-7 col-sm-8">
                        <ul class="detail-list">
                                <li class="job-type">
                                    <span title="employment type"><?php echo $rf['pos'];?></span>
                                </li>
                            <li class="date-posted" title="posted date">
                                <span >
                                    Posted 11 days ago
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row detail-footer">
                    <div class="col-sm-12 col-md-10">
                        <div title="job details">
                            <p class="job-intro"><?php echo $rf['description'];?></p>
                        </div>
                    </div>
                  
                    <div class="email-job-col visible-xs visible-sm col-xs-4 col-md-2 col-sm-4">
                            <button type="button" class="btn btn-default btn-sendjob" data-job-id="85736347" data-job-token="uUSyVVEqAQP7mzJD7bs7Ly/nBwC1Wx0RrPwCOgqxhre3FMVrBQL9p/5ZeK2eTZ7Z" data-toggle="modal" data-target="#sendJobModal">Send</button>
                        </div>
                   
                    <div class="see-job-col visible-xs visible-sm col-xs-4 col-sm-4 col-md-4 ">
                        <a class="btn btn-default btn-seejob" href="https://www.cwjobs.co.uk/job/java-developer/networking-people-job85736347"  >See</a>
                    </div>

                    <div class="save-job-col col-xs-4 col-sm-4 col-md-2">
                            <button id="85736347" class="saved-jobs-icon btn btn-default btn-savejob btn-mobile-hover-fix disabled" disabled="disabled" ><a href="JobDetails.php?id=<?php echo $rf['job_id'];  ?>">Save</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
                
                
                <?php
            }
                
         }
            
            
            ?>
            
            
            
            
            
            
            <?php
            if(isset($_SESSION["jloc"]))
            {
                $loc = $_SESSION["jloc"];
                   $ldjob = "SELECT * FROM `job_reg` WHERE  city = '$loc' ";
                    $sh = mysqli_query($con,$ldjob);
                    while($rf = mysqli_fetch_array($sh))
                    {
                        ?>
                
           
                <div class="row" style=" padding-bottom: 20px; border: 9px solid #f2f2f2;">
         <div class="col-sm-12">
            <div class="job-title">
                <a>
                    <h2><?php echo $rf['jobtitle'];?></h2>
                </a>
                                
            </div>
            <div class="detail-body">
                <div class="row">
                    <div id="headerListContainer" class="col-xs-12 col-sm-8">
                        <ul class="header-list">
                            <li class="location">
                                <span>
	<span>
		<a href="/jobs/in-london"><?php echo $rf['city'];?></a>
	</span>
</span>
<div class="commute-time-info hidden" data-jobid="85736347" data-postcode="">
	<div class="commute-time-error"></div>
	<div class="commute-time-content">
		<span class="commute-time"></span> 
		from 
		<div class="readonly-postcode">
			<span class="commute-time-from"></span> - <a class="change-location-link js-change-postcode">Update</a>
		</div>
		<div class="update-postcode-inline-form postcode-form">
			<form onsubmit="">
				<div class="form-control-wrapper">
					<input type="text" class="input form-control commute-time-from-input location-input" size="10" placeholder="Postcode" autocomplete="off" />
				</div>
				<button type="submit" class="btn btn-default form-control">Update</button>
			</form>
		</div>
	</div>
</div>
                            </li>
                            <li class="salary" title="salary"><?php echo $rf['salary'];?></li>
                        </ul>
                    </div>

<div id="recruiterImageContainer" class="col-xs-5 col-sm-4 pull-right">
    <div class="recruiter-image">
                        <img class="img-responsive" src="upload/<?php echo $rf['img_filename']; ?>" />

            
    </div>
</div>

                    <div class="col-xs-7 col-sm-8">
                        <ul class="detail-list">
                                <li class="job-type">
                                    <span title="employment type"><?php echo $rf['pos'];?></span>
                                </li>
                            <li class="date-posted" title="posted date">
                                <span >
                                    Posted 11 days ago
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row detail-footer">
                    <div class="col-sm-12 col-md-10">
                        <div title="job details">
                            <p class="job-intro"><?php echo $rf['description'];?></p>
                        </div>
                    </div>
                  
                    <div class="email-job-col visible-xs visible-sm col-xs-4 col-md-2 col-sm-4">
                            <button type="button" class="btn btn-default btn-sendjob" data-job-id="85736347" data-job-token="uUSyVVEqAQP7mzJD7bs7Ly/nBwC1Wx0RrPwCOgqxhre3FMVrBQL9p/5ZeK2eTZ7Z" data-toggle="modal" data-target="#sendJobModal">Send</button>
                        </div>
                   
                    <div class="see-job-col visible-xs visible-sm col-xs-4 col-sm-4 col-md-4 ">
                        <a class="btn btn-default btn-seejob" href="https://www.cwjobs.co.uk/job/java-developer/networking-people-job85736347"  >See</a>
                    </div>

                    <div class="save-job-col col-xs-4 col-sm-4 col-md-2">
                            <button id="85736347" class="saved-jobs-icon btn btn-default btn-savejob btn-mobile-hover-fix disabled" disabled="disabled" ><a href="JobDetails.php?id=<?php echo $rf['job_id'];  ?>">Save</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
                
                
                <?php
            }
                
         }
            
            
            ?>
            
            
            
            
            
            
            
            
            <?php
            if(isset($_SESSION["jskill"]) )
            {
                $skl = $_SESSION["jskill"];
                   $ldjob = "SELECT * FROM `job_reg` WHERE skill = '$skl'  ";
                    $sh = mysqli_query($con,$ldjob);
                    while($rf = mysqli_fetch_array($sh))
                    {
                        ?>
                
           
                <div class="row" style=" padding-bottom: 20px; border: 9px solid #f2f2f2;">
         <div class="col-sm-12">
            <div class="job-title">
                <a>
                    <h2><?php echo $rf['jobtitle'];?></h2>
                </a>
                                
            </div>
            <div class="detail-body">
                <div class="row">
                    <div id="headerListContainer" class="col-xs-12 col-sm-8">
                        <ul class="header-list">
                            <li class="location">
                                <span>
	<span>
		<a href="/jobs/in-london"><?php echo $rf['city'];?></a>
	</span>
</span>
<div class="commute-time-info hidden" data-jobid="85736347" data-postcode="">
	<div class="commute-time-error"></div>
	<div class="commute-time-content">
		<span class="commute-time"></span> 
		from 
		<div class="readonly-postcode">
			<span class="commute-time-from"></span> - <a class="change-location-link js-change-postcode">Update</a>
		</div>
		<div class="update-postcode-inline-form postcode-form">
			<form onsubmit="">
				<div class="form-control-wrapper">
					<input type="text" class="input form-control commute-time-from-input location-input" size="10" placeholder="Postcode" autocomplete="off" />
				</div>
				<button type="submit" class="btn btn-default form-control">Update</button>
			</form>
		</div>
	</div>
</div>
                            </li>
                            <li class="salary" title="salary"><?php echo $rf['salary'];?></li>
                        </ul>
                    </div>

<div id="recruiterImageContainer" class="col-xs-5 col-sm-4 pull-right">
    <div class="recruiter-image">
                        <img class="img-responsive" src="upload/<?php echo $rf['img_filename']; ?>" />

            
    </div>
</div>

                    <div class="col-xs-7 col-sm-8">
                        <ul class="detail-list">
                                <li class="job-type">
                                    <span title="employment type"><?php echo $rf['pos'];?></span>
                                </li>
                            <li class="date-posted" title="posted date">
                                <span >
                                    Posted 11 days ago
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row detail-footer">
                    <div class="col-sm-12 col-md-10">
                        <div title="job details">
                            <p class="job-intro"><?php echo $rf['description'];?></p>
                        </div>
                    </div>
                  
                    <div class="email-job-col visible-xs visible-sm col-xs-4 col-md-2 col-sm-4">
                            <button type="button" class="btn btn-default btn-sendjob" data-job-id="85736347" data-job-token="uUSyVVEqAQP7mzJD7bs7Ly/nBwC1Wx0RrPwCOgqxhre3FMVrBQL9p/5ZeK2eTZ7Z" data-toggle="modal" data-target="#sendJobModal">Send</button>
                        </div>
                   
                    <div class="see-job-col visible-xs visible-sm col-xs-4 col-sm-4 col-md-4 ">
                        <a class="btn btn-default btn-seejob" href="https://www.cwjobs.co.uk/job/java-developer/networking-people-job85736347"  >See</a>
                    </div>

                    <div class="save-job-col col-xs-4 col-sm-4 col-md-2">
                            <button id="85736347" class="saved-jobs-icon btn btn-default btn-savejob btn-mobile-hover-fix disabled" disabled="disabled" ><a href="JobDetails.php?id=<?php echo $rf['job_id'];  ?>">Save</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
                
                
                <?php
            }
                
         }
            
            
            ?>
          
          
</div>

           
       </div>
        
    </div>
    
    <?php
        
        include 'footer.php';
        
        
        ?>

   

        
    </div>
</body>
</html>
