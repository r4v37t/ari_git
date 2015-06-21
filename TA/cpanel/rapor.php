<?php
include 'koneksi.php';
if(!isset($_SESSION['cpanel'])){
	header("location: login.php");
}
$nis=$_GET['siswa'];
$semes_id=$_GET['semester'];
?>
<style>
	*{
		font-family: 'Book Antiqua';
	}
</style>
<table width="790" height="1120" style="page-break-after: always;">
	<tr height="10">
		<th colspan="4"><b>LAPORAN</b></th>
	</tr>
	<tr height="10">
		<td align="center" colspan="4"><b>HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK</b></td>
	</tr>
	<tr height="10">
		<td align="center" colspan="4"><b>SEKOLAH MENENGAH PERTAMA</b></td>
	</tr>
	<tr height="10">
		<td align="center" colspan="4"><b>(SMP)</b></td>
	</tr>
	<tr height="500">
		<td align="center" colspan="4"><img src="img/tut.png" width="128" /></td>
	</tr>
	<tr height="10">
		<td align="center" colspan="4">Nama Peserta Didik:</td>
	</tr>
	<tr height="10">
		<td align="left" >&nbsp;</td>
		<td align="center" colspan="2" style="border: 2px solid black;">&nbsp;</td>
		<td align="center" >&nbsp;</td>
	</tr>
	<tr height="10">
		<td align="center" colspan="4">No. Induk/NISN:</td>
	</tr>
	<tr height="10">
		<td align="center" >&nbsp;</td>
		<td align="center" colspan="2" style="border: 2px solid black;">&nbsp;</td>
		<td align="center" >&nbsp;</td>
	</tr>
	<tr height="300" >
		<td align="center" colspan="4" valign="bottom"><b>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN</b><br /><b>REPLUBIK INDONESIA</b></td>
	</tr>
	<tr height="100">
		<td align="center" colspan="4">&nbsp;</td>
	</tr>
</table>
<?php
$q=mysql_query("select * from web_profil where profil_id=1");
$h=mysql_fetch_array($q);
?>
<table width="790" height="1120" style="page-break-after: always;">
	<tr height="10">
		<th colspan="4"><b>LAPORAN</b></th>
	</tr>
	<tr height="10">
		<td align="center" colspan="4"><b>HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK</b></td>
	</tr>
	<tr height="10">
		<td align="center" colspan="4"><b>SEKOLAH MENENGAH PERTAMA</b></td>
	</tr>
	<tr height="10">
		<td align="center" colspan="4"><b>(SMP)</b></td>
	</tr>
	<tr height="100">
		<td align="center" colspan="4">&nbsp;</td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >Nama Sekolah</td>
		<td align="center" >:</td>
		<td align="left" width="450"><?php echo $h['nama']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >NIS/NSS/NDS</td>
		<td align="center" >:</td>
		<td align="left" width="450"><?php echo $h['nss']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >Alamat Sekolah</td>
		<td align="center" >:</td>
		<td align="left" width="450"><?php echo $h['alamat']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >&nbsp;</td>
		<td align="center" >&nbsp;</td>
		<td align="left" width="450">Kode Pos <?php echo $h['kodepos']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Telp. <?php echo $h['kodepos']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >Kelurahan/Desa</td>
		<td align="center" >:</td>
		<td align="left" width="450"><?php echo $h['kel']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >Kecamatan</td>
		<td align="center" >:</td>
		<td align="left" width="450"><?php echo $h['kec']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >Kota/Kabupaten</td>
		<td align="center" >:</td>
		<td align="left" width="450"><?php echo $h['kab']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >Provinsi</td>
		<td align="center" >:</td>
		<td align="left" width="450"><?php echo $h['prov']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >Website</td>
		<td align="center" >:</td>
		<td align="left" width="450"><?php echo $h['web']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="150">&nbsp;</td>
		<td align="left" >Email</td>
		<td align="center" >:</td>
		<td align="left" width="450"><?php echo $h['email']; ?></td>
	</tr>
	<tr height="600">
		<td align="center" colspan="4">&nbsp;</td>
	</tr>
