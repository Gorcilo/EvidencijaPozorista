<div class="container" style="padding-bottom:140px;">
	<center>
		<h2>Podaci o predstavi <span style="color:34495e; font-weight:700;"><?php echo $predstava[0]['naziv']?></span></h2>
	</center>
	<hr>
	<h4> Opis predstave:</h4>
	<p><?php echo $predstava[0]['opis']?></p>
	<h4>Uloge:</h4>
	<p><?php echo $predstava[0]['uloge']?></p>
	<h4>Link za rezervacije:</h4>
	<a href=<?php echo $predstava[0]['rezervacije']?>><?php echo $predstava[0]['rezervacije']?></a>

	<?php if($show_dashboard) :?>
	<?php echo validation_errors(); ?>
	<?php echo form_open('comments/'.$predstava[0]['id']); ?>
		<label for="komentar">Komentar:</label>
		<textarea class="form-control" rows="5" placeholder="Ovde mozete uneti Vas komentar"/> </textarea>
		<br/>
		<label for="ocena">Ocena:</label>
		<input type="number" size="20" id="ocena" name="ocena" min="0" max="5"/>
		<br>
		<input class="btn btn-success" type="submit" value="Posalji"/>
	</form>
 	<?php endif; ?>  
 
	
		<h3>Ocena: <?php echo $ocena?>  </h3>
  
		<h3 style="color:#34495e;"><b>Komentari:</b></h3>
		<hr>
		<?php for ($i = 0; $i < count($komentari); ++$i) { ?>
				<p><?php echo $komentari[$i]['tekst'];  ?></p>	
			   	<p><?php echo $komentari[$i]['datum'] ?></p>
		<?php } ?>

</div>
               