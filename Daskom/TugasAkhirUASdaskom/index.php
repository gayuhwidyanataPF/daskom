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
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
    }

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

  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg fixed-top bg-dark border-bottom border-dark">
    <div class="container">
      <a class="navbar-brand text-white" data-aos="fade-right" data-aos-duration="1000" href="#homepg">NATAGW</a>
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active" data-aos="zoom-out" data-aos-duration="3000">
            <a class="nav-link" style="color: #ffff;" href="register.php">Sign in</a>
          </li>
          <li class="nav-item active" data-aos="zoom-out" data-aos-duration="4000">
            <a class="nav-link" style="color: #ffff;" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- homepage start -->
  <div class="text-white" id="homepg"
    style="height: 700px; background-image: url(img/laptop.jpg); background-size: cover;">
    <div class="transparan" style="background-color: #000; opacity: 0.8; width: 100%; height: 700px;">
      <div class="isi" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
        <h1 data-aos="zoom-in" data-aos-duration="3000" class="text-center" style="font-size: 70px;">Welcome In My</h1>
        <h2 data-aos="zoom-in" data-aos-duration="3000" class="text-center">Portfolio Website</h2>
        <center>
          <hr width="30%" data-aos="zoom-in" data-aos-duration="3000"
            style="background-color: white; border-style: none; height: 2px;">
        </center>
        <h3 class="text-center text-light" data-aos="zoom-in" data-aos-duration="3000">Gayuh Widyanata</h3>
        <h6 class="text-center" data-aos="zoom-in" data-aos-duration="3000">Frontend Developer | IT Software</h6>
        <div class="tombol mt-4">
          <center>
            <a href="#desk" style="text-decoration: none;" type="button" class="btn btn-outline-light me-3">Get Started</a>
          </center>
        </div>
      </div>
    </div>
  </div>
  <!-- homepage end -->

  <!-- deskripsi start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6" style="background-color: #34404e; height: 400px;">
        <div class="kotakk"
          style="position: relative; top: 40%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
          <p class="text-light mt-5 mb-5 text-center" style="font-size: 22px; padding: 10px;" data-aos="zoom-in"
            data-aos-duration="3000">
            &quot;Nama saya Gayuh Widyanata. Portofolio ini menjelaskan pengalaman, pengetahuan yang saya pelajari dan
            prestasi saya selama mengikuti pendidikan sebagai Pelajar / Mahasiswa.&quot;
          </p>
        </div>
      </div>
      <div class="col-md-6" id="desk"
        style="background-image: url(img/dark.jpg); background-size: cover; height: 400px;">
        <h3 class="text-light" style="vertical-align: middle; line-height: 400px; text-align: center;"
          data-aos="zoom-in" data-aos-duration="3000">Introduction</h3>
      </div>
    </div>
  </div>
  <!-- deskripsi end -->

  <!-- deskripsi sedikit start-->
  <div class="desk">
    <div class="text-white"
      style="padding: 90px; background-image:url(img/coba.jpg); background-size:cover; background-attachment: fixed;">
      <div class="container">
        <h2 class="text-center" data-aos="zoom-out" data-aos-duration="5000">Siapa saya dan apa latar belakang saya?
        </h2>
        <div class="tombol mt-4">
          <center>
            <a href="register.php" type="button" class="btn btn-outline-light me-3">Sign In</a>
            <a href="login.php" type="button" class="btn btn-outline-light me-3">Login</a>
          </center>
        </div>
      </div>
    </div>
  </div>


  <div class="contact">
    <div class="p-5 text-white" style="background-color: #34404e;">
      <div class="container" style="width: 70%;">
        <h1 data-aos="fade-down" data-aos-duration="4000">Contact Us</h1>
        <form action="tambahh.php" method="post">
          <div class="mb-3 mt-3">
            <label for="nama">Nama:</label>
            <input type="text" data-aos="fade-down" data-aos-duration="4000" class="form-control" id="nama"
              placeholder="Enter nama ..." name="nama" required>
          </div>
          <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" data-aos="fade-down" data-aos-duration="4000" class="form-control" id="email"
              placeholder="Enter email ..." name="email" required>
          </div>
          <div class="mb-3">
            <label for="adress">Address:</label>
            <input type="text" data-aos="fade-down" data-aos-duration="4000" class="form-control" id="adress"
              placeholder="Enter address ..." name="adress" required>
          </div>
          <div class="mb-3">
            <label for="comment">Comments:</label>
            <textarea class="form-control" data-aos="fade-down" data-aos-duration="4000" rows="5" id="comment"
              placeholder="Enter comment ..." name="comment" required></textarea>
          </div>
          <button type="submit" class="btn btn-outline-light">Kirim</button>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer-content">
      <p class="jdl">Gayuh Widyanata</p>
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
        Copyright &copy; 2022 Gayuh Widyanata. designed by <span style="color: darkgrey;">Gayuh. </span>| Tugas Akhir
        Dasar Komputasi | Universitas Dian Nuswantoro
      </p>
    </div>
  </footer>

  <!-- jasascript -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>