<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckeditor/style.js"></script>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		#kotak{
			margin: 50px auto;
			background: #ECF0F1;
			width: 800px;
			height: 500px;
			padding: 20px;
		}
		h1{
			text-align: center;
		}
		table tr input{
			width: 700px;
			height: 30px;
			padding-left: 20px;
			font-size: 12pt;
		}
 
</style>
<div class="row-fluid">
	<div class="span12">
		<?php
		if(isset($_POST['simpan'])){
			$isi=$_POST['isi'];
			$id="sambutan:$_SESSION[ref]";
			$q=mysql_query("update blog_konten set isi='$isi' where konten_id='$id'");
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
			?><script>setTimeout(function(){ location.href='?menu=blog-sambutan'; },200);</script><?php
		}
		$id="sambutan:$_SESSION[ref]";
		$q=mysql_query("select * from blog_konten where konten_id='$id'");
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
						<div class="controls"><textarea name="isi" class="ckeditor" class="span20" placeholder="Isi Sambutan" ><?php echo $h['isi']; ?></textarea></div>
					</div>
					<div class="form-actions">
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>