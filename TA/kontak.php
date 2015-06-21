<div class="page-header">
	<h1 class="page-title">Contact Us</h1>
</div>
<div id="map"></div>
<?php
$q=mysql_query("select * from web_profil");
$h=mysql_fetch_array($q);
?>
<div class="one-third">
	<h3>Temukan Kami</h3>
	<address>
		Alamat : <?php echo "$h[alamat], $h[kab], $h[prov], $h[kodepos]"; ?> <br />
		Phone : <?php echo "$h[telp]"; ?> <br />
		Email: <?php echo "$h[email]"; ?>
	</address>
</div>