<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Pinjaman Online Tanpa Bunga
				</div>
				<div class="card-body">
					<form action="<?=base_url('Pinjaman/upload'); ?>" method="POST">
						<div class="form-group mb-2 ">
							<label for="nama">nik</label>
							<input type="text" name="nik" id="nik" class="form-control" placeholder="nik">
						</div>
						<div class="form-group mb-2 ">
							<label for="ruangan">nama</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="nama">
						</div>
						<div class="form-group mb-2 ">
							<label for="jurusan">Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat">
						</div>
						<div class="form-group mb-2 ">
							<label for="akreditasi">no_hp</label>
							<input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="no_hp">
						</div>
						<div class="form-group mb-2 ">
							<label for="nama_kaprodi">Email</label>
							<input type="text" name="email" id="email" class="form-control" placeholder="email">
						</div>
						<div class="form-group mb-2 ">
							<label for="tahun_berdiri">Jumlah</label>
							<input type="text" name="jumlah_pinjaman" id="jumlah_pinjaman" class="form-control" placeholder="jumlah_pinjaman">
						</div>
						<div class="form-group mb-2 ">
							<label for="output_lulusan">Durasi</label>
							<input type="text" name="durasi" id="durasi" class="form-control" placeholder="durasi">
						</div>
						<a href="<?= base_url('Pinjaman') ?>" class="btn mt-2 btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Tambah Pinjaman</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
