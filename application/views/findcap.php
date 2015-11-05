<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_navbar'); ?>

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
           
            $results = $this->iso_model->get_by_capacity($key);
                   
                foreach ($results as $row): 
           // foreach ($result as $row):
            
               ?> 
                <tr>
                    
                    <td><?php echo $row->ContainerId ?></td>
                    <td><?php echo $row->Capacity ?></td>
                    <td><?php echo $row->DriverId ?></td>
                    <td><?php echo $row->LoadStatus?></td>
                    
                    
                </tr>
               <?php
           endforeach;
?>
        </tbody>
    </table>