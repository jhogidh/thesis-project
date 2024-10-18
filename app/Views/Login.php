<?= $this->extend("Pages/Homeadmin")?>
<?= $this->section("content") ?>
<main id="main">
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Login Admin</h2>
          <p>Untuk mengakses Halaman Admin, Anda perlu login terlebih dahulu.</p>
          <?php if (session()->has('success')): ?>
              <div class="alert alert-success">
                  <?= session('success') ?>
              </div>
          <?php endif; ?>

          <?php if (session()->has('error')): ?>
              <div class="alert alert-danger">
                  <?= session('error') ?>
              </div>
          <?php endif; ?>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-5">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>informasi@smktelkom-sda.sch.id</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>031-99711858</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-7">
            <form action="login/submit" method="post" role="form">
              <div class="row mt-4">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <div class="form-group mt-3">
                    <input type="username" class="form-control" name="username" id="username" placeholder="Username" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <div class="form-group mt-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                  </div>
                </div>
              </div>
              
              <div class="text-center mt-3"><button type="submit" style="background: var(--color-primary);border: 0;padding: 14px 45px;color: #fff;transition: 0.4s;border-radius: 50px;">Login</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
    
</main>


<?= $this->endsection() ?>