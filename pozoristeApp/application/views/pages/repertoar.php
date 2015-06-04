
	<div class="container" style="padding-bottom:140px;">
		<h2>Repertoar pozorista: <?php echo urldecode($title)?></h2>
<hr>
			<?php foreach ($rep as $temp): ?>
			<ul class="list-group">
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-4">
					<img src="<?php echo base_url($temp['slika'])?>" 
							 style= "height: 250px; 
									width: 250px; ">
						</img>
					</div>
					<div class="col-md-8">
						<h4><?php echo $temp['naziv'] ?></h4>
						<p><?php echo $temp['datum']?></p>
					Kliknite <a href="<?php echo 'predstava/'.$temp['id'] ?>">ovde</a> za detalje predstave
					</div>
				</div>
					</li>
			</ul>
			<?php endforeach ?>
	</div>