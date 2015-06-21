<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['simpan'])){
			$file='upload/'.$_FILES['gambar']['name'];
			if(move_uploaded_file($_FILES['gambar']['tmp_name'],$file)){
				$q=mysql_query("update web_konten set isi='$file' where konten_id='struktur'");
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
					<strong>GAGAL!</strong> File gagal di upload. 
				</div>
				<?php
			}
			?><script>setTimeout(function(){ location.href='?menu=web-struktur'; },500);</script><?php
		}
		
		$q=mysql_query("select * from web_konten where konten_id='struktur'");
		$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Struktur</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal" enctype="multipart/form-data" >
					<div class="control-group">
						<label class="control-label">Struktur :</label>
						<div class="controls"><img src="<?php echo $h['isi']; ?>" width="300" /></div>
					</div>
					<div class="control-group">
						<label class="control-label">File Struktur :</label>
						<div class="controls"><input type="file" name="gambar" /></div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>