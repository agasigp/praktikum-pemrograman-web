<?php
include 'connection.php';

$id_pasien = $_GET['id_pasien'];

$query = "DELETE FROM pasien WHERE id = $id_pasien";

// Eksekusi query dan simpan hasilnya di variabel
$hasil = mysqli_query($conn, $query);

// Jika query berhasil maka alihkan/redirect ke halaman tampil siswa
// Jika query gagal maka alihkan/redirect kembali ke halaman tambah siswa
if ($hasil) {
header('location: list-pasien.php');
} else {
header('location: tambah-pasien.php');
}