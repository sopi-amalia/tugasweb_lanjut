<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			
			<a href="<?= base_url('mahasiswa') ?>" class="nav-link active">Home</a>
			<a href="<?= base_url('mahasiswa/tambah') ?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">SOPI</a>
		</div>
	</nav>
	<div class="alert-success text-center mt-2">
		Data Mahasiswa
	</div>
	<hr>
	<form class="container">
		<form action="<?= site_url('mahasiswa/simpan_data')?>" method="post">
			<div class="form-group">
				<label for="">NIM</label>
				<input type="number" name="nim" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Nama Mahasiswa</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<textarea class="form-control" name="alamat"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">
					Simpan Data
				</button>
			</div>
		</form>
	</form>

</body>
</html>