<div class="container" style="padding-bottom:140px;">
<h2>Podaci o predstavi:</h2>
  <h3><?php echo $predstava[0]['naziv']?></h3>
  <p>Opis predstave:</p>
  <p><?php echo $predstava[0]['opis']?></p>
  <p>Uloge:</p>
  <p><?php echo $predstava[0]['uloge']?></p>
  <p>Link za rezervacije:</p>
  <p><?php echo $predstava[0]['rezervacije']?></p>
  
  <head>
<title>Forma za predstavu</title>
</head>
<body>

<?php echo validation_errors(); ?>
 <?php echo form_open('comments/'.$predstava[0]['id']); ?>
     <label for="komentar">Komentar:</label>
     <input type="text" size="20" id="komentar" name="komentar"/>
     <br/>
     <label for="ocena">Ocena:</label>
     <input type="number" size="20" id="ocena" name="ocena" min="0" max="5"/>
     <br/>
     <input type="submit" value="Posalji"/>
</form>
   
</body>
  
<h3>Ocena: <?php echo $ocena?>  </h3>
  
<h3>Komentari:</h3>
               
<body>
	 <?php for ($i = 0; $i < count($komentari); ++$i) { ?>
			   <p><?php echo $komentari[$i]['tekst']; ?></p>	  
	 <?php } ?>
</body>
               