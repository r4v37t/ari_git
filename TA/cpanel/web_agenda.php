<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$judul=$_POST['judul'];
			$isi=$_POST['isi'];
			$tgl=date('Y-m-d H:i:s');
			$q=mysql_query("insert into web_pengda values(null,'$judul','$isi','$tgl',2)");
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
			$q=mysql_query("delete from web_pengda where pengda_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=web-agenda'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$judul=$_POST['judul'];
			$id=$_POST['id'];
			$isi=$_POST['isi'];
			$q=mysql_query("update web_pengda set judul='$judul',isi='$isi' where pengda_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=web-agenda'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from web_pengda where pengda_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Agenda</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['pengda_id']; ?>" />
					<div class="control-group">
						<label class="control-label">Judul :</label>
						<div class="controls"><input type="text" value="<?php echo $h['judul']; ?>" name="judul" class="span20" placeholder="Judul Agenda" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Isi Agenda :</label>
						<div class="controls"><textarea name="isi" class="span20" placeholder="Isi Agenda" ><?php echo $h['isi']; ?></textarea></div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=web-agenda'">Batal</button>
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
							<h5>Agenda</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">Judul :</label>
									<div class="controls"><input type="text" name="judul" class="span20" placeholder="Judul Agenda" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Isi Agenda :</label>
									<div class="controls"><textarea name="isi" class="span20" placeholder="Isi Agenda" ></textarea></div>
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
				<h5>Data Agenda</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Judul Agenda</th>
							<th>Tanggal</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from web_pengda where tipe=2");
						while($h=mysql_fetch_array($q)){
						?>
						<tr>
							<td><?php echo $h['judul']; ?></td>
							<td><?php echo date('d-m-Y H:i:s',strtotime($h['tanggal'])); ?></td>
							<td><center><a href="?menu=web-agenda&edit=<?php echo $h['pengda_id']; ?>">Edit</a> | <a href="?menu=web-agenda&del=<?php echo $h['pengda_id']; ?>">Del</a></center></td>
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