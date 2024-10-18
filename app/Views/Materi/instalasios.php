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
            <li>Materi Instalasi Sistem Operasi</li>
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
                <img src="assets/img/blog/materiblog5.png" alt="" class="img-fluid">
              </div>

              <h2 class="title">Menerapkan instalasi sistem operasi</h2>

              <div class="meta-top">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2023-05-29">29 Mei, 2023</time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                </ul>
              </div>
              <!-- End meta top -->

              <div class="content">
                <h4>Pengertian Sistem Operasi (OS)</h4>
                <p>
                Sistem Operasi adalah perangkat lunak komputer atau software yang bertugas untuk  melakukan kontrol dan manajemen perangkat keras dan juga operasi-operasi dasar sistem, termasuk menjalankan software aplikasi seperti program-program pengolah data yang bisa digunakan untuk mempermudah kegiatan manusia.<br>Contoh : Windows, Linux, Android, Mac OS, Blackberry, Unix, iOS, FreeBSD</p>
                
                <h4>Jenis - Jenis Sistem Operasi</h4>
                <p>                
                Berdasarkan Sifat Source (Sumber Code), Sistem Operasi terbagi menjadi 2 :
                </p>

                <h4>1. Open Source </h4>
                  <p>
                  Adalah perangkat lunak yang menyertakan kode programnya (bersifat terbuka), kode program tersebut disediakan oleh pengembangnya secara umum agar bisa dipelajari, diubah maupun dikembangkan serta disebarluaskan.
<br>Jika pembuat software tersebut tidak mengizinkan kode programnya untuk dimodifikasi, maka tidak dapat disebut sebagai open source meskipun kode program dari perangkat lunak tersebut tersedia.
<br>Contoh : Semua Distro Linux ( Ubuntu, Knoppix, Debian, Redhat), Android</p>

                <h4>2. Close Source</h4>
                <p>
                perangkat lunak yang kode sumbernya tidak terbuka untuk umum, pemilik kode bisa membagi kode programnya melalui lisensi dengan gratis ataupun dengan membayarnya. Pada sistem operasi closed source, walaupun sudah dilisensi biasanya terdapat larangan untuk memodifikasi kode.</p>

                <p>
                Berdasarkan jumlah pengguna, Sistem Operasi di bagi dalam beberpa jenis
                    <ul>
                    <li>Single User – Single Tasking : 1 Komputer untuk 1 User dan 1 Aplikasi . Contohnya : MS- DOS</li>
                    <li>Multi User – Single Tasking: 1 Komputer, Banyak User, 1 Aplikasi. Contohnya Novell Netware (berbasis jaringan)</li> 
                    <li>Single User – Multi Tasking: 1 Komputer, 1 User, Bisa menjalankan beberapa aplikasi bersamaan Contohnya: Windows </li>
                    <li>Multi User – Multi Tasking: Banyak User dan bisa menjalakan program dalam satu waktu. Contohnya: Linux</li>
                    </ul>
                </p>

                <h4>Fungsi Sistem Operasi </h4>
                  <p>1. Resource manager, merupakan pengelolaan sumber daya dan mengalokasikannya, Contoh: memori, CPU, Disk Drive dan perangkat lainnya.</p>
                  <p>2. Interface atau yang biasa disebut dengan tatap muka, yaitu sebagai perantara antara pengguna dengan perangkat keras dengan menyediakan tampilan kepada pengguna yang lebih mudah dipahami dan bersahabat (user friendly)</p>
                  <p>3. Coordinator, Dalam hal ini sistem operasi berfungsi untuk mengatur semua aktivitas yang kompleks dari perangkat lunak sistem/perangkat lunak aplikasi yang sedang dijalankan agar dapat berjalan sesuai dengan urutan yang benar. Selain mengatur semua aktivitas perangkat lunak, sistem operasi juga bertugas mengatur/mengelola semua aktivitas yang berhubungan dengan hardware, baik input device ataupun output device.</p>
                  <p>4. Guardian, Hal ini dimaksudkan bahwa salah satu fungsi atau tugas dari sistem operasi adalah untuk memegang kendali proses, melindungi file dan memberi batasan pada pembacaan dan penulisan serta eksekusi data dan program. Sistem operasi juga dapat berfungsi sebagai pengatur tentang siapa saja yang dapat mengakses file, program dan sistem yang ada di komputer kita.</p>
                  <p>5. Gate Keeper, berfungsi sebagai pengendali hak akses oleh pengguna yang mengendalikan siapa saja yang berhak masuk ke dalam sistem dan mengawasi apa saja yang dilakukannya.</p>
                  <p>6. Optimizer adalah penjadwal masukan (input) oleh user, pengaksesan basis data, proses komputasi dan penggunaan.</p>
                  <p>7. Accountant befungsi untuk mengatur waktu CPU, penggunaan memori, pemanggilan I/O, disk storage, dan waktu koneksi terminal.</p>
                  <p>8. Server berfungsi untuk melayani segala sesuatu yang dibutuhkan oleh seorang user (pengguna).</p>
                  <p>9. Interpretasi, Sistem Operasi berfungsi sebagai penerjemah perintah-perintah dan instruksi-instruksi antara User dan Sistem. Sebagai fasilitas komunikasi yang mudah antara sistem komputer dan User (pengguna).</p>


              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="<?=base_url("materi")?>">Materi</a></li>
                </ul>

                <i class="bi bi-book"></i>
                <ul class="tags">
                  <li><a href="<?=base_url("instalasios")?>">Instalasi Sistem Operasi</a></li>
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