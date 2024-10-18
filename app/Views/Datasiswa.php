<?php use CodeIgniter\Session\Session; ?>

<?= $this->extend("Pages/Homeadmin")?>
<?= $this->section("content") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<main id="main">

<?php if (session()->has('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?= session('error') ?>
    </div>
<?php endif; ?>

<!-- ======= Our Services Section ======= -->
<section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Data Nilai Siswa</h2>
          <p>Tabel berikut menampilkan data nilai siswa yang sudah melakukan submit nilai. Jika penilaian akhir lebih tinggi dari penilaian awal maka baris tabel tersebut akan berwarna hijau. Jika penilaian akhir lebih rendah dari penilaian awal maka baris tabel tersebut berwarna merah.</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>Daftar Nilai</h3>
              <p>
                Anda bisa mengubah data di tabel ini untuk mengkoreksi data yang salah. Pastikan untuk mengubahnya dengan benar menghindari kehilangan data asli.
              </p>
              <a href="#" class="readmore stretched-link">Panduan Penggunaan <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-8 col-md-10">
            <div class="service-item position-relative table-responsive">      
              <table class="table table-sm table-bordered text-center ">
              <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No.Absen</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Nilai 1</th>
                <th scope="col">Nilai 2</th>
                <th scope="col">Rata-rata</th>
                <th scope="col">Olah</th>
              </tr>
            </thead>
                <tbody>
                  <?php $no = 1;?>
                  <?php if (!empty($siswa)): ?>
                    <?php foreach ($siswa as $siswas): ?>
                      <?php if($siswas->tes2 > $siswas->tes1):?>
                        <tr class="table-success">
                          <td > <?= $no++;?> </td>
                          <td > <?= $siswas->id_siswa;?></td>
                          <td > <?= $siswas->nama_siswa;?></td>
                          <td > <?= $siswas->tes1;?></td>
                          <td > <?= $siswas->tes2;?></td>
                          <td > <?= (intval($siswas->tes1)+intval($siswas->tes2))/2;?></td>
                          <td > <button class="btn btn-primary btn-sm edit-btn" data-toggle="modal" data-target="#EditModal" value="<?=$siswas->id_siswa;?>">Edit</button> <a href="<?= base_url('delete_data_siswa/' . $siswas->id_siswa) ?>" class="btn btn-danger btn-sm">Delete</a></td>
                          
                        </tr>
                      <?php elseif($siswas->tes1 > $siswas->tes2):?>
                        <tr class="table-danger">
                          <td > <?= $no++;?> </td>
                          <td > <?= $siswas->id_siswa;?></td>
                          <td > <?= $siswas->nama_siswa;?></td>
                          <td > <?= $siswas->tes1;?></td>
                          <td > <?= $siswas->tes2;?></td>
                          <td > <?= (intval($siswas->tes1)+intval($siswas->tes2))/2;?></td>
                          <td > <button class="btn btn-primary btn-sm edit-btn" data-toggle="modal" data-target="#EditModal" value="<?=$siswas->id_siswa;?>">Edit</button> <a href="<?= base_url('delete_data_siswa/' . $siswas->id_siswa) ?>" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                      <?php else:?>
                        <tr class="">
                          <td > <?= $no++;?> </td>
                          <td > <?= $siswas->id_siswa;?></td>
                          <td > <?= $siswas->nama_siswa;?></td>
                          <td > <?= $siswas->tes1;?></td>
                          <td > <?= $siswas->tes2;?></td>
                          <td > <?= (intval($siswas->tes1)+intval($siswas->tes2))/2;?></td>
                          <td > <button class="btn btn-primary btn-sm edit-btn" data-toggle="modal" data-target="#EditModal" value="<?=$siswas->id_siswa;?>">Edit</button> <a href="<?= base_url('delete_data_siswa/' . $siswas->id_siswa) ?>" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                      <?php endif;?>
                    <?php endforeach;?>
                  <?php endif;?>
                  
                </tbody>
              </table>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

<!-- Modal -->
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="editForm" action="<?= base_url('update_data_siswa') ?>" method="post">
        <input type="hidden" name="id" id="editId">
        <div class="form-group">
            <label for="editNama">Nama Siswa</label>
            <input type="text" class="form-control" id="editNama" name="nama">
        </div>
        <div class="form-group">
            <label for="editTes1">Nilai 1</label>
            <input type="number" class="form-control" id="editTes1" name="tes1">
        </div>
        <div class="form-group">
            <label for="editTes2">Nilai 2</label>
            <input type="number" class="form-control" id="editTes2" name="tes2">
        </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

    
</main>

<script>
    jQuery.noConflict();
jQuery(document).ready(function($) {
    $('.edit-btn').click(function() {
        var id = $(this).val();
        $.ajax({
            url: 'ambil_data_siswa/' + id,
            method: 'GET',
            success: function(response) {
                $('#EditModal input[name="id"]').val(id);
                $('#EditModal input[name="nama"]').val(response.nama_siswa);
                $('#EditModal input[name="tes1"]').val(response.tes1);
                $('#EditModal input[name="tes2"]').val(response.tes2);
            }
        });
    });
});

</script>


<?= $this->endsection() ?>