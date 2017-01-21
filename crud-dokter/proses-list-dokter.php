<?php
// Memanggil/memasukkan file connection.php
include 'connection.php';

// Query untuk menampilkan data
$query = "SELECT * FROM dokter";

// Eksekusi query
$hasil = mysqli_query($conn, $query);

// ... menampung semua data siswa
$data_dokter = array();

// Tiap baris dari hasil query dikumpulkan ke $data_pasien
while ($row = mysqli_fetch_assoc($hasil)) {
	$data_dokter[] = $row;
}