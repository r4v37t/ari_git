<?php
include '../cpanel/koneksi.php';
$q=mysql_query("select * from sia_ekstra where ekstra_id=$_GET[ref]");
$h=mysql_fetch_array($q);
$ref=$_GET['ref'];
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Blog <?php echo $h['nama']; ?></title>


<link href="style.css" media="screen" rel="stylesheet">
<link href="screen.css" media="screen" rel="stylesheet">


<!-- custom CSS -->
<link rel="stylesheet" href="custom.css">
<link href="css/flexslider.css" media="screen" rel="stylesheet" type="text/css">
<!-- favicon.ico and apple-touch-icon.png -->
<link rel="shortcut icon" href="favicon.html">
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57-iphone.html">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72-ipad.html">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114-iphone4.html">

<!-- Mobile optimized -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/respond.min.js"></script>
<script src="js/libs/jquery.min.js"></script>

<!-- scripts -->
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/general.js"></script>

<!-- carousel -->
<script src="js/jquery.carouFredSel.packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<!-- lightbox prettyPhoto -->
<link rel="stylesheet" href="css/prettyPhoto.css">
<script src="js/jquery.prettyPhoto.js"></script>
<!-- top slider -->
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/search-input.js"></script>

<!-- shortcodes: Tabs & Slider-->
<script src="js/jquery.tools.min.js"></script>




<script type="text/javascript">
    $(window).load(function() {
      $('.tf-footer-carousel').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 140,
        itemMargin: 15,
        minItems: 1,
        maxItems: 6,
        move:1
      });
    }); 
</script>
  <script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>
<body>
    <div class="body-wrapper">
        <div class="white-background">
            <div class="container">
                <div class="header">
                    <div class="header-nav box_header">
						<div class="logo"><a href="?ref=<?php echo $ref; ?>" style="font-size:24pt">BLOG</a></div>
						<div id="topmenu">
							<ul class="dropdown">
								<li class="menu-level-0 <?php echo (!isset($_GET['menu']))?'current-menu-item':''; ?>">
									<a href="?ref=<?php echo $ref; ?>">Home <span>Selamat Datang</span></a>
								</li>            
								<li class="menu-level-0 <?php echo ($_GET['menu']=='visimisi'||$_GET['menu']=='struktur'||$_GET['menu']=='anggota')?'current-menu-item':''; ?>">
									<a href="#">Profil <span>Kenali kami</span></a>
									<ul class="submenu-1">
										<li class="menu-level-1"><a href="?menu=visimisi&ref=<?php echo $ref; ?>"><span>Visi Misi</span></a></li>
										<li class="menu-level-1"><a href="?menu=struktur&ref=<?php echo $ref; ?>"><span>Struktur Organisasi</span></a></li>
										<li class="menu-level-1"><a href="?menu=anggota&ref=<?php echo $ref; ?>"><span>Data Anggota</span></a></li>
									</ul>
								</li>
								<li class="menu-level-0 <?php echo ($_GET['menu']=='galeri')?'current-menu-item':''; ?>">
									<a href="?menu=galeri&ref=<?php echo $ref; ?>">Galeri <span>Aktivitas kami</span></a>
								</li>
								<li class="menu-level-0 <?php echo ($_GET['menu']=='bukutamu')?'current-menu-item':''; ?>">
									<a href="?menu=bukutamu&ref=<?php echo $ref; ?>">Buku Tamu <span>Tamu  kami</span></a>
								</li>
							</ul>
						</div>
                    </div>
                    <a href="?menu=kontak&ref=<?php echo $ref; ?>"><div class="header-box box_orange"><h2 class=" text-white text-extrabold">JOIN NOW</h2></div></a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="black-background">
            <div class="container">
                   <div class="header-title box_orange">
                        <div class="header-title-content text-left ">
                            <h1 class="text-white">Ekstrakulikuler <?php echo $h['nama']; ?></h1>
                        </div>
                    </div>
            </div>
        </div>
		<div class="white-background">
			<div class="container ">
				<div id="middle" class="full_width box_white">
					<div class="content" role="main">
						<?php
						if(isset($_GET['menu'])){
							if($_GET['menu']=='visimisi'){
								include 'visimisi.php';
							}else if($_GET['menu']=='struktur'){
								include 'struktur.php';
							}else if($_GET['menu']=='anggota'){
								include 'anggota.php';
							}else if($_GET['menu']=='galeri'){
								include 'galeri.php';
							}else if($_GET['menu']=='bukutamu'){
								include 'bukutamu.php';
							}else if($_GET['menu']=='kontak'){
								include 'kontak.php';
							}else{
								include 'main.php';
							}
						}else{
							include 'main.php';
						}
						?>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<footer>
				<div class="footer-bottom">
					<div class="container">
						<div class="copyright">
							<span class="copyright-left">2015 © <span class="text-orange">Ari Hidayatullah</span></span>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>                          
</body>
</html>