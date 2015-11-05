<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_navbar'); ?>
<html>  
     
<head>  
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    
          <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
     
    
  
</head>
<body>
<ul class="nav nav-pills ">
 
    <li style="background-color:lightgray;"><a href="#tab_a"  data-toggle="pill" style="font-weight: bold;font-size:18px;">Page1</a></li>
  <li style="background-color:lightgrey;"><a href="#tab_b" data-toggle="pill"style="font-weight: bold;font-size:18px; ">Page2</a></li>
  <li style="background-color:lightgrey;"><a href="#tab_c" data-toggle="pill"style="font-weight: bold;font-size:18px;">Page3</a></li>
   <li style="background-color:lightgrey;"><a href="#tab_d" data-toggle="pill"style="font-weight: bold;font-size:18px;">Page4</a></li>
   <li style="background-color:lightgray;"><a href="#tab_e"  data-toggle="pill" style="font-weight: bold;font-size:18px;">Page5</a></li>
  <li style="background-color:lightgrey;"><a href="#tab_f" data-toggle="pill"style="font-weight: bold;font-size:18px; ">Page6</a></li>
  <li style="background-color:lightgrey;"><a href="#tab_g" data-toggle="pill"style="font-weight: bold;font-size:18px;">Page7</a></li>
   <li style="background-color:lightgrey;"><a href="#tab_h" data-toggle="pill"style="font-weight: bold;font-size:18px;">Page8</a></li>
   <li style="background-color:lightgray;"><a href="#tab_i"  data-toggle="pill" style="font-weight: bold;font-size:18px;">Page9</a></li>
  <li style="background-color:lightgrey;"><a href="#tab_j" data-toggle="pill"style="font-weight: bold;font-size:18px; ">Page10</a></li>
  <li style="background-color:lightgrey;"><a href="#tab_k" data-toggle="pill"style="font-weight: bold;font-size:18px;">Page11</a></li>
    <li style="background-color:lightgrey;"><a href="#tab_l" data-toggle="pill"style="font-weight: bold;font-size:18px;">Page12</a></li>
     

</ul> 

    <div class="tab-content col-md-10">
<div class="tab-pane" id="tab_a">
 
     
<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
             <?php if( $container1['workorderid']<= 50 && $container1['workorderid']>=1 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
                <?php }?>
                <?php
            endforeach;
            ?>
                
        </tbody>
    </table>
</div>
    

 
    

            
    
    </div>
        
    
    
    <div class="tab-pane" id="tab_b">
       
<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 100 && $container1['workorderid']>=51 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
    

            
    
    </div>
        

     <div class="tab-pane" id="tab_c">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 150 && $container1['workorderid']>=101 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
    

     

 

            
    
    </div>
          <div class="tab-pane" id="tab_d">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 150 && $container1['workorderid']>=101 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
  </div>
        
        
        
         <div class="tab-pane" id="tab_e">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 190 && $container1['workorderid']>=151 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
  </div>
        
   
    
    
    
     <div class="tab-pane" id="tab_f">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 270 && $container1['workorderid']>=191 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
  </div>
    
    
    
  
         <div class="tab-pane" id="tab_g">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 350 && $container1['workorderid']>=271 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
  </div>
        
        
        
        
        
   <div class="tab-pane" id="tab_h">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 420 && $container1['workorderid']>=351 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
  </div>      
        
        
        
        
        
        
         <div class="tab-pane" id="tab_i">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 500 && $container1['workorderid']>=421 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
  </div>
        
        
        
         <div class="tab-pane" id="tab_j">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 600 && $container1['workorderid']>=501 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
  </div>
        
        
        
         <div class="tab-pane" id="tab_k">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 700 && $container1['workorderid']>=601 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
  </div>
        
        
        
         <div class="tab-pane" id="tab_l">

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>WorkorderId ID</th>
                <th>TECHNICAL IDENTIFICATION NUMBER</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th>check In</th>
                <th>Check out</th>
                <th>Status</th>
                <th>Certificate</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->work_model->get_allwkflow();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
            <?php if( $container1['workorderid']<= 800 && $container1['workorderid']>=701 ){ ?>
                <tr>
                   
                    <td><?php echo $container1['workorderid'] ?></td>
                    <td><?php echo $container1['equipmentid'] ?></td>
                    <td><?php echo $container1['containersize'] ?></td>
                    <td><?php echo $container1['manufacturer'] ?></td>
                     <td><?php echo $container1['checkin'] ?></td>
                     <td><?php echo $container1['checkout'] ?></td>
                      <td><?php echo $container1['Status'] ?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $container1['workorderid']) ?>">  <?php echo 'View' ?> </a></td>
                </tr>
            <?php }?>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
  </div>
        
    </div>

