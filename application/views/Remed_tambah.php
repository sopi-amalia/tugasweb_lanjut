<!DOCTYPE html>
<html>
<head>
	<title>Table Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?= base_url('Ccontroller')?>"class="nav-link active">Home</a>
		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">SOPI</a>
		</div>
	</nav>
	<div class="alert-success text-center mt-2">
		Tambah Mahasiswa
	</div>
	<hr>
	<div class="container">
		<form method="post" action="<?= site_url('Ccontroller/simpan_data')?> ">
			<div class="form-group">
				<label for="">id_12</label>
				<input type="number" name="txtid_12" class="form-control">
			</div>
			<div class="form-group">
				<label for="">jurusan</label>
				<input type="text" name="txtjurusan" class="form-control">
			</div>
			<div class="form-group">
				<label for="">kelas</label>
				<input type="text" name="txtkelas" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="">isi</label>
				<textarea class="form-control" name="txtisi"></textarea>
			</div>
				<br>
						<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
						<a href="<?= site_url('Ccontroller')?>" class="btn btn-primary">Kembali</a>
					</div>
				</div>
			
			</div>
		</form>
		</form>

</body>
</html>