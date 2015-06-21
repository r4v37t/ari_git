<div class="page-header">
	<h1 class="page-title">Struktur Sekolah</h1>
</div>
<section id="content">
	<?php
	$q=mysql_query("select * from web_konten where konten_id='struktur'");
	$h=mysql_fetch_array($q);
	?>
	<article class="post clearfix">
		<table width="100%">
			<tr>
				<td align="center"><img src="cpanel/<?php echo $h['isi']; ?>" width="100%" /></td>
			</tr>
		</table>
	</article>
</section>