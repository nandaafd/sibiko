<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Selamat Datang di SI-BIKO</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Instruction Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="web/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="web/css/lightbox.css">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

		
</head>

<body>
	<!-- header -->
	<div class="header-1">
	<div class="agileits_top_menu">
		<div class="w3l_header_left">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> 085648816717</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="smkn10.bksby@gmail.com">smkn10.bksby@gmail.com</a></li>
				</ul>
			</div>
			<div class="w3l_header_right">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="https://www.facebook.com/SMKNegeri1Guguak/"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="?page=1">
							<h1><img src="assets/img/logosmkk.png" alt="" width="40" class="responsive"> </span> SI-BIKO </h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li class="active"><a href="?page=1" class="effect-3">Beranda</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Profil BK <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="?page=5"> Visi Misi</a></li>							
									<li><a href="?page=4"> Daftar Guru</a></li>				
									<li><a href="?page=3"> Daftar Pengurus</a></li>
									<li><a href="?page=video">Video Bumper Sekolah </a></li>
								</ul>
							    </li>
							    	<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Informasi Umum <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="?page=kampus"> Daftar Kampus PTN di Indonesia</a></li>
									<li><a href="http://dapo.dikdasmen.kemdikbud.go.id/sekolah/326C2747BF18F0284D7F" target="_blank"> Dapodik</a></li>
									<li><a href="http://osissmkn1guguak.simplesite.com/" target="_blank"> OSIS</a></li>
									<li><a href="https://pendidikan.m2indonesia.com/sma/smkn-1-kec-guguak-kab-lima-puluh-kota-10304432.htm" target="_blank">Direktori Pendidikan Indonesia</a></li>
									<li><a href="http://sekolah.data.kemdikbud.go.id/index.php/chome/profil/c0a5f8d1-7332-49a1-8dad-4f445d07402d#prestasi" target="_blank">Sekolah Kita</a></li>
								</ul>
							    </li>
								<li><a href="?page=2" class="effect-3">Lokasi</a></li>	
								<li><a href="?page=kontak" class="effect-3">Kontak</a></li>					
								<li><a href="login.php" class="effect-3">Login</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->
		<!-- gallery -->
	<div id="lab" class="w3ls-section gallery">
		<div class="container">
			
				<div class="gallery-grids">
					<!-- ini konten-->
					<?php
					error_reporting(0);
					$page= $_GET['page'];
					if ($page=="1") {
						include 'web/galeri.php';
						# code...
					}elseif ($page=="2") {
						include 'web/lokasi.php';
						# code...
					}elseif ($page=="3") {
						include 'web/pengurus.php';
						# code...
					}elseif ($page=="video") {
						include 'web/bumper.php';
						# code...
					}elseif ($page=="4") {
						include 'web/guru_staff.php';
						# code...
					}elseif ($page=="5") {
						include 'web/guru_staff1.php';
						# code...
					}elseif ($page=="kontak") {
						include 'web/kontak.php';
						# code...
					}elseif ($page=="kampus") {
						include 'web/kampus_ptn.php';
						# code...
					}elseif ($page=="") {
							include 'web/galeri.php';
						# code...
					}else{
						echo "HALAMAN TIDAK TERSEDIA";
					}



					 ?>
					
					<!-- ini konten-->

					
				</div>				
				<div class="clearfix"> </div> 
			</div>
			<script src="web/js/lightbox-plus-jquery.min.js"> </script>
		</div>
	</div>


	<!-- //gallery -->

	<!-- footer -->
	<div class="footer_top_agileits">
		<div class="container">
			<div class="col-md-4 footer_grid">
				<h3>About Us</h3>
				<p>
					SI-BIKO adalah sistem informasi himpunan data BK berbasis web, dimana didalamnya terdapat beberapa fitur untuk mengolah data himpunan data-data siswa sehingga dapat menyajikan suatu informasi.
				</p>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Link Partners</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="http://osissmkn1guguak.simplesite.com/">osissmkn1guguak.simplesite.com </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="http://10304432.siap-sekolah.com/sekolah-profil/">10304432.siap-sekolah.com</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="http://petalokasi.org/Kabupaten-Lima-Puluh-Kota/SMKN-1-Kec-Guguak-397796/">petalokasi.org/ </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="http://dapo.dikdasmen.kemdikbud.go.id/sekolah/326C2747BF18F0284D7F">dapo.dikdasmen.kemdikbud.go.id</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="https://pendidikan.m2indonesia.com/sma/smkn-1-kec-guguak-kab-lima-puluh-kota-10304432.htm" >pendidikan.m2indonesia.com</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Kontak Info Kami</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>Alamat, <span>Jln. Keputih Tegal No. 54, Keputih, Kec. Sukolilo, Surabaya</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="smkn10.bksby@gmail.com">smkn10.bksby@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>085648816717</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer_w3ls">
		<div class="container">
					<div class="footer_bottom1">
						<p>© 2024 Sistem Informasi Himpunan Data BK | Design by <a href="">Nuri Fitri Hafinia </a></p>
					</div>
		</div>
	</div>
	<!-- //footer -->\
	<!-- js -->
	<script type="text/javascript" src="web/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="web/js/bootstrap.js"></script>
</body>

</html>