</table>
<table width="790" height="1120" style="page-break-after: always;">
	<tr height="10">
		<th colspan="4"><b>PETUNJUK PENGGUNAAN</b></th>
	</tr>
	<tr height="100">
		<td align="center" colspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td style="text-align:justify" colspan="2">
			<ol>
				<li>Buku Laporan Hasil Pencapaian Kompetensi ini dipergunakan selama peserta didik mengikuti pelajaran di Sekolah Menengah Pertama (SMP).</li>
				<li>Apabila peserta didik  pindah sekolah, buku Laporan Hasil PencapaianKompetensi tersebut dibawa oleh peserta didik untuk dipergunakan sebagai bukti pencapaian kompetensi peserta didik yang bersangkutan.</li>
				<li>Apabila buku laporan tersebut hilang, maka dokumen ini dapat diganti dengan buku Laporan Hasil Pencapaian Kompetensi Pengganti.</li>
				<li>Buku Laporan Hasil Pencapaian Kompetensi Pengganti diisi dengan nilai-nilai yang dikutip dari Buku Induk Sekolah asal tempat peserta didik bersekolah dan disahkan oleh Kepala Sekolah yang bersangkutan.</li>
				<li>Buku Laporan Hasil Pencapaian Kompetensi peserta didik ini harus dilengkapi dengan pas foto ukuran 3 cm x 4 cm.</li>
				<li>Pengisian Buku Laporan Hasil Pencapaian Kompetensi Peserta Didik dilakukan oleh wali kelas.</li>
				<li>Nilai dalam Buku Laporan Hasil Pencapaian Kompetensi peserta didik sbb:</li>
			</ol>
		</td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" colspan="4">
			<table style="border: 1px solid black; border-collapse:collapse; font-size:9pt;" width="700">
				<tr>
					<th style="border: 1px solid black;" rowspan="2">Predikat<br />(KI 3 &amp; KI 4)</th>
					<th style="border: 1px solid black;" colspan="4">Interval Nilai Kompetensi</th>
				</tr>
				<tr>
					<th style="border: 1px solid black;">Interval<br />Pengetahuan<br />(KI 3)</th>
					<th style="border: 1px solid black;">Interval<br />Keterampilan<br />(KI 4)</th>
					<th style="border: 1px solid black;">Predikat Sikap<br />(KI 1 &amp; KI 2)</th>
					<th style="border: 1px solid black;">Interval Sikap<br />(KI 1 &amp; KI 2)</th>
				</tr>
				<tr>
					<th style="border: 1px solid black;">A</th>
					<td style="border: 1px solid black;" align="center">3,83 &lt; x &le; 4,00</td>
					<td style="border: 1px solid black;" align="center">3,83 &lt; x &le; 4,00</td>
					<th style="border: 1px solid black;" rowspan="2">SB<br />(Sangat Baik)</th>
					<td style="border: 1px solid black;" rowspan="2" align="center">3,50 &lt; x &le; 4,00</td>
				</tr>
				<tr>
					<th style="border: 1px solid black;">A-</th>
					<td style="border: 1px solid black;" align="center">3,50 &lt; x &le; 3,83</td>
					<td style="border: 1px solid black;" align="center">3,50 &lt; x &le; 3,83</td>
				</tr>
				<tr>
					<th style="border: 1px solid black;">B+</th>
					<td style="border: 1px solid black;" align="center">3,17 &lt; x &le; 3,50</td>
					<td style="border: 1px solid black;" align="center">3,17 &lt; x &le; 3,50</td>
					<th style="border: 1px solid black;" rowspan="3">B<br />(Baik)</th>
					<td style="border: 1px solid black;" rowspan="3" align="center">2,50 &lt; x &le; 3,50</td>
				</tr>
				<tr>
					<th style="border: 1px solid black;">B</th>
					<td style="border: 1px solid black;" align="center">2,83 &lt; x &le; 3,17</td>
					<td style="border: 1px solid black;" align="center">2,83 &lt; x &le; 3,17</td>
				</tr>
				<tr>
					<th style="border: 1px solid black;">B-</th>
					<td style="border: 1px solid black;" align="center">2,50 &lt; x &le; 2,83</td>
					<td style="border: 1px solid black;" align="center">2,50 &lt; x &le; 2,83</td>
				</tr>
				<tr>
					<th style="border: 1px solid black;">C+</th>
					<td style="border: 1px solid black;" align="center">2,17 &lt; x &le; 2,50</td>
					<td style="border: 1px solid black;" align="center">2,17 &lt; x &le; 2,50</td>
					<th style="border: 1px solid black;" rowspan="3">C<br />(Cukup)</th>
					<td style="border: 1px solid black;" rowspan="3" align="center">1,50 &lt; x &le; 2,50</td>
				</tr>
				<tr>
					<th style="border: 1px solid black;">C</th>
					<td style="border: 1px solid black;" align="center">1,83 &lt; x &le; 2,17</td>
					<td style="border: 1px solid black;" align="center">1,83 &lt; x &le; 2,17</td>
				</tr>
				<tr>
					<th style="border: 1px solid black;">C-</th>
					<td style="border: 1px solid black;" align="center">1,50 &lt; x &le; 1,83</td>
					<td style="border: 1px solid black;" align="center">1,50 &lt; x &le; 1,83</td>
				</tr>
				<tr>
					<th style="border: 1px solid black;">D+</th>
					<td style="border: 1px solid black;" align="center">1,17 &lt; x &le; 1,50</td>
					<td style="border: 1px solid black;" align="center">1,17 &lt; x &le; 1,50</td>
					<th style="border: 1px solid black;" rowspan="2">K<br />(Kurang)</th>
					<td style="border: 1px solid black;" rowspan="2" align="center">1,00 &lt; x &le; 1,50</td>
				</tr>
				<tr>
					<th style="border: 1px solid black;">D</th>
					<td style="border: 1px solid black;" align="center">1,00 &lt; x &le; 1,17</td>
					<td style="border: 1px solid black;" align="center">1,00 &lt; x &le; 1,17</td>
				</tr>
				
			</table>
		</td>
	</tr>
	<tr height="400">
		<td align="center" colspan="4">&nbsp;</td>
	</tr>
