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
            <li>Materi Bios</li>
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
                <img src="assets/img/blog/materiblog4.png" alt="" class="img-fluid">
              </div>

              <h2 class="title">Bios Komputer</h2>

              <div class="meta-top">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2023-05-29">29 Mei, 2023</time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                </ul>
              </div>
              <!-- End meta top -->

              <div class="content">
                <h4>Mengenal cara kerja BIOS</h4>
                <p>
                Mengenal cara kerja BIOS merupakan hal yang dapat membantu kita saat hendak melakukan troubleshooting pada kerusakan komputer. Seperti misalnya pada kasus komputer mati total ternyata bisa diatasi dengan cara mereset BIOS komputer. Dalam artikel ini kita akan mencoba mengenal BIOS lebih dekat.</p>

                <h4>Pengertian BIOS</h4>
                <p>                
                    BIOS adalah singkatan dari Basic Input Output System, merupakan suatu software (ditulis dalam bahasa assembly) yang mengatur fungsi dasar dari perangkat keras (hardware) komputer. BIOS tertanam dalam sebuah chip memory (ROM ataupun Flash Memory berbahan Complementari Metal Oxide Semiconductor-CMOS) yang terdapat pada motherboard. <br> <br>
                Sebuah baterai yang biasa disebut sebagai baterai CMOS berfungsi untuk menjaga agar tanggal dan setingan lainnya yang telah kita set pada BIOS tidak hilang atau kembali ke konfigurasi awal meskipun komputer dimatikan.</p>

                <h4>Fungsi utama BIOS </h4>
                  <p>
                  Fungsi utama BIOS adalah untuk memberikan instruksi yang dikenal dengan istilah POST (Power On Selft Test) yaitu perintah untuk menginisialisasi dan identifikasi perangkat sistem seperti CPU, RAM, VGA Card, Keyboard dan Mouse, Hardisk drive, Optical (CD/DVD) drive dan hardware lainnya pada saat komputer mulai booting.
                  </p>

                <h4>Cara Kerja BIOS  </h4>
                <p>
                Seperti telah dijelaskan diatas bahwa fungsi utama BIOS adalah melakukan POST. Sedangkan urutan-urutan atau cara kerja BIOS adalah dimulai dengan proses inisialisasi, dimana dalam proses ini kita bisa melihat jumlah memory yang terinstall, jenis hardisk dan kapasitasnya dan sebagainya. 
                <br><br>
                BIOS kemudian akan mencari, menginisialisasi dan menampilkan informasi dari Graphics Card. Kemudian akan mengecek device ROM lain seperti hardisk dan kemudian melakukan pengetesan RAM yaitu memory count up test. 
                <br><br>
                Setelah semua test komponen berhasil dilakukan, BIOS kemudian akan mencari lokasi booting device dan Sistem Operasi. Mengenai cara kerja BIOS atau urutan-urutan apa saja yang dikerjakan BIOS pada saat melakukan POST ini bisa dibaca pada postingan mengenai urutan proses startup komputer.
                </p>

                <h4>Cara Akses BIOS</h4>
                <p>
                Untuk mengakses BIOS dapat kita lakukan dengan menekan tombol tertentu (biasanya tombol Delete atau F2) pada Keyboard pada saat pertama kali komputer dinyalakan. Akan terdapat tulisan misalnya "Pres F2 to enter setup", maka langsung aja kita tekan tombaol F2 berulang-ulang.
                </p>


                <h4>Seting BIOS </h4>
                <p>
                Cara seting atau konfigurasi BIOS ini berbeda-beda tergantung dari vendor pembuatnya, disini saya akan menampilkan menu-menu pada BIOS yang umum kita temui yaitu Phoenix Award BIOS. Menu utama pada BIOS ini adalah : 
                    <ul>
                    <li>Standard CMOS Features, untuk seting tanggal dan melihat hardisk yang terdeteksi, dll.</li> 
                    <li>Advanced BIOS Features, pengaturan boot device priority (pilihan device untuk pertama booting) dapat diset disini.</li> 
                    <li>Advanced Chipset Features </li>
                    <li>Integrated Peripherals </li>
                    <li>Power Management Setup </li>
                    <li>PnP/PCI Configuration </li>
                    <li>PC Health Status, kita bisa cek temperatur dan tegangan dari Power Suplly disini. </li>
                    <li>Load Fail-Safe Defaults (Load Factory Setting), pilih menu ini untuk mengembalikan seluruh setingan ke mode asalnya (default). </li>
                    <li>Load Optimized Defaults </li>
                    <li>Set Supervisor Password </li>
                    <li>Set User Password </li>
                    <li>Save & Exit Setup </li>
                    <li>Exit Without Saving </li>
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
                  <li><a href="<?=base_url("bios")?>">Bios</a></li>
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