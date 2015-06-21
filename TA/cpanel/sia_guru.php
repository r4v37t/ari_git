<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['tambah'])){
			$nip=$_POST['nip'];
			$nama=$_POST['nama'];
			$alamat=$_POST['alamat'];
			$tempat_lahir=$_POST['tempat_lahir'];
			$tanggal_lahir=date('Y-m-d',strtotime($_POST['tanggal_lahir']));
			$foto="";
			if(!empty($_FILES['gambar']['name'])){
				$lokasi='sia_upload/'.$_FILES['gambar']['name'];
				if(move_uploaded_file($_FILES['gambar']['tmp_name'],$lokasi)){
					$foto=$lokasi;
				}
			}
			if(empty($nip)){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> NIP Guru Kosong. 
			</div>	
			<?php } else {
			if(empty($nama)){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Nama Guru Kosong. 
			</div>	
			<?php } else {
			if(empty($alamat)){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Alamat Guru Kosong. 
			</div>	
			<?php } else {
			if(empty($tempat_lahir)){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Tempat Lahir Guru Kosong. 
			</div>	
			<?php } else {
			if(empty($_POST['tanggal_lahir'])){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Tanggal Lahir Guru Kosong. 
			</div>	
			<?php } else {
			if(empty($foto)){ ?>
			<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
				<strong>GAGAL!</strong> Foto Guru Kosong. 
			</div>	
			<?php } else {
			$q=mysql_query("insert into sia_guru values('$nip','$nama','$alamat','$tempat_lahir','$tanggal_lahir','$foto')");
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
			}	}	}	}  } } }
		}
		if(isset($_GET['del'])){
			$id=$_GET['del'];
			$q=mysql_query("delete from sia_guru where nip='$id'");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-guru'; },200);</script><?php
		}
		if(isset($_POST['simpan'])){
			$nip=$_POST['nip'];
			$nama=$_POST['nama'];
			$alamat=$_POST['alamat'];
			$tempat_lahir=$_POST['tempat_lahir'];
			$tanggal_lahir=date('Y-m-d',strtotime($_POST['tanggal_lahir']));
			$foto="";
			if(!empty($_FILES['gambar']['name'])){
				$lokasi='sia_upload/'.$_FILES['gambar']['name'];
				if(move_uploaded_file($_FILES['gambar']['tmp_name'],$lokasi)){
					$q=mysql_query("update sia_guru set nama='$nama',alamat='$alamat',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',foto='$lokasi' where nip='$nip'");
				}else{
					$q=false;
				}
			}else{
				$q=mysql_query("update sia_guru set nama='$nama',alamat='$alamat',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir' where nip='$nip'");
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
			?><script>setTimeout(function(){ location.href='?menu=sia-guru'; },200);</script><?php
		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$q=mysql_query("select * from sia_guru where nip='$id'");
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
				<form method="post" class="form-horizontal" enctype="multipart/form-data" >
					<div class="control-group">
						<label class="control-label">NIP :</label>
						<div class="controls"><input type="text" name="nip" class="span20" placeholder="NIP Guru" value="<?php echo $h['nip']; ?>" readonly /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Nama Lengkap :</label>
						<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Lengkap Guru" value="<?php echo $h['nama']; ?>" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Alamat :</label>
						<div class="controls"><input type="text" name="alamat" class="span20" placeholder="Alamat Guru" value="<?php echo $h['alamat']; ?>" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Tempat Lahir :</label>
						<div class="controls"><input type="text" name="tempat_lahir" class="span20" placeholder="Tempat Lahir Guru" value="<?php echo $h['tempat_lahir']; ?>" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Tanggal Lahir</label>
						<div class="controls">
							<input type="text" name="tanggal_lahir" data-date-format="dd-mm-yyyy" placeholder="Tanggal Lahir Guru" class="datepicker" value="<?php echo date('d-m-Y',strtotime($h['tanggal_lahir'])); ?>" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Foto Guru :</label>
						<img src="<?php echo $h['foto']; ?>" width="256" />
						<div class="controls"><input type="file" name="gambar" /></div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
						<button type="button" class="btn btn-warning" onclick="location.href='?menu=sia-guru'">Batal</button>
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
							<h5>Guru</h5>
						</div>
						<div class="widget-content nopadding">
							<form method="post" class="form-horizontal" enctype="multipart/form-data" >
								<div class="control-group">
									<label class="control-label">NIP :</label>
									<div class="controls"><input onchange="cekNip(this.value)" maxlength="18" type="text" name="nip" class="span20" placeholder="NIP Guru" /><div id="info"></div></div>
								</div>
								<div class="control-group">
									<label class="control-label">Nama Lengkap :</label>
									<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Lengkap Guru" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Alamat :</label>
									<div class="controls"><input type="text" name="alamat" class="span20" placeholder="Alamat Guru" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Tempat Lahir :</label>
									<div class="controls"><input type="text" name="tempat_lahir" class="span20" placeholder="Tempat Lahir Guru" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">Tanggal Lahir</label>
									<div class="controls">
										<input type="text" name="tanggal_lahir" data-date-format="dd-mm-yyyy" placeholder="Tanggal Lahir Guru" class="datepicker" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Foto Guru :</label>
									<div class="controls"><input type="file" name="gambar" /></div>
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
				<h5>Data Guru</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th>NIP</th>
							<th>Nama</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysql_query("select * from sia_guru");
						while($h=mysql_fetch_array($q)){
						?>
						<tr>
							<td><?php echo NIP($h['nip']); ?></td>
							<td><?php echo $h['nama']; ?></td>
							<td><center><a href="?menu=sia-guru&edit=<?php echo $h['nip']; ?>">Edit</a> | <a href="?menu=sia-guru&del=<?php echo $h['nip']; ?>">Del</a></center></td>
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
function cekNip(str) {
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
        xmlhttp.open("GET", "ceknip.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>