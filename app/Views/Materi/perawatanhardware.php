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
            <li>Materi Perawatan Hardware</li>
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
                <img src="assets/img/blog/materiblog8.png" alt="" class="img-fluid">
              </div>

              <h2 class="title">Menerapkan Perawatan Hardware </h2>

              <div class="meta-top">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2023-05-29">29 Mei, 2023</time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                </ul>
              </div>
              <!-- End meta top -->

              <div class="content">
                <h4> Perawatan Hardware </h4>
                <br>
                <p>Dengan melakukan perawatan pada komponen perangkat keras akan membuat komputer dapat bertahan lama dalam kondisi yang baik. Sebelum melangkah jauh terlebih dahulu kita harus memahami apa saja jenis-jenis perawatan komputer. Perawatan komputer dapat dibagi menjadi dua, yaitu:</p>
                
                
                <br>
                <p>1. Perawatan Pasif</p>
                <p>Perawatan pasif adalah perawatan computer yang tidak diesertai dengan perbaikan, umumnya dalam perawatan pasif biasanya hanya mengecek kondisi perangkat dan membersihkannya. Untuk perawatan pasif lebih terjadwal dalam perawatannya, misal sebulan sekali. Contoh perawatan CPU / Prosesor harus sering di cek kondisinya ketika keadaan thermal paste sudah kering agar segera di ganti supaya panas pada prosesor dapat berpindah sempurna ke heatsink.</p>
                <br>
                <p>2. Perawatan Aktif</p>
                <p>Perawatan aktif adalah perawatan yang disertai dengan perbaikan, biasanya ketika terjadi sebuah masalah kita baru melakukan perawatan. Contoh pada saat keyboard macet kita baru mengecek dan memperbaiki keyboard kenapa bisa macet. Dalam perawatan aktif lebih condong ke perbaikan jika komputer atau laptop sudah mengalami trouble.</p>

                <h4>Jenis Perawatan Komputer</h4>
                <p>Dalam melakukan perawatan perangkat keras komputer, baik perawatan aktif maupun perawatan pasif terbagi menjadi dua, yaitu:</p>

                <p>
                1. Perawatan Hardware: Perawatan hardware adalah perawatan yang dilakukan pada hardware/perangkat keras komputer itu sendiri. Misal perawatan hardware; hardisk, monitor, dll.
                </p>
                <p>
                2. Perawatan Software: Perawatan software adalah perawatan yang dilakukan dengan bantuan software aplikasi, yaitu perawatan yang tidak bisa dilakukan oleh kita sendiri, akan tetapi yang melakukan perawatan adalah komputer itu sendiri dengan bantuan sistem aplikasi.
                </p>
                
                <h4>Cara Melakukan Perawatan Perangkat Keras (Hardware) komputer</h4>
                <p>Agar perangkat keras komputer tetap baik, maka perlu dilakukan perawatan secara berkala. Adapun langkah merawat perangkat keras komputer sebagai berikut:
                  <ul>
                    <li>1. Sebisa mungkin tegangan listrik yang di konsumsi komputer tetap stabil. tegangan listrik yang terlalu rendah dan terlalu tingg dua-duanya merusak perangkat keras komputer oleh karena itu gunakanlah Stabilizer dan UPS uantuk menjaga hal tersebut.</li>
                    <li>2. Hidup matikan komputer sesuai prosedur, jangan sekali-kali langsung mencabut kabel listrik komputer pada saat komputer sedang beroperasi, syarat ini juga mutkal berlaku untuk komputer " hang " sekalipun. tindakan ini sangat berbahaya pada kestabilan power supply komputer.</li>
                    <li>3. Komputer harus terhindar dari sengatan matahari langsung.</li>
                    <li>4. Jangan menaruh gelas dll berisi air demi menghindari siraman air pada perangkat keras.</li>
                    <li>5. Hindari penempatan peralatan yang bersifat/dapat menimbulkan magnet di sekitar komputer, karena ini akan mengacau monitor dan ini dapat merusak perangkat keras internal unit cpu.</li>
                    <li>6. Secara berkala bersihkan komputer dari debu yang melekat dengan menggunakan kuas cat, lap halus alat penyedot debu udara (vacum mini cleaner).</li>
                  </ul>
                </p>                
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="<?=base_url("materi")?>">Materi</a></li>
                </ul>

                <i class="bi bi-book"></i>
                <ul class="tags">
                  <li><a href="<?=base_url("perawatanhardware")?>">Perawatan Hardware</a></li>
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