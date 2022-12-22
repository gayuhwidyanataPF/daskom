<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio Gayuh Widyanata</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="icon" href="img/G.png">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			scroll-behavior: smooth;
		}
		body{
			background-color: #262632;
		}

		/*About*/
		.about {
			padding-top: 50px;
			color: white;
		}

		.judul-about {
			font-size: 50px;
		}

		.about .col-md-7 .contnt {
			text-align: justify;
			padding-top: 20px;
			font-size: 18.9px;
			color: #dedede;
		}

		.about .col-md-5 img {
			margin-left: 20px;
			background-size: cover;
			border: 15px solid #1d2630;
			border-radius: 10px;
		}

		.garis-about {
			width: 10%;
			height: 2px;
			background-color: #1d2630;
		}
		/* result */
		.result {
			padding: 70px;
		}

		.result .judul-result {
			font-size: 45px;
			color: white;
			text-align: center;
		}

		.result .garis-about {
			width: 10%;
			height: 2px;
			background-color: #1d2630;
			margin-top: 0px;
		}
		/* Achievement */
		.achievement {
			padding: 70px 0;
			margin-top: 50px;
			margin-left: 10%;
			margin-right: 10%;
		}
		.achievement .grid .col-md-4 .card {
			width: 21rem;
		}

		.achievement .grid .griddua {
			margin-top: 50px;
		}

		.achievement .grid .gridsatu {
			margin-top: 20px;
		}
		/*Ability*/
		.ability .garis-about {
			width: 10%;
			height: 2px;
			background-color: #1d2630;
		}

		.ability h3 {
			color: white;
			font-size: 50px;
			text-align: center;
		}

		.isi li {
			position: relative;
			list-style: none;
			margin: 40px 0;
			font-weight: 500;
			/* text-transform: uppercase; */
			color: white;
			overflow-x: visible;
		}

		.isi li:before {
			content: "";
			position: absolute;
			top: calc(100% + 10px);
			left: 0;
			width: 100%;
			height: 15px;
			background-color: #434142;
			border-radius: 1000px;
		}

		.isi li:after {
			content: "";
			position: absolute;
			top: calc(100% + 10px);
			left: 0;
			width: 0;
			height: 15px;
			background-color: #16202f;
			border-radius: 2000px;
			animation-duration: 10s;
			animation-timing-function: ease;
			animation-fill-mode: forwards;
		}

		li.html:after {
			animation-name: html;
		}

		@keyframes html {
			to {
				width: 95%;
			}
		}

		li.php:after {
			animation-name: php;
		}

		@keyframes php {
			to {
				width: 75%;
			}
		}

		li.csharp:after {
			animation-name: csharp;
		}

		@keyframes csharp {
			to {
				width: 85%;
			}
		}

		li.java:after {
			animation-name: java;
		}

		@keyframes java {
			to {
				width: 70%;
			}
		}

		li.mssql:after {
			animation-name: mssql;
		}

		@keyframes mssql {
			to {
				width: 60%;
			}
		}

		li.ui:after {
			animation-name: ui;
		}

		@keyframes ui {
			to {
				width: 65%;
			}
		}

		li.blogger:after {
			animation-name: blogger;
		}

		@keyframes blogger {
			to {
				width: 75%;
			}
		}
		/*footer*/
		footer {
			background-color: #1e1e1e;
			color: #fff;
			padding: 60px 0 0px;
			text-align: center;
		}

		footer .jdl {
			font-size: 40px;
			margin-bottom: -5px;
		}

		footer .footer-content h4 a {
			margin-left: 1%;
			margin-right: 1%;
			color: white;
		}

		footer .footer-bottom {
			justify-content: center;
			padding: 10px 0;
		}

		footer .poter {
			width: 100%;
			background-color: white;
			height: 1px;
			margin-top: 40px;
		}
	</style>
