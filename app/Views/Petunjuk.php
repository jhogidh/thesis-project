<?= $this->extend('Pages/Homeadmin.php') ?>
<?= $this->section('content') ?>
<main id="main">
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Petunjuk<strong> Halaman Admin</strong></h3>
              <p>
              Petunjuk penggunaan halaman admin (jika ada pertanyaan lain bisa hubungi email/no telp dibagian bawah website). 
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Akses dan Ubah Data Peserta didik
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  - Untuk mengakses Data Peserta didik, pertama-tama admin perlu mengakses menu <a href="<?= base_url('admin-datasiswa')?>">Data Siswa </a> yang dapat diakses dari dashboard admin dan menu navigasi website. 
                  <br><br>
                  - Kemudian peserta admin akan disajikan sebuah tabel berisi data siswa yang sudah mengsubmit hasil Tes 1 maupun Kedua Tes Simulasi Praktik.
                  <br><br>
                  - Admin bisa mengedit Nilai Siswa dan Nama Siswa apabila Diperlukan, dengan mengklik tombol Edit.
                  <br><br>
                  - Admin juga bisa menghapus data Siswa.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Materi Tambahan Untuk Siswa
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  - Untuk mengakses Materi Tambahan, Admin bisa mengklik Menu  <a href="<?= base_url('materitambahan')?>">Materi Siswa</a> dari menu navigasi dan juga dari dashboard admin. 
                  <br><br>
                  - Dihalaman Materi Siswa, terdapat tabel yang berisi seluruh Materi Tambahan pada website simulasi praktik, Admin dapat menghapus materi dan juga menambahkan materi.
                  <br><br>
                  - Untuk menambahkan materi admin perlu mengklik tombol "Choose File" dibagian bawah tabel dan mencari file materi di komputer, setelah memilih file materi, admin bisa klik tombol "Upload Materi".
                  <br><br>
                  - Untuk meghapus materi, admin cukup klik tombol "Delete" pada baris materi yang ingin dihapus dalam tabel materi.
                </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Login dan Logout
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Perlu diperhatikan Halaman Admin hanya bisa diakses apabila Admin sudah login terlebih dahulu.
                  <br><br>
                  Admin juga disarankan untuk Logout setelah melakukan aktifitas diwebsite admin, menghindari akses dari pengguna lain.
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