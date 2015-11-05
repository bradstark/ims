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
     
                        <form id="tab" action="<?php echo site_url('isocontainer/Findsec3') ?>" method="POST">
          
 
     
               <a href="<?php echo site_url('site')?>"><button type="button" class="btn btn-info">Home</button></a>
               <label style="background-color: red;">Enter Vesselid</label>
                <input type="text" name ="Sec3" value="" class="input-xlarge">
                
      <input type="submit" value="submit" />
          </form>
  </div>
  
</div>
  
               
