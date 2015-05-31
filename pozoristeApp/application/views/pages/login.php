<div class="container" style="padding-bottom:140px;">
   <h1>Unesite vase kredencijale</h1>
	<hr>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
		<label for="username">Username:</label>
		<input type="text" size="20" id="username" name="username"/>
     <br>
		<label for="sifra">Password:</label>
		<input type="password" size="20" id="sifra" name="sifra"/>
     <br>
     <input class="btn btn-success" type="submit" value="Login"/>
   </form>
 </div>