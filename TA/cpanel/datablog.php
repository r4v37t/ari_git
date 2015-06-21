<?php 
include 'koneksi.php';
$id=$_GET[q];

$cdlogin=mysql_query("select * from login where level=30 and ref='$id'");
if(mysql_num_rows($cdlogin) > 0){ ?>
<div class="control-group">
	<label class="control-label">Error :</label>
	<div class="controls"><p class="label label-info">Akun Blog ini Sudah Digunakan</p></div>
</div>
<?php } else {

$nip=mysql_query("select * from sia_ekstra where ekstra_id='$id'");
$dtnip=mysql_fetch_array($nip);
$nguru=$dtnip[nip];

$nama=mysql_query("select * from sia_guru where nip='$nguru'");
$dnama=mysql_fetch_array($nama);
if(mysql_num_rows($nama) > 0){
?>
<div class="control-group">
	<label class="control-label">Nama :</label>
	<div class="controls"><input type="text" value="<?php echo $dnama[nama] ?>" name="nama" class="span20" placeholder="Nama Lengkap" /></div>
</div> 
<?php } else { ?>
		<div class="control-group">
	<label class="control-label">Nama :</label>
	<div class="controls"><p class="label label-info">Guru Untuk Blog ini Belum Ada</p></div>
</div>
<?php }} ?>