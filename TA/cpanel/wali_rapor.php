<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['simpan'])){
			$absensi_id=$_POST['absensi_id'];
			$masuk=$_POST['masuk'];
			$ijin=$_POST['ijin'];
			$alpha=$_POST['alpha'];
			foreach($absensi_id as $key=>$value){
				$q=mysql_query("update sia_absensi set masuk=$masuk[$key],ijin=$ijin[$key],alpha=$alpha[$key] where absensi_id=$value");
			}
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
		}
		
		if(isset($_GET['semester'])){
			$id=$_GET['semester'];
			$qq=mysql_query("select * from sia_kelas where kelas_id=$_SESSION[ref]");
			$kelas=mysql_fetch_array($qq);
			$qq=mysql_query("select * from sia_semes where semes_id=$id");
			$semester=mysql_fetch_array($qq);
			$qq=mysql_query("select * from sia_thnpel where thnpel_id=$semester[thnpel_id]");
			$thnpel=mysql_fetch_array($qq);
			if(!isset($_GET['rapor'])){
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon"><i class="icon-th"></i></span> 
				<h5>Kelola Rapor <?php echo "$kelas[nama] :$semester[nama] -  $thnpel[nama]"; ?></h5>
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
						$q=mysql_query("select * from sia_absensi where semes_id=$id");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_siswa where nis='$h[nis]'");
							$siswa=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo $siswa['nis']; ?></td>
							<td><?php echo $siswa['nama']; ?></td>
							<td><center><a href="?menu=wali-rapor&semester=<?php echo $_GET['semester']; ?>&rapor=<?php echo $h['absensi_id']; ?>">Lihat Rapor</a></center></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
			<br />
			<button type="button" class="btn btn-warning" onclick="location.href='?menu=wali-rapor'">Selesai</button>
		</div>
		<?php
			}else{
				$id=$_GET['rapor'];
				$q=mysql_query("select * from sia_siswa where nis=(select nis from sia_absensi where absensi_id=$id)");
				$h=mysql_fetch_array($q);
				$valid=true;
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Kelola Rapor Siswa</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<div class="control-group">
						<label class="control-label">NIS Siswa :</label>
						<div class="controls"><strong><?php echo $h['nis']; ?></strong></div>
					</div>
					<div class="control-group">
						<label class="control-label">Nama Siswa :</label>
						<div class="controls"><strong><?php echo $h['nama']; ?></strong></div>
					</div>
					<?php
					$qq=mysql_query("select * from sia_mapel where mapel_id in (select mapel_id from sia_detail where kelas_id=$_SESSION[ref] and semes_id=$_GET[semester])");
					while($hh=mysql_fetch_array($qq)){
						$qqq=mysql_query("select * from sia_nilai where nis='$h[nis]' and detail_id=(select detail_id from sia_detail where kelas_id=$_SESSION[ref] and semes_id=$_GET[semester] and mapel_id=$hh[mapel_id])");
						$hhh=mysql_fetch_array($qqq);
					?>
					<div class="control-group">
						<label class="control-label"><?php echo $hh['nama']; ?></label>
						<div class="controls">
							<?php
							if($hhh['valid']>0){
							?>
							<span class="badge badge-success">Valid</span> 
							<?php
							}else{
								$valid=false;
							?>
							<span class="badge badge-important">Belum Valid</span> 
							<?php
							}
							?>
						</div>
					</div>
					<?php
					}
					?>
					<div class="form-actions">
						<button type="button" name="simpan" class="btn <?php echo ($valid)?'btn-success':'tip-bottom'; ?>" <?php echo (!$valid)?'data-original-title="Ada Mata Pelajaran Belum Valid!"':''; ?> <?php if($valid){ ?>onclick="tabbaru('rapor.php?siswa=<?php echo $h['nis']; ?>&semester=<?php echo $_GET['semester']; ?>')" <?php } ?> >Cetak Rapor</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=wali-rapor&semester=<?php echo $_GET['semester']; ?>'">Selesai</button>
					</div>
				</form>
			</div>
		</div>
		<?php
			}
		}else{
			$q=mysql_query("select * from sia_kelas where kelas_id=$_SESSION[ref]");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Kelola Rapor <?php echo $h['nama']; ?></h5>
			</div>
			<div class="widget-content nopadding">
				<form method="get" class="form-horizontal">
					<input type="hidden" name="menu" value="wali-rapor" />
					<div class="control-group">
						<label class="control-label">Tahun Pelajaran/Semester :</label>
						<div class="controls">
							<select name="semester">
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
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Lihat Rapor</button>
					</div>
				</form>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>