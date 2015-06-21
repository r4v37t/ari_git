<div class="page-header">
	<h1 class="page-title">Data Alumni</h1>
</div>
<section id="content">
	<?php
	$q=mysql_query("select * from web_alumni");
	?>
	<article class="post clearfix">
		<table width="100%" style="border:1px solid black collapse;">
			<tr>
				<th width="5%" style="border:1px solid black">No</th>
				<th width="10%" style="border:1px solid black">NIS</th>
				<th width="40%" style="border:1px solid black">Nama Siswa</th>
				<th width="30%" style="border:1px solid black">Tempat/Tanggal Lahir</th>
				<th width="15%" style="border:1px solid black">Tanggal Lulus</th>
			</tr>
			<?php
			$x=0;
			while($h=mysql_fetch_array($q)){
				$x++;
			?>
			<tr>
				<td align="center" style="border:1px solid black"><?php echo $x; ?>.</td>
				<td align="center" style="border:1px solid black"><?php echo $h['nis']; ?></td>
				<td align="left" style="border:1px solid black; padding-left:10px;"><?php echo $h['nama']; ?></td>
				<td align="center" style="border:1px solid black;"><?php echo $h['tempat_lahir'].', '.date('d-m-Y',strtotime($h['tanggal_lahir'])); ?></td>
				<td align="center" style="border:1px solid black;"><?php echo date('d-m-Y',strtotime($h['lulus'])); ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</article>
</section>