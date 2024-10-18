<?= $this->extend('Pages/Home.php') ?>
<?= $this->section('content') ?>
    <main id="main">     
        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Materi Tambahan</h2>
                    <p>Tabel berikut menampilkan data materi tambahan yang sudah diupload ke media. Anda bisa mengubah semua data tambahan bila diperlukan.</p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <h3>Daftar Materi Tambahan</h3>
                        <p>
                            Akses materi dari guru disini.
                        </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-8 col-md-10">
                    <div class="service-item position-relative table-responsive">      
                    <table class="table table-sm table-bordered text-center ">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Materi</th>
                    </tr>
                    </thead>
                        <tbody>
                        <?php $no = 1;?>
                        <?php if (!empty($materi)): ?>
                            <?php foreach ($materi as $m): ?>
                            <tr class="table-success">
                                <td > <?= $no++;?> </td>
                                <td > <?= $m->nama_materi;?></td>
                            </tr>
                            <?php endforeach;?>
                        <?php endif;?>
                        
                        </tbody>
                    </table>
                    <?php if(session()->get('nama_user') != ''){?>
                    <form action="<?= base_url('upload') ?>" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="materi" name="materi" accept=".pdf" required>
                        
                        <button type="submit" class="btn btn-primary">Upload Materi</button>
                        </div>
                    </form>
                    <?php } ?>
                    </div>
                    
                </div><!-- End Service Item -->
                

                </div>

            </div>
        </section><!-- End Our Services Section -->

    </main><!-- End #main -->
<?= $this->endSection() ?>