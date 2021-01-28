<!DOCTYPE html>
<html lang="en">
<head>
   <title>Saraswathichandra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS==================================================-->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="script1.js"></script>
    <script type="text/javascript" src="script2.js"></script>
    <style>
        /* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}


        
    </style>
    
    <script>
    
        function calamount()
        {
            //alert("working");
            var fixedamt = 1850;
            var fixedamt1= 3900;
            var fixedamt2 = 4800;
            var fixedamt3 = 6300;
            
            var cover = 650;
            
            var amtvalue = document.getElementsByName("radio1");
            var amtvalue1= document.getElementsByName("radio2");
            var amtvalue2 = document.getElementsByName("radio3");
            var amtvalue3 = document.getElementsByName("radio");
            
            
            var chk =  document.getElementById("chk");
            var chk1 = document.getElementById("chk1");
            var chk2 = document.getElementById("chk2");
            var chk3 = document.getElementById("chk3");
            
        
            
         
            if(amtvalue[0].checked)
            {
                if(chk.checked)
                {
                     var type1 = parseInt(document.getElementById("tb1Reg").value);
                     var tot = parseInt(type1 + cover );
                     /*var result = document.getElementById("amt").innerHTML ="&nbsp;" + tot;  
                     var result = document.getElementById("amt1").innerHTML ="&nbsp;" + tot;*/
                        
                }
                else
                {
                     var type1 = parseInt(document.getElementById("tb1Reg").value);
                     var tot = type1;
                     var result = document.getElementById("Totalamount").innerHTML ="&nbsp;" + tot;  
                    
                }
                  
            }
            
           if(amtvalue[1].checked)
            {
                if(chk.checked)
                {
                     //alert('working');
                     var type1 = parseInt(document.getElementById("tb1Ex").value);
                     var tot = parseInt(fixedamt + type1 + cover);
                     var result = document.getElementById("Totalamount").innerHTML ="&nbsp;" + tot; 
                    
                        
                }
                else
                {
                    var type1 = parseInt(document.getElementById("tb1Ex").value);
                    var tot = parseInt(fixedamt + type1);
                    var result = document.getElementById("Totalamount").innerHTML = "&nbsp;" + tot; 
                    
                }
                   
            }
            
            if(amtvalue[2].checked)
            {
                if(chk.checked)
                {
                    var type1 = parseInt(document.getElementById("tb1Su").value);
                    var tot = parseInt(fixedamt + type1 + cover);
                    var result = document.getElementById("Totalamount").innerHTML ="&nbsp;" + tot;
                    
                    
                }
                else
                {
                    var type1 = parseInt(document.getElementById("tb1Su").value);
                    var tot = parseInt(fixedamt + type1);
                    var result = document.getElementById("Totalamount").innerHTML ="&nbsp;" + tot;
                        
                }
                     
            }
            
           
            if(amtvalue1[0].checked)
            {
                if(chk1.checked)
                {
                     var type1 = parseInt(document.getElementById("tb2Re").value);
                     var tot = parseInt(type1 + cover);
                     var result = document.getElementById("Totalamount1").innerHTML ="&nbsp;" + tot; 
                        
                }
                else
                {
                   var type1 = parseInt(document.getElementById("tb2Re").value);
                   var tot = type1;
                   var result = document.getElementById("Totalamount1").innerHTML ="&nbsp;" + tot; 
                        
                }
                
                   
            }
            if(amtvalue1[1].checked)
            {
                if(chk1.checked)
                {
                     var type1 = parseInt(document.getElementById("tb2Ex").value);
                    var tot = parseInt(fixedamt1 + type1 + cover);
                    var result = document.getElementById("Totalamount1").innerHTML = "&nbsp;" + tot; 
                        
                }
                else
                {
                    var type1 = parseInt(document.getElementById("tb2Ex").value);
                    var tot = parseInt(fixedamt1 + type1);
                   var result = document.getElementById("Totalamount1").innerHTML = "&nbsp;" + tot;
                        
                }
                     
            }
            if(amtvalue1[2].checked)
            {
                if(chk1.checked)
                {
                     var type1 = parseInt(document.getElementById("tb2Su").value);
                    var tot = parseInt(fixedamt1 + type1 + cover);
                   var result = document.getElementById("Totalamount1").innerHTML ="&nbsp;" + tot;
                        
                }
                else
                {
                    var type1 = parseInt(document.getElementById("tb2Su").value);
                    var tot = parseInt(fixedamt1 + type1);
                   var result = document.getElementById("Totalamount1").innerHTML ="&nbsp;" + tot;
                    
                }
                    
            }
        
            
           
            
            if(amtvalue2[0].checked)
            {
                if(chk2.checked)
                {
                    var type1 = parseInt(document.getElementById("tb3Re").value);
                   var tot = parseInt(type1 + cover);
                  var result = document.getElementById("Totalamount2").innerHTML ="&nbsp;" + tot; 
                    
                }
                else
                {
                    var type1 = parseInt(document.getElementById("tb3Re").value);
                   var tot = type1;
                  var result = document.getElementById("Totalamount2").innerHTML ="&nbsp;" + tot; 
                    
                    
                }
                    
            }
            if(amtvalue2[1].checked)
            {
                if(chk2.checked)
                {
                    var type1 = parseInt(document.getElementById("tb3Ex").value);
                   var tot = parseInt(fixedamt2 + type1 + cover);
                  var result = document.getElementById("Totalamount2").innerHTML = "&nbsp;" + tot;  
                        
                }
                else
                {
                    var type1 = parseInt(document.getElementById("tb3Ex").value);
                    var tot = parseInt(fixedamt2 + type1);
                    var result = document.getElementById("Totalamount2").innerHTML = "&nbsp;" + tot;  
                    
                }
                   
            }
            if(amtvalue2[2].checked)
            {
                if(chk2.checked)
                {
                     var type1 = parseInt(document.getElementById("tb3Su").value);
                   var tot = parseInt(fixedamt2 + type1 + cover);
                  var result = document.getElementById("Totalamount2").innerHTML ="&nbsp;" + tot; 
                    
                }
                else    
                {
                     var type1 = parseInt(document.getElementById("tb3Su").value);
                   var tot = parseInt(fixedamt2 + type1);
                    var result = document.getElementById("Totalamount2").innerHTML ="&nbsp;" + tot; 
                    
                }
                   
            }
        
            
            if(amtvalue3[0].checked)
            {
                if(chk3.checked)
                {
                     var type1 = parseInt(document.getElementById("tb4Re").value);
                    var tot = parseInt(type1 + cover);
                   var result = document.getElementById("Totalamount3").innerHTML ="&nbsp;" + tot; 
                    
                }
                else
                {
                     var type1 = parseInt(document.getElementById("tb4Re").value);
                    var tot = type1;
                    var result = document.getElementById("Totalamount3").innerHTML ="&nbsp;" + tot; 
                    
                }
                   
            }
            if(amtvalue3[1].checked)
            {
                if(chk3.checked)
                {
                    var type1 = parseInt(document.getElementById("tb4Ex").value);
                    var tot = parseInt(fixedamt3 + type1 + cover);
                    var result = document.getElementById("Totalamount3").innerHTML = "&nbsp;" + tot;
                    
                }
                else
                {
                    var type1 = parseInt(document.getElementById("tb4Ex").value);
                    var tot = parseInt(fixedamt3 + type1);
                    var result = document.getElementById("Totalamount3").innerHTML = "&nbsp;" + tot;
                    
                }
                     
            }
            if(amtvalue3[2].checked)
            {
                if(chk3.checked)
                {
                     var type1 = parseInt(document.getElementById("tb4Su").value);
                 var tot = parseInt(fixedamt3 + type1 + cover);
                 var result = document.getElementById("Totalamount3").innerHTML ="&nbsp;" + tot; 
                    
                }
                else
                {
                     var type1 = parseInt(document.getElementById("tb4Su").value);
                 var tot = parseInt(fixedamt3 + type1);
                 var result = document.getElementById("Totalamount3").innerHTML ="&nbsp;" + tot; 
                        
                }
                   
            }
            
        }
      
    </script>
