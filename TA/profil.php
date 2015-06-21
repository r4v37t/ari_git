<div class="page-header">
	<h1 class="page-title">Profil Sekolah</h1>
</div>
<section id="content">
	<?php
	$q=mysql_query("select * from web_profil where profil_id=1");
	$h=mysql_fetch_array($q);
	?>
	<article class="post clearfix">
		<table width="100%">
			<tr>
				<td width="20%">Nama Sekolah</td>
				<td width="2%">:</td>
				<td width="78%"><?php echo $h['nama']; ?></td>
			</tr>
			<tr>
				<td>NIS/NSS/NDS</td>
				<td>:</td>
				<td><?php echo $h['nss']; ?></td>
			</tr>
			<tr>
				<td>Alamat Sekolah</td>
				<td>:</td>
				<td><?php echo $h['alamat']; ?></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Kode Pos <?php echo $h['kodepos']; ?><i style="margin-left:50px">&nbsp;</i>Telp. <?php echo $h['telp']; ?></td>
			</tr>
			<tr>
				<td>Kelurahan/Desa</td>
				<td>:</td>
				<td><?php echo $h['kel']; ?></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td>:</td>
				<td><?php echo $h['kec']; ?></td>
			</tr>
			<tr>
				<td>Kota/Kabupaten</td>
				<td>:</td>
				<td><?php echo $h['kab']; ?></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td>:</td>
				<td><?php echo $h['prov']; ?></td>
			</tr>
			<tr>
				<td>Website</td>
				<td>:</td>
				<td><?php echo $h['web']; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $h['email']; ?></td>
			</tr>
		</table>
	</article>
</section>