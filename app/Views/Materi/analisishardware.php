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
            <li>Materi Analisis Hardware</li>
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
                <img src="assets/img/blog/materiblog10.png" alt="" class="img-fluid">
              </div>

              <h2 class="title">Menerapkan Analisis Kebutuhan Hardware</h2>

              <div class="meta-top">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2023-05-29">29 Mei, 2023</time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                </ul>
              </div>
              <!-- End meta top -->

              <div class="content">
                <h4> Analisis Hardware </h4>
                
                <h3>1. Personal computer</h3>
                <p>Personal Computer  atau PC merupakan perangkat utama dalam suatu jaringan computer. PC inilah yang akan bekarja mengirim dan mengakses data dalam jaringan.</p>

                <h3>2. NIC / LAN CARD</h3>
                <p>NIC merupakan port yang menghubungkan computer dengan jaringan. Port atau card ini bergabung di dalam PC yang menempel pada Main Board. Berdasarkan tipe bus, ada beberapa tipe NIC atau Network Card, yaitu ISA dan PCI.</p>

                <h3>3. Kabel jaringan</h3>
                <h4>Kabel Coaxial</h4>
                <p>Terbuat dari serat kaca dengan teknologi canggih dan mempunyai kecepatan transfer data yang lebih cepat.</p>
                <h4>Fiber Optik</h4>
                <p>Terbuat dari serat kaca dengan teknologi canggih dan mempunyai kecepatan transfer data yang lebih cepat.</p>
                <h4>Twisted Pair</h4>
                <p>Terdiri dari beberapa kabel yang saling melilit. Ada dua jenis kabel Twisted Pair. Shielded Twisted Pair (STP) dan Unshielded Twisted Pair (UTP).</p>

                <h3>4. Konektor RJ45</h3>
                <p>Sebagai saran penghubung antar kabel dengan colokan NIC.</p>

                <h3>5. Hub/Switch</h3>
                <p>Hub adalah alat yang digunakan untuk menghubungkan antar komputer dan perlatan lain dalam jaringan. Fungsi hub yaitu untuk mengarahkan informasi dalam jaringan sehingga sampai ke tujuan.
                  <br>
                  Namun untuk mendapatkan kualitas transformasi data yang baik dapat digunakan switch untuk menggantikan hub.
                  <br>
                  Hub dan switch memiliki persamaan fungsi untuk mengarahkan informasi dalam jaringan. Namun switch memiliki nilai lebih dibandingkan hub.
                </p>

                <h3>6. Modem</h3>
                <p>Modem atau Modul the Modulator adalah peralatan jaringan yang digunakan untuk terhubung ke jaringan internet menggunakan kabel telpon.
                  <br>
                  Dengan kata lain, modem adalah alat yang bertugas untuk mengubah data dari bentuk digital ke analog dan sebaliknya yang bisa dipahami oleh kita.</p>

                <h3>7. Bridge</h3>
                <p>Bridge adalah peralatan yang digunakan untukmemperluas atau memecah jaringan. Bridge berfungsi untuk menghubungkan dan menggabungkan media jaringan yang tidak sama.</p>

                <h3>8. Router</h3>
                <p>Router memiliki kemampuan melewatkan paket IP dari satu jaringan yang berbeda ke jaringan lain yang bukan susunan atau jaringan yang mungkin memiliki banyak jalur diantara keduanya.
                  <br>
                  Router berfungsi sebagai penghubung antar dua atau lebih jaringan untuk meneruskan data dari satu jaringan ke jaringan lainnya.</p>

                <h3>9. Repeater</h3>
                <p>Repeater berguna untuk memperkuat sinyal dengan cara menerima sinyal dari suatu segmen kabel LAN lalu memancarkan kembali dengan kekuatan yang sama dengan sinyal asli pada segmen kabel lain.</p>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="<?=base_url("materi")?>">Materi</a></li>
                </ul>

                <i class="bi bi-book"></i>
                <ul class="tags">
                  <li><a href="<?=base_url("analisishardware")?>">Analisis Hardware</a></li>
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