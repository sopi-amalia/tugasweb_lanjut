<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark shodow bg-primary"
	 style="background-color: #3175bf">
		<a href="" class="navbar-brand">
			Tugas
		</a>

		<div class="navbar-nav">
			<a href="" class="nav-link active">Home</a>
			<a href="<?= base_url('mahasiswa/tambah') ?>" class="nav-link">Tambah Data</a>
		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">SOPI</a>
		</div>
	</nav>

	<div class="alert-success text-center mt-2">
		Data Mahasiswa
	</div>

	<div class="container">

		<table class="table table-bordered table-sm">
			<tr>
				<th width="10%">No</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th width="15%">Aksi</th>
			</tr>
				<?php $no = 1; ?>
				<?php foreach ($data_table as $key): ?> 

			<tr>
				<td><?= $no++; ?></td>
				<td><?= $key->nim ?></td>
				<td><?= $key->nama ?></td>
				<td><?= $key->alamat ?></td>
				<td>
					<a href="" class="btn btn-info btn-sm">Edit</a>
					<a href="" class="btn btn-danger btn-sm">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
		</table>
	</div>

	
</body>
</html>