<?= $this->extend('Pages/Home.php') ?>
<?= $this->section('content') ?>
<main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Akses Materi <span>KJD</span> Online!</h2>
          <p>lebih mudah mengakses materi KJD kapanpun dan dimanapun.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#services" class="btn-get-started">Lihat Materi</a>
            <a href="https://www.youtube.com/watch?v=f2_upHs-nBQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Apa itu KJD?</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book"></i></div>
              <h4 class="title"><a href="<?=base_url("materi")?>" class="stretched-link">Materi</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-tools"></i></div>
              <h4 class="title"><a href="<?=base_url("praktik")?>" class="stretched-link">Praktik</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-link-45deg"></i></div>
              <h4 class="title"><a href="" class="stretched-link">KJD</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-window"></i></div>
              <h4 class="title"><a href="http://www.smknegeri1driyorejo.sch.id/" class="stretched-link">Website Sekolah</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
        <h2>Komputer dan Jaringan Dasar (KJD)</h2>
        <p>Mata pelajaran siswa SMK kelas X Jurusan Multimedia.</p>
        </div>

        <div class="row gy-4">
        <div class="col-lg-6">
            <h3>Apa itu KJD?</h3>
            <img src="assets/img/kjd1.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Komputer dan Jaringan Dasar adalah ilmu yang mempelajari tentang perangkat keras dan lunak komputer mulai merakit PC, menginstall sistem operasi,mengatur BIOS, menginstall driver peripheral, menganalisa jaringan LAN,WAN dan MAN, mengkonfigurasi IP address, dan merawat jaringan LAN,MAN dan WAN.</p>
        </div>
        <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
                Pada mata pelajaran ini kita dapat mempelajari :
            </p>
            <ul>
                <li><i class="bi bi-check-circle-fill"></i> Instalasi Komputer</li>
                <li><i class="bi bi-check-circle-fill"></i> Instalasi & Konfigurasi Jaringan</li>
                <li><i class="bi bi-check-circle-fill"></i> Reparasi Komputer</li>
                <li><i class="bi bi-check-circle-fill"></i> Mempelajari serta merawat Program(Software) & Hadrware Komputer</li>
            </ul>
            <p>
            Mata Pelajaran Komputer dan Jaringan Dasar ini merupakan pelajaran baru di Kurikulum 2013 dan Kurikulum 2013 Revisi. 
            Mata pelajaran ini merupakan gabungan dari mata pelajaran K3LH, Perakitan Komputer, Sistem Operasi, dan Jaringan Dasar yang diajarkan di Kurikulum 2006.
            </p>

            <div class="position-relative mt-4">
                <img src="assets/img/kjd2.png" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=f2_upHs-nBQ" class="glightbox play-btn"></a>
            </div>
            </div>
        </div>
        </div>

    </div>
    </section><!-- End About Us Section -->


    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
    <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        </div>

    </div>
    </section> -->
    <!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <!-- <section id="stats-counter" class="stats-counter">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

        <div class="col-lg-6">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
        </div>

        <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
            </div>

            <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>

            <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>

        </div>

        </div>

    </div>
    </section> -->
    <!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
    <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=f2_upHs-nBQ" class="glightbox play-btn"></a>
        <h3>Komputer dan Jaringan Dasar</h3>
        <p>Tonton video pengantar Jaringan Dasar.</p>
        <a class="cta-btn" href="#">Up  <i class="bi bi-arrow-up"></i></a>
    </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
        <h2>Materi</h2>
        <p>Materi terdiri dari pengetahuan dan ketrampilan yang dapat anda pelajari melalui berbagai media</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
            <div class="icon">
                <i class="bi bi-patch-plus"></i>
            </div>
            <h3>K3LH di Lingkungan Kerja</h3>
            <p>Setiap melakukan suatu pekerjaan kita harus memperhatikan K3LH agar tidak terjadi kesalahan yang dapat berakibat fatal. </p>
            <a href="<?=base_url('k3lh')?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-pc-display"></i>
            </div>
            <h3>Perakitan Komputer</h3>
            <p>Dalam merakit sebuah komputer ada beberapa tahap yang harus anda lakukan terlebih dahulu.</p>
            <a href="<?=base_url('perakitankomputer')?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div><!-- End Service Item -->

        <!-- <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-pc-display-horizontal"></i>
            </div>
            <h3>Pengujian Perakitan Komputer</h3>
            <p>Setalah melakukan perakitan komputer yang selanjutnya adalah kita wajib melakukan pengujian</p>
            <a href="" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div> <--End Service Item -->

        <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-gear-wide-connected"></i>
            </div>
            <h3>BIOS Komputer</h3>
            <p>suatu software (ditulis dalam bahasaassembly) yang mengatur fungsi dasar dari perangkat keras (hardware) komputer.</p>
            <a href="<?=base_url('bios')?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-microsoft"></i>
            </div>
            <h3>Instalasi Sistem Operasi</h3>
            <p>Sistem operasi merupakan bagian dari perangkat lunak.</p>
            <a href="<?=base_url('instalasios')?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-screwdriver"></i>
            </div>
            <h3>Instalasi Driver</h3>
            <p>Bagaimana cara tiap perangkat keras tersebut saling terhubung? Jawabanya adalah karena adanya driver.</p>
            <a href="<?=base_url('instalasidriver')?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-app-indicator"></i>
            </div>
            <h3>Instalasi Software Aplikasi</h3>
            <p>Software aplikasi adalah program komputer yang menyediakan instruksi dan data untuk menjalankan perintah pengguna</p>
            <a href="<?=base_url('instalasisoftware')?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-motherboard"></i>
            </div>
            <h3>Perawatan Hardware </h3>
            <p>Seberapa pun tahan dan mahalnya sebuah komputer, harus tetap perlu untuk merawatnya agar tetap awet dan juga tahan lama.</p>
            <a href="<?=base_url('perawatanhardware')?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-laptop"></i>
            </div>
            <h3>Analisis Permasalahan Pada Hardware</h3>
            <p>Untuk mengganti komponen komputer ada beberapa yang menjadi sedikit rumit, tetapi itu adalah sesuatu yang dapat dipelajari oleh siapa pun. </p>
            <a href="<?=base_url('analisishardware')?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-menu-button-wide-fill"></i>
            </div>
            <h3>Analisis Permasalahan Pada Instalasi Software</h3>
            <p>Sebagian kita pengguna komputer mungkin sering terjadi penggunaan aplikasi eror dan perlu perbaikan pada instalasi software aplikasi. </p>
            <a href="<?=base_url('analisissoftware')?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
            </div>
        </div><!-- End Service Item -->

        </div>

    </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
        <h2>Portfolio</h2>
        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <div>
            <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
            </ul>
        </div>

        <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
            </div>
            </div>

        </div>
        </div>

    </div>
    </section> -->
    <!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <!-- <section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
        <h2>Our Team</h2>
        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
            <h4>Walter White</h4>
            <span>Web Development</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <h4>Sarah Jhinson</h4>
            <span>Marketing</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
            <h4>William Anderson</h4>
            <span>Content</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>

        </div>

    </div>
    </section> -->
    <!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
        <h2>Pricing</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

        <div class="col-lg-4">
            <div class="pricing-item">
            <h3>Free Plan</h3>
            <div class="icon">
                <i class="bi bi-box"></i>
            </div>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="pricing-item featured">
            <h3>Business Plan</h3>
            <div class="icon">
                <i class="bi bi-airplane"></i>
            </div>

            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="pricing-item">
            <h3>Developer Plan</h3>
            <div class="icon">
                <i class="bi bi-send"></i>
            </div>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
        </div>

        </div>

    </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

        <div class="col-lg-4">
            <div class="content px-xl-5">
            <h3>Frequently Asked <strong>Questions</strong></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
            </div>
        </div>

        <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

            <div class="accordion-item">
                <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Non consectetur a erat nam at lectus urna duis?
                </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                </div>
                </div>
            </div>

            </div>

        </div>
        </div>

    </div>
    </section> -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <!-- <section id="recent-posts" class="recent-posts sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
        <h2>Recent Blog Posts</h2>
        <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
        </div>

        <div class="row gy-4">

        <div class="col-xl-4 col-md-6">
            <article>

            <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Politics</p>

            <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
            </h2>

            <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                <p class="post-author">Maria Doe</p>
                <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                </p>
                </div>
            </div>

            </article>
        </div>

        <div class="col-xl-4 col-md-6">
            <article>

            <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Sports</p>

            <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
            </h2>

            <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                <p class="post-author">Allisa Mayer</p>
                <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                </p>
                </div>
            </div>

            </article>
        </div>

        <div class="col-xl-4 col-md-6">
            <article>

            <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Entertainment</p>

            <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
            </h2>

            <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                <p class="post-author">Mark Dower</p>
                <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                </p>
                </div>
            </div>

            </article>
        </div>

        </div>

    </div>
    </section> -->
    <!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
        <h2>Contact</h2>
        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

        <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
                </div>
            </div>

            <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
                </div>
            </div>

            <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
                </div>
            </div>

            <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                <h4>Open Hours:</h4>
                <p>Mon-Sat: 11AM - 23PM</p>
                </div>
            </div>
            </div>

        </div>

        <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div>
        
        </div>

    </div>
    </section> -->
    <!-- End Contact Section -->

</main><!-- End #main -->
<?= $this->endSection() ?>