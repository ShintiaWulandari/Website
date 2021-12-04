	<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Kontak</h3>
			
			<div class="col-4">
				<p style="margin-bottom: 10px;"><b>Alamat :</b> <br><?= $d->alamat ?></p>
				<p style="margin-bottom: 10px;"><b>Telepon :</b> <br><?= $d->telepon ?></p>
				<p style="margin-bottom: 10px;"><b>Email :</b> <br><?= $d->email ?></p>
			</div>

			<div class="box-gmaps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.907876570156!2d98.51251621408943!3d3.608554551164553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303129ee0be0315d%3A0xd980b586656ebd5d!2sJl.%20Soekarno%20Hatta%2C%20Kec.%20Binjai%20Tim.%2C%20Kota%20Binjai%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1638454389509!5m2!1sid!2sid" width="850" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>

		</div>
	</div>

	<?php include 'footer.php'; ?>