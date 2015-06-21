<div class="page-header">
	<h1 class="page-title">Fasilitas Sekolah</h1>
</div>
<section id="content">
	<?php
	$q=mysql_query("select * from web_fasilitas");
	?>
	<article class="post clearfix">
		<table width="100%" style="border:1px solid black collapse;">
			<tr>
				<th width="5%" style="border:1px solid black">No</th>
				<th width="65%" style="border:1px solid black">Nama Fasilitas</th>
				<th width="10%" style="border:1px solid black">Jumlah</th>
				<th width="20%" style="border:1px solid black">Kondisi</th>
			</tr>
			<?php
			$x=0;
			while($h=mysql_fetch_array($q)){
				$x++;
			?>
			<tr>
				<td align="center" style="border:1px solid black"><?php echo $x; ?>.</td>
				<td align="left" style="border:1px solid black; padding-left:10px;"><?php echo $h['nama']; ?></td>
				<td align="center" style="border:1px solid black"><?php echo $h['jumlah']; ?></td>
				<td align="center" style="border:1px solid black"><?php echo $h['kondisi']; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</article>
</section>