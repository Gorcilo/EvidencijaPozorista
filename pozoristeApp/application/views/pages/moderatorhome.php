<div class="container" style="padding-bottom:140px;">
<center>
   <h1>Moderator stranica</h1>

   <h2>Dobrodosao <?php echo $username; ?>!</h2>
 </center>
 <hr>
 <h3> Komentari koji cekaju na odobrenje: </h3>
<hr> 
				<div class="row">
					<div class="col-md-2 col-sm-2" style="color: #d35400;">
						<h3> Korisnik</h3>
					</div>
					<div class="col-md-2 col-sm-2" style="color: #d35400;">
						<h3> Predstava </h3>
					</div>
					<div class="col-md-2 col-sm-2" style="color: #d35400;">
						<h3>  Datum </h3>
					</div>
					<div class="col-md-6 col-sm-6" style="color: #d35400;">
						<h3> Komentar </h3>
					</div>
				
				</div>
	<hr>
<?php foreach ($komentari as $komentar): ?>
					<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<p> <?php echo $komentar['korisnikId']?> 			 
								</p>
							</div>
							<div class="col-md-2 col-sm-2">
								<p><?php echo $komentar['predstavaId'] ?></p>
							</div>
							<div class="col-md-2 col-sm-2">
								<p><?php echo $komentar['datum']?></p>
							</div>
							<div class="col-md-4 col-sm-4">
								<textarea><?php echo $komentar['tekst']?></textarea>
							</div>
							<div class="col-md-2 col-sm-2">
								<div style="float: left; margin-right:5px;">
								<?php echo form_open('odobrikomentar'); ?>
										<input type="hidden" name="id" id="id" value="<?php echo $komentar['id']?>">
										<input class="btn btn-success" type="submit" value="Odobri"/>
								</form>
								</div>
								<?php echo form_open('obrisikomentar'); ?>
										<input type="hidden" name="id" id="id" value="<?php echo $komentar['id']?>">
										<input class="btn btn-danger" type="submit" value="Obrisi"/>
								</form>
							</div>
						</div>
					</li>
					</ul>

		<?php endforeach ?>
 

</div>