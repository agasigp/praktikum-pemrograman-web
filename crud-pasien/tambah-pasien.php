<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form Tambah Pasien</title>
</head>
<body>
	<h1>Tambah Pasien</h1>
	<form method="post" action="proses-tambah-pasien.php">
		<p>No RM</p>
		<p><input type="text" name="no_rm"></p>
		<p>Nama</p>
		<p><input type="text" name="nama"></p>
		<p>Tanggal Lahir</p>
		<p><input type="text" name="tanggal_lahir"></p>
		<p>Jenis Kelamin</p>
		<p>
			<select name="jenis_kelamin">
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
			</select>
		</p>
		<p>Alamat</p>
		<p><input type="text" name="alamat"></p>
		<p>
			<input type="submit" value="Simpan">
			<input type="reset" value="Batal" onclick="self.history.back();">
		</p>
	</form>
</body>
</html>