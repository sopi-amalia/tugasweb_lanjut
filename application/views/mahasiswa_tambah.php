<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>

	<h1>Tambah Mahasiswa</h1>
	<a href="<?= site_url('mahasiswa') ?>">Kembali</a>
	<hr>
	<form>
		<h6>Nim</h6>
		<input type="number" name="nim"> <br>

		<h6>Nama Mahasisa</h6>
		<input type="text" name="nama_lengkap"><br><br>

		<input type="submit" name="submit" value="simpan">

	</form>

</body>
</html>