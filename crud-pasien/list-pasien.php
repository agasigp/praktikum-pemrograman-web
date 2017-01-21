<?php
include 'proses-list-pasien.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Daftar Pasien</title>
</head>
<body>
	<h1>List/Daftar Pasien</h1>
	<form>
		<input type="text" name="cari" placeholder="Nama/No RM">
		<input type="submit" value="Cari">
	</form>
	<table>
		<tr>
			<th>No</th>
			<th>No RM</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>JK</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php $no = 1; ?>
		<!-- Melakukan perulangan untuk menampilkan data pasien -->
		<?php foreach ($data_pasien as $pasien) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $pasien['no_rm'] ?></td>
			<td><?php echo $pasien['nama'] ?></td>
			<td><?php echo $pasien['tanggal_lahir'] ?></td>
			<td><?php echo $pasien['jenis_kelamin'] ?></td>
			<td><?php echo $pasien['alamat'] ?></td>
			<td>
			<a href="edit-pasien.php?id_pasien=<?php echo $pasien['id']; ?>">Edit</a>
			<a href="delete-pasien.php?id_pasien=<?php echo $pasien['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data?');">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
	<a href="tambah-pasien.php">Tambah Pasien Baru</a>
</body>
</html>