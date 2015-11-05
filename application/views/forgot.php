<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/nli_navbar'); ?>
    <div class="content" >
        <form class="form-horizontal" action="<?php echo site_url('login/forgot_submit1'); ?>" method="POST">
            <fieldset>
                <div id="legend">
                    <legend class="">Forgotten password</legend>
                </div>
                <div class="control-group">
                    <!-- Username -->
                    <label style="color: red;"class="control-label" for="username">Username</label>
                    <div class="controls">
                        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                    </div>
                </div> 
                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <p></p>
                        <button type="submit" class="btn btn-primary">Reset password</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <?php
        if ($error) {
            echo '<div class="alert alert-error">';
            echo '<strong>Error!</strong>' . $error_message;
            
           
            echo '</div>';
            echo '<div>';echo '</div>';
        } else if (isset($message)) {
            echo '<div class="alert alert-success">';
            echo $message;
            echo '</div>';
        }
        ?>
        <p>Go back to <a style="font-size: 20px" href="http://localhost/ims/login">Login</a></p>
         
    </div>
    <?php $this->load->view('includes/footer'); ?>