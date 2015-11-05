<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IMS</title>
        <meta name="description" content="EKG data management in the cloud">
        <meta name="author" content="Team Cirrus">
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le styles -->
        <img src="../pp.jpeg" />
        <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->
        <link href="<?php echo base_url('css/ico/favicon.ico'); ?>" rel="shortcut icon">
        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.min.js'); ?>"></script>
        
        <div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo site_url()?>" name="top">Staff Administration</a>
            
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </div>
    <!--/.navbar-inner -->
</div>
        <script type="text/javascript">

function DeleteStaff($id)
{
return(confirm("Are You Sure"));
//if (con===true)
//  {
//  //alert("You pressed OK!");
//  window.location = "Delete.php";
//  }
//else
//  {
//  alert("You pressed Cancel!");
//  }
}
      </script>  
    </head>
    <body>


<div class="btn-toolbar">
    <a href='<?php echo site_url('Staffmem/add_staff') ?>' class="btn btn-primary"> New Staff</a>   
</div>
        
<div class="well">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>StaffId</th>
                <th>Profile Photo</th>
                <th>First name</th>
                <th>Last name</th>
                <th>SupervisorId</th>
                <th>Email</th>
                <th>Role</th>   
                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            //$StaffList = $this->Staff_model->get_all();
           $StaffList= $this->db->order_by('StaffId')
                ->get('staff')
                ->result_array();
            $i = 0;
            foreach ($StaffList as $staff):
                $i++;
                

                
            
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><a href="<?php echo site_url('Staffmem/StaffProfile/' . $staff['StaffId']) ?>"> <? echo $staff['StaffId'] ?> </a></td>
                    <td><img src="../pp.jpeg" alt="" height='100' width='100'/></td>
                    <td><?php echo $staff['FirstName'] ?> </td>
                    <td><?php echo $staff['LastName'] ?> </td>
                    <td><?php echo $staff['SupervisorId'] ?> </td>
                    <td><?php echo $staff['Email'] ?> </td>
                    <td><?php echo $staff['Role'] ?> </td>
                    <td>
                        <a href = "<?php echo site_url('Staffmem/Delete/' . $staff['StaffId']) ?>" role = "button"><i class = "icon-remove-circle"></i></a>
                    </td>
                </tr>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>

<?php
//$this->load->view('includes/footer');
?>
