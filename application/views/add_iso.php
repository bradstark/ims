<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_navbar'); ?>
<?php $active='profile'?>
<script type="text/javascript" src="<?php echo base_url('js/datetimepicker.js'); ?>"></script> 
<style>
    label, input {
    width:200px;
    display:block;
    float:left;        
    margin-bottom:10px;
}
label {
    width:125px;
    text-align:right;
    padding-right:10px;
    margin-top:2px;
}
br {
    clear:left;
}
    </style>
<div class="well">
    <ul class="nav nav-tabs">
        <li class="<?php if ($active == 'profile') echo 'active' ?>"><a href="#profile" data-toggle="tab">Please fill up the following details to add staff member...!</a></li>
     
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane <?php if ($active == 'profile') echo 'active' ?> " id="profile">
        
            <form id="tab" action="<?php echo site_url('isocontainer/update_iso_addition') ?>" method="POST">
               <div> <label>Equipment Number</label> 
                   <input type="text" name="eqid"  /> <?php echo form_error('eqid'); ?>   </div> </br>            
              <div>  <label>Size Or Dimension</label>
                <input type="text" name ="size"  class="input-xlarge">  <?php echo form_error('size'); ?></div></br>
                <label>Manufacturer</label>
                <input type="text" name ="man"  class="input-xlarge">  <?php echo form_error('man'); ?></br>
                 <label>Technical Identification number</label>
                <input type="text" name ="techid"  class="input-xlarge">  <?php echo form_error('techid'); ?></br>
                <label>Manufacturer Serial number</label>
                <input type="text" name ="mannum"  class="input-xlarge">  <?php echo form_error('mannum'); ?></br>
                   </br>
                
              
                <label>Date- Valid From</label>
                <input id="demo278" type="text" name="date"  style="width:170px;"><a href="javascript:NewCal('demo278','ddmmyyyy')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a> <?php echo form_error('date'); ?></br>
               
                        
                 <input type="button" href="#myModal"  value='Add' role ="button" data-toggle="modal"class="btn btn-primary">
                  <button type="button"onclick="location.href = '<?php echo site_url('site') ?>'"    class="btn btn-danger" value="delete" name="close" >Go Back</button>
            <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to add Iso container?</p>
                <p class="text-warning"><small>Press Add if you want to</small></p>
            </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    
                        <button type="submit"   class="btn btn-danger" value="Close" name="close" >Add</button>
                    </div>
                </div>
            </form>
       </div>
     
               </div>
           </div>
</div>
          
                   
<?php $this->load->view('includes/footer'); ?>
