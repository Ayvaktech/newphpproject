<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   
   <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <h2 style="color: #fff;">Admin Panel</h2>

               <!--  <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> -->
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children">
                        <a href="Dashboard.php">Dashboard</a>
                    </li>
                     <li class="menu-item-has-children">
                        <a href="Candidates.php">Candidates</a>
                    </li>
                     <li class="menu-item-has-children">
                        <a href="Employers.php">Employer</a>
                    </li>
                     <li class="menu-item-has-children">
                        <a href="Freelancers.php">Freelancer</a>
                    </li>
                    <li class="menu-item-has-children">
                      <form method="post"> 
                          <button type="submit" name="logout" class="btn btn-danger">LOGOUT</button>
                      </form>
                      
                       
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
   <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>

<?php

if(isset($_POST['logout']))
{
    session_destroy();
    header('location:Admin-login.php');
       
}




?>