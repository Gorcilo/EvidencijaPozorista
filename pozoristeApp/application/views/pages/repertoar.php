
	<div class="container" style="padding-bottom:140px;">
		<h2>Repertoar pozorista:</h2>
			<h3><?php echo urldecode($title)?></h3>

			<?php foreach ($rep as $temp): ?>
				<div>
					<h4><?php echo $temp['naziv'] ?></h4>
					<p><?php echo $temp['datum']?></p>
					<a href="<?php echo 'predstava/'.$temp['id'] ?>">Link ka predstavi</a>
				</div>
			<?php endforeach ?>
	</div>