<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$kuri_id=$_POST['id'];
			$mapel_id=$_POST['mapel_id'];
			$bab=$_POST['bab'];
			$sub_bab=$_POST['sub_bab'];
			$kurikulum=$_POST['kurikulum'];
			$q=mysql_query("insert into web_kurikulum values(null,'$mapel_id','$bab','$sub_bab','$kurikulum')");
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
			$q=mysql_query("delete from web_kurikulum where kuri_id=$id");
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
			?><script>setTimeout(function(){ location.href='?menu=web-kurikulum'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$kuri_id=$_POST['id'];
			$mapel_id=$_POST['mapel_id'];
			$bab=$_POST['bab'];
			$sub_bab=$_POST['sub_bab'];
			$kurikulum=$_POST['kurikulum'];
			$q=mysql_query("update web_kurikulum set bab='$bab',sub_bab='$sub_bab',kurikulum='$kurikulum' where kuri_id=$kuri_id");
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
			?><script>setTimeout(function(){ location.href='?menu=web-kurikulum'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from web_kurikulum where kuri_id=$id");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit kurikulumkulikuler</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo $h['kuri_id']; ?>" />
					<div class="control-group">
									<label class="control-label">Nama Mata Pelajaran :</label>
									<div class="controls">
										<select name="mapel_id">
											<?php
											$qq=mysql_query("select * from sia_mapel");
											while($hh=mysql_fetch_array($qq)){
											?>
											<option value="<?php echo $hh['mapel_id']; ?>"><?php echo "$hh[mapel_id] - $hh[nama]"; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">BAB :</label>
									<div class="controls"><textarea name="bab" class="span20" placeholder="BAB Mata Pelajaran" ><?php echo $h['bab']; ?></textarea></div>
								</div>
								<div class="control-group">
									<label class="control-label">SUB BAB :</label>
									<div class="controls"><textarea name="sub_bab" class="span20" placeholder="SUB BAB Mata Pelajaran" ><?php echo $h['sub_bab']; ?></textarea></div>
								</div>
								<div class="control-group">
									<label class="control-label">Kurikulum :</label>
									<div class="controls"><input type="text" name="kurikulum" class="span20" placeholder="Kurikulum Mata Pelajaran" /></div>
								</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=web-kurikulum'">Batal</button>
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
							<h5>Kurikulum</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal" enctype="multipart/form-data" >
								<div class="control-group">
									<label class="control-label">Nama Mata Pelajaran :</label>
									<div class="controls">
										<select name="mapel_id">
											<?php
											$qq=mysql_query("select * from sia_mapel");
											while($hh=mysql_fetch_array($qq)){
											?>
											<option value="<?php echo $hh['mapel_id']; ?>"><?php echo "$hh[mapel_id] - $hh[nama]"; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">BAB :</label>
									<div class="controls"><textarea name="bab" class="span20" placeholder="BAB Mata Pelajaran" ><?php echo $h['bab']; ?></textarea></div>
								</div>
								<div class="control-group">
									<label class="control-label">SUB BAB :</label>
									<div class="controls"><textarea name="sub_bab" class="span20" placeholder="SUB BAB Mata Pelajaran" ><?php echo $h['sub_bab']; ?></textarea></div>
								</div>
								<div class="control-group">
									<label class="control-label">Kurikulum :</label>
									<div class="controls"><input type="text" name="kurikulum" class="span20" placeholder="Kurikulum Mata Pelajaran" /></div>
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
				<h5>Data Kurikulum</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Mata Pelajaran</th>
							<th>BAB</th>
							<th>SUB BAB</th>
							<th>Kurikulum</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from web_kurikulum");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_mapel where mapel_id='$h[mapel_id]'");
							$hh=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo $hh['nama']; ?></td>
							<td><?php echo $h['bab']; ?></td>
							<td><?php echo $h['bab']; ?></td>
							<td><?php echo $h['kurikulum']; ?></td>
							<td><center><a href="?menu=web-kurikulum&edit=<?php echo $h['kuri_id']; ?>">Edit</a> | <a href="?menu=web-kurikulum&del=<?php echo $h['kuri_id']; ?>">Del</a></center></td>
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