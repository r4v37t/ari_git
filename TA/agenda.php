<div class="page-header">
	<h1 class="page-title">Agenda</h1>
</div>
<section id="content">
	<?php
	if(isset($_GET['hal'])){
		$hal=$_GET['hal'];
	}else{
		$hal=1;
	}
	$batas=3;
	$awal=$hal-1;
	$awal*=$batas;
	
	if(isset($_GET['baca'])){
	$q=mysql_query("select * from web_pengda where pengda_id=$_GET[baca]");
	$h=mysql_fetch_array($q);
	$link=($h['tipe']==1)?'pengumuman':'agenda';
	?>
	<article class="post clearfix">
		<a href="#">
			<h3 class="title">
				<?php echo $h['judul']; ?>
			</h3>
		</a>
		<section class="post-meta clearfix">
			<div class="post-date"><a href="#"><?php echo date('d-m-Y',strtotime($h['tanggal'])); ?></a></div>
			<div class="post-tags">
				<a href="#"><?php echo ($h['tipe']==1)?'Pengumuman':'Agenda'; ?></a>
			</div>
		</section>
		<p>
			<?php echo nl2br($h['isi']); ?>
		</p>
	</article>
	<?php
	}else{
	$q=mysql_query("select * from web_pengda where tipe=2 order by pengda_id desc limit $awal,$batas");
	while($h=mysql_fetch_array($q)){
		$link=($h['tipe']==1)?'pengumuman':'agenda';
	?>
	<article class="post clearfix">
		<a href="?menu=<?php echo $link; ?>&baca=<?php echo $h['pengda_id']; ?>">
			<h3 class="title">
				<?php echo $h['judul']; ?>
			</h3>
		</a>
		<section class="post-meta clearfix">
			<div class="post-date"><a href="#"><?php echo date('d-m-Y',strtotime($h['tanggal'])); ?></a></div>
			<div class="post-tags">
				<a href="#"><?php echo ($h['tipe']==1)?'Pengumuman':'Agenda'; ?></a>
			</div>
		</section>
		<p>
			<?php 
			$isi=substr($h['isi'],0,100);
			$isi=substr($isi, 0, strrpos($isi, ' ')).'...';
			echo nl2br($isi); 
			?>
		</p>
		<a href="?menu=<?php echo $link; ?>&baca=<?php echo $h['pengda_id']; ?>" class="button gray">Selengkapnya &rarr;</a>
	</article>
	<?php
	}
	$q=mysql_query("select * from web_pengda");
	$h=mysql_num_rows($q);
	$jlhHalaman=ceil($h/$batas);
	?>
	<ul class="pagination">
		<?php
		for($x=0;$x<$jlhHalaman;$x++){
		?>
		<li><a href="?menu=agenda&hal=<?php echo $x+1; ?>" class="<?php echo (($x+1)==$hal)?'current':''; ?>" ><?php echo $x+1; ?></a></li>
		<?php
		}
		?>
	</ul>
	<?php
	}
	?>
</section>