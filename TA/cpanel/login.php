<?php
	include 'koneksi.php';
	if(isset($_POST['login'])){
		$username=$_POST['id'];
		$password=md5($_POST['sandi']);
		$q=mysql_query("select * from login where username='$username' and password='$password'");
		$error=true;
		if(mysql_num_rows($q)>0){
			$h=mysql_fetch_array($q);
			$_SESSION['cpanel']=$h['level'];
			$_SESSION['nama']=$h['nama'];
			$_SESSION['ref']=$h['ref'];
			$_SESSION['username']=$h['username'];
			$error=false;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Control Panel</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/maruti-login.css" />
    </head>
    <body>
        <div id="logo">
            <img src="img/login-logo.png" alt="" />
        </div>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="?" method="post">
				<div class="control-group normal_text"><h3>Login</h3></div>
				<?php
				if(isset($error)){
					if($error){
				?>
				<div class="alert alert-error">
					<button class="close" data-dismiss="alert">×</button>
					<strong>Login gagal!</strong> Kombinasi ID Pengguna dan Sandi yang digunakan salah. 
				</div>
				<?php
					}else{
				?>
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert">×</button>
					<strong>Login berhasil!</strong> Silahkan tunggu sesaat... 
				</div>
				<script>
				setTimeout(function(){
					location.href='index.php';
				},3000);
				</script>
				<?php
					}
				}
				?>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="ID Pengguna" autocomplete="off" name="id" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="Kata Sandi" name="sandi" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" class="btn btn-success" name="login" value="Login" /></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/maruti.login.js"></script> 
		<script src="js/jquery.ui.custom.js"></script> 
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/jquery.gritter.min.js"></script> 
		<script src="js/jquery.peity.min.js"></script> 
		<script src="js/maruti.js"></script> 
    </body>

</html>
