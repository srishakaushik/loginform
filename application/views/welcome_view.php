<div class="content">
	<h2>you have successfully loged in to your account  <?php echo $this->session->userdata('username'); ?>!</h2>
     <p>MEMBER'S AREA</p>
	<h4><?php echo anchor('user/logout', 'Logout'); ?></h4>

</div><!--<div class="content">-->