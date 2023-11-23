<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
						<div class="form-group mb-2">
							<label for="nama">Nama</label>
							<input type="text" name="nama" id="nama" value="<?= $mahasiswa['nama']; ?>"class="form-control" placeholder="Nama">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2">
							<label for="nim">Nim</label>
							<input type="text" name="nim" id="nim" value="<?= $mahasiswa['nim']; ?>"class="form-control" placeholder="Nim">
							<?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
								<option value="Laki-laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-laki") {
																echo "selected";
															} ?>>Laki-laki</option>
								<option value="Perempuan" <?php if ($mahasiswa['jenis_kelamin'] == "Perempuan") {
																echo "selected";
															} ?>>Perempuan</option>
							</select>
							<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group mb-2">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" value="<?= $mahasiswa['email']; ?>"class="form-control" placeholder="Email">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2">
							<label for="prodi">Prodi</label>
							<select name="prodi" id="prodi" class="form-control">
								<?php foreach ($prodi as $p) : ?>
									<option value="<?= $p['id']; ?>" <?php if ($mahasiswa['prodi'] == $p['id']) {
																		 	echo "selected";
																			} ?>><?= $p['nama']; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2">
							<label for="asal_sekolah">Asal Sekolah</label>
							<input type="text" name="asal_sekolah" id="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>"class="form-control" placeholder="Asal Sekolah">
							<?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2">
							<label for="no_hp">Nomor Hp</label>
							<input type="text" name="no_hp" id="no_hp" value="<?= $mahasiswa['no_hp']; ?>"class="form-control" placeholder="Nomor Hp">
							<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" id="alamat" value="<?= $mahasiswa['alamat']; ?>"class="form-control" placeholder="Alamat">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<a href="<?= base_url('Mahasiswa') ?>" class="mt-2 btn btn-danger">Tutup</a>
						<button type="submit" name="update" class="btn mt-2 btn-primary float-right">Ubah Mahasiswa</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
