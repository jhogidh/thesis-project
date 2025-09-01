<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Media Praktik KJD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <!-- <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">informasi@smktelkom-sda.sch.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span> (+62) 31-99711858</span></i>
      </div> -->
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://smktelkom-sda.sch.id/" class="website"><i class="bi bi-window-sidebar"></i>&nbsp;&nbsp;Website</a>
        <a href="<?= base_url('admin') ?>" class="website"><i class="bi bi-file-text"></i>&nbsp;&nbsp;Admin</a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Belajar <span>KJD</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= base_url() ?>">Beranda</a></li>
          <li><a href="<?= base_url("tentangkjd") ?>">Tentang KJD</a></li>
          <li class="dropdown"><a href="#"><span>Materi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="materi">Materi KJD</a></li>
              <li><a href="materiguru">Materi Tambahan</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url("praktik") ?>">Praktik</a></li>
          <li class="dropdown"><a href="#"><span>Tes</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="tes1">Tes 1</a></li>
              <li><a href="tes2">Tes 2</a></li>
              <li><a href="nilai">Nilai Tertinggi</a></li>
            </ul>
          </li>
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="#fact">KJD Fact</a></li>
          <li><a href="bantuan">Bantuan</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <?= $this->renderSection('content') ?>

  <!-- ======= Testimonials Section ======= -->
  <section id="fact" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Fakta unik Tentang Komputer dan Jaringan</h2>
        <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <div class="d-flex align-items-center">
                  <img src="assets/img/testimonials/fact1.jpeg" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Hardisk Pertama di Dunia</h3>
                    <h4>HDD pertama ukurannya sebesar Kulkas</h4>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Pada tanggal 4 September 1956 IBM mempopulerkan hardisk pertama di dunia. Ukurannya sebesar dua lemari es dan harganya mencapai $250.000 jika diuangkan dalam kurs saat ini. Namun kapasitas penyimpanannya hanya 5 MB.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <div class="d-flex align-items-center">
                  <img src="assets/img/testimonials/fact2.png" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Munculnya Virus Komputer</h3>
                    <h4>Virus pertama dibuat oleh 2 remaja</h4>
                    <div class="stars">

                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Virus pertama ini dibuat oleh 2 bersaudara yang masih berusia 19 tahun, Basit Farooq Alvi dan Amjad Farooq Alvi. Virus ini awalnya dibuat untuk melindungi software mereka dari pembajakan.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <div class="d-flex align-items-center">
                  <img src="assets/img/testimonials/fact3.jpeg" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Bapak Internet</h3>
                    <h4>Pencipta teknologi internet</h4>
                    <div class="stars">

                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Teknologi ini ditemukan oleh Leonardo Kleinrock.
                  ia berhasil membuat suatu penemuan besar menjelang abad modern yaitu internet yang secara tidak sengaja berhasil memecahkan kode digital dan menjadikannya paket-paket yang terpisah.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <div class="d-flex align-items-center">
                  <img src="assets/img/testimonials/fact5.jpeg" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Uang fisik hanya 8% didunia</h3>
                    <h4>sisanya hanya ada pada komputer</h4>
                    <div class="stars">

                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  hanya 8% dari semua uang di dunia ini adalah uang tunai sebenarnya secara fisik. Sisanya hanya uang digital yang ditunjukkan dalam digit angka yang ada pada sistem komputer.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <div class="d-flex align-items-center">
                  <img src="assets/img/testimonials/fact4.png" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Blog pertama</h3>
                    <h4>Blog perdana di dunia</h4>
                    <div class="stars">

                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Blog atau weblog yang pertama kali muncul adalah halaman what's new pada browser mosaic. Blog ini dibuat oleh Marc Andersen pada tahun 1993. Mosaic adalah browser pendahulu sebelum adanya internet explorer bahkan netscape.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>SMK Telkom Sidoarjo</span>
          </a>
          <p>
            SMK Telkom Sidoarjo (SKOMDA) merupakan sekolah unggulan dibidang ICT yang memiliki fasilitas pembelajaran yang modern, tenaga pengajar yang kompeten, kerjasama perusahaan yang memadahi, serta dibangun di kawasan yang kondusif dan menyenangkan untuk belajar.
          </p>
          <div class="social-links d-flex mt-4">
            <a href="https://smktelkom-sda.sch.id/" class="website"><i class="bi bi-window-sidebar"></i></a>
            <a href="<?= base_url('admin') ?>" class="website"><i class="bi bi-file-text"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Link-link</h4>
          <ul>
            <li><a href="<?= base_url() ?>">Beranda</a></li>
            <li><a href="<?= base_url("tentangkjd") ?>">Tentang KJD</a></li>
            <li><a href="<?= base_url("materi") ?>">Materi</a></li>
            <li><a href="<?= base_url("praktik") ?>">Praktik</a></li>
            <li><a href="#fact">KJD Fact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Kompetensi Keahlian</h4>
          <ul>
            <li><a href="https://smktelkom-sda.sch.id/p/program-keahlian.html">SISTEM INFORMASI JARINGAN DAN APLIKASI (SIJA)</a></li>
            <li><a href="https://smktelkom-sda.sch.id/p/program-keahlian.html">TEKNIK JARINGAN AKSES TELEKOMUNIKASI (TJAT)</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Hubungi Kami</h4>
          <p>
            Jl. Pecantingan, Sekardangan Indah, Sekardangan, Kec. Sidoarjo<br>
            Kabupaten Sidoarjo<br>
            Jawa Timur <br><br>
            <strong>Kode Pos:</strong> 61215<br>
            <strong>Telp:</strong> (+62) 31-99711858<br>
            <strong>Email:</strong> informasi@smktelkom-sda.sch.id<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>

      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>