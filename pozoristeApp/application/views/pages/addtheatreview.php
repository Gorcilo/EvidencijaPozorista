

<div class="container" style="padding-bottom:140px;">
<center>
	<h1> Unos novog pozorista</h1>
<hr>
<?php echo validation_errors(); ?>
 <?php echo form_open('theatre'); ?>
 
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="naziv">Naziv:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="naziv" name="naziv"/>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="adresa">Adresa:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="adresa" name="adresa"/>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="opis">Opis:</label>
		</div>
		<div class="col-md-2">
			<textarea type="text" size="200" id="opis" name="opis"></textarea>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			 <label for="website">Website:</label>
		</div>
		<div class="col-md-2">
			 <input type="text" size="20" id="website" name="website"/>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="telefon">Telefon:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="telefon" name="telefon"/>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="slika">Slika:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="slika" name="slika" placeholder="Unesite relativnu putovanju"/>
		</div>
	</div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="email">E-mail:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="email" name="email"/>
		</div>
     </div>
	<br>
     <input class="btn btn-danger" type="submit" value="Unesi"/>
</form>
 
</div>

