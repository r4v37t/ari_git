<div class="page-header">
	<h1 class="page-title">Data Guru</h1>
</div>
<section id="content">
	<?php
	$q=mysql_query("select * from sia_guru");
	?>
	<article class="post clearfix">
		<table width="100%" style="border:1px solid black collapse;">
			<tr>
				<th width="5%" style="border:1px solid black">No</th>
				<th width="20%" style="border:1px solid black">NIP</th>
				<th width="20%" style="border:1px solid black">Nama Guru</th>
				<th width="20%" style="border:1px solid black">Alamat</th>
				<th width="15%" style="border:1px solid black">Tempat Lahir</th>
				<th width="10%" style="border:1px solid black">Tanggal Lahir</th>
				<th width="10%" style="border:1px solid black">Foto</th>
				
			</tr>
			<?php
			$x=0;
			while($h=mysql_fetch_array($q)){
				$x++;
			?>
			<tr>
				<td align="center" style="border:1px solid black"><?php echo $x; ?>.</td>
				<td align="center" style="border:1px solid black"><?php echo $h['nip']; ?></td>
				<td align="left" style="border:1px solid black; padding-left:10px;"><?php echo $h['nama']; ?>
				<td align="left" style="border:1px solid black; padding-left:10px;"><?php echo $h['alamat']; ?>
				<td align="left" style="border:1px solid black; padding-left:10px;"><?php echo $h['tempat_lahir']; ?>
				<td align="left" style="border:1px solid black; padding-left:10px;"><?php echo $h['tanggal_lahir']; ?>
				<td align="left" style="border:1px solid black; padding-left:10px;"><?php echo $h['foto']; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</article>
</section>