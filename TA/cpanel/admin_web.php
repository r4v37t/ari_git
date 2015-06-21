<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nama=$_POST['nama'];
			$id=$_POST['id'];
			$sandi=md5($_POST['sandi']);
			$q=mysql_query("insert into login values('$id','$sandi','$nama',10,0)");
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
			$q=mysql_query("delete from login where username='$id'");
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
			?><script>setTimeout(function(){ location.href='?menu=web'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$nama=$_POST['nama'];
			$id=$_POST['id'];
			$sandi=md5($_POST['sandi']);
			$q=mysql_query("update login set nama='$nama',password='$sandi' where username='$id'");
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
			?><script>setTimeout(function(){ location.href='?menu=web'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from login where username='$id'");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Admin Website</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<div class="control-group">
						<label class="control-label">Nama :</label>
						<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Lengkap" value="<?php echo $h['nama']; ?>" readonly /></div>
					</div>
					<div class="control-group">
						<label class="control-label">ID Pengguna :</label>
						<div class="controls"><input type="text" name="id" class="span20" placeholder="ID Pengguna" value="<?php echo $h['username']; ?>" readonly /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Kata Sandi</label>
						<div class="controls">
							<input type="password" name="sandi" class="span20" placeholder="Kata Sandi"  /> 
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=web'">Batal</button>
					</div>
				</form>
			</div>
		</div>
		<?php
		}else{
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
							<h5>Admin Website</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">Nama :</label>
									<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Lengkap" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">ID Pengguna :</label>
									<div class="controls"><input type="text" name="id" class="span20" placeholder="ID Pengguna" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Kata Sandi</label>
									<div class="controls">
										<input type="password" name="sandi" class="span20" placeholder="Kata Sandi"  /> 
									</div>
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
				<h5>Data Admin Website</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Nama Lengkap</th>
							<th>ID Pengguna</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from login where level=10");
						while($h=mysql_fetch_array($q)){
						?>
						<tr>
							<td><?php echo $h['nama']; ?></td>
							<td><?php echo $h['username']; ?></td>
							<td><center><a href="?menu=web&edit=<?php echo $h['username']; ?>">Edit</a> | <a href="?menu=web&del=<?php echo $h['username']; ?>">Del</a></center></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>