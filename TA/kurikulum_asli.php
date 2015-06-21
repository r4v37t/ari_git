<div class="page-header">
	<h1 class="page-title">Kurikulum</h1>
</div>
<section id="content">
	<?php
	$q=mysql_query("select * from sia_thnpel");
	?>
	<article class="post clearfix">
		<table width="100%" style="border:1px solid black collapse;">
			<tr>
				<th width="5%" style="border:1px solid black">No</th>
				<th width="20%" style="border:1px solid black">Nama Tahun Ajaran</th>
				<th width="35%" style="border:1px solid black">Nama Semester</th>
				<th width="20%" style="border:1px solid black">Awal Semester</th>
				<th width="20%" style="border:1px solid black">Akhir Semester</th>
			</tr>
			<?php
			$x=0;
			while($h=mysql_fetch_array($q)){
				$qq=mysql_query("select * from sia_semes where thnpel_id=$h[thnpel_id]");
				$x++;
			?>
			<tr>
				<td align="center" style="border:1px solid black; vertical-align:middle;" rowspan="2"><?php echo $x; ?>.</td>
				<td align="center" style="border:1px solid black; vertical-align:middle;" rowspan="2"><?php echo $h['nama']; ?></td>
				<?php
				$hh=mysql_fetch_array($qq);
				?>
				<td align="center" style="border:1px solid black;"><?php echo $hh['nama']; ?></td>
				<td align="center" style="border:1px solid black;"><?php echo date('d-m-Y',strtotime($hh['mulai'])); ?></td>
				<td align="center" style="border:1px solid black;"><?php echo date('d-m-Y',strtotime($hh['akhir'])); ?></td>
			</tr>
				<?php
				$hh=mysql_fetch_array($qq);
				?>
			<tr>
				<td align="center" style="border:1px solid black;"><?php echo $hh['nama']; ?></td>
				<td align="center" style="border:1px solid black;"><?php echo date('d-m-Y',strtotime($hh['mulai'])); ?></td>
				<td align="center" style="border:1px solid black;"><?php echo date('d-m-Y',strtotime($hh['akhir'])); ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</article>
</section>