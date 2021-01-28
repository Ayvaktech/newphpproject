<?php
include 'connection.php';
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php include 'AdHeader.php' ?>
   <div id="right-panel" class="right-panel">
    <header id="header" class="header">
 <h2>Total number of Employers<span><b><a id="count"></a></b></span></h2>
        </header>
        
        <div class="container">
        <div class="row text-center" style="padding-top:20px;" id="sea">
        <div class="col-sm-2 col-md-2">
             <label style="color:red">SEARCH</label>
         </div>
         <div class="col-sm-8 col-md-8">
             <input type="text" id="search" class="form-control" placeholder="Search by name or number or email">
         </div>
          
      </div>
      <div class="row" style="padding-top:20px;" id="data2">
       <div class="col-sm-12 col-md-12">
         
          </div>
        </div>
       <div class="row" style="padding-top:20px;" id="data1">
       <div class="col-sm-12 col-md-12">
           <table class="table" border="1">
              <tr style="background: blue;color: white;">
                  <th>Sl no</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Company Name</th>
                  <th>Payment Status</th>
                  <th>View</th>
              </tr>
              <?php
               
                $q = "SELECT * FROM `emp_reg`";
                $query = mysqli_query($con,$q);
                $count = mysqli_fetch_row($query);
                $i=1;
                while($row = mysqli_fetch_array($query))
                {
                    ?>
                    <tr>
                     <td><?php echo $i; ?></td>
                     <td><?php echo $row['name']; ?></td>
                     <td><?php echo $row['mobile']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><?php echo $row['cmp_name']; ?></td>
                     <td><?php echo $row['PaymentStatus']; ?></td>
                     <td><a id="<?php echo $row['emp_id']; ?>" class="view"><button class="btn btn-danger" >View</button></a></td>
                    </tr>
                    <?php
                        $i++;
                }
               ?>
              
               
           </table>
       </div>
        
    </div>
       
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Employers Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-center">
           <div class="col-sm-6 col-md-6">
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                    
                     <img id="image" height="100px" class="img-responsive" style="2px solid #cccc;">
                         
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                     
                     <input type="text" id="name" name="name" class="form-control" disabled>
                        
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                     
                     <input type="text" id="mobile" name="mobile" class="form-control" disabled>
                        
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                    
                     <input type="text" id="Email" name="Email" class="form-control" disabled>
                         
                    </div>
                 </div>
                  
              </div>
               
               
           </div>
            <div class="col-sm-6 col-md-6">
             <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                    
                     <input type="text" id="cname" name="cname" class="form-control" disabled>
                         
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                   
                     <input type="text" id="PaySts"  name="PaySts" class="form-control" disabled>
                          
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        
                   
                     <input type="text" id="regdate" name="regdate" class="form-control" disabled>
                      </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        
                    
                     <input type="text" id="Location" name="Location" class="form-control" disabled>
                     </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        
                   
                     <textarea  id="cmp_address" name="cmp_address" class="form-control" disabled>
                     </textarea>
                     <input type="hidden" id="hidId" name="hidId">
                      </div>
                 </div>
                  
              </div>
               
           </div>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
       
       
        
    </div>
    </div>
    
    <script>
        
        $(document).on('click','.view',function(){
            var empid = $(this).attr("id");
            $.ajax({
                url : "Code.php",
                method : "POST",
                data : {empid : empid },
                dataType : "json",
                success : function(data){
                    $('#image').attr('src','emp_images/'+ data.emp_image +'')
                    $('#name').val(data.name);
                    $('#mobile').val(data.mobile);
                    $('#Email').val(data.email);
                    $('#cname').val(data.cmp_name);
                    $('#PaySts').val(data.PaymentStatus);
                    $('#regdate').val(data.regdate);
                    $('#Location').val(data.location);
                    $('#RegWith').val(data.register_with);
                    $('#cmp_address').val(data.cmp_address);
                    $('#hidId').val(data.emp_id);
                    $('#exampleModal').modal('show');
                    
                }
                
            })
            
            //alert(id);
           
            
        });
    
    </script>
    <script>
        
        $('#search').keyup(function(){
            var txt = $(this).val();
            if(txt!='')
            {
                $.ajax({
                     url : "Code.php",
                     method : "POST",
                     data :{ search1 : txt },
                     dataType:"text",
                     success : function(data)
                    {
                        $('#data2').html(data);
                        $('#data2').css('display','inline');
                        $('#data1').css('display','none');
                    }
                    
                });
                    
            }
            else{
                $('#data1').css('display','inline');
                $('#data2').css('display','none');
                $('#sea').css('padding-bottom','20px');
                
                
            }
            
        });
        
    </script>
    
</body>
</html>