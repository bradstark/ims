<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/staff_navbar'); ?>

<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                <th>#</th>                
                <th>Staff ID</th>
                <th> Staff Name</th>                
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $staffmembers = $this->Staff_model->get_all();
            $i = 0;
            foreach ($staffmembers as $staffmember):
                $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $staffmember['id'] ?> </td>
                    <td><a href="<?php echo site_url('staff/staff_profile/' . $staffmember['id']) ?>"> <?php echo $staffmember['firstname'] . ' ' . $staffmember['lastname'] ?> </a></td>
                </tr>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>

<?php $this->load->view('includes/footer'); ?>

