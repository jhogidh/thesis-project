<?= $this->extend("Pages/Home")?>
<?= $this->section("content") ?>
<main id="main">
   
    <!-- ======= Materi ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Materi</h2>
              <p>Materi Komputer dan Jaringan Dasar kelas 10 ini memiliki 18 modul materi terdiri dari pengetahuan dan ketrampilan yang dapat anda pelajari melalui berbagai media</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Materi Analisis Software</li>
          </ol>
        </div>
      </nav>
    </div><!-- Materi -->


    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img text-center">
                <img src="assets/img/blog/materiblog9.png" alt="" class="img-fluid">
              </div>

              <h2 class="title">Menerapkan Analisis Kebutuhan Software</h2>

              <div class="meta-top">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2023-05-29">29 Mei, 2023</time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                </ul>
              </div>
              <!-- End meta top -->

              <div class="content">
                <h4> Analisis Software </h4>
                
                <h3>1. System Operasi</h3>
                <p>Sistem operasi (bahasa Inggris: operating system ; OS) adalah seperangkat program yang mengelola sumber daya perangkat keras komputer, dan menyediakan layanan umum untuk aplikasi perangkat lunak. Contohnya, Windows, Linux, Mac OS, dll.</p>

                <h3>2. Web Server</h3>
                <p>Web Server adalah komputer server yang menyediakan informasi yang bisa dilihat oleh pengguna internet. <br>
                Fungsi utama sebuah server web adalah untuk mentransfer berkas atas permintaan pengguna melalui protokol komunikasi yang telah ditentukan.
                </p>

                <h3>3. Web Browser</h3>
                <p>Web Browser atau dalam bahasa indonesia peramban web merupakan software yang mempunyai fungsi menampilkan halaman sebuah website.
                <br>
                Sedangkan pengertian web browser menurut wikipedia "perangkat lunak yang berfungsi menampilkan dan melakukan interaksi dengan dokumen-dokumen yang disediakan oleh server web".</p>

                <h3>4. File Transfer Protocol</h3>
                <p>Protokol pengiriman berkas adalah sebuah protokol Internet yang berjalan di dalam lapisan aplikasi yang merupakan standar untuk pengiriman berkas (file) komputer antar mesin-mesin dalam sebuah Antarjaringan.</p>
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="<?=base_url("materi")?>">Materi</a></li>
                </ul>

                <i class="bi bi-book"></i>
                <ul class="tags">
                  <li><a href="<?=base_url("analisissoftware")?>">Analisis Software</a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->


          </div>

          <div class="col-lg-4">

          <div class="sidebar">
              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Materi Lainnya</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/materiblog2.png" alt="">
                    <div>
                      <h4><a href="<?=base_url("k3lh")?>">k3lh</a></h4>
                      <time datetime="2023-05-29">29 Mei, 2023</time>
                    </div>
                  </div>
                  <!-- End recent post item-->

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/materiblog3.png" alt="">
                    <div>
                      <h4><a href="<?=base_url("perakitankomputer")?>">Pengujian Perakitan Komputer</a></h4>
                      <time datetime="2023-05-29">29 Mei, 2023</time>
                    </div>
                  </div>
                  <!-- End recent post item-->

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/materiblog4.png" alt="">
                    <div>
                      <h4><a href="<?=base_url("bios")?>">Bios Komputer</a></h4>
                      <time datetime="2023-05-29">29 Mei, 2023</time>
                    </div>
                  </div>
                  <!-- End recent post item-->

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/materiblog5.png" alt="">
                    <div>
                      <h4><a href="<?=base_url("instalasios")?>">Instalasi Sistem Operasi</a></h4>
                      <time datetime="2023-05-29">29 Mei, 2023</time>
                    </div>
                  </div>
                  <!-- End recent post item-->

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/materiblog6.png" alt="">
                    <div>
                      <h4><a href="<?=base_url("instalasidriver")?>">Instalasi Driver</a></h4>
                      <time datetime="2023-05-29">29 Mei, 2023</time>
                    </div>
                  </div>
                  <!-- End recent post item-->

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/materiblog7.png" alt="">
                    <div>
                      <h4><a href="<?=base_url("Instalasisoftware")?>">Instalasi Software</a></h4>
                      <time datetime="2023-05-29">29 Mei, 2023</time>
                    </div>
                  </div>
                  <!-- End recent post item-->

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/materiblog8.png" alt="">
                    <div>
                      <h4><a href="<?=base_url("perawatanhardware")?>">Perawatan Hardware</a></h4>
                      <time datetime="2023-05-29">29 Mei, 2023</time>
                    </div>
                  </div>
                  <!-- End recent post item-->

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/materiblog9.png" alt="">
                    <div>
                      <h4><a href="<?=base_url("analisishardware")?>">Analisis Hardware</a></h4>
                      <time datetime="2023-05-29">29 Mei, 2023</time>
                    </div>
                  </div>
                  <!-- End recent post item-->

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/materiblog10.png" alt="">
                    <div>
                      <h4><a href="<?=base_url("analisissoftware")?>">Analisis Software</a></h4>
                      <time datetime="2023-05-29">29 Mei, 2023</time>
                    </div>
                  </div>
                  <!-- End recent post item-->


                </div>

              </div><!-- End sidebar recent posts-->

              <!-- <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div> -->
              <!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->
    
</main>


<?= $this->endsection() ?>