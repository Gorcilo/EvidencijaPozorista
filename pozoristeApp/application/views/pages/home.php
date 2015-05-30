
<div class="container" style="padding-bottom:140px;">
		<h2>Pretraga predstava</h2>
		<?php foreach ($lista_pozoirsta as $pozoriste): ?>

			<ul class="list-group">
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<img src="<?php echo $pozoriste['slika']?>" 
							 style= "height: 250px; 
									width: 250px; ">
						</img>
					</div>
					<div class="col-md-9 col-sm-6">
						<h3><b>Naziv:</b> <?php echo $pozoriste['naziv'] ?></h3>
						<p><b>Email:</b> <?php echo $pozoriste['email']?></p>
						<p><b>Website:</b> <a href="<?php echo $pozoriste['website']?>"><?php echo $pozoriste['website']?></a></p>
						<p><b>Adresa:</b> <?php echo $pozoriste['adresa']?></p>
						<p><b>Telefon:</b> <?php echo $pozoriste['telefon']?></p>
						<p><b>Opis:</b> <?php echo $pozoriste['opis']?></p>
						<p><a href="<?php echo 'index.php/repertoar/'.$pozoriste['naziv'] ?>">Repertoar</a></p>
					</div>
				</div>
			</li>
			</ul>

		<?php endforeach ?>
</div>  <!-- close bootstrap container div -->