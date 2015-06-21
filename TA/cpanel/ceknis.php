<?php
include 'koneksi.php'; 
$nis=$_GET[q];

$cek=mysql_query("select * from sia_siswa where nis='$nis'");

if(mysql_num_rows($cek) > 0){
	echo "<p class='label label-info'>NIS $nis Sudah Ada !</p>";
} else {
	echo "<p class='label label-success'>NIS $nis Bisa Digunakan !</p>";
}
?>