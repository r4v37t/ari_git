<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nama=$_POST['nama'];
			$id=$_POST['id'];
			$ref=$_POST['ref'];
			$sandi=md5($_POST['sandi']);
			if(empty($nama)){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Nama Guru Kosong. 
			</div>	
			<?php } else {
			$q=mysql_query("insert into login values('$id','$sandi','$nama',50,$ref)");
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
			$q=mysql_query("delete from login where username='$id'");
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
			?><script>setTimeout(function(){ location.href='?menu=guru'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$nama=$_POST['nama'];
			$id=$_POST['id'];
			$ref=$_POST['ref'];
			$sandi=md5($_POST['sandi']);
			$q=mysql_query("update login set nama='$nama',password='$sandi',ref=$ref where username='$id'");
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
			?><script>setTimeout(function(){ location.href='?menu=guru'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from login where username='$id'");
			$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Guru Mata Pelajaran</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<div class="control-group">
						<label class="control-label">Nama :</label>
						<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Lengkap" value="<?php echo $h['nama']; ?>" readonly /></div>
					</div>
					<div class="control-group">
						<label class="control-label">ID Pengguna :</label>
						<div class="controls"><input type="text" name="id" class="span20" placeholder="ID Pengguna" value="<?php echo $h['username']; ?>" readonly /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Kata Sandi</label>
						<div class="controls">
							<input type="password" name="sandi" class="span20" placeholder="Kata Sandi"  /> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Nama Mata Pelajaran :</label>
						<div class="controls">
							<select name="ref">
								<?php
								$qq=mysql_query("select * from sia_mapel");
								while($hh=mysql_fetch_array($qq)){
								?>
								<option value="<?php echo $hh['mapel_id']; ?>" <?php echo ($h['ref']==$hh['mapel_id'])?'selected':''; ?> ><?php echo "$hh[nama]"; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=guru'">Batal</button>
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
							<h5>Guru Mata Pelajaran</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal">
									<div class="control-group">
									<label class="control-label">Nama Mata Pelajaran :</label>
									<div class="controls">
										<select onchange="dataguru(this.value)" name="ref">
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
								<div id="info">
								</div>
								<div class="control-group">
									<label class="control-label">ID Pengguna :</label>
									<div class="controls"><input type="text" name="id" class="span20" placeholder="ID Pengguna" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Kata Sandi</label>
									<div class="controls">
										<input type="password" name="sandi" class="span20" placeholder="Kata Sandi"  /> 
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
				<h5>Data Guru Mata Pelajaran</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>Nama Lengkap</th>
							<th>ID Pengguna</th>
							<th>Nama Mata Pelajaran</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from login where level=50");
						while($h=mysql_fetch_array($q)){
							$qq=mysql_query("select * from sia_mapel where mapel_id=$h[ref]");
							$hh=mysql_fetch_array($qq);
						?>
						<tr>
							<td><?php echo $h['nama']; ?></td>
							<td><?php echo $h['username']; ?></td>
							<td><?php echo $hh['nama']; ?></td>
							<td><center><a href="?menu=guru&edit=<?php echo $h['username']; ?>">Edit</a> | <a href="?menu=guru&del=<?php echo $h['username']; ?>">Del</a></center></td>
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

<script>
function dataguru(str) {
    if (str.length == 0) {
        document.getElementById("info").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("info").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "dataguru.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>