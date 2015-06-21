<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['simpan'])){
			$nama=$_POST['nama'];
			$id=$_SESSION['username'];
			$sandi_lama=md5($_POST['sandi_lama']);
			$sandi_baru=md5($_POST['sandi_baru']);
			$q=mysql_query("select * from login where username='$id' and password='$sandi_lama'");
			if(mysql_num_rows($q)>0){
				$q=mysql_query("update login set nama='$nama',password='$sandi_baru' where username='$id'");
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
			}else{
				?>
				<div class="alert alert-error">
					<button class="close" data-dismiss="alert">×</button>
					<strong>GAGAL!</strong> Sandi lama yang dimasukan tidak sesuai. 
				</div>
				<?php
			}
				?><script>setTimeout(function(){ location.href='?menu=password'; },200);</script><?php
		}
		$id=$_SESSION['username'];
		$q=mysql_query("select * from login where username='$id'");
		$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Ganti Password</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<div class="control-group">
						<label class="control-label">Nama :</label>
						<div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Lengkap" value="<?php echo $h['nama']; ?>" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">ID Pengguna :</label>
						<div class="controls"><input type="text" name="id" class="span20" placeholder="ID Pengguna" value="<?php echo $h['username']; ?>" readonly /></div>
					</div>
					<div class="control-group">
						<label class="control-label">Kata Sandi Lama</label>
						<div class="controls">
							<input type="password" name="sandi_lama" class="span20" placeholder="Kata Sandi"  /> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Kata Sandi Baru</label>
						<div class="controls">
							<input type="password" name="sandi_baru" class="span20" placeholder="Kata Sandi"  /> 
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>