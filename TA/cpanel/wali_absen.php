<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['simpan'])){
			$absensi_id=$_POST['absensi_id'];
			$sakit=$_POST['sakit'];
			$ijin=$_POST['ijin'];
			$alpha=$_POST['alpha'];
			foreach($absensi_id as $key=>$value){
				$q=mysql_query("update sia_absensi set sakit=$sakit[$key],ijin=$ijin[$key],alpha=$alpha[$key] where absensi_id=$value");
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
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Kelola Absensi <?php echo "$kelas[nama] :$semester[nama] -  $thnpel[nama]"; ?></h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
							<th style="vertical-align:middle" rowspan="2" >No</th>
								<th style="vertical-align:middle" rowspan="2">Nama Siswa</th>
								<th colspan="3">Absensi</th>
							</tr>
							<tr>
								<th>Sakit</th>
								<th>Ijin</th>
								<th>Alpha</th>
							</tr>
						</thead>
						<tbody>
					<?php
					$no=1;
					$q=mysql_query("select * from sia_absensi where semes_id=$id and kelas_id=$_SESSION[ref]");
					while($h=mysql_fetch_array($q)){
						$qq=mysql_query("select * from sia_siswa where nis='$h[nis]'");
						$hh=mysql_fetch_array($qq);
					?>
							<input type="hidden" name="absensi_id[]" value="<?php echo $h['absensi_id']; ?>" />
							<tr>
								<td style='text-align:center;'><?php echo $no; $no++; ?></td>
								<td><?php echo $hh['nama']; ?></td>
								<td><center><input type="text" class="span2" name="sakit[]" value="<?php echo $h['sakit']; ?>" /></center></td>
								<td><center><input type="text" class="span2" name="ijin[]" value="<?php echo $h['ijin']; ?>" /></center></td>
								<td><center><input type="text" class="span2" name="alpha[]" value="<?php echo $h['alpha']; ?>" /></center></td>
							</tr>
					<?php
					}
					?>
						</tbody>
					</table>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=wali-absen'">Selesai</button>
					</div>
				</form>
			</div>
		</div>
		<?php
		}else{
			$q=mysql_query("select * from sia_kelas where kelas_id=$_SESSION[ref]");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Kelola Absensi <?php echo $h['nama']; ?></h5>
			</div>
			<div class="widget-content nopadding">
				<form method="get" class="form-horizontal">
					<input type="hidden" name="menu" value="wali-absen" />
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
						<button type="submit" class="btn btn-success">Lihat Absensi</button>
					</div>
				</form>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>