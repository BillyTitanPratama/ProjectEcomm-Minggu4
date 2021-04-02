<!DOCTYPE html>
<html>
  <head>
    <title>malasngoding.com</title>
  </head>
  <body>
    <form>
      <center><h1>Membuat Upload File Dengan CodeIgniter | MalasNgoding</h1></center>
      <?php echo $error;?>
      <?php echo form_open_multipart('upload/aksi_upload');?>
      <input type="file" name="berkas" />
      <br /><br />
      <input type="submit" value="upload" />
    </form>
  </body>
</html>
