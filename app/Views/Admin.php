<?php use CodeIgniter\Session\Session; ?>

<?= $this->extend("Pages/Homeadmin")?>
<?= $this->section("content") ?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome <span><?= session()->get('nama_user');?></span></h2>
          <p>Admin dapat mengelola materi tambahan yang ada didalam website.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="<?= base_url();?>" target="_blank" class="btn-get-started">Buka web</a>
            
          </div>
        </div>
        
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="<?= base_url('admin-datasiswa')?>" class="stretched-link">Data Siswa</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="<?= base_url('admin-materitambahan')?>" class="stretched-link">Materi Siswa</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Petunjuk Penggunaan.</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

  </section>
  <!-- End Hero Section -->

<main id="main">

    
    
</main>


<?= $this->endsection() ?>