<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nip=$_POST['nip'];
			$nama=$_POST['nama'];
			$cek=mysql_query("select * from sia_ekstra where nip='$nip' or nama='$nama'");
			if(empty($nama)){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Nama Ekstrakulikuler Kosong. 
			</div>	
			<?php } else {
			if(mysql_num_rows($cek) > 0){
			?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Data Sudah Ada. 
			</div>	
			<?php
			} else {
			$q=mysql_query("insert into sia_ekstra values(null,'$nama','$nip')");
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
			}	}	}
		}
		if(isset($_GET['del'])){
			$id=$_GET['del'];
			$q=mysql_query("delete from sia_ekstra where ekstra_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-ekstra'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$ekstra_id=$_POST['id'];
			$nama=$_POST['nama'];
			$nip=$_POST['nip'];
			$q=mysql_query("update sia_ekstra set nama='$nama',nip='$nip' where ekstra_id=$ekstra_id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-ekstra'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from sia_ekstra where ekstra_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Ekstrakulikuler</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['ekstra_id']; ?>" />
					<div class="control-group">
						<label class="control-label">Nama Ekstrakulikuler :</label>
						<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Ekstrakulikuler" value="<?php echo $h['nama']; ?>" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Nama Guru :</label>
						<div class="controls">
							<select name="nip">
								<?php
								$qq=mysql_query("select * from sia_guru");
								while($hh=mysql_fetch_array($qq)){
								?>
								<option value="<?php echo $hh['nip']; ?>"><?php echo "$hh[nip] - $hh[nama]"; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=sia-ekstra'">Batal</button>
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
							<h5>Ekstrakulikuler</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal" enctype="multipart/form-data" >
								<div class="control-group">
									<label class="control-label">Nama Ekstrakulikuler :</label>
									<div class="controls"><input type="text" name="nama" class="span20" placeholder="Ekstrakulikuler" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Nama Guru :</label>
									<div class="controls">
										<select name="nip">
											<?php
											$q=mysql_query("select * from sia_guru");
											while($h=mysql_fetch_array($q)){
											?>
											<option value="<?php echo $h['nip']; ?>"><?php echo "$h[nip] - $h[nama]"; ?></option>
											<?php
											}
											?>
										</select>
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
				<h5>Data Ekstrakulikuler</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Nama Ekstrakulikuler</th>
							<th>Nama Guru</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from sia_ekstra");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_guru where nip='$h[nip]'");
							$hh=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo $h['nama']; ?></td>
							<td><?php echo $hh['nama']; ?></td>
							<td><center><a href="?menu=sia-ekstra&edit=<?php echo $h['ekstra_id']; ?>">Edit</a> | <a href="?menu=sia-ekstra&del=<?php echo $h['ekstra_id']; ?>">Del</a></center></td>
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