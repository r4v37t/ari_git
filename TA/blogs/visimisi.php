<div class="post-item">
	<div class="post_title">
		<h2>Visi Misi</h2>
	</div>
	<div class="post-descr">
		<?php
		$q=mysql_query("select * from blog_konten where konten_id='visimisi:$ref'");
		$h=mysql_fetch_array($q);
		?>
		<p><?php echo $h['isi']; ?></p>
	</div>
</div>