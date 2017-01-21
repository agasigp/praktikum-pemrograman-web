<?php
include 'connection.php';

// Mengambil hasil input dari formulir
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$gaji = $_POST['gaji'];

// Query untuk insert/tambah data ke tabel siswa
$query = "INSERT INTO dokter (nip, nama, jenis_kelamin, gaji)
VALUES ('$nip', '$nama', '$jenis_kelamin', $gaji)";

// Eksekusi query
$hasil = mysqli_query($conn, $query);

// Jika query berhasil maka alihkan/redirect ke halaman tampil siswa
// Jika query gagal maka alihkan/redirect kembali ke halaman tambah siswa
if ($hasil) {
	header('Location: list-dokter.php');
} else {
	header('Location: tambah-dokter.php');
}