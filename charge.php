<?php
include 'connection.php';
ob_start();
session_start();

    
              $a =$_POST['CUST_NAME'];
              $b= $_POST['CUST_ID'];
              $c =$_POST['TXN_AMOUNT'];
              $d= $_POST['razorpay_payment_id'];
     
                echo $a."<br>"."<br>".$b."<br>".$c."<br>".$d;
    
                if(isset($_SESSION['id']))
                {
                    $id = $_SESSION['id'];
                    $totjobslt = $_SESSION["jobslot"];
                    $q = "UPDATE `emp_reg` SET PaymentStatus='paid' ,amount = '$c',payment_id='$d', totaljobslot='$totjobslt' WHERE emp_id = '$id '";
                    $que = mysqli_query($con,$q);
                    
                    if($que)
                    {
                        $msg = "successfull";
                        $_SESSION["jobcreated"] = $msg;
                        header('location:employer-profile.php');
                    }
                    else
                    {
                        echo mysqli_error($con);
                    }
                    
                }
                else{
                     header('location:emp-login.php');
                }



           /*if(isset($_SESSION["freeid"]))
            {
                $freeid = $_SESSION["freeid"];
               
                $_SESSION["orid"] = $d;
                $_SESSION["amt"] =$c;
                
                $q = "UPDATE `freelancer` SET paymentstatus = 'Paid' WHERE free_id='$freeid' ";
                $query1 = mysqli_query($con,$q);
                if($query1)
                 {
                     header('location:setusnpass.php');
                        
                 }
                
                
            }
            else
            {
                header('location:freelanreg.php');
            }*/
           

/*echo "<prev>";
print_r($_POST);
die;*/

?>