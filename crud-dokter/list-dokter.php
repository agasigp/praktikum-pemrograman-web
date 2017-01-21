<?php
// Memanggil file proses-list-dokter.php
include 'proses-list-dokter.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Daftar Dokter</title>
</head>
<body>
	<h1>List/Daftar Dokter</h1>
	<table>
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>JK</th>
			<th>Gaji</th>
			<th>Aksi</th>
		</tr>
		<?php $no = 1; ?>
		<!-- Melakukan perulangan untuk menampilkan data pasien -->
		<?php foreach ($data_dokter as $dokter) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $dokter['nip'] ?></td>
			<td><?php echo $dokter['nama'] ?></td>
			<td><?php echo $dokter['jenis_kelamin'] ?></td>
			<td><?php echo $dokter['gaji'] ?></td>
			<td>
			<a href="edit-dokter.php?id_dokter=<?php echo $dokter['id']; ?>">Edit</a>
			<a href="delete-dokter.php?id_dokter=<?php echo $dokter['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data?');">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
	<a href="tambah-dokter.php">Tambah Dokter Baru</a>
</body>
</html>