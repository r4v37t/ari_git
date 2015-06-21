<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['simpan'])){
			$detail_id=$_POST['detail_id'];
			$nis=$_POST['nis'];
			$k1k2=$_POST['k1k2'];
			$k1k2desk=$_POST['k1k2desk'];
			$k3=$_POST['k3'];
			$k3desk=$_POST['k3desk'];
			$k4=$_POST['k4'];
			$k4desk=$_POST['k4desk'];
			if(isset($_POST['nilai_id'])){
				$q=mysql_query("update sia_nilai set k1k2='$k1k2',k1k2desk='$k1k2desk',k3='$k3',k3desk='$k3desk',k4='$k4',k4desk='$k4desk' where nilai_id=$_POST[nilai_id]");
			}else{
				$q=mysql_query("insert into sia_nilai values(null,'$detail_id','$nis','$k1k2','$k1k2desk','$k3','$k3desk','$k4','$k4desk',0)");
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
		if(isset($_POST['valid'])){
			$nilai_id=$_POST['nilai_id'];
			$q=mysql_query("update sia_nilai set valid=1 where nilai_id=$nilai_id");
			if($q){
			?>
			<div class="alert alert-success">
				<button class="close" data-dismiss="alert">×</button>
				<strong>SUKSES!</strong> Data berhasil di validasi. 
			</div>
			<?php
			}else{
			?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Data gagal di validasi. 
			</div>
			<?php
			}
		}
		
		if(isset($_GET['semester'])&&!isset($_GET['kelas'])){
			$id=$_GET['semester'];
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
				<h5>Kelola Nilai <?php echo "$semester[nama] -  $thnpel[nama]"; ?></h5>
			</div>
			<div class="widget-content nopadding">
				<form method="get" class="form-horizontal">
					<input type="hidden" name="menu" value="guru-nilai" />
					<input type="hidden" name="semester" value="<?php echo $id; ?>" />
					<div class="control-group">
						<label class="control-label">Nama Kelas :</label>
						<div class="controls">
							<select name="kelas">
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
						<button type="submit" class="btn btn-success">Lihat Nilai</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=guru-nilai'">Ganti Semester</button>
						
					</div>
				</form>
			</div>
		</div>
		<?php
		}else if(isset($_GET['semester'])&&isset($_GET['kelas'])){
			$id=$_GET['semester'];
			$qq=mysql_query("select * from sia_kelas where kelas_id=$_GET[kelas]");
			$kelas=mysql_fetch_array($qq);
			$qq=mysql_query("select * from sia_semes where semes_id=$id");
			$semester=mysql_fetch_array($qq);
			$qq=mysql_query("select * from sia_thnpel where thnpel_id=$semester[thnpel_id]");
			$thnpel=mysql_fetch_array($qq);
			if(!isset($_GET['nis'])){
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon"><i class="icon-th"></i></span> 
				<h5>Kelola Nilai <?php echo "$kelas[nama] :$semester[nama] -  $thnpel[nama]"; ?></h5>
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
						$q=mysql_query("select * from sia_absensi where semes_id=$id and kelas_id=(select kelas_id from sia_walikelas where kelas_id=$_GET[kelas])");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_siswa where nis='$h[nis]'");
							$siswa=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo $siswa['nis']; ?></td>
							<td><?php echo $siswa['nama']; ?></td>
							<td><center><a href="?menu=guru-nilai&semester=<?php echo $_GET['semester']; ?>&kelas=<?php echo $_GET['kelas']; ?>&nis=<?php echo $h['nis']; ?>">Lihat Nilai</a></center></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
			<br />
			<button type="button" class="btn btn-warning" onclick="location.href='?menu=guru-nilai&semester=<?php echo $_GET['semester']; ?>'">Selesai</button>
		</div>
		<?php
			}else{
				$id=$_GET['nis'];
				$q=mysql_query("select * from sia_siswa where nis='$id'");
				$h=mysql_fetch_array($q);
				$qq=mysql_query("select * from sia_nilai where nis='$h[nis]' and detail_id=(select detail_id from sia_detail where kelas_id=$_GET[kelas] and semes_id=$_GET[semester] and mapel_id=$_SESSION[ref])");
				$qqq=mysql_query("select detail_id from sia_detail where kelas_id=$_GET[kelas] and semes_id=$_GET[semester] and mapel_id=$_SESSION[ref]");
				$hhh=mysql_fetch_array($qqq);
				$hh=mysql_fetch_array($qq);
				if(mysql_num_rows($qq)>0){
					$isi=true;
				}else{
					$isi=false;
				}
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Kelola Nilai Siswa <?php echo ($hh['valid']>0)?'- Data sudah VALID tidak bisa di ubah kembali.':''; ?></h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<?php
					if($isi){
					?>
					<input type="hidden" name="nilai_id" value="<?php echo $hh['nilai_id']; ?>" />
					<?php
					}
					?>
					<input type="hidden" name="nis" value="<?php echo $h['nis']; ?>" />
					<input type="hidden" name="detail_id" value="<?php echo $hhh['detail_id']; ?>" />
					<div class="control-group">
						<label class="control-label">NIS Siswa :</label>
						<div class="controls"><strong><?php echo $h['nis']; ?></strong></div>
					</div>
					<div class="control-group">
						<label class="control-label">Nama Siswa :</label>
						<div class="controls"><strong><?php echo $h['nama']; ?></strong></div>
					</div>
					<div class="control-group">
						<label class="control-label">Pengetahuan :</label>
						<div class="controls">
							<select name="k3" class="span1">
								<option value="A" <?php echo ($hh['k3']=='A')?'selected':''; ?> >A</option>
								<option value="A-" <?php echo ($hh['k3']=='A-')?'selected':''; ?> >A-</option>
								<option value="B+" <?php echo ($hh['k3']=='B+')?'selected':''; ?> >B+</option>
								<option value="B" <?php echo ($hh['k3']=='B')?'selected':''; ?> >B</option>
								<option value="B-" <?php echo ($hh['k3']=='B-')?'selected':''; ?> >B-</option>
								<option value="C+" <?php echo ($hh['k3']=='C+')?'selected':''; ?> >C+</option>
								<option value="C" <?php echo ($hh['k3']=='C')?'selected':''; ?> >C</option>
								<option value="C-" <?php echo ($hh['k3']=='C-')?'selected':''; ?> >C-</option>
								<option value="D+" <?php echo ($hh['k3']=='D+')?'selected':''; ?> >D+</option>
								<option value="D" <?php echo ($hh['k3']=='D')?'selected':''; ?> >D</option>
							</select>
							<br />
							<textarea name="k3desk" class="span20" placeholder="Deskripsi Pengetahuan"><?php echo $hh['k3desk']; ?></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Keterampilan :</label>
						<div class="controls">
							<select name="k4" class="span1">
								<option value="A" <?php echo ($hh['k4']=='A')?'selected':''; ?> >A</option>
								<option value="A-" <?php echo ($hh['k4']=='A-')?'selected':''; ?> >A-</option>
								<option value="B+" <?php echo ($hh['k4']=='B+')?'selected':''; ?> >B+</option>
								<option value="B" <?php echo ($hh['k4']=='B')?'selected':''; ?> >B</option>
								<option value="B-" <?php echo ($hh['k4']=='B-')?'selected':''; ?> >B-</option>
								<option value="C+" <?php echo ($hh['k4']=='C+')?'selected':''; ?> >C+</option>
								<option value="C" <?php echo ($hh['k4']=='C')?'selected':''; ?> >C</option>
								<option value="C-" <?php echo ($hh['k4']=='C-')?'selected':''; ?> >C-</option>
								<option value="D+" <?php echo ($hh['k4']=='D+')?'selected':''; ?> >D+</option>
								<option value="D" <?php echo ($hh['k4']=='D')?'selected':''; ?> >D</option>
							</select>
							<br />
							<textarea name="k4desk" class="span20" placeholder="Deskripsi Keterampilan"><?php echo $hh['k4desk']; ?></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Sikap :</label>
						<div class="controls">
							<select name="k1k2" class="span1">
								<option value="SB" <?php echo ($hh['k1k2']=='SB')?'selected':''; ?> >SB</option>
								<option value="B" <?php echo ($hh['k1k2']=='B')?'selected':''; ?> >B</option>
								<option value="C" <?php echo ($hh['k1k2']=='C')?'selected':''; ?> >C</option>
								<option value="K" <?php echo ($hh['k1k2']=='K')?'selected':''; ?> >K</option>
							</select>
							<br />
							<textarea name="k1k2desk" class="span20" placeholder="Deskripsi Sikap"><?php echo $hh['k1k2desk']; ?></textarea>
						</div>
					</div>
					<div class="form-actions">
						<?php
						if($hh['valid']<1){
						?>
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="<?php echo ($isi)?'submit':'button'; ?>" name="valid" class="btn <?php echo ($isi)?'btn-info':'tip-bottom'; ?>" <?php echo (!$isi)?'data-original-title="Nilai Belum Tersimpan!"':''; ?> >Valid</button>
						<?php
						}
						?>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=guru-nilai&semester=<?php echo $_GET['semester']; ?>&kelas=<?php echo $_GET['kelas']; ?>'">Selesai</button>
					</div>
				</form>
			</div>
		</div>
		<?php
			}
		}else{
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Kelola Nilai</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="get" class="form-horizontal">
					<input type="hidden" name="menu" value="guru-nilai" />
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
						<button type="submit" class="btn btn-success">Lihat Kelas</button>
					</div>
				</form>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>