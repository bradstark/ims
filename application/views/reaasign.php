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


    <div class="tab-pane" id="tab_b">
 <form id="tab" action="<?php echo site_url('workflow/reassignwkflow') ?>" method="POST">
     
<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                  <th>Choose</th>             
                <th>workorderId </th>
                <th>Equipement Number</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th style="width: 36px;"></th>
            </tr>
        </thead>    
        

        <tbody>
            <?php
            $isocontainer1 = $this->work_model->get_allonrepair();
            $j = 0;
            foreach ($isocontainer1 as $container2):
                $j++;
               ?> 
                <tr>
                   
                    <td><input type="checkbox" name="checkbox[]" value="<?php echo $container2['workorderid']; ?>"/></td> 
                    <td><?php echo $container2['workorderid'] ?></td>
                    <td><?php echo $container2['equipmentid'] ?></td>
                    <td><?php echo $container2['containersize'] ?></td>
                    <td><?php echo $container2['manufacturer'] ?></td>
                    
                    
                </tr>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
     <div>
                    
         <input class="btn btn-danger"name="reassign" type="submit" id="delete" value="Reassign">    
                </div>

 </form>
    

            
    
    </div>
        
</body>