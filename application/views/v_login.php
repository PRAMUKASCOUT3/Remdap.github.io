<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="aplikasi rekam medis">
  <meta name="generator" content="Bidan Metha Eli Yanti">
  <title>Login aplikasi rekam medis</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Favicons -->
  <link rel="icon" href="<?= base_url(); ?>assets/favicon.ico">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="<?= base_url(); ?>assets/custom/login.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" method="POST" action="<?php echo site_url('auth/login_aksi');?>">
    <img class="mb-4" src="<?= base_url(); ?>assets/img/bidan.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
    

    <?= $this->session->flashdata('message');?>
    <div>
    <label for="username" class="sr-only">username</label>
    <input type="text" id="username" name="username" class="form-control" value="<?= set_value('username'); ?>" placeholder="username" autofocus>
    <?= form_error('username','<small class="text-danger pl-3">','</small>')?>
    </div>
    <br>
    <div>
    <label for="inputPassword" class="sr-only">Password</label>
    <input md5 type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
    <?= form_error('password','<small class="text-danger pl-3">','</small>')?>
    </div>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; Bidan Metha Eli Yanti</p>
  </form>
  <div class="w3-panel w3-blue w3-display-container">
                    <?php echo $this->session->flashdata('msg');?>
                </div>      
</body>

</html>