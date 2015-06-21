<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['simpan'])){
			$nama=$_POST['nama'];
			$nss=$_POST['nss'];
			$alamat=$_POST['alamat'];
			$kodepos=$_POST['kodepos'];
			$telp=$_POST['telp'];
			$kel=$_POST['kel'];
			$kec=$_POST['kec'];
			$kab=$_POST['kab'];
			$prov=$_POST['prov'];
			$web=$_POST['web'];
			$email=$_POST['email'];
			$q=mysql_query("update web_profil set nama='$nama',nss='$nss',alamat='$alamat',kodepos='$kodepos',telp='$telp',kel='$kel',kec='$kec',kab='$kab',prov='$prov',web='$web',email='$email' where profil_id=1");
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
			?><script>setTimeout(function(){ location.href='?menu=web-profil'; },200);</script><?php
		}
		
		$q=mysql_query("select * from web_profil where profil_id=1");
		$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Profil</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<div class="control-group">
						<label class="control-label">Nama :</label>
						<div class="controls"><input type="text" value="<?php echo $h['nama']; ?>" class="span20" name="nama" placeholder="Nama Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">NSS :</label>
						<div class="controls"><input type="text" value="<?php echo $h['nss']; ?>" class="span20" name="nss" placeholder="Nomor Statistik Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Alamat :</label>
						<div class="controls"><input type="text" value="<?php echo $h['alamat']; ?>" class="span20" name="alamat" placeholder="Alamat Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Kode Pos :</label>
						<div class="controls"><input type="text" value="<?php echo $h['kodepos']; ?>" class="span20" name="kodepos" placeholder="Kode Pos Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">No. Telp :</label>
						<div class="controls"><input type="text" value="<?php echo $h['telp']; ?>" class="span20" name="telp" placeholder="Nomor Telepon Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Kelurahan :</label>
						<div class="controls"><input type="text" value="<?php echo $h['kel']; ?>" class="span20" name="kel" placeholder="Kelurahan Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Kecamatan :</label>
						<div class="controls"><input type="text" value="<?php echo $h['kec']; ?>" class="span20" name="kec" placeholder="Kecamatan Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Kabupaten/Kota :</label>
						<div class="controls"><input type="text" value="<?php echo $h['kab']; ?>" class="span20" name="kab" placeholder="Kabupaten/Kota Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Provinsi :</label>
						<div class="controls"><input type="text" value="<?php echo $h['prov']; ?>" class="span20" name="prov" placeholder="Provinsi Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Website :</label>
						<div class="controls"><input type="text" value="<?php echo $h['web']; ?>" class="span20" name="web" placeholder="Alamat Website Sekolah" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Email :</label>
						<div class="controls"><input type="text" value="<?php echo $h['email']; ?>" class="span20" name="email" placeholder="Alamat Email Sekolah" /></div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>