</head>
<body>
   <?php
    
    include 'userheader.php';
    
    ?>
    
    <div class="container">
      
      <div class="row text-center"  style="padding-top:120px;">
          <div class="col-lg-10 col-sm-10">
              <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab">
                        <div class="hidden-xs">ENTRY-LEVEl<br>(Exp:0 to 3 years)</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
                        <div class="hidden-xs">MID-LEVEl<br>(Exp:3 to 8 years)</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab">
                        <div class="hidden-xs">SENIOR-LEVEl<br>(Exp:8 to 15 years)</div>
                    </button>
                </div>
                 <div class="btn-group" role="group">
                    <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab">
                        <div class="hidden-xs">EXECUTIVE-LEVEl<br>(Exp:15 years and above)</div>
                    </button>
                </div>
            </div>
       </div>
            
    
          
      </div>
          
      
       <div class="row text-center" style="padding-top: 30px;">
         <div class="col-sm-8 col-md-8">
           <div class="row text-center">
             <div class="col-sm-12 col-md-12">
                 <h4>Benefits of buying Text Resume service from Saraswathichandra</h4>
             </div>
              
          </div>
           <table class="table" cellspacing="0" cellpadding="0" border="1">
              <tr>
                  <th>Benefits on Saraswathichandra </th>
                  <th>Free Resume</th>
                  <th>Paid Text Resume</th>
              </tr>
              <tr>
                  <td>CV visible to all recruiters</td>
                  <td><i class="fa fa-check" style="font-size: 25px; color: gray;" ></i></td>
                  <td><i class="fa fa-check" style="font-size: 25px;    color: gray;"></i></td>
              </tr>
               <tr>
                  <td>Impress recruiters with professionally written resume</td>
                  <td><i class="fa fa-close" style="font-size: 25px;    color: gray;" ></i></td>
                  <td><i class="fa fa-check" style="font-size: 25px;    color: gray;"></i></td>
              </tr>
               <tr>
                  <td>Stand out as the right candidate for the job</td>
                  <td><i class="fa fa-close" style="font-size: 25px;    color: gray;" ></i></td>
                   <td><i class="fa fa-check" style="font-size: 25px;    color: gray;"></i></td>
              </tr>
               <tr>
                  <td>Highlight skills valued by recruiters in your domain</td>
                  <td><i class="fa fa-close" style="font-size: 25px;    color: gray;" ></i></td>
                  <td><i class="fa fa-check" style="font-size: 25px;    color: gray;"></i></td>
              </tr>
               <tr>
                  <td>Attractive & Recruiter-friendly resume format</td>
                  <td><i class="fa fa-close" style="font-size: 25px;    color: gray;" ></i></td>
                  <td><i class="fa fa-check" style="font-size: 25px;    color: gray;"></i></td>
              </tr>
               <tr>
                  <td>Error-free resume through 65+ quality checks*</td>
                  <td><i class="fa fa-close" style="font-size: 25px;    color: gray;" ></i></td>
                  <td><i class="fa fa-check" style="font-size: 25px;    color: gray;"></i></td>
              </tr>
               <tr>
                  <td>Guaranteed Interview Call from Recruiters</td>
                  <td><i class="fa fa-close" style="font-size: 25px;    color: gray;" ></i></td>
                  <td><i class="fa fa-close" style="font-size: 25px;    color: gray;" ></i></td>
              </tr>
               
           </table>
            
          </div>
          <div class="col-sm-4 col-md-4">
          <div class="row text-center">
             <div class="col-sm-12 col-md-12">
                <p>Buy Text Resume Service</p>
             </div>
              
          </div>
           <div style="background-color: #fff;box-shadow: 1px 1px 9px rgba(0,0,0,.6);">
              <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                  <div class="row text-center">
                     <div class="col-sm-6 col-md-6">
                         Choose Experience:
                     </div>
                     <div class="col-sm-5 col-md-5">
                         <select class="form-control">
                             <option onclick="show2();">0-1 year</option>
                             <option onclick="show1();">1-3 year</option>
                         </select>
                     </div>
                      
                  </div>
                  <div class="row text-center" >
                     <div class="col-sm-12 col-md-12" >
                     <div class="row" >
                        <div class="col-sm-1">
                            
                        </div>
                         <div class="col-sm-10" style="background: #f3f1f2;font-size: 28px;color: #444;padding: 7px 0;font-weight: bolder;">
                            <i class="fa fa-rupee"><a id="amt">&nbsp; 1,850 </a></i>
                            <h6>(Inclusive of all taxes)</h6>
                        </div>
                        <div class="col-sm-10" style="background: #f3f1f2;font-size: 28px;color: #444;padding: 7px 0;font-weight: bolder; display: none" >
                            <i class="fa fa-rupee"><a id="amt1">&nbsp; 2,850 </a></i>
                            <h6>(Inclusive of all taxes)</h6>
                        </div>
                         <div class="col-sm-1">
                            
                        </div>
                        
                         
                     </div> 
                      
                     </div>
                      
                  </div>
                  <div class="row text-left" style="padding-left:14px;">
                     <div class="col-sm-12 col-md-12">
                       <input type="checkbox" onclick="calamount()" name="check" id="chk" value="650"> Including cover letter<br>
                       <p>Delivery Options:</p><br>
                       <p>
                           <input type="radio"  name="radio1" id="tb1Reg" value="1850" onclick="calamount();" checked>Regular 8 working days
                       </p>
                        <p>    
                           <input type="radio" name="radio1" id="tb1Ex"  value="1200" onclick="calamount();">Express 4 working days(<i class="fa fa-rupee"></i> 1200)
                       </p>
                        <p>
                           <input type="radio" name="radio1" id="tb1Su" value="2050" onclick="calamount();" >Super Express 2 working days(<i class="fa fa-rupee"></i> 2050)
                       </p>
                     </div>
                      
                  </div>
                  <div class="row text-center">
                     <div class="col-sm-12 col-md-12">
                         <input  type="button" class="btn btn-danger" value="Buy Now">
                     </div>
                      
                  </div>
                </div>
                <div class="tab-pane fade in" id="tab2">
                  <div class="row text-center" >
                     <div class="col-sm-12 col-md-12" >
                     <div class="row" >
                        <div class="col-sm-1">
                            
                        </div>
                         <div class="col-sm-10" style="background: #f3f1f2;font-size: 28px;color: #444;padding: 7px 0;font-weight: bolder; display: none">
                            <i class="fa fa-rupee"><a id="amt">&nbsp; 2,850 </a></i>
                            <h6>(Inclusive of all taxes)</h6>
                        </div>
                        <div class="col-sm-10" style="background: #f3f1f2;font-size: 28px;color: #444;padding: 7px 0;font-weight: bolder; display: none">
                            <i class="fa fa-rupee"><a id="amt1">&nbsp; 2,850 </a></i>
                            <h6>(Inclusive of all taxes)</h6>
                        </div>
                        
                         <div class="col-sm-1">
                            
                        </div>
                        
                         
                     </div>
                      
                     </div>
                      
                  </div>
                  <div class="row text-left" style="padding-left:14px;">
                     <div class="col-sm-12 col-md-12">
                       <input type="checkbox" onclick="calamount()" name="check1" id="chk1" value="650"> Including cover letter<br>
                       <p>Delivery Options:</p><br>
                       <p>
                           <input type="radio" checked="checked" name="radio2" id="tb2Re" value="3900" onclick="calamount();" >Regular 8 working days
                       </p>
                        <p>    
                           <input type="radio" name="radio2" id="tb2Ex" value="1150" onclick="calamount();">Express 4 working days(<i class="fa fa-rupee"></i> 1150)
                       </p>
                        <p>
                           <input type="radio" name="radio2" id="tb2Su" value="2100" onclick="calamount();">Super Express 2 working days(<i class="fa fa-rupee"></i> 2100)
                       </p>
                     </div>
                      
                  </div>
                  <div class="row text-center" >
                     <div class="col-sm-12 col-md-12">
                         <input  type="button" class="btn btn-danger" value="Buy Now">
                     </div>
                      
                  </div>
                </div>
                <div class="tab-pane fade in" id="tab3">
                  <div class="row text-center" >
                     <div class="col-sm-12 col-md-12" >
                     <div class="row" >
                        <div class="col-sm-1">
                            
                        </div>
                         <div class="col-sm-10" style="background: #f3f1f2;font-size: 28px;color: #444;padding: 7px 0;font-weight: bolder;">
                            <i class="fa fa-rupee"><a id="Totalamount2">&nbsp; 4,800 </a></i>
                          <h6>(Inclusive of all taxes)</h6>
                            
                        </div>
                        
                         <div class="col-sm-1">
                            
                        </div>
                        
                         
                     </div>
                      
                     </div>
                      
                  </div>
                  <div class="row text-left" style="padding-left:14px;">
                     <div class="col-sm-12 col-md-12">
                       <input type="checkbox" onclick="calamount()" name="check2" id="chk2" value="650"> Including cover letter<br>
                       <p>Delivery Options:</p><br>
                       <p>
                           <input type="radio" checked="checked" name="radio3" id="tb3Re" value="4800" onclick="calamount();">Regular 8 working days
                       </p>
                        <p>    
                           <input type="radio" name="radio3" id="tb3Ex" value="1200" onclick="calamount();">Express 4 working days(<i class="fa fa-rupee"></i> 1200)
                       </p>
                        <p>
                           <input type="radio" name="radio3" id="tb3Su" value="2100" onclick="calamount();">Super Express 2 working days(<i class="fa fa-rupee"></i> 2100)
                       </p>
                     </div>
                      
                  </div>
                  <div class="row text-center">
                     <div class="col-sm-12 col-md-12">
                         <input  type="button" class="btn btn-danger" value="Buy Now">
                     </div>
                      
                  </div>
                </div>
                <div class="tab-pane fade in" id="tab4">
                  <div class="row text-center" >
                     <div class="col-sm-12 col-md-12" >
                     <div class="row" >
                        <div class="col-sm-1">
                            
                        </div>
                         <div class="col-sm-10" style="background: #f3f1f2;font-size: 28px;color: #444;padding: 7px 0;font-weight: bolder;">
                            <i class="fa fa-rupee"><a id="Totalamount3">&nbsp; 6,300 </a></i>
                            <h6>(Inclusive of all taxes)</h6>
                        </div>
                        
                         <div class="col-sm-1">
                            
                        </div>
                        
                         
                     </div>
                      
                     </div>
                      
                  </div>
                  <div class="row text-left" style="padding-left:14px;">
                     <div class="col-sm-12 col-md-12">
                       <input type="checkbox" onclick="calamount()" name="check" id="chk3" value="650"> Including cover letter<br>
                       <p>Delivery Options:</p><br>
                       <div class="" >
                       <p>
                           <input type="radio" name="radio" checked="checked" id="tb4Re"  value="6300" onclick="calamount();">Regular 8 working days
                       </p>
                        <p>    
                           <input type="radio" name="radio" id="tb4Ex" value="1150" onclick="calamount();">Express 4 working days(<i class="fa fa-rupee"></i> 1150)
                       </p>
                        <p>
                           <input type="radio" name="radio" id="tb4Su" value="2000" onclick="calamount();">Super Express 2 working days(<i class="fa fa-rupee"></i> 2000)
                       </p>
                      </div>
                     </div>
                      
                  </div>
                  <div class="row text-center">
                     <div class="col-sm-12 col-md-12">
                         <input  type="button" class="btn btn-danger" value="Buy Now">
                     </div>
                      
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          
       </div>
       <div class="row ">
          <div class="col-sm-12 col-md-12">
             <p>*Detailed check list used by Naukri experts based on recruiter feedback

</p>
              
          </div>
           
       </div>
        
    </div>
    
    
    <?php
    
    include 'footer.php';
    
    
    ?>
     <script type="text/javascript">
      function show1(){
        document.getElementById('amt1').style.display = 'block';
        document.getElementById('amt').style.display = 'none';
       
      }
      function show2(){
        document.getElementById('amt').style.display = 'block';
        document.getElementById('amt1').style.display = 'none';
      }

    </script>
</body>
</html>