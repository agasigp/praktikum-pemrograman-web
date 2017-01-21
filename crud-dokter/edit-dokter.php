<?php
include 'connection.php';

// ambil pasien yang mau di edit berdasarkan id
$id_dokter = $_GET['id_dokter'];
$query = "SELECT * FROM dokter WHERE id = $id_dokter";
$hasil = mysqli_query($conn, $query);
$data_dokter = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form Edit Dokter</title>
</head>
<body>
	<h1>Edit Dokter</h1>
	<form method="post" action="proses-edit-dokter.php">
		<input type="hidden" name="id_dokter" value="<?php echo $data_dokter['id'] ?>">
		<p>NIP</p>
		<p><input type="text" name="nip" value="<?php echo $data_dokter['nip'] ?>"></p>
		<p>Nama</p>
		<p><input type="text" name="nama" value="<?php echo $data_dokter['nama'] ?>"></p>
		<p>Jenis Kelamin</p>
		<p>
			<select name="jenis_kelamin">
				<option value="L" <?php if ($data_dokter['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
				<option value="P" <?php if ($data_dokter['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
			</select>
		</p>
		<p>Gaji</p>
		<p><input type="text" name="gaji" value="<?php echo $data_dokter['gaji']; ?>"></p>
		<p>
			<input type="submit" value="Simpan">
			<input type="reset" value="Batal" onclick="self.history.back();">
		</p>
	</form>
</body>
</html>