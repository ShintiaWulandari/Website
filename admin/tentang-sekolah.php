<?php include'header.php' ?>

		<!-- content -->
		<div class="content">
			
			<div class="container">
			
				<div class="box">
				
					<div class="box-header">
					Tentang Sekolah SMKN Garuda
					</div>

					<div class="box-body">

							<div class="form-group">
								<label>Tentang Sekolah</label>
								<textarea name="tentang" class="input-control" placeholder="Tentang Sekolah"><?= $d->tentang_sekolah ?></textarea> 
							</div>

							<div class="form-group">
								<label>Foto Sekolah</label>
								<img src="../uploads/identitas/<?= $d->foto_sekolah?>" width="350px" class="image">
								<input type="hidden" name="foto_lama" value="<?= $d->foto_sekolah ?>">
								<input type="file" name="foto_baru" class="input-control">
							</div>

<?php include 'footer.php' ?>		 