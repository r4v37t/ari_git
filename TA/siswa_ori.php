<div class="page-header">
	<h1 class="page-title">Data Siswa</h1>
</div>
<section id="content">
	<?php
	$q=mysql_query("select * from sia_siswa");
	?>
	<article class="post clearfix">
		<table width="100%" style="border:1px solid black collapse;">
			<tr>
				<th width="5%" style="border:1px solid black">No</th>
				<th width="25%" style="border:1px solid black">NIS</th>
				<th width="50%" style="border:1px solid black">Nama Siswa</th>
			</tr>
			<?php
			$x=0;
			while($h=mysql_fetch_array($q))
			{
				$x++;
			?>
			<tr>
				<td align="center" style="border:1px solid black"><?php echo $x; ?>.</td>
				<td align="center" style="border:1px solid black"><?php echo $h['nis']; ?></td>
				<td align="left" style="border:1px solid black; padding-left:10px;"><?php echo $h['nama']; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</article>
</section>