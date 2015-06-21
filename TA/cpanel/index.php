<?php
include 'koneksi.php';
if (!isset($_SESSION['cpanel'])) {
    header("location: login.php");
}
if (isset($_GET['logout'])) {
    session_destroy();
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Control Panel</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/uniform.css" />
        <link rel="stylesheet" href="css/datepicker.css" />
        <link rel="stylesheet" href="css/select2.css" />
        <link rel="stylesheet" href="css/fullcalendar.css" />
        <link rel="stylesheet" href="css/maruti-style.css" />
        <link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
    </head>
    <body>

        <!--Header-part-->
        <div id="header">
            <h1><a href="?">SMP NEGERI 9 PALANGKA RAYA</a></h1>
        </div>
        <!--close-Header-part-->

        <!--top-Header-menu-->
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">
                <li class="" ><a title="Ganti Password" href="?menu=password"><i class="icon icon-cog"></i> <span class="text">Ganti Password</span></a></li>
                <li class=""><a title="Logout" href="?logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </div>
        <!--close-top-Header-menu-->

        <?php
        if ($_SESSION['cpanel'] == 99) {
            include 'menu_admin.php';
        } else if ($_SESSION['cpanel'] == 10) { //Admin Website
            include 'menu_web.php';
        } else if ($_SESSION['cpanel'] == 20) { //Admin SIA
            include 'menu_sia.php';
        } else if ($_SESSION['cpanel'] == 30) { //Admin Blog
            include 'menu_blog.php';
        } else if ($_SESSION['cpanel'] == 40) { //Wali Kelas
            include 'menu_walikelas.php';
        } else if ($_SESSION['cpanel'] == 50) { //Guru
            include 'menu_guru.php';
        }
        ?>

        <div id="content">
            <div id="content-header">
                <div id="breadcrumb"></div>
            </div>
            <div class="container-fluid">
                <?php
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == 'web') {
                        include 'admin_web.php';
                    } else if ($_GET['menu'] == 'sia') {
                        include 'admin_sia.php';
                    } else if ($_GET['menu'] == 'blog') {
                        include 'admin_blog.php';
                    } else if ($_GET['menu'] == 'walikelas') {
                        include 'admin_walikelas.php';
                    } else if ($_GET['menu'] == 'guru') {
                        include 'admin_guru.php';
                    } else if ($_GET['menu'] == 'web-sambutan') {
                        include 'web_sambutan.php';
                    } else if ($_GET['menu'] == 'web-pengumuman') {
                        include 'web_pengumuman.php';
                    } else if ($_GET['menu'] == 'web-agenda') {
                        include 'web_agenda.php';
                    } else if ($_GET['menu'] == 'web-profil') {
                        include 'web_profil.php';
                    } else if ($_GET['menu'] == 'web-struktur') {
                        include 'web_struktur.php';
                    } else if ($_GET['menu'] == 'web-fasilitas') {
                        include 'web_fasilitas.php';
                    } else if ($_GET['menu'] == 'web-alumni') {
                        include 'web_alumni.php';
                    } else if ($_GET['menu'] == 'web-kurikulum') {
                        include 'web_kurikulum.php';
                    } else if ($_GET['menu'] == 'web-galeri') {
                        include 'web_galeri.php';
                    } else if ($_GET['menu'] == 'web-contact') {
                        include 'web_contact.php';
                    } else if ($_GET['menu'] == 'blog-galeri') {
                        include 'blog_galeri.php';
                    } else if ($_GET['menu'] == 'blog-sambutan') {
                        include 'blog_sambutan.php';
                    } else if ($_GET['menu'] == 'blog-visimisi') {
                        include 'blog_visimisi.php';
                    } else if ($_GET['menu'] == 'blog-struktur') {
                        include 'blog_struktur.php';
                    } else if ($_GET['menu'] == 'blog-anggota') {
                        include 'blog_anggota.php';
                    } else if ($_GET['menu'] == 'blog-bukutamu') {
                        include 'blog_bukutamu.php';
                    } else if ($_GET['menu'] == 'blog-contact') {
                        include 'blog_contact.php';
                    } else if ($_GET['menu'] == 'sia-siswa') {
                        include 'sia_siswa.php';
                    } else if ($_GET['menu'] == 'sia-kelas') {
                        include 'sia_kelas.php';
                    } else if ($_GET['menu'] == 'sia-guru') {
                        include 'sia_guru.php';
                    } else if ($_GET['menu'] == 'sia-wali') {
                        include 'sia_wali.php';
                    } else if ($_GET['menu'] == 'sia-tahun') {
                        include 'sia_tahun.php';
                    } else if ($_GET['menu'] == 'sia-semester') {
                        include 'sia_semester.php';
                    } else if ($_GET['menu'] == 'sia-mapel') {
                        include 'sia_mapel.php';
                    } else if ($_GET['menu'] == 'sia-ekstra') {
                        include 'sia_ekstra.php';
                    } else if ($_GET['menu'] == 'sia-daftarmapel') {
                        include 'sia_daftarmapel.php';
                    } else if ($_GET['menu'] == 'sia-daftarabsen') {
                        include 'sia_daftarabsen.php';
                    } else if ($_GET['menu'] == 'wali-absen') {
                        include 'wali_absen.php';
                    } else if ($_GET['menu'] == 'wali-rapor') {
                        include 'wali_rapor.php';
                    } else if ($_GET['menu'] == 'guru-nilai') {
                        include 'guru_nilai.php';
                    } else if ($_GET['menu'] == 'password') {
                        include 'password.php';
                    } else {
                        include 'main.php';
                    }
                } else {
                    include 'main.php';
                }
                ?>
            </div>
        </div>
        <div class="row-fluid">
            <div id="footer" class="span12"> 2015 &copy; Ari Hidayatullah </div>
        </div>
        <script src="js/excanvas.min.js"></script> 
        <script src="js/jquery.min.js"></script> 
        <script src="js/jquery.ui.custom.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.flot.min.js"></script> 
        <script src="js/jquery.flot.resize.min.js"></script> 
        <script src="js/jquery.peity.min.js"></script> 
        <script src="js/fullcalendar.min.js"></script> 
        <script src="js/jquery.uniform.js"></script> 
        <script src="js/select2.min.js"></script> 
        <script src="js/jquery.dataTables.min.js"></script> 
        <script src="js/maruti.js"></script> 
        <script src="js/maruti.dashboard.js"></script> 
        <script src="js/maruti.chat.js"></script> 
        <script src="js/maruti.tables.js"></script>
        <script src="js/alumni.js"></script>
        <script type="text/javascript">
            // This function is called from the pop-up menus to transfer to
            // a different page. Ignore if the value returned is a null string:
            function goPage(newURL) {

                // if url is empty, skip the menu dividers and reset the menu selection to default
                if (newURL != "") {

                    // if url is "-", it is this page -- reset the menu:
                    if (newURL == "-") {
                        resetMenu();
                    }
                    // else, send page to designated URL            
                    else {
                        document.location.href = newURL;
                    }
                }
            }

            // resets the menu selection upon entry to this page:
            function resetMenu() {
                document.gomenu.selector.selectedIndex = 2;
            }
            $('.datepicker').datepicker();
            function tabbaru(url) {
                var win = window.open(url, '_blank');
                win.focus();
            }
        </script>
    </body>

</html>
