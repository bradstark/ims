
<DOCTYPE html>
    <html>
        <head>
            
            <meta name="viewport"content="width=device-width, initial-scale=1.0">
            <link href = "css/bootstrap.min.css" rel ="stylesheet">
            <link href = "css/styles.css" rel ="stylesheet">
            
        
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
   
            <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
            </head>
            <body>
                <div class="navbar navbar-inverse navbar-static-top">
              
                    <div class="container">
                        <a href = "#" class="navbar-brand"> WELCOME TO ISO MANAGEMENT SYSTEM </a>
                        <button class="navbar-toggle" data-toggle ="collapse" data-target=".navHeaderCollapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse navHeaderCollapse">
                            <ul class="navbar navbar-nav navbar-right ">
                                
                                
                                
                                
       
   

                     

            

 <li class="btn-group">
     <button type="button" style="height:33"class="btn btn-success dropdown-toggle" data-toggle="dropdown">
   <span class="glyphicon glyphicon-user"> <?php echo $this->session->userdata('username')?> <span class="caret"></span>
  </button>
<ul class="dropdown-menu" role="menu">
    <li><a href="<?php echo site_url('staff/profile')?>"><span class="glyphicon glyphicon-user"></SPAN>Profile</a></li> 
    <li class="divider"></li>
    <li><a href="<?php echo site_url('site/logout')?>"><span class="glyphicon glyphicon-off"></SPAN> LogOut</a></li>
    
</ul>

</li>


  
         
                                
                            </ul>
                                
                        
                    </div>
                    
                  </div>          
                    
                    </div>
                
                
<script src ="http://code.jquery.com/jquery-1.10.2.min.js"> </script>
                <script src ="js/bootstrap.js"> </script>
          </body>   </html>