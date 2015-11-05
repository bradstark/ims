<DOCTYPE html>
    <html>
        <head>
            
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
     
                        <form id="tab" action="<?php echo site_url('isocontainer/Findcontainer') ?>" method="POST">
          
 
     
               <a href="<?php echo site_url('site')?>"><button type="button" class="btn btn-info">Home</button></a>
                <label>key</label>
                <input type="text" name ="Search" value="" class="input-xlarge">
                
      <input type="submit" value="Search" />
          </form>
  </div>
  
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
          </body>
         
                </html>
