<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .field-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }
    .form-group {
      position: relative;
    }
    .error-message {
      color: #dc3545; /* Warna merah */
      font-size: 0.875rem; /* Ukuran font kecil */
      margin-top: 0.25rem; /* Jarak atas */
    }
  </style>
</head>
<body>
 <div class="container">

   <div class="card o-hidden border-0 shadow-lg my-5">
     <div class="card-body p-0">
       <div class="d-flex align-items-center"> <!-- Menggunakan flexbox -->
         <!-- Gambar -->
         <img src="<?php echo base_url('assets/') ?>img/tcara.png" alt="" class="w-50"> <!-- Lebar setengah dari container -->
         <div class="col-lg-6">
           <div class="p-5">
             <div class="text-center">
               <h1 class="h4 text-gray-900 mb-4">Register</h1>
             </div>

             <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>') ?>

             <?= $this->session->flashdata('msg'); ?>

             <?= form_open('Auth/RegisterController', 'class="user"') ?>
             <div class="form-group">
               <input type="text" class="form-control form-control-user" id="nik" placeholder="NIK" name="nik" value="<?= set_value('nik') ?>">
             </div>
             <div class="form-group">
               <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama" name="nama" value="<?= set_value('nama') ?>">
             </div>
             <div class="form-group">
               <input type="text" class="form-control form-control-user" id="alamat" placeholder="Alamat" name="alamat" value="<?= set_value('alamat') ?>">
             </div>
             <div class="form-group">
               <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
             </div>
             <div class="form-group">
               <input type="password" class="form-control form-control-user " id="password" name="password" placeholder="Password">
              </div>
              <div class="form-group position-relative">
                <input type="password" class="form-control form-control-user" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password">
                <div class="error-message" id="password-error"></div>
              </div>
             <div class="form-group">
               <input type="text" class="form-control form-control-user" id="telp" placeholder="Telp" name="telp">
             </div>
             <button type="submit" class="btn btn-success btn-user btn-block">Register</button>
             </form>
             <hr>
             <div class="text-center">
               <a class="small" href="<?= base_url('Auth/LoginController') ?>">Sudah punya akun? Login!</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Bootstrap JS, jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

  <script>
  // Validasi Konfirmasi Password
  $('form').submit(function(event) {
      var password = $('#password').val();
      var confirm_password = $('#confirm_password').val();

      if (password !== confirm_password) {
        $('#password-error').text('Konfirmasi password tidak sesuai!');
        event.preventDefault(); // Mencegah pengiriman formulir jika tidak sesuai
      } else {
        $('#password-error').text(''); // Menghapus pesan error jika cocok
      }
    });
  </script>
</body>
</html>