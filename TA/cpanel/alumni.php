<?php
include_once "koneksi.php";
$nis = $_GET['id_nis'];

$alumni = mysql_query("SELECT * FROM sia_siswa WHERE nis='$nis'");
$row = mysql_fetch_array($alumni);
?>
<div class="control-group">
    <label class="control-label">Nama Lengkap :</label>
    <div class="controls"><input value="<?php echo $row[nama] ?>" readonly type="text" name="nama" class="span20" placeholder="Nama Lengkap Alumni" /></div>
</div>
<div class="control-group">
    <label class="control-label">Tempat Lahir :</label>
    <div class="controls"><input value="<?php echo $row[tempat_lahir] ?>" readonly type="text" name="tempat_lahir" class="span20" placeholder="Tempat Lahir Alumni" /></div>
</div>
<div class="control-group">
    <label class="control-label">Tanggal Lahir</label>
    <div class="controls">
        <input value="<?php echo $row[tanggal_lahir] ?>" readonly type="text" name="tanggal_lahir" data-date-format="dd-mm-yyyy" placeholder="Tanggal Lahir Alumni" class="datepicker" />
    </div>
</div>
<div class="control-group">
    <label class="control-label">Tanggal Lulus</label>
    <div class="controls">
        <!--<input type="text" name="lulus" id="tgl" placeholder="Tahun Lulus" class="datepicker" data-date-format="dd-mm-yyyy" value="<?php echo date('d-m-Y', strtotime($h['lulus'])); ?>"/> -->
        <input type="date" name="lulus" data-date-format="dd-mm-yyyy" placeholder="Tempat Lulus Alumni" class="datepicker" /> 
    </div>
</div>
<script>
$('#tgl').datepicker();
</script>