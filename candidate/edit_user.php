<?php
include("connection.php");
$msg='';
if(isset($_POST['submit']))
{

$id=$_POST['id'];
 // $a=$_POST['title'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$number=$_POST['number'];
$location=$_POST['location'];
$qual=$_POST['qual'];
$exp=$_POST['exp'];
$skill=$_POST['skill'];

$sql=mysqli_query($con,"UPDATE  user_reg set uname='$uname', email='$email',number='$number',location='$location',qual='$qual',exp='$exp',skill='$skill' where id='$id'");
header("location:profile.php");
}




?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Candidate Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="assets/vendor/inputmask/css/inputmask.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
     <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="adminindex.html">Sarswatichander</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            
                        </li>
                        <li class="nav-item dropdown notification">
                            

                            
                        </li>
                    
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                               

                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="adminindex.html" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success"></span></a>
                             
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Job</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="../browse-job.php">Browse Job</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" href="managejob.php">Manage Job</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewjob.php">View Job</a>
                                        </li>
                                       
                                        
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Company</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="browsecompany.php">Browse Company</a>
                                        </li>
                                        
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Profile</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile.php">View Candidate Profile</a>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                            </li>
                           
                           
                          <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fab fa-fw fa-wpforms"></i>Resume</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="manageresume.php">Manage Resume</a>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                            </li>
                          
                            
                           
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
       <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        <div class="page-section" id="overview">
                            <!-- ============================================================== -->
                            <!-- overview  -->
                            <!-- ============================================================== -->
                         
                            <!-- ============================================================== -->
                            <!-- end overview  -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Edit User Details</h3>
                                    <p></p>
                                </div>
                                <div class="card">
                                    <h5 class="card-header"></h5>

                      <?php
    $id=$_GET['id'];
    $sql=mysqli_query($con,"select * from user_reg where id='$id'");
    while($row=mysqli_fetch_array($sql)){
    ?>
                                    <div class="card-body">
                                        <form method="POST">
                                         <input type="hidden" name="id" value="<?php echo $row['id'];  ?>">
                                            <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">  </span>
         </div>
        <input name="uname" class="form-control" placeholder="Full name" type="text" value="<?php echo $row['uname']; ?>">
    </div>
                                            <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">  </span>
         </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" value="<?php echo $row['email']; ?>">
    </div>
                                             <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">  </span>
         </div>
        <input name="number" class="form-control" placeholder="Contact Number" type="text" value="<?php echo $row['number']; ?>">
    </div>
     <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">  </span>
         </div>
        <input name="location" class="form-control" placeholder="Current Location" type="text" value="<?php echo $row['location']; ?>">
    </div>
                                            <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">  </span>
         </div>
        <input name="qual" class="form-control" placeholder="Qualification" type="text" value="<?php echo $row['qual']; ?>">
    </div>
                                            <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">  </span>
         </div>
        <input name="exp" class="form-control" placeholder="Experience" type="text" value="<?php echo $row['exp']; ?>">
    </div>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">  </span>
         </div>
        <input name="skill" class="form-control" placeholder="Skill" type="text" value="<?php echo $row['skill']; ?>">
    </div>
                                          
                                            <input type="submit" name="submit" value="Submit" class="btn btn-block btn-primary">
                                               <?php
    }
 ?>
 
                                        </form>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- select options  -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- end select options  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- checkboxes and radio -->
                        <!-- ============================================================== -->
                   
                        <!-- ============================================================== -->
                        <!-- end checkboxes and radio -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- validation state -->
                        <!-- ============================================================== -->
                    
                        <!-- ============================================================== -->
                        <!-- end validation state -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- input groups -->
                        <!-- ============================================================== -->
                    
                        <!-- ============================================================== -->
                        <!-- end input groups -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- inputmask -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- end  inputmask -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- switch component -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- end switch component -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- sidenavbar -->
                   
                    <!-- ============================================================== -->
                    <!-- end sidenavbar -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
       
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    <script>
    $(function(e) {
        "use strict";
        $(".date-inputmask").inputmask("dd/mm/yyyy"),
            $(".phone-inputmask").inputmask("(999) 999-9999"),
            $(".international-inputmask").inputmask("+9(999)999-9999"),
            $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
            $(".purchase-inputmask").inputmask("aaaa 9999-****"),
            $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
            $(".ssn-inputmask").inputmask("999-99-9999"),
            $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
            $(".currency-inputmask").inputmask("$9999"),
            $(".percentage-inputmask").inputmask("99%"),
            $(".decimal-inputmask").inputmask({
                alias: "decimal",
                radixPoint: "."
            }),

            $(".email-inputmask").inputmask({
                mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                greedy: !1,
                onBeforePaste: function(n, a) {
                    return (e = e.toLowerCase()).replace("mailto:", "")
                },
                definitions: {
                    "*": {
                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                        cardinality: 1,
                        casing: "lower"
                    }
                }
            })
    });
    </script>
</body>
 
</html>