	<nav class="navbar navbar-inverse" style="background-color: #2ecc71; border-color: #bdc3c7; border-radius: 0; height: 35px;">
		<div class="container">
		  <div class="navbar-header">
			<a class="navbar-brand" href="http://localhost/pozoristeApp" style="padding-top: 0px; padding-bottom: 5px; padding-right: 5px;padding-left: 5px;">
				 <img alt="Brand" src="<?php echo base_url() ?>assets/imgs/teatar.png" style="height:50px; width:50px">
			</a>
		  </div>
			<div class="navbar-text navbar-right ">
				<p><a href="<?php echo 'http://localhost/pozoristeApp/index.php/login/'?>">
				<?php 
				if ($show_dashboard) {
					echo "Dashboard";
				} else {
					echo "LogIn";
				} ?>
				</a></p>
			</div>
			<?php if(!$show_dashboard) :?>
			<div class="navbar-text navbar-right ">	 
			<p><a href="<?php echo 'http://localhost/pozoristeApp/index.php/register/'?>">Register</a></p>
			</div>
			<?php else : ?>
			<div class="navbar-text navbar-right ">
				<a href="<?php echo 'http://localhost/pozoristeApp/index.php/logout' ?>">Logout</a>
			</div>
			<?php endif; ?>
		</div>
	</nav>