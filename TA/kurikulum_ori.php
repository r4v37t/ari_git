<div class="page-header">
	<h1 class="page-title">Kurikulum</h1>
</div>
<section id="content">
	<?php
	$q=mysql_query("select * from sia_kurikulum");
	?>
	<article class="post clearfix">
		<table width="100%" style="border:1px solid black collapse;">
			<tr>
				<th width="5%" style="border:1px solid black">No</th>
				<th width="20%" style="border:1px solid black">Nama Mata Pelajaran</th>
				<th width="30%" style="border:1px solid black">BAB </th>
				<th width="30%" style="border:1px solid black">SUB BAB</th>
				<th width="10%" style="border:1px solid black">Kurikulum</th>
			</tr>
			<?php
			$x=0;
			while($h=mysql_fetch_array($q)){
				$qq=mysql_query("select * from sia_mapel where mapel_id=$h[mapel_id]");
				$x++;
			?>
			<tr>
				<td align="center" style="border:1px solid black; vertical-align:middle;" rowspan="2"><?php echo $x; ?>.</td>
				<td align="center" style="border:1px solid black; vertical-align:middle;" rowspan="2"><?php echo $h['nama']; ?></td>
				<?php
				$hh=mysql_fetch_array($qq);
				?>
				<td align="center" style="border:1px solid black;"><?php echo $hh['nama']; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</article>
</section>