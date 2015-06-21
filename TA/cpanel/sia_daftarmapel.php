<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nip=$_POST['nip'];
			$semes_id=$_POST['semes_id'];
			$kelas_id=$_POST['kelas_id'];
			$mapel_id=$_POST['mapel_id'];
			$q=mysql_query("insert into sia_detail values(null,$kelas_id,$semes_id,$mapel_id,'$nip')");
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
			$q=mysql_query("delete from sia_detail where detail_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-daftarmapel'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$detail_id=$_POST['id'];
			$nip=$_POST['nip'];
			$semes_id=$_POST['semes_id'];
			$kelas_id=$_POST['kelas_id'];
			$mapel_id=$_POST['mapel_id'];
			$q=mysql_query("update sia_detail set nip='$nip',semes_id=$semes_id,kelas_id=$kelas_id,mapel_id=$mapel_id where detail_id=$detail_id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-daftarmapel'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from sia_detail where detail_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Daftar Mata Pelajaran</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['detail_id']; ?>" />
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
								?>
								<option value="<?php echo $hh['kelas_id']; ?>" <?php echo ($hh['kelas_id']==$h['kelas_id'])?'selected':''; ?> ><?php echo "$hh[nama]"; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Mata Pelajaran :</label>
						<div class="controls">
							<select name="mapel_id">
								<?php
								$qq=mysql_query("select * from sia_mapel");
								while($hh=mysql_fetch_array($qq)){
								?>
								<option value="<?php echo $hh['mapel_id']; ?>" <?php echo ($hh['mapel_id']==$h['mapel_id'])?'selected':''; ?> ><?php echo "$hh[nama]"; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Nama Guru :</label>
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
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=sia-daftarmapel'">Batal</button>
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
							<h5>Daftar Mata Pelajaran</h5>
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
								<div class="control-group">
									<label class="control-label">Mata Pelajaran :</label>
									<div class="controls">
										<select name="mapel_id">
											<?php
											$q=mysql_query("select * from sia_mapel");
											while($h=mysql_fetch_array($q)){
											?>
											<option value="<?php echo $h['mapel_id']; ?>"><?php echo "$h[nama]"; ?></option>
											<?php
											}
											?>
										</select>
									</div>
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
				<h5>Data Daftar Mata Pelajaran</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Tahun Pelajaran</th>
							<th>Semester</th>
							<th>Nama Kelas</th>
							<th>Nama Guru</th>
							<th>Mata Pelajaran</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from sia_detail order by detail_id desc");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_guru where nip='$h[nip]'");
							$guru=mysql_fetch_array($qq);
							$qq=mysql_query("select * from sia_thnpel where thnpel_id=(select thnpel_id from sia_semes where semes_id=$h[semes_id])");
							$thnpel=mysql_fetch_array($qq);
							$qq=mysql_query("select * from sia_semes where semes_id=$h[semes_id]");
							$semester=mysql_fetch_array($qq);
							$qq=mysql_query("select * from sia_kelas where kelas_id=$h[kelas_id]");
							$kelas=mysql_fetch_array($qq);
							$qq=mysql_query("select * from sia_mapel where mapel_id=$h[mapel_id]");
							$mapel=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo $thnpel['nama']; ?></td>
							<td><?php echo $semester['nama']; ?></td>
							<td><?php echo $kelas['nama']; ?></td>
							<td><?php echo $guru['nama']; ?></td>
							<td><?php echo $mapel['nama']; ?></td>
							<td><center><a href="?menu=sia-daftarmapel&edit=<?php echo $h['detail_id']; ?>">Edit</a> | <a href="?menu=sia-daftarmapel&del=<?php echo $h['detail_id']; ?>">Del</a></center></td>
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