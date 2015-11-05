<DOCTYPE html>
    <html>
        <head>
            <title>Chemtura iso management</title>
            <meta name="viewport"content="width=device-width, initial-scale=1.0">
            <link href = "css/bootstrap.min.css" rel ="stylesheet">
            <link href = "css/styles.css" rel ="stylesheet">
            </head>
            <body>
<div class="navbar navbar-inverse navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php echo site_url('site'); ?>"><img src="<?=base_url('css/img/logo.png'); ?>"></a>
      <p class="navbar-text pull-right">Logged In</p>
     
                        
        
               <a href="<?php echo site_url('site')?>"><button type="button" class="btn btn-info">Home</button></a>
               
  <div class="btn-group">
    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Search by category <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo site_url('isocontainer/searchbycid')?>">ContainerId</a></li>
      <li><a href="<?php echo site_url('isocontainer/searchbycapacity')?>">Capacity</a></li>
      <li><a href="<?php echo site_url('isocontainer/searchbyloadstatus')?>">Loadstatus</a></li>
      
    </ul>
  </div>
  
</div>
  
               

              
    </div>
  </div>

                        
                <script type="text/javascript">
    $(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});                
                                </script> 
            
<script src ="http://code.jquery.com/jquery-1.10.2.min.js"> </script>
                <script src ="js/bootstrap.js"> </script>
          </body>   </html>
