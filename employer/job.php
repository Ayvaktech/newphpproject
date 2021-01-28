<?php
include("connection.php");
$msg='';


//how to use a class
if(isset($_POST['submit']))
{
    $cname=$_POST['cname'];
    $jobtitle=$_POST['jobtitle'];
    $skill=$_POST['skill'];
    $experience=$_POST['experience'];   
    $salary=$_POST['salary'];
    $city=$_POST['city'];
    $pos=$_POST['pos'];
    $description=$_POST['description'];
    $age=$_POST['age'];
    $lang=$_POST['lang'];
    $img_name=$_FILES["uploadedfile"]["name"];
if (($_FILES["uploadedfile"]["type"]=="image/gif"
|| $_FILES["uploadedfile"]["type"]=="image/jpeg"
|| $_FILES["uploadedfile"]["type"]=="image/pjpeg"
&& $_FILES["uploadedfile"]["size"]<20000))
{
if ($_FILES["uploadedfile"]["error"]>0)
{
echo "Return Code:".$_FILES["uploadedfile"]["error"]."<br />";
}
else
{
$i=1;
$success=false;
$new_img_name=$img_name;
while(!$success)
{
if (file_exists("upload/".$new_img_name))
{
$i++;
$new_img_name="$i".$img_name;
}
else
{
$success=true;
}
}
move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],"upload/".$new_img_name);
echo "Stored in: "."upload/".$new_img_name;
echo "<br />";
$sql=mysqli_query($con,"insert into job_reg(cname,jobtitle,skill,experience,salary,city,pos,img_filename,description,age,lang) values('$cname','$jobtitle','$skill','$experience','$salary','$city','$pos','$new_img_name','$description','$age','$lang')");
$msg="Job Details Added Successfully"; 
}
}
}
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employer Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="assets/vendor/inputmask/css/inputmask.css" />
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
                    <a class="d-xl-none d-lg-none" href="adminindex.html">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="adminindex.html" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success"></span></a>
                             
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Company</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="newcompany.php">Create Company</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewcompany.php">View Company</a>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Job</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="job.php">Job Details</a>
                                        </li>
                                        
                                       
                                        
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Manage Company</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewcomp.php">View Applications</a>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Manage Candidate</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">View Candidate</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">View Resume</a>
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
                                    <h3 class="section-title"> Job Details</h3>
                                    <p></p>
                                </div>
                                <div class="card">
                                    <h5 class="card-header"></h5>
                                                   <?php if($msg !=''){?> <div class="alert alert-success"><b><?php echo $msg?></b> </div><?php }?>

                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                         
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Company Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="cname">
                                            </div>
                                           
                                            
                                            <div class="form-group">
                                                <label for="inputEmail">Job Title</label>
                                                <input id="inputText3" type="text" placeholder="" class="form-control" name="jobtitle">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail">Skills</label>
                                                <input id="inputText3" type="text" placeholder="" class="form-control" name="skill">
                                               
                                            </div>
                                               <div class="form-group">
                                                <label for="inputEmail">Experience Required</label>
                                                <input id="inputText3" type="text" placeholder="" class="form-control" name="experience">
                                               
                                            </div>
                                          <div class="form-group">
                                                <label for="inputEmail">Salary</label>
                                                <input id="inputText3" type="text" placeholder="" class="form-control" name="salary">
                                               
                                            </div>
                                              <div class="form-group">
                                                <label for="inputEmail">City</label>
                                                <input id="inputText3" type="text" placeholder="" class="form-control" name="city">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Job Position</label>
                                              <select id="sms" name="pos" class="form-control" required="">
                                <option value="">--Select Type--</option>
                                <option value="Contract Job">Contract Job</option>
                <option value="Full Time Job">Full Time Job</option>
                <option value="Part Time Job">Part Time Job</option>
               
              </select> 
                                            </div>
                                           <div class="form-group">
                                                <label for="inputEmail">Logo</label>
                                                <input id="inputText3" type="file" placeholder="" class="form-control" name="uploadedfile">
                                               
                                            </div>
                                              <div class="form-group">
                                                <label for="inputEmail">Description</label>
                                                <input id="inputText3" type="text" placeholder="" class="form-control" name="description">
                                               
                                            </div>
                                              <div class="form-group">
                                                <label for="inputEmail">Age</label>
                                                <input id="inputText3" type="text" placeholder="" class="form-control" name="age">
                                               
                                            </div>
                                              <div class="form-group">
                                                <label for="inputEmail">Languages Known</label>
                                                <input id="inputText3" type="text" placeholder="" class="form-control" name="lang">
                                               
                                            </div>
                                            <input type="submit" name="submit" value="Create" class="btn btn-block btn-primary">
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