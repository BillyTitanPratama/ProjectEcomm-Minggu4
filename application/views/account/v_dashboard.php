<?php defined('BASEPATH') OR exit('No direct script accessallowed'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Dashboard | Tutorial Simple Login Register CodeIgniter
    </title>
  </head>
  <body>
    <h3>Dashboard</h3>
    <p>
      Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('username')); ?>!
      Untuk logout dari sistem, silakan klik <?php echoanchor('login/logout','di sini...'); ?>
    </p>
  </body>
</html>
