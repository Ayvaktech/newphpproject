<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Basic Page Needs==================================================-->
    <title>Saraswathichandra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS==================================================-->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="script1.js"></script>
    <script type="text/javascript" src="script2.js"></script>
</head>
<body>
   <?php
    include 'userheader.php';
    ?>
    
    
    <div class="container-fluid">
       <div class="row" style="padding-top:120px;padding-bottom: 25px;">
         <div class="col-sm-2 col-md-2">
             
         </div>
          <div class="col-sm-8 col-md-8">
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <p style="font-size:30px;">Request a call back</p><br>
                <p>
                    Simply fill in your details below and one of our experts will be in contact to explain how we can help you hire smarter.
                </p>

                      
                  </div>
                   
               </div>
              <div class="row" style="border: 1px solid #d9d9d9;background-color: #f2f2f2;    padding-top: 30px;">
                          <div class="col-sm-2 col-md-2">
                              
                          </div>
                           <div class="col-sm-8 col-md-8">
                           <div class="row">
                              <div class="col-sm-4 col-md-4">
                                  Nature of enquiry*
                              </div>
                              <div class="col-sm-8 col-md-8">
                                  <input type="radio" name="enq" value="" checked>I'm an employer with a hiring need<br>
                                  <input type="radio" name="enq" value="">I'm looking for a job
                              </div>
                               
                           </div>
                           <div class="row">
                              <div class="col-sm-4 col-md-4">
                                 enquiry*
                              </div>
                              <div class="col-sm-8 col-md-8">
                                  <textarea name="enqdes" class="form-control">
                                      
                                  </textarea>
                             </div>
                               
                           </div>
                            <div class="row">
                              <div class="col-sm-4 col-md-4">
                                 Your Company*
                              </div>
                              <div class="col-sm-4 col-md-4">
                                  <input type="text" class="form-control" placeholder="Comapany name" name="cname">
                             </div>
                              <div class="col-sm-4 col-md-4">
                                  <input type="text" class="form-control" placeholder="Postal code" name="code">
                             </div>
                               
                           </div>
                           <div class="row">
                              <div class="col-sm-4 col-md-4">
                                 Your Contact Details*
                              </div>
                              <div class="col-sm-4 col-md-4">
                                  <input type="text" class="form-control" placeholder="First name" name="fname">
                             </div>
                              <div class="col-sm-4 col-md-4">
                                  <input type="text" class="form-control" placeholder="Last name" name="lname">
                             </div>
                               
                           </div>
                           <div class="row">
                              <div class="col-sm-4 col-md-4">
                                 
                              </div>
                              <div class="col-sm-4 col-md-4">
                                  <input type="text" class="form-control" placeholder="Email Address" name="email">
                             </div>
                              <div class="col-sm-4 col-md-4">
                                  <input type="text" class="form-control" placeholder="Number" name="mob">
                             </div>
                               
                           </div>
                             <div class="row">
                              <div class="col-sm-4 col-md-4">
                                Recruiter type*
                              </div>
                              <div class="col-sm-8 col-md-8">
                                  <select name="selrec" class="form-control">
                                      <option>Please Select</option>
                                       <option>Direct employer</option>
                                        <option>Recruitment Advertising company</option>
                                         <option>Recruitment Consultancy</option>
                                  </select>
                             </div>
                               
                           </div>
                           <div class="row">
                              <div class="col-sm-4 col-md-4">
                                
                              </div>
                              <div class="col-sm-8 col-md-8">
                                 <p> By providing us with your details you agree to our privacy policy and for us to keep you updated with the latest news, events, and special offers from totaljobs, unless you have ticked the box below. If you would prefer not to receive our marketing emails, please tick the box below.</p>
                             </div>
                               
                           </div>
                           <div class="row">
                              <div class="col-sm-4 col-md-4">
                                
                              </div>
                              <div class="col-sm-8 col-md-8">
                                 <input type="radio" name="chk" >Please do not send me marketing emails from Totaljobs
                             </div>
                               
                           </div>
                             <div class="row" style="padding-bottom: 15px;">
                              <div class="col-sm-4 col-md-4">
                                
                              </div>
                              <div class="col-sm-8 col-md-8">
                                 <input type="submit" class="btn btn-success" name="submit" value="submit">
                             </div>
                               
                           </div>
                           
                          </div>
                           <div class="col-sm-2 col-md-2">
                   
                          </div>
                           
                </div>
             </div>
           <div class="col-sm-2 col-md-2">
             
         </div>
           
       </div>
        
    </div>
    <?php
    
    include 'footer.php';
    
    ?>
    
</body>
</html>