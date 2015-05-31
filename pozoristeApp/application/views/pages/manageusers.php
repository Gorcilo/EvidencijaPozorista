

<div class="container" style="padding-bottom:140px;">
<center>
	<h1> Lista korisnika</h1>
<hr>
				<div class="row">
					<div class="col-md-2 col-sm-2" style="color: #d35400;">
						<h3> Username</h3>
					</div>
					<div class="col-md-2 col-sm-2" style="color: #d35400;">
						<h3> Ime </h3>
					</div>
					<div class="col-md-2 col-sm-2" style="color: #d35400;">
						<h3>  Prezime </h3>
					</div>
					<div class="col-md-2 col-sm-2" style="color: #d35400;">
						<h3> Email </h3>
					</div>
					<div class="col-md-2 col-sm-2" style="color: #d35400;">
						<h3> Tip korisnika </h3>
					</div>
					<div class="col-md-2 col-sm-2" style="color: #d35400;">
						<h3> Novi tip korisnika </h3>
					</div>
				</div>
	<hr>
<p> <i>Za odabir da korisnik bude moderator odabrati <span class="badge">1</span>, a za ukidanje moderatorske dozvole odabrati <span class="badge">0 </span></i></p>
<?php foreach ($lista_korisnika as $korisnik): ?>
					<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<p> <?php echo $korisnik['username']?> 			 
								</p>
							</div>
							<div class="col-md-2 col-sm-2">
								<p><?php echo $korisnik['ime'] ?></p>
							</div>
							<div class="col-md-2 col-sm-2">
								<p><?php echo $korisnik['prezime']?></p>
							</div>
							<div class="col-md-2 col-sm-2">
								<p><?php echo $korisnik['email']?></p>
							</div>
							<div class="col-md-1 col-sm-1">
							<div class="badge">
								<?php 
									if ($korisnik['tipKorisnika'] == 2){ 
										echo "Admin"; }
									else {
									if ($korisnik['tipKorisnika'] == 1){
											echo "Moderator";
											} 
										else {
												echo "Reg korisnik";
											}
										}
								?></div>
							</div>
							<?php if ($korisnik['tipKorisnika'] != 2): ?> 
								<?php echo form_open('updateusers'); ?>		
									<div class="col-md-3 col-sm-3">
										<input type="hidden" name="id" id="id" value="<?php echo $korisnik['id']?>">
										 <input type="number" name="tipKorisnika" id="tipKorisnika" min="0" max="1">
										<input class="btn btn-danger" type="submit" value="Promeni privilegije"/>
									</div>
								</form>
								<?php endif ?>
						</div>
					</li>
					</ul>

		<?php endforeach ?>
 

 
</div>

