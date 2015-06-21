<article class="post-item">
	<div class="entry">
	
		<div class="row">
			<div class="col col_1">
				<div class="inner">
					<div class="widget_categories">
						<ul>
							<li><a href="?menu=galeri&ref=<?php echo $ref; ?>">Semua</a></li>
							<?php
							$q=mysql_query("select * from blog_album where ref=$ref");
							while($h=mysql_fetch_array($q)){
							?>
							<li><a href="?menu=galeri&album=<?php echo $h['album_id']; ?>&ref=<?php echo $ref; ?>"><?php echo $h['nama']; ?></a></li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="clear"></div>
		<?php
		$q=mysql_query("select * from blog_foto where album_id in (select album_id from blog_album where ref=$ref)");
		$total=mysql_num_rows($q);
		$jlhBaris=ceil($total/3);
		for($x=0;$x<$jlhBaris;$x++){
			$next=$x*3;
		?>
		<div class="row">
			<?php
			$q=mysql_query("select * from blog_foto where album_id in (select album_id from blog_album where ref=$ref) limit $next,3");
			while($h=mysql_fetch_array($q)){
			?>
			<div class="col col_1_3">
				<div class="inner">
					<div class="work-item">
						<div class="work-img"><a href="../cpanel/<?php echo $h['foto']; ?>" data-rel="prettyPhoto"><img src="../cpanel/<?php echo $h['foto']; ?>" width="245" height="167" alt="" class="frame_box"></a></div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
		<?php
		}
		?>
	</div>
</article>