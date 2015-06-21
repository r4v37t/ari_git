<div class="post-item">
	<div class="post_title">
		<h2>Struktur Organisasi</h2>
	</div>
	<div class="post-descr">
		<?php
		$q=mysql_query("select * from blog_konten where konten_id='struktur:$ref'");
		$h=mysql_fetch_array($q);
		?>
		<p><img src="../cpanel/<?php echo $h['isi']; ?>" width="100%" /></p>
	</div>
</div>