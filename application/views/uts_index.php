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
			<a href="<?= base_url('table_a/tambah') ?>" class="nav-link">Tambah Data</a>
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
				<th>ID_012</th>
				<th>Jurusan</th>
				<th>Kelas</th>
				<th>Isi</th>
			</tr> 
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $key->id_012 ?></td>
				<td><?= $key->jurusan ?></td>
				<td><?= $key->kelas ?></td>
				<td><?= $key->isi ?></td>
				<td>
					<a href="" class="btn btn-info btn-sm">Edit</a>
					<a href="" class="btn btn-danger btn-sm">Hapus</a>
				</td>
			</tr>
		</table>
	</div>

	
</body>
</html>