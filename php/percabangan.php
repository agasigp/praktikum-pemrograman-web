<?php 
//Percabangan dengan if
$bilangan1 = 1;
$bilangan2 = 2;

//Jika bilangan1 > bilangan2
if ($bilangan1 > $bilangan2) {
	echo "$bilangan1 lebih besar daripada (>) $bilangan2";
//Jika bilangan1 < bilangan2
} else if($bilangan1 < $bilangan2) {
	echo "$bilangan1 lebih kecil daripada (<) $bilangan2";
//Jika bilangan1 = bilangan2
} else {
	echo "$bilangan1 sama dengan (=) $bilangan2";
}
?>