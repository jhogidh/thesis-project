<?= $this->extend("Pages/Home")?>
<?= $this->section("content") ?>
<main id="main">
   
    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
        <h2>Selamat</h2>
        <p>Semangat ini adalah pancaran cahaya yang membimbingmu menuju pengetahuan yang lebih tinggi.</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

        <?php if (!empty($nilai)): ?>
                    <?php $i = 0;
                        foreach ($nilai as $nilais): 
                            $i++;
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <div class="icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                <h3><?php echo ucwords($nilais->nama_siswa); ?> </h3>
                                <h5>No. Absen: <?= $nilais->id_siswa;?></h5>
                                <p><?php echo ucwords($nilais->nama_siswa);?> mendapat nilai tertinggi nomor <?= $i;?> 
                                dengan perloehan nilai rata-rata <?php echo strtoupper($nilais->rata_rata);?></p>
                                <a href="<?=base_url("")?>" class="readmore stretched-link"> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->
                    <?php endforeach; ?>
            <?php else: ?>
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item text-center position-relative">
                        <div class="icon">
                            <i class="bi bi-person"></i>
                        </div>
                        <h3>Belum Ada Nilai Tertinggi </h3>
                        <h5>No. Absen: Belum Ada</h5>
                        p>Belum Ada Nilai Tertinggi</p>
                        <a href="<?=base_url("")?>" class="readmore stretched-link"> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->
            <?php endif; ?>
            

        </div>

    </div>
    </section><!-- End Our Services Section -->
    
</main>


<?= $this->endsection() ?>