<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>
      Halaman Login | Tutorial Simple Login Register CodeIgniter
    </title>
  </head>
  <body>
    <h2>Halaman Login</h2>
    <?php // Cetak jika ada notifikasi
    if($this->session->flashdata('sukses')) {
      echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
    }
    ?>
    <?php echo form_open('login');?>
    <p>Username : </p>
    <p><input type="text" name="username" value="<?php echoset_value('username'); ?>"/></p>
    <p> <?php echo form_error('username'); ?> </p>
    <p>Password : </p>
    <p><input type="password" name="password" value="<?php echoset_value('password'); ?>"/></p>
    <p> <?php echo form_error('password'); ?> </p>
    <p><input type="submit" name="btnSubmit" value="Login"/></p>
    <?php echo form_close();?>
    <p>Kembali ke beranda, Silakan klik <?php echoanchor(site_url().'/beranda','di sini..'); ?></p>
  </body>
</html>
