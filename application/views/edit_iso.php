<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_navbar'); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->
     
        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
       



 <link rel="stylesheet" href="/resources/demos/style.css">
     <script type="text/javascript" src="<?php echo base_url('js/datetimepicker.js'); ?>"></script> 

<div>
 <form id="tab" action="<?php echo site_url('isocontainer/ChangeContainer') ?>" method="POST">
     
<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                <th>Choose</th>                
                <th>Equipment ID</th>
                <th>Date</th>
                <th>Size</th>
                <th>Manufacturer</th>
                <th>Manufacturer S.No</th>
                <th>'Technical Id</th>
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     
<script>
     $(":checkbox").on('change', function () {
        $('[name="' + $(this).attr('name') + '"]').not(this).prop('checked', false);
    });
</script>
        <tbody>
            <?php
            $isocontainer = $this->iso_model->get_all();
            $i = 0;
            foreach ($isocontainer as $container1):
                $i++;
               ?> 
                <tr>
                    <td><input type="checkbox" name="checkbox[]" value="<?php echo $container1['TECHNICAL_IDENTIFICATION_NUMBER']; ?>"/></td> 
                    <td><?php echo $container1['EQUIPMENT_NUMBER'] ?></td>
                    <td><?php echo $container1['DATE_VALID_FROM'] ?></td>
                    <td><?php echo $container1['SIZEORDIMENSION'] ?></td>
                    <td><?php echo $container1['MANUFACTURER_OF_ASSET'] ?></td>
                     <td><?php echo $container1['MANUFACTURER_SERIAL_NUMBER'] ?></td>
                      <td><?php echo $container1['TECHNICAL_IDENTIFICATION_NUMBER'] ?></td>
                    
                </tr>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
     <div>
                    
         <input class="btn btn-danger"name="edit" type="submit" id="delete" value="edit">    
                </div>

 </form>
    

            
    
    </div>


