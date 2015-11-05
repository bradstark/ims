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


            
    
    </div>
        

     <div class="tab-pane" id="tab_c">

    
<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                          
                <th>workorderId </th>
                <th>Equipement Number</th>
                <th>container size</th>
                <th>Manufacturer</th>
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
           
          
            $result= $this->work_model->slotsfilled();
           
                if($result ==! ''){
                   
                foreach ($result as $row): 
      
           ?>
          
               
                    <tr>
                   
                    <td><?php echo $row->workorderid ?></td>
                    <td><?php echo $row->equipmentid ?></td>
                    <td><?php echo $row->containersize?></td>
                    <td><?php echo $row->manufacturer?></td>
                    </tr>
                    
               
               <?php
                endforeach; }
?>
        </tbody>
    </table>
</div>
     

 

            
    
    </div>
        </div>

