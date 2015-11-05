<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_load'); ?>


<div>
 <form id="tab" action="<?php echo site_url('') ?>" method="POST">
     
<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                               
                <th>container ID</th>
                <th>capacity</th>
                <th>Driver Id</th>
                <th>Load status</th>
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->iso_model->get_all();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
                <tr>
                    
                    <td><?php echo $container1['ContainerId'] ?></td>
                    <td><?php echo $container1['Capacity'] ?></td>
                    <td><?php echo $container1['DriverId'] ?></td>
                    <td><?php echo $container1['LoadStatus'] ?></td>
                    
                    
                </tr>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
     <div>
                    
  
                </div>
     

 </form >
    

            
    
    </div>



    
     
     
     
     
     
 

