<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nama=$_POST['nama'];
			$mulai=date('Y-m-d',strtotime($_POST['mulai']));
			$akhir=date('Y-m-d',strtotime($_POST['akhir']));
			if(empty($nama)){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Nama Tahun Pelajaran Kosong. 
			</div>	
			<?php } else {
			if(empty($_POST['mulai'])){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Tahun Pelajaran Kosong. 
			</div>	
			<?php } else {
			if(empty($_POST['akhir'])){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Tahun Pelajaran Kosong. 
			</div>	
			<?php } else {
			$q=mysql_query("insert into sia_thnpel values(null,'$nama','$mulai','$akhir')");
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
			}	}	} }	
		}
		if(isset($_GET['del'])){
			$id=$_GET['del'];
			$q=mysql_query("delete from sia_thnpel where thnpel_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-tahun'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$thnpel_id=$_POST['id'];
			$nama=$_POST['nama'];
			$mulai=date('Y-m-d',strtotime($_POST['mulai']));
			$akhir=date('Y-m-d',strtotime($_POST['akhir']));
			$q=mysql_query("update sia_thnpel set nama='$nama',mulai='$mulai',akhir='$akhir' where thnpel_id=$thnpel_id");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-tahun'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from sia_thnpel where thnpel_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Tahun Pelajaran</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['thnpel_id']; ?>" />
					<div class="control-group">
						<label class="control-label">Nama Tahun Pelajaran :</label>
						<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Tahun Pelajaran" value="<?php echo $h['nama']; ?>" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Mulai :</label>
						<div class="controls"><input type="text" name="mulai" class="datepicker" placeholder="Mulai Tahun Pelajaran" data-date-format="dd-mm-yyyy" value="<?php echo date('d-m-Y',strtotime($h['mulai'])); ?>"  /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Akhir</label>
						<div class="controls">
							<input type="text" name="akhir" data-date-format="dd-mm-yyyy" placeholder="Akhir Tahun Pelajaran" class="datepicker" value="<?php echo date('d-m-Y',strtotime($h['akhir'])); ?>" />
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=sia-tahun'">Batal</button>
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
							<h5>Tahun Pelajaran</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal" enctype="multipart/form-data" >
								<div class="control-group">
									<label class="control-label">Nama Tahun Pelajaran :</label>
									<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Tahun Pelajaran" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Mulai :</label>
									<div class="controls"><input type="text" name="mulai" class="datepicker" placeholder="Mulai Tahun Pelajaran" data-date-format="dd-mm-yyyy" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Akhir</label>
									<div class="controls">
										<input type="text" name="akhir" data-date-format="dd-mm-yyyy" placeholder="Akhir Tahun Pelajaran" class="datepicker" />
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
				<h5>Data Tahun Pelajaran</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Mulai</th>
							<th>Akhir</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from sia_thnpel");
						while($h=mysql_fetch_array($q)){
						?>
						<tr>
							<td><?php echo $h['nama']; ?></td>
							<td><?php echo date('d-m-Y',strtotime($h['mulai'])); ?></td>
							<td><?php echo date('d-m-Y',strtotime($h['akhir'])); ?></td>
							<td><center><a href="?menu=sia-tahun&edit=<?php echo $h['thnpel_id']; ?>">Edit</a> | <a href="?menu=sia-tahun&del=<?php echo $h['thnpel_id']; ?>">Del</a></center></td>
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