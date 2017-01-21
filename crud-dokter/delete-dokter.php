<?php
include 'connection.php';

$id_dokter = $_GET['id_dokter'];

$query = "DELETE FROM dokter WHERE id = $id_dokter";

// Eksekusi query dan simpan hasilnya di variabel
$hasil = mysqli_query($conn, $query);

// Jika query berhasil maka alihkan/redirect ke halaman tampil siswa
// Jika query gagal maka alihkan/redirect kembali ke halaman tambah siswa
if ($hasil) {
	header('location: list-dokter.php');
} else {
	header('location: list-dokter.php');
}