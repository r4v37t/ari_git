<div class="page-header">
	<h1 class="page-title">Data Siswa</h1>
</div>
<section id="content">
	<?php
	if(isset($_GET['lihat'])){
		$q=mysql_query("Select * from sia_siswa where nis='$_GET[lihat]'");
		$h=mysql_fetch_array($q);
	?>
	<article class="post clearfix">
		<table width="100%" >
			<tr>
				<th width="40%" style="vertical-align:middle;" rowspan="7"><img src="cpanel/<?php echo $h['foto']; ?>" width="125" /></th>
				<td width="10%" >NIS</td>
				<td align="center" width="5%" >:</td>
				<td width="45%" ><?php echo $h['nis']; ?></td>
			</tr>
			<tr>
				<td width="10%" >Nama</td>
				<td align="center" width="5%" >:</td>
				<td width="45%" ><?php echo $h['nama']; ?></td>
			</tr>
			<tr>
				<td width="10%" >Alamat</td>
				<td align="center" width="5%" >:</td>
				<td width="45%" ><?php echo $h['alamat']; ?></td>
			</tr>
			<tr>
				<td width="10%" >Tempat Lahir</td>
				<td align="center" width="5%" >:</td>
				<td width="45%" ><?php echo $h['tempat_lahir']; ?></td>
			</tr>
			<tr>
				<td width="10%" >Tanggal Lahir</td>
				<td align="center" width="5%" >:</td>
				<td width="45%" ><?php echo date('d-m-Y',strtotime($h['tanggal_lahir'])); ?></td>
			</tr>
			<tr>
				<td width="10%" >Angkatan</td>
				<td align="center" width="5%" >:</td>
				<td width="45%" ><?php echo date('Y',strtotime($h['diterima_tgl'])); ?></td>
			</tr>
			<tr>
				<td align="left" width="5%" ><b><a href="?menu=siswa">KEMBALI</a></b></td>
			</tr>
		</table>
	</article>
	<?php
	}else{
		if(isset($_GET['hal'])){
			$hal=$_GET['hal'];
		}else{
			$hal=1;
		}
		$batas=3;
		$awal=$hal-1;
		$awal*=$batas;
		$q=mysql_query("select * from sia_siswa limit $awal,$batas");
	?>
	<article class="post clearfix">
		<table width="100%" style="border:1px solid black collapse;">
			<tr>
				<th width="5%" style="border:1px solid black">No</th>
				<th width="25%" style="border:1px solid black">NIS</th>
				<th width="70%" style="border:1px solid black">Nama Siswa</th>
			</tr>
			<?php
			$x=0;
			while($h=mysql_fetch_array($q)){
				$x++;
			?>
			<tr>
				<td align="center" style="border:1px solid black"><?php echo $x; ?>.</td>
				<td align="center" style="border:1px solid black"><a href="?menu=siswa&lihat=<?php echo $h['nis']; ?>"><?php echo $h['nis']; ?></a></td>
				<td align="left" style="border:1px solid black; padding-left:10px;"><?php echo $h['nama']; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</article>
	<?php
	$q=mysql_query("select * from sia_siswa");
	$h=mysql_num_rows($q);
	$jlhHalaman=ceil($h/$batas);
	?>
	<ul class="pagination">
		<?php
		for($x=0;$x<$jlhHalaman;$x++){
		?>
		<li><a href="?menu=siswa&hal=<?php echo $x+1; ?>" class="<?php echo (($x+1)==$hal)?'current':''; ?>" ><?php echo $x+1; ?></a></li>
		<?php
		}
		?>
	</ul>
	<?php
	}
	?>
</section>