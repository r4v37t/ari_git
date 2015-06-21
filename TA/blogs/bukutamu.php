<style>
#input{
	height:20px;
	padding:11px 5px;
	margin:3px 0px;
	font:13px "Open Sans";
	border:1px solid #eaeaea;
	box-shadow:3px 3px 20px rgba(0,0,0,0.1) inset;
	color:#060606;
	border-radius:0px;
	background:none repeat scroll 0% 0% #fff;
}
</style>
<?php
if(isset($_POST['kirim'])){
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$web=$_POST['web'];
	$isi=$_POST['isi'];
	$tgl=date('Y-m-d');
	$q=mysql_query("insert into blog_buku values(null,'$nama','$email','$web','$isi','$tgl',0,$ref)");
	if($q){
	?>
	<script>alert('SUKSES!\n\nData berhasil di masukkan.\nSilahkan tunggu konfirmasi dari Admin.');</script>
	<?php
	}else{
	?>
	<script>alert('GAGAL!\n\nData gagal di masukkan.\nSilahkan coba kembali beberapsa saat.');</script>
	<?php
	}
}
?>
<article class="post-detail">            
	<div class="entry">								   
		<h2>Buku Tamu</h2>
		<div class="tabs_framed">
			<ul class="tabs">
				<li><a href="#mengisi">Mengisi Buku Tamu</a></li>
				<li><a href="#membaca">Membaca Buku Tamu</a></li>
			</ul>
			<div id="mengisi" class="tabcontent">
				<div class="inner">
					<form method="post" >
						<table width="100%">
							<tr>
								<td><input size="45" type="text" name="nama" placeholder="Nama Lengkap" id="input" /></td>
							</tr>
							<tr>
								<td><input type="text" name="email" placeholder="Alamat Email" id="input" /></td>
							</tr>
							<tr>
								<td><input type="text" name="web" placeholder="Alamat Website" id="input" /></td>
							</tr>
							<tr>
								<td><textarea style="height:100px" name="isi" placeholder="Isi Buku Tamu" id="input" /></textarea></td>
							</tr>
							<tr>
								<td><input type="submit" value="Kirim" name="kirim" class="btn button_link_medium btn_blue text-semibold"></td>
							</tr>							
						</table>
					</form>
				</div>
			</div>
			<div id="membaca" class="tabcontent">
				<div class="inner">
					<h3>Isi Buku Tamu</h3>
					<?php
					$q=mysql_query("select * from blog_buku where status=1 and ref=$ref");
					while($h=mysql_fetch_array($q)){
					?>
					<div class="widget-container widget-testimonials">
						<div class="testimonial-user">
							<img src="images/user_wh.jpg" class="ava_white" alt=""/>
							<p class="name-user"><?php echo $h['nama']; ?></p>
							<p class="name-post"><a href="<?php echo $h['web']; ?>" target="_blank"><?php echo $h['web']; ?></a></p>
							<p class="user-mail"><a href="mailto:<?php echo $h['email']; ?>" target="_blank"><?php echo $h['email']; ?></a></p>
							<div class="corner-bottom"></div>
						</div>
						<div class="testimonial-text">
							<p><?php echo nl2br($h['isi']); ?></p>
						</div>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</article>