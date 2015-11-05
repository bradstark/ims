<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_navbar'); ?>

<div>
 <form id="tab" action="<?php echo site_url('isocontainer/RemoveContainer') ?>" method="POST">
     
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
         
          <input type="button" href="#myModal"  value='Delete' role ="button" data-toggle="modal"class="btn btn-danger">
                
            <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete container?</p>
                <p class="text-warning"><small>Press delete if you want to</small></p>
            </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                  
                        <button type="submit"   class="btn btn-danger" value="Delete" name="delete" >Delete</button>
                    </div>
                </div>
            </form>
       </div>
     
               </div>          
          
                </div>

 </form>
    

            
    
    </div>


