<?php include'header.php' ?>

		<!-- content -->
		<div class="content">
			
			<div class="container">
			
				<div class="box">
				
					<div class="box-header">
						Identitas Sekolah SMKN Garuda
					</div>

					<div class="box-body">

						<?php 
							if(isset($_GET['success'])){
								echo "<div class'alert alert-seccess'>".$_GET['success']."</div>";
							}
						?>

						<form action="" method="POST" enctype="multipart/form-data">
							
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" placeholder="Nama Sekolah"  value="<?= $d->nama ?>" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" placeholder="Email Sekolah" value="<?= $d->email ?>" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Telepon</label>
								<input type="text" name="telp" placeholder="Telepon Sekolah" value="<?= $d->telepon ?>" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<textarea name="alamat" class="input-control" placeholder="Alamat"><?= $d->alamat ?></textarea> 
							</div>

							<div class="form-group">
								<label>Google Maps</label>
								<textarea name="gmaps" class="input-control" placeholder="Google Maps"><?= $d->google_maps ?></textarea> 
							</div>

							<div class="form-group">
								<label>Logo</label>
								<img src="../uploads/identitas/<?= $d->logo ?>" width="200px" class="image">
								<input type="hidden" name="logo_lama" value="<?= $d->logo ?>">
								<input type="file" name="logo_baru" class="input-control">
							</div>

							<div class="form-group">
								<label>Favicon</label>
								<img src="../uploads/identitas/<?= $d->favicon ?>" width="32px" class="image">
								<input type="hidden" name="favicon_lama" value="<?= $d->favicon ?>">
								<input type="file" name="favicon" class="input-control">
							</div>

<?php include 'footer.php' ?>		 