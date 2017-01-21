<?php
include 'connection.php';

// Mengambil hasil input dari formulir
$id_pasien = $_POST['id_pasien'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_rm = $_POST['no_rm'];

// Query untuk update data siswa
$query = "UPDATE pasien
SET nama = '$nama',
tanggal_lahir = '$tanggal_lahir',
jenis_kelamin = '$jenis_kelamin',
alamat = '$alamat',
no_rm = '$no_rm'
WHERE id = $id_pasien";

// Eksekusi query dan simpan hasilnya di variabel
$hasil = mysqli_query($conn, $query);

// Jika query berhasil maka alihkan/redirect ke halaman tampil siswa
// Jika query gagal maka alihkan/redirect kembali ke halaman edit siswa
if ($hasil) {
header('Location: list-pasien.php');
} else {
header('Location: edit-pasien.php');
}