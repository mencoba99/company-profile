<?php
include 'koneksi.php';

$sql = "SELECT * FROM berita join label using(id_label)";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Berita | Ponpes Al Hikmah Pedurungan Semarang</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
  <link rel="icon" href="images/logo-png.png" type="image/x-icon">

</head>

<body>


  <!-- header -->
  <header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-1 bg-white">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 text-center text-lg-left">
            <a class="text-color mr-3">Jl. Pesantren No. 3 Pedurungan Semarang</a>
            <ul class="list-inline d-inline">
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://web.facebook.com/ppalhikmahsmg/"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.instagram.com/ppalhikmahsmg/"><i class="ti-instagram"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.youtube.com/channel/UCld4GHv_Tu-IoTsuRrGj5Yw"><i class="ti-youtube"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-8 text-center text-lg-right">
            <ul class="list-inline">
              <form action="datacari.php">
                <div class="input-wrapper">
                  <input class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" name="cari" placeholder="Cari Nama Santri...">
                </div>
              </form>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
          <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Profil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="sejarah.php">Sejarah</a>
              <a class="dropdown-item" href="kesantrian.php">Kesantrian</a>
              <a class="dropdown-item" href="fasilitas.php">Fasilitas</a>
            </div>
          </li>
          <li class="nav-item dropdown view">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
          Kegitan</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="mingguan.php">Mingguan</a>
            <a class="dropdown-item" href="acarabesar.php">Acara Besar</a>
          </div>
        </li>
        <li class="nav-item dropdown view active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Informasi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="pendaftaran.php">Pendaftaran</a>
          <a class="dropdown-item" href="berita.php">Berita-Berita</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galeri.php">GALERI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontak.php">KONTAK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login/index.php">LOGIN</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-0 border-0 p-4">
      <div class="modal-header border-0">
        <h3>Register</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="login">
          <form action="#" class="row">
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="phone" name="phone" placeholder="Phone">
            </div>
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Name">
            </div>
            <div class="col-12">
              <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email">
            </div>
            <div class="col-12">
              <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Password">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-0 border-0 p-4">
      <div class="modal-header border-0">
        <h3>Login</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" class="row">
          <div class="col-12">
            <input type="text" class="form-control mb-3" id="phone" name="phone" placeholder="Phone">
          </div>
          <div class="col-12">
            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Name">
          </div>
          <div class="col-12">
            <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Password">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">LOGIN</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="">Berita</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Berita-berita seputar kegiatan yang diadakan atau diikuti oleh Santri al Hikmah Pedurungan Semarang.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- blogs -->
<section class="section">
  <div class="container">
    <div class="row">
      <!-- blog post -->
      <?php while($berita = mysqli_fetch_array($result)){

        ?>
        <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
            <img class="card-img-top rounded-0" src="admin/img/berita/<?= $berita['gambar']; ?>" alt="Post thumb">
            <div class="card-body">
              <!-- post meta -->
              <ul class="list-inline mb-3">
                <!-- post date -->
                <li class="list-inline-item mr-3 ml-0"><?= $berita['tanggal']; ?></li>
                <!-- author -->
                <li class="list-inline-item mr-3 ml-0"><?= $berita['ket']; ?></li>
              </ul>
              <a href="lihatberita.php?judul=<?= $berita['judul'];?>">
                <h4 class="card-title"><?= $berita['judul']; ?></h4>
              </a>
              <p class="card-text"><?= substr($berita['isi'], 0,65); ?> .....</p>
              <a href="lihatberita.php?judul=<?= $berita['judul'];?>" class="btn btn-primary btn-sm">Selengkapnya</a>
            </div>
          </div>
        </article>
        <?php
      }
      ?>
    </div>
  </div>
</section>
<!-- /blogs -->

<!-- footer -->
<footer>
  <!-- newsletter -->
<!--   <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.php"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">Jl. Pesantren No. 3 Pedurungan Semarang</li>
            <li class="mb-2">alhikmahofficial@gmail.com</li>
            <li class="mb-2">(024) 6716657</li>
            <li class="mb-2">50192</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">PROFIL</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="sejarah.php">Sejarah</a></li>
            <li class="mb-3"><a class="text-color" href="kesantrian.php">Kesantrian</a></li>
            <li class="mb-3"><a class="text-color" href="fasilitas.php">Fasilitas</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">KEGIATAN</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="mingguan.php">Mingguan</a></li>
            <li class="mb-3"><a class="text-color" href="acarabesar.php">Acara Besar</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">INFORMASI</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="pendaftaran.php">Pendaftaran</a></li>
            <li class="mb-3"><a class="text-color" href="berita.php">Berita-Berita</a></li>
            <li class="mb-3"><a class="text-color" href="galeri.php">Galeri</a></li>
            <li class="mb-3"><a class="text-color" href="kontak.php">Kontak</a></li>
          </ul>
        </div>
        <!-- support -->
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-2 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright 2018
<!--             <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>  -->
          © Pondok Pesantren Al Hikmah Pedurungan Semarang</p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://web.facebook.com/ppalhikmahsmg/"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.instagram.com/ppalhikmahsmg/"><i class="ti-instagram text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.youtube.com/channel/UCld4GHv_Tu-IoTsuRrGj5Yw"><i class="ti-youtube text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>