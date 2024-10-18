<?= $this->extend("Pages/Home")?>
<?= $this->section("content") ?>
<main id="main">
   
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
                    <a href="<?=base_url("k3lh")?>" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
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
                <a href="#" class="readmore stretched-link">Baca Materi <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><-- End Service Item -->

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
    
</main>


<?= $this->endsection() ?>