

<html>
<head>
<title>Forma za predstavu</title>
</head>
<body>

<?php echo validation_errors(); ?>
 <?php echo form_open('play'); ?>
     <label for="kategorija">Kategorija:</label>
     <input type="text" size="20" id="kategorija" name="kategorija"/>
     <br/>
     <label for="naziv">Naziv:</label>
     <input type="text" size="20" id="naziv" name="naziv"/>
     <br/>
	 <label for="opis">Opis:</label>
     <input type="text" size="200" id="opis" name="opis"/>
     <br/>
	 <label for="uloge">Uloge:</label>
     <input type="text" size="20" id="uloge" name="uloge"/>
     <br/>
	 <label for="rezervacije">Rezervacije:</label>
     <input type="text" size="20" id="rezervacije" name="rezervacije"/>
     <br/>
	 <label for="slika">Slika:</label>
     <input type="text" size="20" id="slika" name="slika"/>
     <br/>
	 <label for="pozoriste">Pozoriste:</label>
     <input type="text" size="20" id="pozoriste" name="pozoriste"/>
     <br/>
	 <label for="datum">Datum:</label>
     <input type="text" size="20" id="datum" name="datum"/>
     <br/>
     <input type="submit" value="Record New Play"/>
</form>
   
</body>
</html>

