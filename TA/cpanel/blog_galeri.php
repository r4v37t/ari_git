<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nama=$_POST['nama'];
			$q=mysql_query("insert into blog_album values(null,'$nama',$_SESSION[ref])");
			if($q){
			?>
			<div class="alert alert-success">
				<button class="close" data-dismiss="alert">×</button>
				<strong>SUKSES!</strong> Data berhasil di simpan. 
			</div>
			<?php
			}else{
			?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Data gagal di simpan. 
			</div>
			<?php
			}			
		}
		if(isset($_GET['del'])){
			$id=$_GET['del'];
			$q=mysql_query("delete from blog_album where album_id=$id");
			if($q){
			?>
			<div class="alert alert-success">
				<button class="close" data-dismiss="alert">×</button>
				<strong>SUKSES!</strong> Data berhasil di hapus. 
			</div>
			<?php
			}else{
			?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Data gagal di hapus. 
			</div>
			<?php
			}
			?><script>setTimeout(function(){ location.href='?menu=blog-galeri'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$nama=$_POST['nama'];
			$id=$_POST['id'];
			$q=mysql_query("update blog_album set nama='$nama' where album_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=blog-galeri'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from blog_album where album_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Album</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['album_id']; ?>" />
					<div class="control-group">
						<label class="control-label">Nama :</label>
						<div class="controls"><input type="text" value="<?php echo $h['nama']; ?>" name="nama" class="span20" placeholder="Nama Album" /></div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=blog-galeri'">Batal</button>
					</div>
				</form>
			</div>
		</div>
		<?php
		}else{
			if(!isset($_GET['album'])){
		?>
		<div class="widget-box collapsible">
			<div class="widget-title">
				<a href="#collapseTwo" data-toggle="collapse">
					<span class="icon"><i class="icon-plus"></i></span>
					<h5>Tambah Data</h5>
				</a>
			</div>
			<div class="collapse" id="collapseTwo">
				<div class="widget-content">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Album</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">Nama :</label>
									<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Album" /></div>
								</div>
								<div class="form-actions">
									<button type="submit" name="tambah" class="btn btn-success">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon"><i class="icon-th"></i></span> 
				<h5>Data Album</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Nama Album</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from blog_album where ref=$_SESSION[ref]");
						while($h=mysql_fetch_array($q)){
						?>
						<tr>
							<td><?php echo $h['nama']; ?></td>
							<td><center><a href="?menu=blog-galeri&album=<?php echo $h['album_id']; ?>">Buka Album</a> | <a href="?menu=blog-galeri&edit=<?php echo $h['album_id']; ?>">Edit</a> | <a href="?menu=blog-galeri&del=<?php echo $h['album_id']; ?>">Del</a></center></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<?php
			}else{
				if(isset($_POST['tambah-foto'])){
					$album=$_POST['album'];
					$file='blog/'.$_FILES['gambar']['name'];
					if(move_uploaded_file($_FILES['gambar']['tmp_name'],$file)){
						$q=mysql_query("insert into blog_foto values (null,$album,'$file')");
						if($q){
						?>
						<div class="alert alert-success">
							<button class="close" data-dismiss="alert">×</button>
							<strong>SUKSES!</strong> Data berhasil di simpan. 
						</div>
						<?php
						}else{
						?>
						<div class="alert alert-error">
							<button class="close" data-dismiss="alert">×</button>
							<strong>GAGAL!</strong> Data gagal di simpan. 
						</div>
						<?php
						}
					}
				}
				if(isset($_GET['del-foto'])){
					$id=$_GET['del-foto'];
					$q=mysql_query("delete from blog_foto where foto_id=$id");
					if($q){
					?>
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert">×</button>
						<strong>SUKSES!</strong> Data berhasil di hapus. 
					</div>
					<?php
					}else{
					?>
					<div class="alert alert-error">
						<button class="close" data-dismiss="alert">×</button>
						<strong>GAGAL!</strong> Data gagal di hapus. 
					</div>
					<?php
					}
					?><script>setTimeout(function(){ location.href='?menu=blog-galeri&album=<?php echo $_GET['album']; ?>'; },200);</script><?php
				}
				$q=mysql_query("select * from blog_album where album_id=$_GET[album]");
				$h=mysql_fetch_array($q);
		?>
		<div class="widget-box collapsible">
			<div class="widget-title">
				<a href="#collapseTwo" data-toggle="collapse">
					<span class="icon"><i class="icon-plus"></i></span>
					<h5>Tambah Data</h5>
				</a>
			</div>
			<div class="collapse" id="collapseTwo">
				<div class="widget-content">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Album [<?php echo $h['nama']; ?>]</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal" enctype="multipart/form-data" >
								<input type="hidden" name="album" value="<?php echo $_GET['album']; ?>" />
								<div class="control-group">
									<label class="control-label">Upload Foto :</label>
									<div class="controls"><input type="file" name="gambar" /></div>
								</div>
								<div class="form-actions">
									<button type="submit" name="tambah-foto" class="btn btn-success">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon"><i class="icon-th"></i></span> 
				<h5>Data Album [<?php echo $h['nama']; ?>]</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Foto</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from blog_foto where album_id=$_GET[album]");
						while($h=mysql_fetch_array($q)){
						?>
						<tr>
							<td><img src="<?php echo $h['foto']; ?>" width="125" /></td>
							<td><center><a href="?menu=blog-galeri&album=<?php echo $_GET['album']; ?>&del-foto=<?php echo $h['foto_id']; ?>">Del</a></center></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
			<br />
			<button type="button" class="btn btn-warning" onclick="location.href='?menu=blog-galeri'">Pilih Album</button>
		</div>
		<?php
			}
		}
		?>
	</div>
</div>