<div class="post-item">
	<div class="post_title">
		<h2>Kata Sambutan</h2>
	</div>
	<div class="post-descr">
		<?php
		$q=mysql_query("select * from blog_konten where konten_id='sambutan:$ref'");
		$h=mysql_fetch_array($q);
		?>
		<p><?php echo nl2br($h['isi']); ?></p>
	</div>
</div>