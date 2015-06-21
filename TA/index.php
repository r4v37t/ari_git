<?php
include 'cpanel/koneksi.php';
?>
<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Website SMP Negeri 9 Palangka Raya</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" />
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>
<body class="style-1">
<div class="wrap-header"></div>
<div class="wrap">
	<header id="header" class="clearfix">
		<a href="" id="logo"><img src="images/banner.jpg" alt="" title="Logo" /></a>
		<nav id="navigation" class="navigation">
			<ul>
				<li class="<?php echo ($_GET['menu']=='pengumuman'||$_GET['menu']=='agenda'||!isset($_GET['menu']))?'current':''; ?>"><a href="?">Beranda</a>
					<ul>
						<li><a href="?menu=pengumuman">Pengumuman</a></li>
						<li><a href="?menu=agenda">Agenda</a></li>
					</ul>
				</li>
				<li class="<?php echo ($_GET['menu']=='profil'||$_GET['menu']=='struktur'||$_GET['menu']=='fasilitas')?'current':''; ?>" ><a href="#">Sekolah</a>
					<ul>
						<li><a href="?menu=profil">Profil Sekolah</a></li>
						<li><a href="?menu=struktur">Struktur Organisasi</a></li>
						<li><a href="?menu=fasilitas">Fasilitas Sekolah</a></li>
						<li><a href="#">Ekstrakulikuler &gt;&gt;</a>
							<ul>
							<?php
							$q=mysql_query("select * from sia_ekstra");
							while($h=mysql_fetch_array($q)){
								?>
								<li><a target="_blank" href="blogs/?ref=<?php echo $h['ekstra_id']; ?>"><?php echo $h['nama']; ?></a></li>
								<?php
							}
							?>
							</ul>
						</li>
					</ul>
				</li>
				<li class="<?php echo ($_GET['menu']=='guru'||$_GET['menu']=='siswa'||$_GET['menu']=='kurikulum'||$_GET['menu']=='alumni')?'current':''; ?>" ><a href="#">Akademik</a>
					<ul>
						<li><a href="?menu=guru">Data Guru</a></li>
						<li><a href="?menu=siswa">Data Siswa</a></li>
						<li><a href="?menu=kurikulum">Kurikulum</a></li>
						<li><a href="?menu=alumni">Alumni</a></li>
					</ul>
				</li>
				<li class="<?php echo ($_GET['menu']=='galeri')?'current':''; ?>" ><a href="?menu=galeri">Galeri</a></li>
				<li  class="<?php echo ($_GET['menu']=='kontak')?'current':''; ?>" ><a href="?menu=kontak">Contact Us</a></li>
			</ul>			
		</nav>
	</header>
	<section class="container sbr clearfix">
		<?php
		if(isset($_GET['menu'])){
			if($_GET['menu']=='pengumuman'){
				include 'pengumuman.php';
			}else if($_GET['menu']=='agenda'){
				include 'agenda.php';
			}else if($_GET['menu']=='profil'){
				include 'profil.php';
			}else if($_GET['menu']=='struktur'){
				include 'struktur.php';
			}else if($_GET['menu']=='fasilitas'){
				include 'fasilitas.php';
			}else if($_GET['menu']=='guru'){
				include 'guru.php';
			}else if($_GET['menu']=='siswa'){
				include 'siswa.php';
			}else if($_GET['menu']=='kurikulum'){
				include 'kurikulum.php';
			}else if($_GET['menu']=='alumni'){
				include 'alumni.php';
			}else if($_GET['menu']=='galeri'){
				include 'galeri.php';
			}else if($_GET['menu']=='kontak'){
				include 'kontak.php';
			}else{
				include 'main.php';
			}
		}else{
			include 'main.php';
		}
		?>
	</section>
	<ul class="copyright">
		<li>2015 &copy; Ari Hidayatullah </li>
	</ul>
</div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>	
<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
	<script src="js/ie.js"></script>
<![endif]-->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/custom.js"></script>
<?php
$q=mysql_query("select * from web_konten where konten_id='contact'");
$h=mysql_fetch_array($q);
?>
<script>
var mapCanvas = document.getElementById('map');
var mapOptions = {
	center: new google.maps.LatLng(<?php echo $h['isi']; ?>),
	zoom: 16,
	mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map = new google.maps.Map(mapCanvas, mapOptions);
</script>
</body>
</html>

