<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nip=$_POST['nip'];
			$kelas_id=$_POST['kelas_id'];
			$cek=mysql_query("select * from sia_walikelas where nip='$nip'");
			if(mysql_num_rows($cek) > 0){?>
				<div class="alert alert-danger">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Data Sudah Jadi Wali Kelas Di Kelas Lain. 
			</div>
			<?php } else {
			$q=mysql_query("insert into sia_walikelas values($kelas_id,'$nip')");
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
		if(isset($_GET['del'])){
			$id=$_GET['del'];
			$q=mysql_query("delete from sia_walikelas where kelas_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-wali'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$nip=$_POST['nip'];
			$kelas_id=$_POST['kelas_id'];
			$walikelas_id=$_POST['id'];
			$q=mysql_query("update sia_walikelas set nip='$nip' where kelas_id=$kelas_id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-wali'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from sia_walikelas where kelas_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Guru</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['kelas_id']; ?>" />
					<div class="control-group">
						<label class="control-label">NIP Guru :</label>
						<div class="controls">
							<select name="nip">
								<?php
								$qq=mysql_query("select * from sia_guru");
								while($hh=mysql_fetch_array($qq)){
								?>
								<option value="<?php echo $hh['nip']; ?>" <?php echo ($hh['nip']==$h['nip'])?'selected':''; ?> ><?php echo "$hh[nip] - $hh[nama]"; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=sia-wali'">Batal</button>
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
							<h5>Wali Kelas</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal" enctype="multipart/form-data" >
								<div class="control-group">
									<label class="control-label">NIP Guru :</label>
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
								<div class="control-group">
									<label class="control-label">Kelas :</label>
									<div class="controls">
										<select name="kelas_id">
											<?php
											$q=mysql_query("select * from sia_kelas");
											while($h=mysql_fetch_array($q)){
											?>
											<option value="<?php echo $h['kelas_id']; ?>"><?php echo "$h[nama]"; ?></option>
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
				<h5>Data Wali Kelas</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Nama Wali Kelas</th>
							<th>Nama Kelas</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from sia_walikelas");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_guru where nip='$h[nip]'");
							$guru=mysql_fetch_array($qq);
							$qq=mysql_query("select * from sia_kelas where kelas_id=$h[kelas_id]");
							$kelas=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo "$guru[nip] - $guru[nama]"; ?></td>
							<td><?php echo $kelas['nama']; ?></td>
							<td><center><a href="?menu=sia-wali&edit=<?php echo $h['kelas_id']; ?>">Edit</a> | <a href="?menu=sia-wali&del=<?php echo $h['kelas_id']; ?>">Del</a></center></td>
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