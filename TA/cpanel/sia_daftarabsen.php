<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nis=$_POST['nis'];
			$semes_id=$_POST['semes_id'];
			$kelas_id=$_POST['kelas_id'];
			$cek=mysql_query("select * from sia_absensi where nis='$nis'");
			if(mysql_num_rows($cek) > 0) {
			?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Data Sudah Ada. 
			</div>	
			<?php
			} else {
			$q=mysql_query("insert into sia_absensi values(null,$kelas_id,$semes_id,'$nis',0,0,0)");
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
			}		}	
		}
		if(isset($_GET['del'])){
			$id=$_GET['del'];
			$q=mysql_query("delete from sia_absensi where absensi_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-daftarabsen'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$absensi_id=$_POST['id'];
			$nis=$_POST['nis'];
			$semes_id=$_POST['semes_id'];
			$kelas_id=$_POST['kelas_id'];
			$q=mysql_query("update sia_absensi set nis='$nis',semes_id=$semes_id,kelas_id=$kelas_id where absensi_id=$absensi_id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-daftarabsen'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from sia_absensi where absensi_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Daftar Absensi</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['absensi_id']; ?>" />
					<div class="control-group">
						<label class="control-label">Tahun Pelajaran/Semester :</label>
						<div class="controls">
							<select name="semes_id">
								<?php
								$qq=mysql_query("select * from sia_semes");
								while($hh=mysql_fetch_array($qq)){
									$qqq=mysql_query("select * from sia_thnpel where thnpel_id=$hh[thnpel_id]");
									$hhh=mysql_fetch_array($qqq);
									
								?>
								<option value="<?php echo $hh['semes_id']; ?>" <?php echo ($hh['semes_id']==$h['semes_id'])?'selected':''; ?> ><?php echo "$hhh[nama] - $hh[nama]"; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Nama Kelas :</label>
						<div class="controls">
							<select name="kelas_id">
								<?php
								$qq=mysql_query("select * from sia_kelas");
								while($hh=mysql_fetch_array($qq)){
									$qqq=mysql_query("select * from sia_walikelas where kelas_id=$hh[kelas_id]");
									if(mysql_num_rows($qqq)>0){
										$hhh=mysql_fetch_array($qqq);
								?>
								<option value="<?php echo $hhh['kelas_id']; ?>" <?php echo ($hhh['kelas_id']==$h['kelas_id'])?'selected':''; ?> ><?php echo "$hh[nama]"; ?></option>
								<?php
									}
								}
								?>
							</select>
						</div>
					</div>
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
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=sia-daftarabsen'">Batal</button>
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
							<h5>Daftar Absensi</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal" enctype="multipart/form-data" >
								<div class="control-group">
									<label class="control-label">Tahun Pelajaran/Semester :</label>
									<div class="controls">
										<select name="semes_id">
											<?php
											$q=mysql_query("select * from sia_semes");
											while($h=mysql_fetch_array($q)){
												$qq=mysql_query("select * from sia_thnpel where thnpel_id=$h[thnpel_id]");
												$hh=mysql_fetch_array($qq);
												
											?>
											<option value="<?php echo $h['semes_id']; ?>"><?php echo "$hh[nama] - $h[nama]"; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nama Kelas :</label>
									<div class="controls">
										<select name="kelas_id" class="span2">
											<?php
											$q=mysql_query("select * from sia_kelas");
											while($h=mysql_fetch_array($q)){
												$qq=mysql_query("select * from sia_walikelas where kelas_id=$h[kelas_id]");
												if(mysql_num_rows($qq)>0){
													$hh=mysql_fetch_array($qq);
											?>
											<option value="<?php echo $hh['kelas_id']; ?>"><?php echo "$h[nama]"; ?></option>
											<?php
												}
											}
											?>
										</select>
									</div>
								</div>
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
				<h5>Data Daftar Absensi</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Tahun Pelajaran</th>
							<th>Semester</th>
							<th>Nama Kelas</th>
							<th>Nama Siswa</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from sia_absensi");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_siswa where nis='$h[nis]'");
							$siswa=mysql_fetch_array($qq);
							$qq=mysql_query("select * from sia_thnpel where thnpel_id=(select thnpel_id from sia_semes where semes_id=$h[semes_id])");
							$thnpel=mysql_fetch_array($qq);
							$qq=mysql_query("select * from sia_semes where semes_id=$h[semes_id]");
							$semester=mysql_fetch_array($qq);
							$qq=mysql_query("select * from sia_kelas where kelas_id=(select kelas_id from sia_walikelas where kelas_id=$h[kelas_id])");
							$kelas=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo $thnpel['nama']; ?></td>
							<td><?php echo $semester['nama']; ?></td>
							<td><?php echo $kelas['nama']; ?></td>
							<td><?php echo $siswa['nama']; ?></td>
							<td><center><a href="?menu=sia-daftarabsen&edit=<?php echo $h['absensi_id']; ?>">Edit</a> | <a href="?menu=sia-daftarabsen&del=<?php echo $h['absensi_id']; ?>">Del</a></center></td>
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