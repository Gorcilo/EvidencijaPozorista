
<head>
	<meta charset="utf-8">

	<style type="text/css">
	
	h3 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	
	</style>
</head>


<h2>Repertoar pozorista:</h2>
<h3><?php echo urldecode($title)?></h3>

<?php foreach ($rep as $temp): ?>

<div>
<h4><?php echo $temp['naziv'] ?></h4>
<p><?php echo $temp['datum']?></p>
<a href="<?php echo 'predstava/'.$temp['id'] ?>">Link ka predstavi</a>
</div>

<?php endforeach ?>
