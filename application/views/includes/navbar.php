<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php echo site_url('site')?>"><img src="<?=base_url('css/img/logo.png'); ?>"></a>
      
      <div class="pull-right">
        <small class="navbar-text">User: <?=anchor('site/profile', $this->session->userdata('username')); ?> </small>
        <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>
