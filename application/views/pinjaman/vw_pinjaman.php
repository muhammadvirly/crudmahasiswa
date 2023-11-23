<div class="container-fluid">
	<h1 class=" h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row">
		<div class="col-md-6">
			<a href="<?= base_url('Pinjaman/tambah') ?>" class="btn btn-info mb-2">Tambah Pinjaman</a>
		</div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Nik</td>
						<td>Nama</td>
						<td>Alamat</td>	
						<td>No Hp</td>
						<td>Email</td>
						<td>Jumlah</td>
						<td>Durasi</td>
                        <td>Action</td>
					</tr>
				</thead>
				<tbody>
				<?php $i = 1;?>
				<?php foreach ($pinjaman as $us ) :?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $us['nik']?></td>
						<td><?= $us['nama']?></td>
						<td><?= $us['alamat']?></td>
						<td><?= $us['no_hp']?></td>
						<td><?= $us['email']?></td>
						<td><?= $us['jumlah_pinjaman']?></td>
						<td><?= $us['durasi']?></td>
						<td>
							<a href="<?= base_url('Pinjaman/hapus/') . $us['id'] ?>" class="btn btn-danger">Hapus</a>
							<a href="<?= base_url('Pinjaman/edit/') . $us['id'] ?>" class="btn btn-warning">Edit</a>
						</td>
					</tr>
					<?php $i++ ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
