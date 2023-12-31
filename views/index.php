<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $main_title; ?> - <?php echo $title; ?> </title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">
                      <p> Login SiPARAT </p>

                      <img src="assets/img/jateng.png" style="width:80px"> </img>

                      <p style="font-size:15px"><br>Dinas Kepemudaan, Olahraga dan Pariwisata Provinsi Jawa Tengah</p>
                      <hr>
                    </h1>
                  </div>
                  <?php
                  if ($this->session->flashdata('success')) :
                  ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Sukses</h5>
                      <?= $this->session->flashdata('success') ?>
                    </div>
                  <?php
                  endif;
                  if ($this->session->flashdata('error')) :
                  ?>
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-times"></i> Gagal</h5>
                      <?= $this->session->flashdata('error') ?>
                    </div>
                  <?php
                  endif;
                  ?>
                  <form class="user" action="<?php echo base_url('auth'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" value="<?php echo set_value('username') ?>" placeholder="Masukkan username">
                      <?= form_error('username', '<small class="text-danger pl-3 pt-0">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" id="password" class="form-control form-control-user" name="password" placeholder="Masukkan password">
                      <div class="checkbox"><br>
                        <label for=""><input type="checkbox" class="mx-2" name="" id="showpass"> Lihat password</label>
                      </div>
                      <?= form_error('password', '<small class="text-danger pl-3 pt-0">', '</small>'); ?>
                    </div>
                    <button type="submit" name="masuk" class="btn btn-primary btn-user btn-block">Masuk</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/') ?>js/sb-admin-2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#showpass').click(function() {
        if ($(this).is(':checked')) {
          $('#password').attr("type", "text");
        } else {
          $('#password').attr("type", "password");
        }
      })
    })
  </script>
</body>

</html>