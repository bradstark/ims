<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_navbar'); ?>
<?php $row = $this->iso_model->get_by_id($key); ?>
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
            
                <tr>
                    
                    <td><?php echo $row->ContainerId ?></td>
                    <td><?php echo $row->Capacity ?></td>
                    <td><?php echo $row->DriverId ?></td>
                    <td><?php echo $row->LoadStatus?></td>
                    
                    
                </tr>
              
        </tbody>
    </table>