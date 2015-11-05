<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/staff_navbar'); ?>
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
        
            <?php echo form_open('staff/addprofile'); ?>
        <h1></h1>
        
        <?php echo form_label('Staff Id :'); ?> 
       <input type="text" name="dname" id="dname" value="<?php echo set_value('dname'); ?>" size="50" /> <?php echo form_error('dname'); ?><br />
        
         <?php echo form_label('First Name:'); ?> 
       <input type="text" name="fname" id="fname" value="<?php echo set_value('fname'); ?>" size="50"/> <?php echo form_error('fname'); ?> <br />
        
         <?php echo form_label('Last Name:'); ?> 
             <input type="text" name="lname" id="lname" value="<?php echo set_value('lname'); ?>" size="50"/>  <?php echo form_error('lname'); ?><br />
        
         <?php echo form_label('User Name:'); ?> 
            <input type="text" name="uname" id="uname" value="<?php echo set_value('uname'); ?>" size="50"/> <?php echo form_error('uname'); ?> <br />

        <?php echo form_label('Email :'); ?> 
           <input type="text" name="demail" id="demail" value="<?php echo set_value('demail'); ?>" size="50"/>  <?php echo form_error('demail'); ?> <br />
        
       
                <div class="control-group">
                    <?php echo form_label('Role :'); ?> 

                    <div class="controls">
                        <select onchange="document.getElementById('displayValue2').value=this.options[this.selectedIndex].text; document.getElementById('idValue2').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="staff">staff</option>
   <option value="admin">admin</option>
</select>
<input name="role" placeholder="add/select a value" type="hidden" id="displayValue2"  onfocus="this.select()" />
<input name="idValue2" id="idValue2" type="hidden"/>

                    </div>
    
                </div> <?php echo form_error('idValue2'); ?> </br>
                
                
                <div class="control-group">
                   <?php echo form_label('Gender:'); ?> 
                    <div class="controls">
                        <select onchange="document.getElementById('displayValue1').value=this.options[this.selectedIndex].text; document.getElementById('idValue1').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="male">Male</option>
   <option value="female">Female</option>
</select>   
<input name="sex" placeholder="add/select a value" type="hidden" id="displayValue1"  onfocus="this.select()" type="text">
<input name="idValue1" id="idValue1" type="hidden">
                 </div><?php echo form_error('idValue1'); ?>  
                </div>  </br>

                
                <div class="control-group">
                   <?php echo form_label('Location:'); ?> 
                    <div class="controls">
                        <select onchange="document.getElementById('displayValue3').value=this.options[this.selectedIndex].text; document.getElementById('idValue3').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="US">US</option>
   <option value="UK">UK</option>
</select>   
<input name="location" placeholder="add/select a value" type="hidden" id="displayValue3"  onfocus="this.select()" type="text">
<input name="idValue3" id="idValue3" type="hidden">
                 </div><?php echo form_error('idValue3'); ?>  
                </div>  </br>
        <?php echo form_label('Mobile No. :'); ?> 
                <input type="text" name="dmobile" id="dmobile" placeholder="10-Digit Number" value="<?php echo set_value('dmobile'); ?>" size="50"/> <?php echo form_error('dmobile'); ?> <br />

        <?php echo form_label('Address :'); ?>
          <input type="text" name="daddress" id="daddress" value="<?php echo set_value('daddress'); ?>" size="50"/> <?php echo form_error('daddress'); ?><br />

       

       
                 <input type="button" href="#myModal"  value='Add' role ="button" data-toggle="modal"class="btn btn-primary">
                  <button type="button"onclick="location.href = '<?php echo site_url('staff/mainadminpage') ?>'"    class="btn btn-danger" value="delete" name="close" >Go Back</button>
            <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to add staff member?</p>
                <p class="text-warning"><small>Press Add if you want to</small></p>
            </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    
                        <button type="submit"   class="btn btn-danger" value="Close" name="close" >Add</button>
                    </div>
                </div>
            <?php echo form_close(); ?>  
       </div>
     
               </div>
           </div>
</div>
          
                   
<?php $this->load->view('includes/footer'); ?>