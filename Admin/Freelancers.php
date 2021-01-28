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
 <h2>Total number of Freelancers<span><b><a id="count"></a></b></span></h2>
    </header>
    <div class="container">
       <div class="row text-center" style="padding-top:20px;" id="sea">
        <div class="col-sm-2 col-md-2">
             <label style="color:red">SEARCH</label>
         </div>
         <div class="col-sm-8 col-md-8">
             <input type="text" id="search" class="form-control" placeholder="Search by name or email">
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
                  <th>Email</th>
                  <th>Register From</th>
                  <th>View</th>
              </tr>
              <?php
               
                $q = "SELECT * FROM `freelance_register` inner join `freelancer_details` on freelance_register.ID =  freelancer_details.ID";
                $query = mysqli_query($con,$q);
                $count = mysqli_fetch_row($query);
                $i=1;
                while($row = mysqli_fetch_array($query))
                {
                    ?>
                    <tr>
                     <td><?php echo $i; ?></td>
                     <td><?php echo $row['Full_name']; ?></td>
                     <td><?php echo $row['Email']; ?></td>
                     <td><?php echo $row['register_with']; ?></td>
                     <td><a class="view" id="<?php echo $row['ID'];  ?>"><button class="btn btn-danger" >View</button></a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Freelancers Details</h5>
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
                     
                     <input type="text" id="name" class="form-control" name="name" disabled>
                        
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                     
                     <input type="text" id="Age" class="form-control" name="Age" disabled>
                        
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                    
                     <input type="text" id="Email" class="form-control" name="Email" disabled>
                         
                    </div>
                 </div>
                  
              </div>
               
               
           </div>
            <div class="col-sm-6 col-md-6">
             <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                    
                     <input type="text" id="FreProfile" class="form-control" name="FreProfile" disabled>
                         
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                   
                     <input type="text" id="Experience" class="form-control"  name="Experience" disabled>
                          
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        
                   
                     <input type="text" id="Frestatus" class="form-control" name="Frestatus" disabled>
                      </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        
                    
                     <input type="text" id="location" class="form-control" name="location" disabled>
                     </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        
                   
                     <input type="text" id="register_with" class="form-control" name="register_with" disabled>
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
            var freeid = $(this).attr("id");
            $.ajax({
                url : "Code.php",
                method : "POST",
                data : {freeid : freeid },
                dataType : "json",
                success : function(data){
                    $('#image').attr('src','Freelance_Images/'+ data.ImageUrl +'')
                    $('#name').val(data.Full_name);
                    $('#Age').val(data.Age);
                    $('#Email').val(data.Email);
                    $('#FreProfile').val(data.FreProfile);
                    $('#Experience').val(data.Experience);
                    $('#Frestatus').val(data.Frestatus);
                    $('#location').val(data.location);
                    $('#register_with').val(data.register_with);
                    $('#hidId').val(data.ID);
                    $('#exampleModal').modal('show');
                    //alert(data);
                    
                }
                
            })
            
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
                     data :{ search2 : txt },
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