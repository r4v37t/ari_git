<?php
include 'koneksi.php'; 
$nip=$_GET[q];

$cek=mysql_query("select * from sia_guru where nip='$nip'");

if(mysql_num_rows($cek) > 0){
	echo "<p class='label label-info'>NIP $nip Sudah Ada !</p>";
} else {
	echo "<p class='label label-success'>NIP $nip Bisa Digunakan !</p>";
}
?>