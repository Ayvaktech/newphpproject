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
    <h2>Total number of candidates<span><b><a id="count"></a></b></span></h2>
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
                  <th>View</th>
              </tr>
              <?php
               
                $q = "SELECT * FROM `user_reg`";
                $query = mysqli_query($con,$q);
                $count = mysqli_fetch_row($query);
                $i=1;
                while($row = mysqli_fetch_array($query))
                {
                    ?>
                    <tr>
                     <td><?php echo $i; ?></td>
                     <td><?php echo $row['uname']; ?></td>
                     <td><?php echo $row['number']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><a id="<?php echo $row['id'];    ?>" class="view"><button class="btn btn-danger">View</button></a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Candidate Details</h5>
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
                     
                     <input type="text" id="mobile" class="form-control" name="mobile" disabled>
                        
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
                    
                     <input type="text" id="qual" class="form-control" name="qual" disabled>
                         
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                   
                     <input type="text" id="exp" class="form-control"  name="exp" disabled>
                          
                    </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        
                   
                     <input type="text" id="skill" class="form-control" name="skill" disabled>
                      </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        
                    
                     <input type="text" id="Location" class="form-control" name="Location" disabled>
                     </div>
                 </div>
                  
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        
                   
                     <input type="text" id="RegWith" class="form-control" name="RegWith" disabled>
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
            var id = $(this).attr("id");
            $.ajax({
                url : "Code.php",
                method : "POST",
                data : {id : id },
                dataType : "json",
                success : function(data){
                    $('#image').attr('src','upload1/'+ data.img_filename +'')
                    $('#name').val(data.uname);
                    $('#mobile').val(data.number);
                    $('#Email').val(data.email);
                    $('#qual').val(data.qual);
                    $('#exp').val(data.exp);
                    $('#skill').val(data.skill);
                    $('#Location').val(data.location);
                    $('#RegWith').val(data.register_with);
                    $('#hidId').val(data.id);
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
                     data :{ search : txt },
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