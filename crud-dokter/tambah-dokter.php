<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form Tambah Dokter</title>
</head>
<body>
	<h1>Tambah Dokter</h1>
	<form method="post" action="proses-tambah-dokter.php">
		<p>NIP</p>
		<p><input type="text" name="nip"></p>
		<p>Nama</p>
		<p><input type="text" name="nama"></p>
		<p>Jenis Kelamin</p>
		<p>
			<select name="jenis_kelamin">
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
			</select>
		</p>
		<p>Gaji</p>
		<p><input type="text" name="gaji"></p>
		<p>
			<input type="submit" value="Simpan">
			<input type="reset" value="Batal" onclick="self.history.back();">
		</p>
	</form>
</body>
</html>