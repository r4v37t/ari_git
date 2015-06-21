<div class="page-header">
	<h1 class="page-title">Galeri</h1>
</div>
<ul id="portfolio-filter">
	<li><a data-categories="*">Semua</a></li>
	<?php
	$q=mysql_query("select * from web_album");
	while($h=mysql_fetch_array($q)){
	?>
	<li><a data-categories="<?php echo $h['album_id']; ?>"><?php echo $h['nama']; ?></a></li>
	<?php
	}
	?>
</ul>
<section id="portfolio-items">
	<?php
	$q=mysql_query("select * from web_foto");
	while($h=mysql_fetch_array($q)){
	?>
	<article class="one-fourth" data-categories="<?php echo $h['album_id']; ?>">
		<a href="cpanel/<?php echo $h['foto']; ?>" class="single-image picture-icon" rel="gallery_group">
			<img src="cpanel/<?php echo $h['foto']; ?>" alt="">
		</a>
	</article>
	<?php
	}
	?>
</section>