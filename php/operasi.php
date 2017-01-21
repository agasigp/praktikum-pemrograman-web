<?php
//Operasi Aritmatika. Hanya berlaku pada tipe data integer dan float
$bilangan1 = 1;
$bilangan2 = 2;
$bilangan3 = $bilangan1 + $bilangan2;
$bilangan4 = $bilangan1 - $bilangan2;
$bilangan5 = $bilangan1 * $bilangan2;
$bilangan6 = $bilangan1 / $bilangan2;

//Operasi concat (penggabungan string)
$nama = "Agasi Gilang Persada";
$nama_lengkap = $nama . " S.Kom.";
?>

<?php echo $bilangan1 ?> + <?php echo $bilangan2 ?> = <?php echo $bilangan3?><br>
<?php echo $bilangan1 ?> - <?php echo $bilangan2 ?> = <?php echo $bilangan4?><br>
<?php echo $bilangan1 ?> * <?php echo $bilangan2 ?> = <?php echo $bilangan5?><br>
<?php echo $bilangan1 ?> / <?php echo $bilangan2 ?> = <?php echo $bilangan6?><br>
Nama lengkap : <?php echo $nama_lengkap ?><br>