</table>
<?php
$q=mysql_query("select * from sia_siswa where nis='$nis'");
$h=mysql_fetch_array($q);
?>
<table width="790" height="1120" style="page-break-after: always;">
	<tr height="10">
		<th colspan="4"><b>KETERANGAN TENTANG DIRI PESERTA DIDIK</b></th>
	</tr>
	<tr height="50">
		<td align="center" colspan="4">&nbsp;</td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">1.</td>
		<td align="left" width="300">Nama Peserta Didik (Lengkap)</td>
		<td align="left" >: <?php echo $h['nama']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">2.</td>
		<td align="left" width="300">Nomor Induk</td>
		<td align="left" >: <?php echo $h['nis']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">3.</td>
		<td align="left" width="300">Tempat / Tanggal Lahir</td>
		<td align="left" >: <?php echo $h['tempat_lahir']; ?> / <?php echo date('d-m-Y',strtotime($h['tanggal_lahir'])); ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">4.</td>
		<td align="left" width="300">Jenis Kelamin</td>
		<td align="left" >: <?php echo $h['jk']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">5.</td>
		<td align="left" width="300">Agama</td>
		<td align="left" >: <?php echo $h['agama']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">6.</td>
		<td align="left" width="300">Status Dalam Keluarga</td>
		<td align="left" >: <?php echo $h['status']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">7.</td>
		<td align="left" width="300">Anak ke-</td>
		<td align="left" >: <?php echo $h['anak_ke']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">8.</td>
		<td align="left" width="300">Alamat Peserta Didik</td>
		<td align="left" >: <?php echo $h['alamat']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">9.</td>
		<td align="left" width="300">Nomor Telepon Rumah</td>
		<td align="left" >: <?php echo $h['telp']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">10.</td>
		<td align="left" width="300">Sekolah Asal</td>
		<td align="left" >: <?php echo $h['asal']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">11.</td>
		<td align="left" width="300">Diterima di Sekolah Ini</td>
		<td align="left" >&nbsp;</td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="300">a. di Kelas</td>
		<td align="left" >: <?php echo $h['diterima_kelas']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="300">b. pada Tanggal</td>
		<td align="left" >: <?php echo date('d-m-Y',strtotime($h['diterima_tgl'])); ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">12.</td>
		<td align="left" width="300">Nama Orang Tua</td>
		<td align="left" >&nbsp;</td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="300">a. Ayah</td>
		<td align="left" >: <?php echo $h['ayah']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="300">b. Ibu</td>
		<td align="left" >: <?php echo $h['ibu']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">13.</td>
		<td align="left" width="300">Alamat Orang Tua</td>
		<td align="left" >: <?php echo $h['alamat_ortu']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="300">Nomor Telp Rumah</td>
		<td align="left" >: <?php echo $h['telp']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">14.</td>
		<td align="left" width="300">Pekerjaan Orang Tua</td>
		<td align="left" >&nbsp;</td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="300">a. Ayah</td>
		<td align="left" >: <?php echo $h['pekerjaan_ayah']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="300">b. Ibu</td>
		<td align="left" >: <?php echo $h['pekerjaan_ibu']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">15.</td>
		<td align="left" width="300">Nama Wali Peserta Didik</td>
		<td align="left" >: <?php echo $h['wali']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">16.</td>
		<td align="left" width="300">Alamat Wali Peserta Didik</td>
		<td align="left" >: <?php echo $h['alamat_wali']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="300">Nomor Telepon Rumah</td>
		<td align="left" >: <?php echo $h['telp_wali']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">17.</td>
		<td align="left" width="300">Pekerjaan Wali Peserta Didik</td>
		<td align="left" >: <?php echo $h['pekerjaan_wali']; ?></td>
	</tr>
	<tr height="50">
		<td align="center" colspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" width="50">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="center" width="300"><img src="<?php echo $h['foto']; ?>" width="125" /></td>
		<td align="left" style="padding-left:75px" >
			......................., ...................20....<br />
			Kepala Sekolah,<br /><br /><br /><br /><br /><br />
			__________________________<br />
			NIP
		</td>
	</tr>
	<tr height="200">
		<td align="center" colspan="4">&nbsp;</td>
	</tr>
