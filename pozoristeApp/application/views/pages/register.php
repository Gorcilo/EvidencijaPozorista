
<div class="container" style="padding-bottom:140px;">
	<center>
	<h1> Registratizija novog korisnika</h1>
<hr>
<?php echo validation_errors(); ?>
 <?php echo form_open('Register'); ?>
	<div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="username">Username:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="username" name="username"/>
		</div>
	</div>
    <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="password">Password:</label>
		</div>
		<div class="col-md-2">
			<input type="password" size="20" id="password" name="password"/>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			 <label for="firstname">First Name:</label>
		</div>
		<div class="col-md-1">
			<input type="text" size="20" id="firstname" name="firstname"/>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="lastname">Last Name:</label>
		</div>
		<div class="col-md-1">
			<input type="text" size="20" id="lastname" name="lastname"/>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="email">E-mail:</label>
		</div>
		<div class="col-md-1">
			 <input type="text" size="20" id="email" name="email"/>
		</div>
	 </div>
	 <br>
	 <div class="row">
		<input class="btn btn-danger" type="submit" value="Register"/>
	 </div>
</form>

</center>
</div>
