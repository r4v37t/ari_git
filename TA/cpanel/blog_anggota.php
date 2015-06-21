<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nis=$_POST['nis'];
			$ref=$_SESSION['ref'];
			$q=mysql_query("insert into blog_anggota values(null,'$nis',$ref)");
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
			$q=mysql_query("delete from blog_anggota where anggota_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=blog-anggota'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$anggota_id=$_POST['id'];
			$nis=$_POST['nis'];
			$q=mysql_query("update blog_anggota set nis='$nis' where anggota_id=$anggota_id");
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
			?><script>setTimeout(function(){ location.href='?menu=blog-anggota'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from blog_anggota where anggota_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Daftar Anggota</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['anggota_id']; ?>" />
					<div class="control-group">
						<label class="control-label">Nama Siswa :</label>
						<div class="controls">
							<select name="nis">
								<?php
								$qq=mysql_query("select * from sia_siswa");
								while($hh=mysql_fetch_array($qq)){
								?>
								<option value="<?php echo $hh['nis']; ?>" <?php echo ($hh['nis']==$h['nis'])?'selected':''; ?> ><?php echo "$hh[nis] - $hh[nama]"; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=blog-anggota'">Batal</button>
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
							<h5>Daftar Anggota</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal" enctype="multipart/form-data" >
								<div class="control-group">
									<label class="control-label">Nama Siswa :</label>
									<div class="controls">
										<select name="nis">
											<?php
											$q=mysql_query("select * from sia_siswa");
											while($h=mysql_fetch_array($q)){
											?>
											<option value="<?php echo $h['nis']; ?>"><?php echo "$h[nis] - $h[nama]"; ?></option>
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
				<h5>Data Daftar Anggota</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>NIS</th>
							<th>Nama Siswa</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from blog_anggota where ref=$_SESSION[ref]");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_siswa where nis='$h[nis]'");
							$siswa=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo $siswa['nis']; ?></td>
							<td><?php echo $siswa['nama']; ?></td>
							<td><center><a href="?menu=blog-anggota&edit=<?php echo $h['anggota_id']; ?>">Edit</a> | <a href="?menu=blog-anggota&del=<?php echo $h['anggota_id']; ?>">Del</a></center></td>
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