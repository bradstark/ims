<?php $this->load->view('includes/header'); ?>

<?php 
 
 $this->load->view('includes/staff_navbar3');
?>
        
<?php $row = $this->Staff_model->get_by_id($id);  $active='profile'?>
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
        <li class="<?php if ($active == 'profile') echo 'active' ?>"><a href="#profile" data-toggle="tab">Profile</a></li>
        <li class="<?php if ($active == 'ekg') echo 'active' ?>"><a href="#password" data-toggle="tab">Set Password</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane <?php if ($active == 'profile') echo 'active' ?> " id="profile">
        
            <form id="tab" action="<?php echo site_url('staff/updateprofile') ?>" method="POST">
               <div> <label>Staff Id</label>
                   <input type="text" name="id" readonly="readonly"  value="<?php echo $row->id ?>" />   </div> </br>            
                <div>  <label>First Name</label>
                <input type="text" name ="firstname"  value="<?php echo $row->firstname; ?>" class="input-xlarge"><?php echo form_error('firstname'); ?></div> </br>
                <label>Last Name</label>
                <input type="text" name ="lastname" value="<?php echo $row->lastname; ?>" class="input-xlarge"><?php echo form_error('lastname'); ?></br>
                 <label>User Name</label>
                <input type="text" name ="username" value="<?php echo $row->username; ?>" class="input-xlarge"><?php echo form_error('username'); ?></br>
                
                  <label>Role</label>
                <input type="text" name ="role" value="<?php echo $row->role; ?>"  class="input-xlarge"><?php echo form_error('role'); ?></br>
                <label>Email id</label>
                <input type="text" name ="email"  value="<?php echo $row->emailid; ?>"  class="input-xlarge"><?php echo form_error('email'); ?></br>
                <!-- Select Role -->
                <div class="control-group">
                    <label class="control-label" for="sex">Sex</label>
                   
<input name="sex" id="idValue1" type="text" value="<?php echo $row->sex;?>" />
   <?php echo form_error('sex'); ?>                 </div>
                </br>
                <label>Address </label>
                <input id="demo23" type="text"name="address" value="<?php echo $row->address; ?>"  style="width:170px;"><?php echo form_error('address'); ?></br>
                <label>Mobile .No</label>
                <input type="text" name ="mobile" value="<?php echo $row->mobile; ?>"  class="input-xlarge"/><?php echo form_error('mobile'); ?></br>
                <div> <label>Location</label>
                    <input type="text" name="location" readonly="readonly"  value="<?php echo $row->location ?>" />   </div> </br>
                    
              
                
                  
        
        <script>
        if (top.location != location) {
            top.location.href = document.location.href;
        }
        $(function() {
            window.prettyPrint && prettyPrint();

            $('#dp1').datepicker();
            $('#dp2').datepicker();
            $('#dp3').datepicker();
        });
    </script>
            </form>
       </div>
     
             
        <div class="tab-pane " id="password">
             <form id="tab2" action="<?php echo site_url('staff/update_password') ?>" method="POST">
                 <br></br>
                <label>New Password</label>
                <input type="password" name="password" class="input-xlarge"></br>
                 <input type="hidden" name="idid"   value="<?php echo $row->id ?>" />
                <div>
                    <button type ="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        
</div>
    
</div>
          
                   
<?php $this->load->view('includes/footer'); ?>
