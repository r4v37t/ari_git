<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nama=$_POST['nama'];
			$jumlah=$_POST['jumlah'];
			$kondisi=$_POST['kondisi'];
			$q=mysql_query("insert into web_fasilitas values(null,'$nama',$jumlah,'$kondisi')");
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
			$q=mysql_query("delete from web_fasilitas where fasilitas_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=web-fasilitas'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$nama=$_POST['nama'];
			$jumlah=$_POST['jumlah'];
			$kondisi=$_POST['kondisi'];
			$id=$_POST['id'];
			$q=mysql_query("update web_fasilitas set nama='$nama',jumlah=$jumlah,kondisi='$kondisi' where fasilitas_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=web-fasilitas'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from web_fasilitas where fasilitas_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Fasilitas</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['fasilitas_id']; ?>" />
					<div class="control-group">
						<label class="control-label">Nama Fasilitas :</label>
						<div class="controls"><input type="text" value="<?php echo $h['nama']; ?>" name="nama" class="span20" placeholder="Nama Fasilitas" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Jumlah :</label>
						<div class="controls"><input type="text" value="<?php echo $h['jumlah']; ?>" name="jumlah" class="span20" placeholder="Jumlah Fasilitas" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Kondisi :</label>
						<div class="controls">
							<select name="kondisi" class="span20">
								<option value="Bagus" <?php echo ($h['kondisi']=='Bagus')?'selected':''; ?> >Bagus</option>
								<option value="Kurang Bagus" <?php echo ($h['kondisi']=='Kurang Bagus')?'selected':''; ?> >Kurang Bagus</option>
								<option value="Rusak" <?php echo ($h['kondisi']=='Rusak')?'selected':''; ?> >Rusak</option>
							</select>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=web-fasilitas'">Batal</button>
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
							<h5>Fasilitas</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">Nama Fasilitas :</label>
									<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Fasilitas" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Jumlah :</label>
									<div class="controls"><input type="text" name="jumlah" class="span20" placeholder="Jumlah Fasilitas" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Kondisi :</label>
									<div class="controls">
										<select name="kondisi" class="span20">
											<option value="Bagus">Bagus</option>
											<option value="Kurang Bagus">Kurang Bagus</option>
											<option value="Rusak">Rusak</option>
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
				<h5>Data Fasilitas</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Nama Fasilitas</th>
							<th>Jumlah</th>
							<th>Kondisi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from web_fasilitas");
						while($h=mysql_fetch_array($q)){
						?>
						<tr>
							<td><?php echo $h['nama']; ?></td>
							<td><?php echo $h['jumlah']; ?></td>
							<td><?php echo $h['kondisi']; ?></td>
							<td><center><a href="?menu=web-fasilitas&edit=<?php echo $h['fasilitas_id']; ?>">Edit</a> | <a href="?menu=web-fasilitas&del=<?php echo $h['fasilitas_id']; ?>">Del</a></center></td>
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