</table>
<?php
$q=mysql_query("select * from sia_siswa where nis='$nis'");
$siswa=mysql_fetch_array($q);
$q=mysql_query("select * from web_profil where profil_id=1");
$sekolah=mysql_fetch_array($q);
$q=mysql_query("select * from sia_kelas where kelas_id=$_SESSION[ref]");
$kelas=mysql_fetch_array($q);
$q=mysql_query("select * from sia_semes where semes_id=$semes_id");
$semester=mysql_fetch_array($q);
$q=mysql_query("select * from sia_thnpel where thnpel_id=$semester[thnpel_id]");
$thnpel=mysql_fetch_array($q);
?>
<table width="790" height="1120" style="page-break-after: always;">
	<tr height="10">
		<th colspan="6"><b>HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK</b></th>
	</tr>
	<tr height="50">
		<td align="center" colspan="6">&nbsp;</td>
	</tr>
	<tr height="10">
		<td align="left" width="200" style="padding-left:10px">Nama Sekolah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="200"><?php echo $sekolah['nama']; ?></td>
		<td align="left" width="150">Kelas</td>
		<td align="left" width="20">:</td>
		<td align="left" ><?php echo $kelas['nama']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="200" style="padding-left:10px">Alamat</td>
		<td align="left" width="20">:</td>
		<td align="left" width="200"><?php echo $sekolah['alamat']; ?></td>
		<td align="left" width="150">Semester</td>
		<td align="left" width="20">:</td>
		<td align="left" ><?php echo $semester['nama']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="200" style="padding-left:10px">Nama Peserta Didik</td>
		<td align="left" width="20">:</td>
		<td align="left" width="200"><?php echo $siswa['nama']; ?></td>
		<td align="left" width="150">Tahun Pelajaran</td>
		<td align="left" width="20">:</td>
		<td align="left" ><?php echo $thnpel['nama']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="200" style="padding-left:10px">Nomor Induk/NISN</td>
		<td align="left" width="20">:</td>
		<td align="left" width="200" colspan="4"><?php echo $siswa['nis']; ?></td>
	</tr>
	<tr height="50">
		<td align="center" colspan="6">&nbsp;</td>
	</tr>
	<tr height="600" valign="top">
		<td align="center" colspan="6">
			<table style="border: 1px solid black; border-collapse:collapse; font-size:9pt;" width="100%">
				<tr>
					<th style="border: 1px solid black;" rowspan="2" colspan="2">MATA PELAJARAN</th>
					<th style="border: 1px solid black;" rowspan="2">Pengetahuan<br />(KI 3)</th>
					<th style="border: 1px solid black;" rowspan="2">Keterampilan<br />(KI 4)</th>
					<th style="border: 1px solid black;" colspan="2">Sikap Spiritual dan Sosial<br />(KI 1 &amp; KI 2)</th>
				</tr>
				<tr>
					<th style="border: 1px solid black;">Dalam<br />Mata<br />Pelajaran</th>
					<th style="border: 1px solid black;">Antar Mata Pelajaran</th>
				</tr>
				<?php
				$q=mysql_query("select * from sia_mapel where mapel_id in (select mapel_id from sia_detail where kelas_id=$_SESSION[ref] and semes_id=$semes_id)");
				$h=mysql_fetch_array($q);
				$jumlah=mysql_num_rows($q);
				$x=0;
				$qq=mysql_query("select * from sia_nilai where nis='$nis' and detail_id=(select detail_id from sia_detail where kelas_id=$_SESSION[ref] and semes_id=$semes_id and mapel_id=$h[mapel_id])");
				$hh=mysql_fetch_array($qq);
				if($jumlah>$x){
					$x++;
				?>
				<tr>
					<td style="border: 1px solid black;"><?php echo $x; ?>.</th>
					<td style="border: 1px solid black;"><?php echo $h['nama']; ?></th>
					<td style="border: 1px solid black;" align="center"><?php echo $hh['k3']; ?></th>
					<td style="border: 1px solid black;" align="center"><?php echo $hh['k4']; ?></th>
					<td style="border: 1px solid black;" align="center"><?php echo $hh['k1k2']; ?></th>
					<td style="border: 1px solid black;" rowspan="<?php echo $jumlah; ?>" >&nbsp;</th>
				</tr>
				<?php
				}
				while($h=mysql_fetch_array($q)){
					$x++;
					$qq=mysql_query("select * from sia_nilai where nis='$nis' and detail_id=(select detail_id from sia_detail where kelas_id=$_SESSION[ref] and semes_id=$semes_id and mapel_id=$h[mapel_id])");
					$hh=mysql_fetch_array($qq);
				?>
				<tr>
					<td style="border: 1px solid black;"><?php echo $x; ?>.</th>
					<td style="border: 1px solid black;"><?php echo $h['nama']; ?></th>
					<td style="border: 1px solid black;" align="center"><?php echo $hh['k3']; ?></th>
					<td style="border: 1px solid black;" align="center"><?php echo $hh['k4']; ?></th>
					<td style="border: 1px solid black;" align="center"><?php echo $hh['k1k2']; ?></th>
				</tr>
				<?php
				}
				?>
			</table><br />
			<table style="border: 1px solid black; border-collapse:collapse; font-size:9pt;" width="100%">
				<tr>
					<th style="border: 1px solid black;" width="50%">Kegiatan Ekstrakulikuler</th>
					<th style="border: 1px solid black;" width="50%">Keterangan</th>
				</tr>
				<tr>
					<td style="border: 1px solid black;">&nbsp;</td>
					<td style="border: 1px solid black;">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr height="10">
		<td colspan="6">			
			<table style="border: 1px solid black; border-collapse:collapse; font-size:9pt;" width="300">
				<tr>
					<th style="border: 1px solid black;" colspan="5">Ketidakhadiran</th>
				</tr>
				<?php
				$q=mysql_query("select * from sia_absensi where nis='$nis' and semes_id=$semes_id");
				$h=mysql_fetch_array($q);
				?>
				<tr>
					<td>&nbsp;</td>
					<td>Sakit</td>
					<td align="center">:</td>
					<td align="center"><?php echo $h['sakit']; ?></td>
					<td align="left">hari</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>Ijin</td>
					<td align="center">:</td>
					<td align="center"><?php echo $h['ijin']; ?></td>
					<td align="left">hari</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>Aplha</td>
					<td align="center">:</td>
					<td align="center"><?php echo $h['alpha']; ?></td>
					<td align="left">hari</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr height="10">
		<td colspan="6">			
			<table width="100%" style="font-size:10pt">
				<tr>
					<td width="50%" align="center">Mengetahui:</td>
					<td width="50%" align="center">.........................,.............20....</td>
				</tr>
				<tr>
					<td width="50%" align="center">Orang Tua/Wali,</td>
					<td width="50%" align="center">Wali Kelas,</td>
				</tr>
				<tr>
					<td colspan="2" height="100">&nbsp;</td>
				</tr>
				<tr>
					<td width="50%" align="center">___________________________________</td>
					<td width="50%" align="center">___________________________________</td>
				</tr>
				<tr>
					<td width="50%" align="center">&nbsp;</td>
					<td width="50%" align="left" style="padding-left:75px;">NIP</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<table width="790" height="1120" style="page-break-after: always;">
	<tr height="10">
		<th colspan="6"><b>HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK</b></th>
	</tr>
	<tr height="50">
		<td align="center" colspan="6">&nbsp;</td>
	</tr>
	<tr height="10">
		<td align="left" width="200" style="padding-left:10px">Nama Sekolah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="200"><?php echo $sekolah['nama']; ?></td>
		<td align="left" width="150">Kelas</td>
		<td align="left" width="20">:</td>
		<td align="left" ><?php echo $kelas['nama']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="200" style="padding-left:10px">Alamat</td>
		<td align="left" width="20">:</td>
		<td align="left" width="200"><?php echo $sekolah['alamat']; ?></td>
		<td align="left" width="150">Semester</td>
		<td align="left" width="20">:</td>
		<td align="left" ><?php echo $semester['nama']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="200" style="padding-left:10px">Nama Peserta Didik</td>
		<td align="left" width="20">:</td>
		<td align="left" width="200"><?php echo $siswa['nama']; ?></td>
		<td align="left" width="150">Tahun Pelajaran</td>
		<td align="left" width="20">:</td>
		<td align="left" ><?php echo $thnpel['nama']; ?></td>
	</tr>
	<tr height="10">
		<td align="left" width="200" style="padding-left:10px">Nomor Induk/NISN</td>
		<td align="left" width="20">:</td>
		<td align="left" width="200" colspan="4"><?php echo $siswa['nis']; ?></td>
	</tr>
	<tr height="50">
		<td align="center" colspan="6">&nbsp;</td>
	</tr>
	<tr height="700" valign="top">
		<td align="center" colspan="6">
			<table style="border: 1px solid black; border-collapse:collapse; font-size:9pt;" width="100%">
				<tr>
					<th style="border: 1px solid black;" colspan="2">MATA PELAJARAN</th>
					<th style="border: 1px solid black;">KOMPETENSI</th>
					<th style="border: 1px solid black;">DESKRIPSI</th>
				</tr>
				<?php
				$q=mysql_query("select * from sia_mapel where mapel_id in (select mapel_id from sia_detail where kelas_id=$_SESSION[ref] and semes_id=$semes_id)");
				$h=mysql_fetch_array($q);
				$jumlah=mysql_num_rows($q);
				$x=0;
				$qq=mysql_query("select * from sia_nilai where nis='$nis' and detail_id=(select detail_id from sia_detail where kelas_id=$_SESSION[ref] and semes_id=$semes_id and mapel_id=$h[mapel_id])");
				$hh=mysql_fetch_array($qq);
				if($jumlah>$x){
					$x++;
				?>
				<tr>
					<td style="border: 1px solid black;" rowspan="4"><?php echo $x; ?>.</th>
					<td style="border: 1px solid black;" rowspan="4"><?php echo $h['nama']; ?></th>
				</tr>
				<tr>
					<td style="border: 1px solid black;" align="left">Pengetahuan</th>
					<td style="border: 1px solid black;" align="left"><?php echo $hh['k3desk']; ?></th>
				</tr>
				<tr>
					<td style="border: 1px solid black;" align="left">Keterampilan</th>
					<td style="border: 1px solid black;" align="left"><?php echo $hh['k4desk']; ?></th>
				</tr>
				<tr>
					<td style="border: 1px solid black;" align="left">Sikap Spritual dan Sosial</th>
					<td style="border: 1px solid black;" align="left"><?php echo $hh['k1k2desk']; ?></th>
				</tr>
				<?php
				}
				while($h=mysql_fetch_array($q)){
					$x++;
					$qq=mysql_query("select * from sia_nilai where nis='$nis' and detail_id=(select detail_id from sia_detail where kelas_id=$_SESSION[ref] and semes_id=$semes_id and mapel_id=$h[mapel_id])");
					$hh=mysql_fetch_array($qq);
				?>
				<tr>
					<td style="border: 1px solid black;" rowspan="4"><?php echo $x; ?>.</th>
					<td style="border: 1px solid black;" rowspan="4"><?php echo $h['nama']; ?></th>
				</tr>
				<tr>
					<td style="border: 1px solid black;" align="left">Pengetahuan</th>
					<td style="border: 1px solid black;" align="left"><?php echo $hh['k3desk']; ?></th>
				</tr>
				<tr>
					<td style="border: 1px solid black;" align="left">Keterampilan</th>
					<td style="border: 1px solid black;" align="left"><?php echo $hh['k4desk']; ?></th>
				</tr>
				<tr>
					<td style="border: 1px solid black;" align="left">Sikap Spritual dan Sosial</th>
					<td style="border: 1px solid black;" align="left"><?php echo $hh['k1k2desk']; ?></th>
				</tr>
				<?php
				}
				?>
			</table>
		</td>
	</tr>
	<tr height="10">
		<td colspan="6">			
			<table width="100%" style="font-size:10pt">
				<tr>
					<td width="50%" align="center">Mengetahui:</td>
					<td width="50%" align="center">.........................,.............20....</td>
				</tr>
				<tr>
					<td width="50%" align="center">Orang Tua/Wali,</td>
					<td width="50%" align="center">Wali Kelas,</td>
				</tr>
				<tr>
					<td colspan="2" height="100">&nbsp;</td>
				</tr>
				<tr>
					<td width="50%" align="center">___________________________________</td>
					<td width="50%" align="center">___________________________________</td>
				</tr>
				<tr>
					<td width="50%" align="center">&nbsp;</td>
					<td width="50%" align="left" style="padding-left:75px;">NIP</td>
				</tr>
			</table>
		</td>
	</tr>
</table>