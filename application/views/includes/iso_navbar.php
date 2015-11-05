
<DOCTYPE html>
    <html>
        <head>
            
            
            </head>
            <body>
                <div class="navbar navbar-inverse navbar-static-top">
              
                    <div class="container">
                        <a href = "#" class="navbar-brand"> Great Lakes-Staff Management</a>
                        
                        <button class="navbar-toggle" data-toggle ="collapse" data-target="navHeaderCollapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse navHeaderCollapse">
                            <ul class="navbar navbar-nav navbar-right ">
                                
                                
                                
                                
       
    <li>                 
<a
href="<?php echo site_url('site')?>" ><button  type="button" value="Staff Management" class="btn btn-primary"> <span class="glyphicon glyphicon-home"></SPAN>  Home </button>
   
</a>
</li>

 




  
            

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
                
                

                <script src ="js/bootstrap.js"> </script>
          </body>   </html>