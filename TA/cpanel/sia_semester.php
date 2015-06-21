<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$thnpel_id=$_POST['thnpel_id'];
			$nama=$_POST['nama'];
			$mulai=date('Y-m-d',strtotime($_POST['mulai']));
			$akhir=date('Y-m-d',strtotime($_POST['akhir']));
			$q=mysql_query("insert into sia_semes values(null,$thnpel_id,'$nama','$mulai','$akhir')");
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
			$q=mysql_query("delete from sia_semes where semes_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-semester'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$semes_id=$_POST['id'];
			$thnpel_id=$_POST['thnpel_id'];
			$nama=$_POST['nama'];
			$mulai=date('Y-m-d',strtotime($_POST['mulai']));
			$akhir=date('Y-m-d',strtotime($_POST['akhir']));
			$q=mysql_query("update sia_semes set nama='$nama',mulai='$mulai',akhir='$akhir',thnpel_id=$thnpel_id where semes_id=$semes_id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-semester'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from sia_semes where semes_id=$id");
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
					<input type="hidden" name="id" value="<?php echo $h['semes_id']; ?>" />
					<div class="control-group">
						<label class="control-label">Nama Semester :</label>
						<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Semester" value="<?php echo $h['nama']; ?>" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Tahun Pelajaran :</label>
						<div class="controls">
							<select name="thnpel_id">
								<?php
								$qq=mysql_query("select * from sia_thnpel");
								while($hh=mysql_fetch_array($qq)){
								?>
								<option value="<?php echo $hh['thnpel_id']; ?>" <?php echo ($h['thnpel_id']==$hh['thnpel_id'])?'selected':''; ?> ><?php echo "$hh[nama]"; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Mulai</label>
						<div class="controls">
							<input type="text" name="mulai" data-date-format="dd-mm-yyyy" placeholder="Mulai Semester" class="datepicker" value="<?php echo date('d-m-Y',strtotime($h['mulai'])); ?>" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Akhir</label>
						<div class="controls">
							<input type="text" name="akhir" data-date-format="dd-mm-yyyy" placeholder="Akhir Semester" class="datepicker" value="<?php echo date('d-m-Y',strtotime($h['akhir'])); ?>" />
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=sia-semester'">Batal</button>
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
							<h5>Semester</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal" enctype="multipart/form-data" >
								<div class="control-group">
									<label class="control-label">Nama Semester :</label>
									<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Semester" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Tahun Pelajaran :</label>
									<div class="controls">
										<select name="thnpel_id">
											<?php
											$q=mysql_query("select * from sia_thnpel");
											while($h=mysql_fetch_array($q)){
											?>
											<option value="<?php echo $h['thnpel_id']; ?>"><?php echo "$h[nama]"; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Mulai :</label>
									<div class="controls"><input type="text" name="mulai" data-date-format="dd-mm-yyyy" class="datepicker" placeholder="Mulai Semester" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Akhir</label>
									<div class="controls">
										<input type="text" name="akhir" data-date-format="dd-mm-yyyy" placeholder="Akhir Semester" class="datepicker" />
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
				<h5>Data Semester</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Tahun Pelajaran</th>
							<th>Mulai</th>
							<th>Akhir</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from sia_semes");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_thnpel where thnpel_id=$h[thnpel_id]");
							$tahun=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo $h['nama']; ?></td>
							<td><?php echo $tahun['nama']; ?></td>
							<td><?php echo date('d-m-Y',strtotime($h['mulai'])); ?></td>
							<td><?php echo date('d-m-Y',strtotime($h['akhir'])); ?></td>
							<td><center><a href="?menu=sia-semester&edit=<?php echo $h['semes_id']; ?>">Edit</a> | <a href="?menu=sia-semester&del=<?php echo $h['semes_id']; ?>">Del</a></center></td>
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