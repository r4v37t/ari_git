<div class="post-item">
	<div class="post_title">
		<h2>Ingin Bergabung?</h2>
	</div>
	<div class="post-descr">
		<?php
		$q=mysql_query("select * from sia_guru where nip=(select nip from sia_ekstra where ekstra_id=$ref)");
		$h=mysql_fetch_array($q);
		?>
		<p>Ingin ikut bergabung bersama kami?</p>
		<p>Tidak ada kata terlambat kok untuk bergabung dalam ektrakulikuler ini.</p>
		<p>Kamu dapat bergabung dengan kami segera dengan melaporkan diri kamu ke Bapak/Ibu guru <strong><?php echo $h['nama']; ?></strong></p>
		<p>Segera laporkan dirimu dan ikuti kegiatan kami selanjutnya.</p>
	</div>
</div>