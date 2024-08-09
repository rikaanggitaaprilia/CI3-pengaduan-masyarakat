<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800">Tambah Data obat</h1> -->
  <div class="col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Buat Pengaduan</h6>
      </div>
      <div class="card-body">
        <!-- Check for Error Message -->
        <?php if ($this->session->flashdata('msg')) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('msg'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
        <!-- End Error Message -->

        <?= form_open_multipart('Masyarakat/PengaduanController'); ?>
        <div class="form-group">
          <label for="isi_laporan">Isi Laporan</label>
          <textarea name="isi_laporan" id="isi_laporan" cols="30" rows="10" class="form-control"></textarea>
          <?= form_error('isi_laporan', '<small class="text-danger">', '</small>'); ?>
        </div>

        <style>
  .small-italic {
    font-size: 12px; /* Ukuran font yang lebih kecil */
    font-style: italic; /* Mengatur tulisan menjadi italic */
  }
</style>

<div class="form-group">
  <label for="foto">Upload Foto (<span class="small-italic">Maksimal 5 MB</span>)</label>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="foto" name="foto" accept=".jpg, .jpeg, .png">
    <label class="custom-file-label" for="foto"><span class="small-italic">Pilih file (hanya JPG, JPEG, PNG)</span></label>
    <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
  </div>
  <small class="text-muted">File yang diizinkan hanya dalam format JPG, JPEG, dan PNG.</small>
</div>

        <br>

        <div class="float-right">
          <button type="submit" class="btn btn-success">Submit</button>
          <a href="<?= base_url('Masyarakat/PengaduanController'); ?>" class="btn btn-secondary">Cancel</a>
        </div>
        <?php form_close(); ?>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->