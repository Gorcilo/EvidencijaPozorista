

<div class="container" style="padding-bottom:140px;">
<center>
	<h1> Unos nove predstave</h1>
<hr>
<?php echo validation_errors(); ?>
 <?php echo form_open('play'); ?>
	<div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="kategorija">Kategorija:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="kategorija" name="kategorija"/>
		</div>
	 </div>
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
			<label for="opis">Opis:</label>
		</div>
		<div class="col-md-2">
			<textarea type="text" size="200" id="opis" name="opis"></textarea>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="uloge">Uloge:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="uloge" name="uloge"/>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="rezervacije">Rezervacije:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="rezervacije" name="rezervacije"/>
		</div>
	 </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="slika">Slika:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="slika" name="slika"/>
		</div>
	</div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="pozoriste">Pozoriste:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="pozoriste" name="pozoriste"/>
		</div>
     </div>
	 <div class="row">
		<div class="col-md-2 col-md-offset-4">
			<label for="datum">Datum:</label>
		</div>
		<div class="col-md-2">
			<input type="text" size="20" id="datum" name="datum"/>
		</div>
	</div>
	 <br>
     <div class="row">
     <input class="btn btn-danger" type="submit" value="Unesi"/>
	 </div>
</form>
 </center>
</div>
