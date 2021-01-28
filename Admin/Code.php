<?php
include 'connection.php';
ob_start();

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $q = "SELECT * FROM `user_reg` WHERE id = '$id'";
    $query = mysqli_query($con,$q);
    $row = mysqli_fetch_array($query);
    echo json_encode($row);    
}

if(isset($_POST['empid']))
{
    $id = $_POST['empid'];
    $q = "SELECT * FROM `emp_reg` WHERE emp_id = '$id'";
    $query = mysqli_query($con,$q);
    $row = mysqli_fetch_array($query);
    echo json_encode($row);    
}



if(isset($_POST['freeid']))
{
    $id = $_POST['freeid'];
    //$q = "SELECT * FROM `freelance_register` WHERE ID='$id' ";
    $q = "SELECT d.ImageUrl,r.Full_name,r.Email,r.register_with,d.FreProfile,d.Experience,d.Frestatus,d.Age,d.location FROM `freelance_register` as r INNER JOIN freelancer_details as d on r.ID = d.ID
WHERE  r.ID='$id'";
    $query = mysqli_query($con,$q);
    $row = mysqli_fetch_array($query);
    echo json_encode($row); 
}


if(isset($_POST['search']))
{
    $output = '';
    $key = $_POST['search'];
    $q = " SELECT * FROM `user_reg` WHERE uname LIKE '%".$key."%' OR number LIKE '%".$key."%' OR email LIKE '%".$key."%'  ";
    $query = mysqli_query($con,$q);
    if(mysqli_num_rows($query)>0)
    {
        $output .= '<h4>Search Result</h4>';
        $output .= '<table class="table" border="1">
              <tr style="background: blue;color: white;">
                  <th>Sl no</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>View</th>
              </tr>';
         $i=1;
                while($row = mysqli_fetch_array($query))
                {
                    $output .=
                        '<tr>
                        <td>'.$i.'</td>
                        <td>'.$row['uname'].'</td>
                        <td>'.$row['number'].'</td>
                        <td>'.$row['email'].'</td>
                        <td><a id="'.$row['id'].'" class="view"><button class="btn btn-danger">View</button></a></td>
                        </tr>';
                        $i++;
                    
                    
                }
        $output .='</table>';
        echo $output;
        
    }
    else
    {
        echo "data not found";
    }
}



if(isset($_POST['search1']))
{
    $output = '';
    $key = $_POST['search1'];
    $q = " SELECT * FROM `emp_reg` WHERE name LIKE '%".$key."%' OR mobile LIKE '%".$key."%' OR email LIKE '%".$key."%'  ";
    $query = mysqli_query($con,$q);
    if(mysqli_num_rows($query)>0)
    {
        $output .= '<h4>Search Result</h4>';
        $output .= '<table class="table" border="1">
              <tr style="background: blue;color: white;">
                  <th>Sl no</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Company Name</th>
                  <th>Payment Status</th>
                  <th>View</th>
              </tr>';
         $i=1;
                while($row = mysqli_fetch_array($query))
                {
                    $output .=
                        '<tr>
                        <td>'.$i.'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['mobile'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['cmp_name'].'</td>
                        <td>'.$row['PaymentStatus'].'</td>
                        <td><a id="'.$row['emp_id'].'" class="view"><button class="btn btn-danger">View</button></a></td>
                        </tr>';
                        $i++;
                    
                    
                }
        $output .='</table>';
        echo $output;
        
    }
    else
    {
        echo "data not found";
    }
}


if(isset($_POST['search2']))
{
    $output = '';
    $key = $_POST['search2'];
    $q = " SELECT r.ID,d.ImageUrl,r.Full_name,r.Email,r.register_with,d.FreProfile,d.Experience,d.Frestatus,d.Age,d.location FROM `freelance_register` as r INNER JOIN freelancer_details as d on r.ID = d.ID
WHERE r.Full_name LIKE '%".$key."%' OR r.Email LIKE '%".$key."%'  ";
    $query = mysqli_query($con,$q);
    if(mysqli_num_rows($query)>0)
    {
        $output .= '<h4>Search Result</h4>';
        $output .= '<table class="table" border="1">
              <tr style="background: blue;color: white;">
                  <th>Sl no</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Register From</th>
                  <th>View</th>
              </tr>';
              $i=1;
                while($row = mysqli_fetch_array($query))
                {
                    $output .=
                        '<tr>
                        <td>'.$i.'</td>
                        <td>'.$row['Full_name'].'</td>
                        <td>'.$row['Email'].'</td>
                        <td>'.$row['register_with'].'</td>
                        <td><a id="'.$row['ID'].'" class="view"><button class="btn btn-danger">View</button></a></td>
                        </tr>';
                        $i++;
                    
                    
                }
        $output .='</table>';
        echo $output;
        
    }
    else
    {
        echo "data not found";
    }
}




?>