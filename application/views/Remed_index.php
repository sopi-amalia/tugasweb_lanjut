<!DOCTYPE html>
<html>
<head>
	<title>Table Mahasiswa</title>
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
			<a href="<?= base_url('Ccontroller/tambah')?>"class = "nav-link">Tambah Data</a>
		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">SOPI</a>
		</div>
	</nav>

	<div class="alert-success text-center mt-2">
		Data Table Mahasiswa
	</div>

	<div class="container">

		<table class="table table-bordered table-sm">
			<tr>
				<th width="10%">No</th>
				<th>id_12</th>
				<th>jurusan</th>
				<th>kelas</th>
				<th>isi</th>
				<th>Aksi</th>
			</tr> 
				<?php $no = 1; ?>
				<?php foreach ($data_table as $key ): ?> 

			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $key->id_12 ?></td>
				<td><?php echo $key->jurusan ?></td>
				<td><?php echo $key->kelas ?></td>
				<td><?php echo $key->isi ?></td>
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