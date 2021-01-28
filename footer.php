<?php
    include('connection.php');

    $get_home= "select * from home LIMIT 1";
    $run_home = mysqli_query($con, $get_home);
    while ($row_home = mysqli_fetch_array($run_home))
    {
        $title = $row_home['title'];
        $logo = $row_home['logo'];
        $banner_title = $row_home['banner_title'];
        $copyright = $row_home['copyright'];
        $details = $row_home['details'];

    }
?>
<footer class="footer">
        <div class="row lg-menu">
            <div class="container">
                <div class="col-md-4 col-sm-4"><img src="assets/img/logo/<?php echo $logo; ?>" class="img-responsive" alt=""/>
                </div>
                
            </div>
        </div>
        <div class="row no-padding">
            <div class="container">
                <div class="col-md-3 col-sm-12">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">About Saraswathi Chandra</h3>

                        <div class="textwidget">
                            <p align="justify"><?php echo $details; ?></p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">Quick Links</h3>

                        <div class="textwidget">
                            <div class="textwidget">
                                <ul class="footer-navigation">
                                    <li><a href="about-us.php" title="">About Us</a></li>
                                    <li><a href="blog.php" title="">Blog</a></li>
                                    <li><a href="services.php" title="">Terms of Service</a></li>
                                    <li><a href="privacy-policy.php" title="">Privacy Policy</a></li>
                                    <li><a href="register.php" title="">Register</a></li>
                                    <li><a href="contact-us.php" title="">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">Jobs In India</h3>

                        <div class="textwidget">
                            <ul class="footer-navigation">
                                <?php
                                        $get_about = "SELECT DISTINCT location FROM job_vacancy LIMIT 6";
                                        $run_about = mysqli_query($con, $get_about);
                                        while ($row_about = mysqli_fetch_array($run_about))
                                        {
                                            $location = $row_about['location'];

                                            echo "
                                                <li><a href='job_sector.php?job=$location' title='$location'>$location</a></li>
                                                
                                            ";
                                            
                                            
                                        }
                                    ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">Jobs By Categories</h3>

                        <div class="textwidget">
                            <ul class="footer-navigation">
                                <li><a href="#" title="">Computer Software Job</a></li>
                                <li><a href="#" title="">Customer Service Jobs</a></li>
                                <li><a href="#" title="">Education Jobs</a></li>
                                <li><a href="#" title="">Engineering Jobs</a></li>
                                <li><a href="#" title="">Web & E-Commerce Jobs</a></li>
                                <li><a href="#" title="">Accounting Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="container">
                <p><?php echo $copyright; ?></p>
            </div>
        </div>
    </footer>