</head>
<body>

	<!-- navbar -->
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg fixed-top bg-dark border-bottom border-dark">
		<div class="container">
			<a class="navbar-brand text-white" href="#homepg">NATAGW</a>
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navigation"
			aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navigation">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item active" data-aos="fade-left" data-aos-duration="1000">
					<a class="nav-link ms-4" style="color: #ffff;" href="#homepg">Home</a>
				</li>
				<li class="nav-item active" data-aos="fade-left" data-aos-duration="1500">
					<a class="nav-link ms-4" style="color: #ffff;" href="#about">About</a>
				</li>
				<li class="nav-item active" data-aos="fade-left" data-aos-duration="2500">
					<a class="nav-link ms-4" style="color: #ffff;" href="#history">History</a>
				</li>
				<li class="nav-item active" data-aos="fade-left" data-aos-duration="2000">
					<a class="nav-link ms-4" style="color: #ffff;" href="#result">Result</a>
				</li>
				<li class="nav-item active" data-aos="fade-left" data-aos-duration="2500">
					<a class="nav-link ms-4" style="color: #ffff;" href="#ability">Ability</a>
				</li>
				<li class="nav-item active" data-aos="fade-left" data-aos-duration="2000">
					<a class="nav-link ms-4" style="color: #ffff;" href="#achievement">Achievement</a>
				</li>
				<li class="nav-item active" data-aos="fade-left" data-aos-duration="2500">
					<a class="nav-link ms-4" style="color: #ffff;" href="#contact">Contact</a>
				</li>
				<li class="nav-item active" data-aos="fade-left" data-aos-duration="2500">
					<a class="nav-link ms-4" style="color: #ffff;" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- navbar -->

<!-- homepage start -->
<div class="text-white" id="homepg" style="height: 700px; background-image: url(img/laptop.jpg); background-size: cover;">
	<div class="transparan" style="background-color: #000; opacity: 0.8; width: 100%; height: 700px;">
		<div class="isi" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
			<?php echo "
			<center>
			<h4>Hai " . $_SESSION['username'] . "...</h4>
			</center>"; ?>
			<h1 data-aos="zoom-in" data-aos-duration="3000" class="text-center" style="font-size: 70px;">Welcome In My</h1>
			<h2 data-aos="zoom-in" data-aos-duration="3000" class="text-center">Portfolio Website</h2>
			<center>
				<hr width="30%" data-aos="zoom-in" data-aos-duration="3000" style="background-color: white; border-style: none; height: 2px;">
			</center>
			<h3 class="text-center text-light" data-aos="zoom-in" data-aos-duration="1000">Gayuh Widyanata</h3>
			<h6 class="text-center" data-aos="zoom-in" data-aos-duration="1000">Frontend Developer | IT Software</h6>
			<div class="tombol mt-4">
				<center>
					<a href="#about" type="button" class="btn btn-outline-light me-3">Learn More</a>
				</center>
			</div>
		</div>
	</div>
</div>
<!-- homepage end -->

