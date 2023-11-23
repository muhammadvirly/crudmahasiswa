<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Tambah Data Prodi
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group mb-2 ">
							<label for="nama">Nama Prodi</label>
							<input type="text" name="nama" value="<?=set_value('nama');?>" id="nama" class="form-control" placeholder="Nama Prodi">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="ruangan">Ruangan</label>
							<input type="text" name="ruangan" value="<?=set_value('ruangan');?>" id="ruangan" class="form-control" placeholder="Ruangan">
							<?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="jurusan">Jurusan</label>
							<input type="text" name="jurusan" value="<?=set_value('jurusan');?>" id="jurusan" class="form-control" placeholder="Jurusan">
							<?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="akreditasi">Akreditasi</label>
							<input type="text" name="akreditasi" value="<?=set_value('akreditasi');?>" id="akreditasi" class="form-control" placeholder="Akreditasi">
							<?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="nama_kaprodi">Nama Kaprodi</label>
							<input type="text" name="nama_kaprodi" value="<?=set_value('nama_kaprodi');?>" id="nama_kaprodi" class="form-control" placeholder="Nama Kaprodi">
							<?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="tahun_berdiri">Tahun Berdiri</label>
							<input type="text" name="tahun_berdiri" value="<?=set_value('tahun_berdiri');?>" id="tahun_berdiri" class="form-control" placeholder="Tahun Berdiri">
							<?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="output_lulusan">Output Lulusan</label>
							<input type="text" name="output_lulusan" value="<?=set_value('output_lulusan');?>" id="output_lulusan" class="form-control" placeholder="Output Lulusan">
							<?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<a href="<?= base_url('Prodi') ?>" class="btn mt-2 btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Tambah Prodi</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
