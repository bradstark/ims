<!DOCTYPE html>
<?php $this->load->view('includes/header'); ?>
<html lang="en">
<head>
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<title>Welcome to GreatLakes </title>
 <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script> 
   <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script> 

 <script type="text/javascript" src="<?php echo base_url('js/car2.js'); ?>"></script>
 <script type="text/javascript" src="<?php echo base_url('js/car1.js'); ?>"></script>
 
<style type="text/css">
h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
    
}
.item{
    top:0px;
       background-color: lightskyblue;
    text-align: center;
    height: 400px !important;
    
}
.carousel{
    margin-top: 205px;
    height: 400px;
}
.bs-example{
    top:200px;
	margin: 10px;
        height: 400px;
}
</style>
</head>
<div class="navbar navbar-inverse navbar-static-top">
               <a href = "#" class="navbar-brand">ISO MANAGEMENT SYSTEM OF GREATLAKES SOLUTIONS</a>
                    <div class="container">
                        
                        <button class="navbar-toggle" data-toggle ="collapse" data-target=".navHeaderCollapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse navHeaderCollapse">
                            <ul class="navbar navbar-nav navbar-right ">
                                
                                
                                
                  

            



 <li>                 
<a
href="#" ><button style="height:33px" type="button" value="Login" class="btn btn-success"> <span class="glyphicon glyphicon-user"></SPAN></button>
   
</a>
</li>

</li>


  
         
                                
                            </ul>
                                
                        
                    </div>
                    
                  </div>          
                    
                    </div>
<body><table width="1389"  style="position: absolute; left:0%; top: 5%; width: 100%; height: 388px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">
 
 <tr>
     <td height="25" colspan="3" align="center">
         <img src="..\car\greatlakes.png" style="position: absolute;height:25%;top:5%;left:10px;"  />
     </td>
   <td colspan="2" align="center">
     <div style="position:absolute;left:60%;">
    <form class="form-horizontal" action="<?php echo site_url('login/check'); ?>" method="POST">
            <fieldset>
                <div id="legend">
                    <legend class="">Login </legend>
                </div>
                <div class="control-group">
                    <!-- Username -->
                    
                    <div class="controls"<label class="control-label" for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder=""  class="input-xlarge" style="width: 300px">
                    </div>
                </div>
             <p></p>
                <div class="control-group">
                    <!-- Password-->
                    
                    <div class="controls"<label class="control-label" for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" style="width: 300px">
                    </div>
                </div>


                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        
                        <p></p>
                        <p></p>
                        
                        <button class="btn btn-success" style="height:30px">Go</button>
                    </div>
                </div>
            </fieldset></form>
     <form action="<?php echo site_url('login/forgot') ?>">
         <button class="btn btn-info" style="height:30px" type="submit"> Forgot Password</button>
        </form>
        <?php
        if ($error) {
            echo '<div class="alert alert-error">';
            echo '<strong>Error!</strong>' . $error_message;
            echo '</div>';
        } else if (isset($message)) {
            echo '<div class="alert alert-success">';
            echo $message;
            echo '</div>';
        }
        ?> 
    </div></div>
             <script src ="http://code.jquery.com/jquery-1.10.2.min.js"> </script>
    <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.content').fadeIn(1000);
        });
    </script></div>
   </td>
 </tr>
 <tr>
   <td height="280" colspan="5" align="left" valign="top"> 
          
<div class="bs-example" >
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel" >
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
       <!-- Carousel items -->
       <div class="carousel-inner" >
            <div class="active item" >
                
                <div class="carousel-caption" style="height:100%;" >
                  
                  <p><img src="..\car\pic1.jpg" style="height:100%;width:110%;position: absolute;left:-40px;"  /></p>
                </div>
            </div>
            <div class="item">
              
                <div class="carousel-caption"  style="height:100%;">
                   <p><img src="..\car\PIC2.jpg" style="height:100%;width:100%;position: absolute;left:-40px;" /><p>
                </div>
            </div>
            <div class="item">
               
                <div class="carousel-caption" style="height:100%;" >
                  <p><img src="..\car\PIC3.jpg"style="height:100%;width:100%;position: absolute;left:-40px;"  /></p>
                 
                </div>
            </div>
           <div class="item">
               
                <div class="carousel-caption" style="height:100%;" >
                  <p><img src="..\car\PIC4.jpg"style="height:100%;width:100%;position: absolute;left:-40px;"  /></p>
                 
                </div>
            </div>
           <div class="item">
               
                <div class="carousel-caption" style="height:100%;" >
                  <p><img src="..\car\pic10.jpg"style="height:100%;width:100%;position: absolute;left:-40px;"  /></p>
                 
                </div>
            </div>
           <div class="item">
               
                <div class="carousel-caption" style="height:100%;" >
                  <p><img src="..\car\pic12.jpg"style="height:100%;width:100%;position: absolute;left:-40px;"  /></p>
                 
                </div>
            </div>
           <div class="item">
               
                <div class="carousel-caption" style="height:100%;" >
                  <p><img src="..\car\pic13.jpg"style="height:100%;width:100%;position: absolute;left:-40px;"  /></p>
                 
                </div>
            </div>
           <div class="item">
               
                <div class="carousel-caption" style="height:100%;" >
                  <p><img src="..\car\pic14.jpg"style="height:100%;width:100%;position: absolute;left:-40px;"  /></p>
                 
                </div>
            </div>
           <div class="item">
               
                <div class="carousel-caption" style="height:100%;" >
                  <p><img src="..\car\pic15.jpg"style="height:100%;width:100%;position: absolute;left:-40px;"  /></p>
                 
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
          
     </td>
     </tr>


 </table>
</body>
<?php $this->load->view('includes/footer'); ?>
</html>

