<?php 
	// Array dengan indeks numerik
	// $data = array(1,2,3,4,5);
	// menampilkan data
	// echo "Data ke-1 = $data[0]<br>";
	// echo "Data ke-2 = $data[1]<br>";
	// echo "Data ke-3 = $data[2]<br>";
	// echo "Data ke-4 = $data[3]<br>";
	// echo "Data ke-5 = $data[4]<br>";

	// Array dengan indeks numerik
	// $data = array(1,'Agasi',3,'Dian',5);
	// menampilkan data
	// echo "Data ke-1 = $data[0]<br>";
	// echo "Data ke-2 = $data[1]<br>";
	// echo "Data ke-3 = $data[2]<br>";
	// echo "Data ke-4 = $data[3]<br>";
	// echo "Data ke-5 = $data[4]<br>";

	// array dengan indeks non-numerik
	$mahasiswa = array(
		'nama' => 'Agasi Gilang Persada',
		'nim' => '13.12.7581',
		'ipk' => 3
	);
	
	echo "Nama : ".$mahasiswa['nama']."<br>";
	echo "NIM : ".$mahasiswa['nim']."<br>";
	echo "IPK : ".$mahasiswa['ipk']."<br>";
?>