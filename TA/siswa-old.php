<div class="page-header">
	<h1 class="page-title">Data Siswa</h1>
	<?php
	include "config/class_paging.php";
	if(!isset($_GET['act'])){
	?>
	<table>
	<?php 
		$p=new Paging;
		$batas  = 5;
		$posisi = $p->cariPosisi($batas);
		$no=$posisi+1;
		$q=mysql_query("select * from sia_siswa order by nama asc limit $posisi,$batas");
		while($h=mysql_fetch_array($q)){
			?>
			<tr>
				<td><?php echo "$no."; ?></td>
				<td><a href="detail_siswa.php=<?php echo $h['nis']; ?>&act=detail"><?php echo $h['nama']; ?></a></td>
			</tr>
			<?php
			$no++;
		}
	?>
	</table>
	<?php
		$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM sia_siswa"));
		$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
		$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

		echo "<br /><div id='paging'>&nbsp;&nbsp;$linkHalaman</div>";
		
	}else{
	$q=mysql_query("select * from sia_siswa where nis=$_GET[id]");
	$h=mysql_fetch_array($q);
	?>
		<table width="100%">
			<tr>
				<td rowspan="15" width="25%" valign="top"><img src="sia_upload/<?php echo $h['foto']; ?>" width="150" alt="Foto Tidak Tersedia" /></td>
				<th width="23%" align="left">Nama</th>
				<td width="2%">:</td>
				<td width="50%"><?php echo $h['nama']; ?></td>
			</tr>
			<tr>
				<th align="left">NIS</th>
				<td>:</td>
				<td><?php echo $h['nis']; ?></td>
			</tr>
			<tr>
				<th align="left">Jenis Kelamin</th>
				<td>:</td>
				<td><?php echo $h['jk']; ?></td>
			</tr>
			<tr>
				<th align="left">Tempat, Tanggal Lahir</th>
				<td>:</td>
				<td><?php echo $h['tempat_lahir'].', '.$h['tanggal_lahir']; ?></td>
			</tr>
			<tr>
				<th align="left">Alamat</th>
				<td>:</td>
				<td><?php echo $h['alamat']; ?></td>
			</tr>
				<td colspan="3" align="left"><a href="menu=siswa">[ Kembali ]</a></td>
			</tr>
		</table>
	<?php
	}
	?>
</div>