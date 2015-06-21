<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['simpan'])){
			$isi=$_POST['isi'];
			$q=mysql_query("update web_konten set isi='$isi' where konten_id='sambutan'");
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
			?><script>setTimeout(function(){ location.href='?menu=web-sambutan'; },200);</script><?php
		}
		
		$q=mysql_query("select * from web_konten where konten_id='sambutan'");
		$h=mysql_fetch_array($q);
		?>
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>									
				</span>
				<h5>Edit Sambutan</h5>
			</div>
			<div class="widget-content nopadding">
				<form method="post" class="form-horizontal">
					<div class="control-group">
						<label class="control-label">Isi Sambutan :</label>
						<div class="controls"><textarea name="isi" class="span20" placeholder="Isi Sambutan" ><?php echo $h['isi']; ?></textarea></div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>