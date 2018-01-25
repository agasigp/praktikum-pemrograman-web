<?php
// Memanggil/memasukkan file connection.php
include 'connection.php';

// Query untuk menampilkan data
if (isset($_GET['cari'])) {
	$pencarian = $_GET['cari'];
} else {
	$pencarian = '';
}
$query = "SELECT * FROM pasien 
	WHERE no_rm LIKE '%$pencarian%' OR nama LIKE '%$pencarian%'";

// Eksekusi query
$hasil = mysqli_query($conn, $query);

// ... menampung semua data siswa
$data_pasien = array();

// Tiap baris dari hasil query dikumpulkan ke $data_pasien
while ($row = mysqli_fetch_assoc($hasil)) {
	$data_pasien[] = $row;
}
?>
