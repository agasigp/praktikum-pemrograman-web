<?php
include 'connection.php';

// Mengambil hasil input dari formulir
$id_dokter = $_POST['id_dokter'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$gaji = $_POST['gaji'];

// Query untuk update data siswa
$query = "UPDATE dokter
SET nama = '$nama',
nip = '$nip',
jenis_kelamin = '$jenis_kelamin',
gaji = $gaji
WHERE id = $id_dokter";

// Eksekusi query dan simpan hasilnya di variabel
$hasil = mysqli_query($conn, $query);

// Jika query berhasil maka alihkan/redirect ke halaman tampil siswa
// Jika query gagal maka alihkan/redirect kembali ke halaman edit siswa
if ($hasil) {
	header('Location: list-dokter.php');
} else {
	header('Location: edit-dokter.php?id_dokter='.$id_dokter);
}