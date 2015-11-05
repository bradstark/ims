<?php
            $isocontainer = $this->work_model->get_wkflowbytechid($id);
            $i = 0;
            if($isocontainer==false){
                 $message = "No work orders with this technical identification number yet..!";
    echo "<script type='text/javascript'>alert('$message');</script>";
     $this->load->view('wkosearchhome');
            }
            else{?>
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
 
   
  
   
</ul> 

    <div class="tab-content col-md-10">

 
     
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
            foreach ($isocontainer as $row):
                $i++;
               ?> 
                <tr>
                   
                    <td><?php echo $row->workorderid ?></td>
                    <td><?php echo $row->equipmentid ?></td>
                    <td><?php echo $row->containersize ?></td>
                    <td><?php echo $row->manufacturer ?></td>
                     <td><?php echo $row->checkin ?></td>
                     <td><?php echo $row->checkout ?></td>
                      <td><?php echo $row->Status?></td>
                
        
                    <td><script>
             // Popup window function
	function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a onclick="basicPopup(this.href);return false"  href="<?php echo site_url('workflow/viewcertificate/' . $row->workorderid) ?>">  <?php echo 'View' ?> </a></td>
                  
       
                </tr>
                
                <?php
            endforeach;}
            ?>
        </tbody>
    </table>
</div>
    

 
    

            
    
    </div>
        
    
    
                
    
</div>
     

 

            
    

