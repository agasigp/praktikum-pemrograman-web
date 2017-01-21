<?php
include 'connection.php';

// ambil pasien yang mau di edit berdasarkan id
$id_pasien = $_GET['id_pasien'];
$query = "SELECT * FROM pasien WHERE id= $id_pasien";
$hasil = mysqli_query($conn, $query);
$data_pasien = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form Edit Pasien</title>
</head>
<body>
	<h1>Edit Pasien</h1>
	<form method="post" action="proses-edit-pasien.php">
		<input type="hidden" name="id_pasien" value="<?php echo $data_pasien['id'] ?>">
		<p>No RM</p>
		<p><input type="text" name="no_rm" value="<?php echo $data_pasien['no_rm'] ?>"></p>
		<p>Nama</p>
		<p><input type="text" name="nama" value="<?php echo $data_pasien['nama'] ?>"></p>
		<p>Tanggal Lahir</p>
		<p><input type="text" name="tanggal_lahir" value="<?php echo $data_pasien['tanggal_lahir'] ?>"></p>
		<p>Jenis Kelamin</p>
		<p>
			<select name="jenis_kelamin">
				<option value="L" <?php if ($data_pasien['jenis_kelamin'] == 'L') echo "selected" ?>>Laki-laki</option>
				<option value="P" <?php if ($data_pasien['jenis_kelamin'] == 'P') echo "selected" ?>>Perempuan</option>
			</select>
		</p>
		<p>Alamat</p>
		<p><input type="text" name="alamat"  value="<?php echo $data_pasien['alamat'] ?>"></p>
		<p>
			<input type="submit" value="Simpan">
			<input type="reset" value="Batal" onclick="self.history.back();">
		</p>
	</form>
</body>
</html>