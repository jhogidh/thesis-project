<?= $this->extend('Pages/Home.php') ?>
<?= $this->section('content') ?>
<main id="main">
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Tahapan<strong>Praktik Instalasi OS</strong></h3>
              <p>
              Untuk melakukan praktik Install OS dan mendapatkan nilai akhir praktik, peserta didik perlu melakukan beberapa tahapan, berikut adalah beberapa tahapan yang perlu dilakukan untuk mendapatkan nilai akhir praktik. 
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Akses artikel materi Instalasi OS
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Unduh media creation tool <a href="<?= base_url('instalasios')?>">di sini.</a> atau dari dashboard website anda bisa klik menu <a href="<?= base_url('materi')?>">Materi</a> kemudian cari materi dengan judul <a href="<?=base_url('instalasios')?>">Menerapkan instalasi sistem operasi</a>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Lakukan Tes 1
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Setelah mempelajari materi Instalasi OS, peserta didik perlu melakukan tes awal yaitu dengan mengakses halaman <a href="<?= base_url('tes1')?>">Tes 1</a> dari menu navigasi. Peserta didik perlu mengerjakan seluruh soal dan mengisi nomer absen serta nama lengkap agar data nilai awal bisa muncul.
                </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Simulasi Praktik Instalasi OS
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Jika telah menyelesaikan Tes 1, peserta didik bisa langsung mengakses halaman praktik dengan mengklik menu <a href="<?= base_url('praktik')?>">Praktik</a>.
                  <br><br>
                  Kemudian peserta didik bisa menonton video instalasi OS windows 10 terlebih dahulu pada halaman Praktik tersebut
                  <br><br>
                  Jika sudah, peserta didik bisa memulai simulasi praktiknya dengan mengklik tombol "Mulai Praktik"                  
                  <br><br>
                  Di halaman <a href="<?= base_url('mulaipraktik')?>">Mulai Praktik</a> juga terdapat video yang sama seperti dihalaman praktik, jika peserta didik ingin menonton kembali tutorial instalasi sistem operasi. Kemudian jika sudah siap melakukan simulasi, peserta didik bisa scroll ke bawah dan mulai melakukan simulasi instalasi OS.
                  </div>
                  
                </div>
              </div><!-- # Faq item-->



              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Melakukan Tes Akhir
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Setelah menyelesaikan simulasi praktik, peserta didik bisa mulai mengerjakan final tes/ tes akhir dengan mengakses menu <a href="<?=base_url('tes2')?>">Tes 2</a> dan mengerjakan seluruh soal yang ada. Setelah selesai mengerjakan soal, peserta didik bisa mengisi datadiri (nama lengkap dan nomer absen) lalu mengklik submit.
                  </div>
                </div>
              </div>

              <!-- <div class="accordion-item">
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
              </div># Faq item -->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Bantuan Lainnya </h3>
              <p>
              Untuk pertanyaan lain, bisa menghubungi email/no telp yang tertera dibagian bawah website.
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1a">
                    <span class="num">1.</span>
                    Mengakses Materi
                  </button>
                </h3>
                <div id="faq-content-1a" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Peserta didik bisa mengakses materi KJD lainnya di bagian menu <a href="<?= base_url('materi')?>">Materi</a>
                  <br>
                  <br>
                  <img src="assets/img/1.webp" class="img-fluid rounded-4" alt="">
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2a">
                    <span class="num">2.</span>
                    Cek Nilai
                  </button>
                </h3>
                <div id="faq-content-2a" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Nilai yang akan tampil di website adalah 3 nilai tertinggi peserta didik yang sudah mengerjakan Tes 1 dan Tes 2, untuk mengecek bisa membuka menu <a href="<?= base_url('nilai')?>">Nilai Tertinggi</a>.
                  <br>
                  <br>
                  <img src="assets/img/2.webp" class="img-fluid rounded-4" alt="">
                </div>
                </div>
              </div><!-- # Faq item-->

              

              <!-- <div class="accordion-item">
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
              </div># Faq item -->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


    

  </main><!-- End #main -->
<?= $this->endSection() ?>