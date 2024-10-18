<?= $this->extend("Pages/Home")?>
<?= $this->section("content") ?>
<main id="main">
   
    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
    <div class="container " data-aos="fade-up">

        <div class="section-header">
        <h2>Uji Coba Pertama</h2>
        <p>Uji coba ini bertujuan untuk menginvestigasi proses instalasi 
            sistem operasi Windows 10, <br/>yang merupakan salah satu sistem operasi paling dominan dan populer pada saat ini.</p>
        </div>

        <div class="row gy-4 contact">
        <form action="siswa/tambah" method="post" role="form">   
            <?php if (!empty($soal)): ?>
                    <?php foreach ($soal as $soals): ?>
                        <div class="col-lg-12 col-md-12 ">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-patch-question"></i>
                                </div>
                                <h3><?php echo $soals->id_soal; ?>. <?php echo $soals->isi_soal; ?></h3>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="pil_soal<?php echo $soals->id_soal; ?>" value="a" required><?php echo $soals->pil_a; ?>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="pil_soal<?php echo $soals->id_soal; ?>" value="b" required><?php echo $soals->pil_b; ?>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="pil_soal<?php echo $soals->id_soal; ?>" value="c" required><?php echo $soals->pil_c; ?>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="pil_soal<?php echo $soals->id_soal; ?>" value="d" required><?php echo $soals->pil_d; ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                    <?php endforeach; ?>
            <?php else: ?>
                <p>Belum Ada Soal</p>
            <?php endif; ?>
            <hr>
            <div class="row">
                <div class="section-header">
                    <h2>Data Siswa</h2>
                    <p>Inputkan Data Identitas Siswa</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="form-group mt-3">
                        <input type="number" min="1" class="form-control" name="id_siswa" id="subject" placeholder="Nomor Absen" required>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="nama_siswa" id="subject" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="text-center mt-3"><button type="submit" style="background: var(--color-primary);border: 0;padding: 14px 45px;color: #fff;transition: 0.4s;border-radius: 50px;">Submit Hasil</button></div>
            </div>
        </form>
    </div>
    </section><!-- End Our Services Section -->
    
</main>


<?= $this->endsection() ?>