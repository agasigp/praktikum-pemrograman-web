<?php
include 'connection.php';

// Mengambil hasil input dari formulir
$no_rm = $_POST['no_rm'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Query untuk insert/tambah data ke tabel siswa
$query = "INSERT INTO pasien (nama, tanggal_lahir, jenis_kelamin, alamat, no_rm)
VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin', 'alamat', '$no_rm')";

// Eksekusi query
$hasil = mysqli_query($conn, $query);

// Jika query berhasil maka alihkan/redirect ke halaman tampil siswa
// Jika query gagal maka alihkan/redirect kembali ke halaman tambah siswa
if ($hasil) {
header('Location: list-pasien.php');
} else {
header('Location: tambah-pasien.php');
}