<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_GET['aktif'])){
			$aktif=$_GET['aktif'];
			$q=mysql_query("update blog_buku set status=1 where buku_id=$aktif");
			if($q){
			?>
			<div class="alert alert-success">
				<button class="close" data-dismiss="alert">×</button>
				<strong>SUKSES!</strong> Data berhasil di perbaharui. 
			</div>
			<?php
			}else{
			?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Data gagal di perbaharui. 
			</div>
			<?php
			}
			?><script>setTimeout(function(){ location.href='?menu=blog-bukutamu'; },200);</script><?php
		}
		if(isset($_GET['nonaktif'])){
			$nonaktif=$_GET['nonaktif'];
			$q=mysql_query("update blog_buku set status=0 where buku_id=$nonaktif");
			if($q){
			?>
			<div class="alert alert-success">
				<button class="close" data-dismiss="alert">×</button>
				<strong>SUKSES!</strong> Data berhasil di perbaharui. 
			</div>
			<?php
			}else{
			?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Data gagal di perbaharui. 
			</div>
			<?php
			}
			?><script>setTimeout(function(){ location.href='?menu=blog-bukutamu'; },200);</script><?php
		}
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon"><i class="icon-th"></i></span> 
				<h5>Daftar Buku Tamu</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Nama Pengunjung</th>
							<th>Isi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from blog_buku where ref=$_SESSION[ref]");
						while($h=mysql_fetch_array($q)){
						?>
						<tr>
							<td><?php echo $h['nama']; ?></td>
							<td><?php echo $h['isi']; ?></td>
							<td><center>
							<?php
							if($h['status']==0){
							?>
							<a href="?menu=blog-bukutamu&aktif=<?php echo $h['buku_id']; ?>">Tampilkan</a></center></td>
							<?php
							}else{
							?>
							<a href="?menu=blog-bukutamu&nonaktif=<?php echo $h['buku_id']; ?>">Sembunyikan</a></center></td>
							<?php
							}
							?>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>