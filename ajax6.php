 <div class="item-click">
						<?php 
                    include "connection.php";
 
//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   
      $jobtitle = $_POST['search'];

 
//Search query.
 
   $Query = "SELECT * FROM job_reg WHERE  jobtitle LIKE '%$jobtitle%' LIMIT 5";
      $ExecQuery = MySQLi_query($con, $Query);
while ($Result = MySQLi_fetch_array($ExecQuery))
 {
?>
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href=""><h3><li onclick='fill("<?php echo $Result['cname']; ?>")'  ">   <a><?php echo $Result['cname']; ?></a></li></h3></a>
										<p>
											<span></span><span class="brows-job-sallery"><li onclick='fill("<?php echo $Result['salary']; ?>")'><a><?php echo $Result['salary']; ?></span>
											<li onclick='fill("<?php echo $Result['pos']; ?>")' ><a><?php echo $Result['pos']; ?></
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p> <li onclick='fill("<?php echo $Result['city']; ?>")' ><a><?php echo $Result['city']; ?></a></li></p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										 <li onclick='fill("<?php echo $Result['experience']; ?>")' ><a><?php echo $Result['experience']; ?></a></li>
									</div>
								</div>
							</div>
							<span class="tg-themetag tg-featuretag"><li onclick='fill("<?php echo $Result['jobtitle']; ?>")' "><a><?php echo $Result['jobtitle']; ?></span>
						</article>
						 <?php
   }
 }
?>
							
					</div>
				