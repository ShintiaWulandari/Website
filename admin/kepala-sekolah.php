<?php include'header.php' ?>

		<!-- content -->
		<div class="content">
			
			<div class="container">
			
				<div class="box">
				
					<div class="box-header">
					Kepala Sekolah SMKN Garuda
					</div>

					<div class="box-body">

							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" class="input-control" placeholder="Nama Kepala Sekolah" value="<?= $d->nama_kepsek ?>" required>
							</div>

							<div class="form-group">
								<label>Sambutan</label>
								<textarea type="sambutan" class="input-control" placeholder="Sambutan Kepala Sekolah"><?= $d->sambutan_kepsek ?></textarea> 
							</div>


							<div class="form-group">
								<label> Foto</label>
								<img src="../uploads/identitas/<?= $d->foto_kepsek?>" widht="200px" class="image">
								<input type="hidden" name="foto_lama" value="<?= $d->foto_kepsek ?>">
								<input type="file" name="foto_baru" class="input-control">
							</div>

<?php include 'footer.php' ?>		 