<!-- About -->
<div class="about" id="about" style="background-color: #262632">
	<div class="container">
		<div class="bg-about">
			<div class="bg" style="padding: 50px 0;">
				<div class="row">
					<div class="col-md-7" data-aos="fade-right">
						<h3 class="judul-about">About Us</h3>
						<hr class="garis-about">
						<p class="contnt">
							Pertama tama puji syukur kita panjatkan kepada Tuhan yang Maha Esa dimana kita semua diberikan rahmat Allah yang sangat luar biasa. Perkenalkan saya Gayuh Widyanata, umur 19 tahun dan menduduki jenjang kuliah di salah satu universitas ternama di Semarang yaitu Universitas Dian Nuswantoro (UDINUS). Program Studi yang saya ambil adalah S1-Teknik Informatika dimana jurusan ini banyak mempelajari tentang sebuah pemrograman baik dari segi bahasa pemrograman maupun logika dalam menjalankan pemrograman.
						</p>
						<a href="aboutt.html"><button type="button" class="btn btn-outline-light" data-aos="fade-out"
							data-aos-duration="2000">Read More</button>
						</a>
					</div>
					<div class="col-md-5" data-aos="fade-left">
						<center>
							<img src="img/gayuh.jpeg" style="background-size: cover;" height="430px" width="280px">
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About -->

	<!-- History -->
	<div class="history" id="history" style="background-image: url(img/histroy.png); background-size:cover; background-attachment: fixed; color:black;">
		<div class="pb-5" style="padding-top: 60px;">
			<div class="container">
				<h3 class="judul-about text-light text-center" data-aos="fade-down" data-aos-duration="2000">History Scholl</h3>
				<center><hr class="garis-about text-light"></center>
				<p class="text-light text-center" data-aos="zoom-out" data-aos-duration="3000">"Dalam ekonomi global, di mana keterampilan paling berharga yang dapat Anda jual adalah pengetahuan Anda, pendidikan yang baik tidak lagi hanya jalan menuju peluang, itu adalah prasyarat." - Barack Obama</p>
				<div class="row mt-5">
					<div class="col-md-4">
						<center>
							<div class="card" data-aos="fade-right" style="width: 100%; border: none; color: white;">
								<div class="card-body" style="background-color:#34404e;">
									<i class="fa-solid fa-graduation-cap" style="font-size:60px;"></i>
									<h5 class="card-title mt-4">TK TELADAN UNGARAN</h5>
									<h6 class="card-subtitle mb-2 text-muted">2008-2010</h6>
									<p class="card-text">TK TELADAN DHARMA WANITA merupakan TK milik Swasta yang berada di Ungaran Kabupaten Semarang.</p>
								</div>
							</div>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<div class="card" data-aos="zoom-in" style="width: 100%; border: none; color: white;">
								<div class="card-body" style="background-color:#34404e;">
									<i class="fa-solid fa-graduation-cap" style="font-size:60px;"></i>
									<h5 class="card-title mt-4">SD N 1 UNGARAN</h5>
									<h6 class="card-subtitle mb-2 text-muted">2010-2016</h6>
									<p class="card-text">SD Negeri 01 Ungaran merupakan sekolah milik pemerintahan negeri di Ungaran Kabupaten Semarang.</p>
								</div>
							</div>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<div class="card" data-aos="fade-left" style="width: 100%; border: none; color: white;">
								<div class="card-body" style="background-color:#34404e;">
									<i class="fa-solid fa-graduation-cap" style="font-size:60px;"></i>
									<h5 class="card-title mt-4">SMP N 3 UNGARAN</h5>
									<h6 class="card-subtitle mb-2 text-muted">2016-2019</h6>
									<p class="card-text">Sekolah milik pemerintah ini merupakan sekolah favorit ke dua di Ungaran Kabupaten Semarang.</p>
								</div>
							</div>
						</center>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-6">
						<center>
							<div class="card" data-aos="zoom-out" style="width: 100%; border: none; color: white;">
								<div class="card-body" style="background-color:#34404e;">
									<i class="fa-solid fa-graduation-cap" style="font-size:60px;"></i>
									<h5 class="card-title mt-4">SMK TELEKOMUNIKASI TUNAS HARAPAN</h5>
									<h6 class="card-subtitle mb-2 text-muted">2019-2022</h6>
									<p class="card-text">Sekolah swasta terbaik yang bergerak di bidang IT dan Teknik kendaraan Ringan di Kabupaten Semarang.</p>
								</div>
							</div>
						</center>
					</div>
					<div class="col-md-6">
						<center>
							<div class="card" data-aos="zoom-out" style="width: 100%; border: none; color: white;">
								<div class="card-body" style="background-color:#34404e;">
									<i class="fa-solid fa-graduation-cap" style="font-size:60px;"></i>
									<h5 class="card-title mt-4">UNIVERSITAS DIAN NUSWANTORO</h5>
									<h6 class="card-subtitle mb-2 text-muted">2022-NOW</h6>
									<p class="card-text">Universitas dengan Akreditasi terbaik dan menghasilkan mahasiswa yang siap untuk bekerja.</p>
								</div>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- History -->

	<!-- Result -->
	<div class="result" id="result" style="background-color:#262632;">
		<div class="grid">
			<h3 class="judul-about text-light text-center" data-aos="fade-down">Result</h3>
			<center><hr class="garis-about text-light"></center>
			<div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="true">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<center>
							<img src="img/perps.png" class="d-block" style="height: 500px; width:1000px;">
						</center>
					</div>
					<div class="carousel-item">
						<center>
							<img src="img/web.png" class="d-block" style="height: 500px; width:1000px;">
						</center>
					</div>
					<div class="carousel-item">
						<center>
							<img src="img/penjualan.png" class="d-block" style="height: 500px; width:1000px;">
						</center>
					</div>
					<div class="carousel-item">
						<center>
							<img src="img/mobile.png" class="d-block" style="height: 500px; width:1000px;">
						</center>
					</div>
					<div class="carousel-item">
						<center>
							<img src="img/bloggg.png" class="d-block" style="height: 500px; width:1000px;">
						</center>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>
	<!-- Result -->

	<!-- Ability -->
	<div class="ability" id="ability">
		<div class="grid isi">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6" style="background-image:url(img/about.jpg); background-size:cover;"></div>
					<div class="col-md-6" style="background-color: #1e1e1e; padding: 70px 50px 70px 15px;">
						<h3 data-aos="fade-down">Ability</h3>
						<center>
							<hr class="garis-about">
						</center>
						<ul>
							<li class="html" data-aos="fade-right">HTML & CSS</li>
							<li class="php" data-aos="fade-right">PHP</li>
							<li class="csharp" data-aos="fade-right">C#</li>
							<li class="blogger" data-aos="fade-right">C++</li>
							<li class="java" data-aos="fade-right">Java</li>
							<li class="mssql" data-aos="fade-right">Javascript</li>
							<li class="ui" data-aos="fade-right">UI Design</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Ability -->

	<!-- achievement -->
	<div class="achievement" id="achievement">
		<h3 class="judul-about text-light text-center" data-aos="fade-down">Achievement</h3>
		<center><hr class="garis-about text-light"></center>
		<div class="grid text-center">
			<div class="row gridsatu" data-aos="fade-left">
				<div class="col-md-4">
					<div class="card satu" style="background-color:#34404e;">
						<img class="card-img-top" src="img/penghargaan.png" alt="Card image cap">
						<div class="card-body" style="color: white;">
							<h5 class="card-title">Piagam Penghargaan</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card dua" style="background-color:#34404e;">
						<img class="card-img-top" src="img/piagam.png" alt="Card image cap">
						<div class="card-body" style="color: white;">
							<h5 class="card-title">Piagam Penghargaan</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card tiga" style="background-color:#34404e;">
						<img class="card-img-top" src="img/pkl.png" alt="Card image cap">
						<div class="card-body" style="color: white;">
							<h5 class="card-title">Sertifikat PKL</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="row griddua" data-aos="fade-right">
				<div class="col-md-4">
					<div class="card empat" style="background-color:#34404e;">
						<img class="card-img-top" src="img/asosiasi.png" alt="Card image cap">
						<div class="card-body" style="color: white;">
							<h5 class="card-title">Sertifikat Asosiasi</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card lima" style="background-color:#34404e;">
						<img class="card-img-top" src="img/serto.png" alt="Card image cap">
						<div class="card-body" style="color: white;">
							<h5 class="card-title">Sertifikat Pelatihan</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card enam" style="background-color:#34404e;">
						<img class="card-img-top" src="img/sertii.jpg" height="258" alt="Card image cap">
						<div class="card-body" style="color: white;">
							<h5 class="card-title">Sertifikat Penghargaan</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- achievement -->

	<!-- Contact -->
	<div class="contact" id="contact">
		<div class="p-5 text-white" style="background-color: #34404e;">
			<div class="container" style="width: 70%;">
				<h1 data-aos="fade-down" data-aos-duration="4000" class="pt-4">Contact Us</h1>
				<form action="tambah.php" method="post">
					<div class="mb-3 mt-3">
						<label for="nama">Nama:</label>
						<input type="text" data-aos="fade-down" data-aos-duration="4000" class="form-control" id="nama" placeholder="Enter nama ..." name="nama" required>
					</div>
					<div class="mb-3">
						<label for="email">Email:</label>
						<input type="email" data-aos="fade-down" data-aos-duration="4000" class="form-control" id="email" placeholder="Enter email ..." name="email" required>
					</div>
					<div class="mb-3">
						<label for="adress">Address:</label>
						<input type="text" data-aos="fade-down" data-aos-duration="4000" class="form-control" id="adress" placeholder="Enter address ..." name="adress" required>
					</div>
					<div class="mb-3">
						<label for="comment">Comments:</label>
						<textarea class="form-control" data-aos="fade-down" data-aos-duration="4000" rows="5" id="comment" placeholder="Enter comment ..." name="comment" required></textarea>
					</div>
					<button type="submit" class="btn btn-outline-light">Kirim</button>
				</form>
			</div>
		</div>
	</div>
	<!-- Contact -->

	<!-- Footer -->

	<footer>
		<div class="footer-content">
			<p class="jdl" data-aos="zoom-in" data-aos-duration="1000">Gayuh Widyanata</p>
			<p class="pjls">It Software Solution For Business</p>
			<h4>

				<a href="https://www.instagram.com/natagw/" target="_blank"><img
					src="https://img.icons8.com/material-outlined/30/ffffff/instagram-new--v1.png" /></a>
					<a href="https://wa.me/6285723783739" target="_blank"><img
						src="https://img.icons8.com/material-outlined/30/ffffff/whatsapp--v1.png" /></a>
						<a href="https://www.facebook.com/gayuh.widyanata/" target="_blank"><img
							src="https://img.icons8.com/material-outlined/30/ffffff/facebook-new.png" /></a>
						</h4>
					</div>
					<div class="container">
						<hr class="poter">
					</div>
					<div class="footer-bottom">
						<p>
							Copyright &copy; 2022 Gayuh Widyanata. designed by <span style="color: darkgrey;">Gayuh. </span>| Tugas Akhir Dasar Komputasi | Universitas Dian Nuswantoro
						</p>
					</div>
				</footer>
				<!-- footer -->


				<!-- jasascript -->
				<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
				<script>
					AOS.init();
				</script>
			</body>
			</html>
