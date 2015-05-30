

<html>
<head>
<title>Forma za pozoriste</title>
</head>
<body>

<?php echo validation_errors(); ?>
 <?php echo form_open('theatre'); ?>
     <label for="naziv">Naziv:</label>
     <input type="text" size="20" id="naziv" name="naziv"/>
     <br/>
     <label for="adresa">Adresa:</label>
     <input type="text" size="20" id="adresa" name="adresa"/>
     <br/>
	 <label for="website">Website:</label>
     <input type="text" size="20" id="website" name="website"/>
     <br/>
	 <label for="telefon">Telefon:</label>
     <input type="text" size="20" id="telefon" name="telefon"/>
     <br/>
	 <label for="email">E-mail:</label>
     <input type="text" size="20" id="email" name="email"/>
     <br/>
	 <label for="opis">Opis:</label>
     <input type="text" size="200" id="opis" name="opis"/>
     <br/>
	 <label for="slika">Slika:</label>
     <input type="text" size="20" id="slika" name="slika"/>
     <br/>
     <input type="submit" value="Register"/>
</form>
   
</body>
</html>

