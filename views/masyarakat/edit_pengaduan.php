<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <br>
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <hr>
  <br>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

  <div class="row">
    <div class="col-lg-6">
      <?= form_open_multipart('Masyarakat/PengaduanController/edit/' . $pengaduan['id_pengaduan']); ?>
      <div class="form-group">
        <label for="isi_laporan">Isi Laporan</label>
        <input type="text" class="form-control" name="isi_laporan" id="isi_laporan" value="<?= $pengaduan['isi_laporan'] ?>">
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

      <div class="form-group">
        <div class="float-right">
          <button type="submit" class="btn btn-success">Submit</button>
          <a href="<?= base_url('Masyarakat/PengaduanController'); ?>" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
      <?php form_close(); ?>

    </div>
  </div>

</div>
<!-- /.container-fluid -->