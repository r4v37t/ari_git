<?php 
include 'koneksi.php';
$id=$_GET[q];

$cdlogin=mysql_query("select * from login where level=40 and ref='$id'");
if(mysql_num_rows($cdlogin) > 0){ ?>
<div class="control-group">
	<label class="control-label">Error :</label>
	<div class="controls"><p class="label label-info">Akun Wali Kelas Sudah Digunakan</p></div>
</div>
<?php } else {

$nip=mysql_query("select * from sia_walikelas where kelas_id='$id'");
$dtnip=mysql_fetch_array($nip);
$nguru=$dtnip[nip];

$nama=mysql_query("select * from sia_guru where nip='$nguru'");
$dnama=mysql_fetch_array($nama);
?>

<div class="control-group">
	<label class="control-label">Nama :</label>
	<div class="controls"><input type="text" value="<?php echo $dnama[nama] ?>" name="nama" class="span20" placeholder="Nama Lengkap" /></div>
</div> 
<?php } ?>