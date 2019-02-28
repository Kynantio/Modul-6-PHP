<!DOCTYPE html>
  <head>
    <title>Hapus Cookie</title>
  </head>
  <body>
    <?php
       setcookie('nama_cookie', 'nilai_cookie');
       if (isset($_COOKIE['nama_cookie'])) {
         echo 'cookie di-set <br/>';
         echo 'cookie dihapus';
       }else {
         echo 'unset';
       }
     ?>
     <p>
       Tekan refresh (f5)
  </body>
</html>
