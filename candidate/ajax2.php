
                    <!-- ============================================================== -->
                <div class="offset-xl-1 col-xl-10">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="section-block">
                        <h3></h3>
                    </div>
                    </div>
                    <?php 
                    include "connection.php";
 
//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   
      $city = $_POST['search'];

 
//Search query.
 
   $Query = "SELECT * FROM job_reg WHERE  city LIKE '%$city%' LIMIT 5";
      $ExecQuery = MySQLi_query($con, $Query);
while ($Result = MySQLi_fetch_array($ExecQuery))
 {
?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header bg-primary text-center p-3 ">
                                <h4 class="mb-0 text-white"> </h4>
                            </div>
                               
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li onclick='fill("<?php echo $Result['cname']; ?>")'>  <a><?php echo $Result['cname']; ?></a></li>
                                      <li onclick='fill("<?php echo $Result['skill']; ?>")'><a><?php echo $Result['skill']; ?></a></li>
                                    <li onclick='fill("<?php echo $Result['experience']; ?>")'><a><?php echo $Result['experience']; ?></a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <?php
   }
 }
?>
                </div>
               </div>
 
 
   <!-- Creating unordered list items.
 
        Calling javascript function named as "fill" found in "script.js" file.
 
        By passing fetched result as parameter. -->
 
