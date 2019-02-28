<!DOCTYPE html>
  <head>
    <title>Set Cookie</title>
  </head>
  <body>
     <?php
        // men set nilai cookie
        setcookie('nama_cookie', 'nilai_cookie');
        // mendapatkan nilai Cookie
        echo $_COOKIE[ 'nama_cookie'];
      ?>

      <p>
        Tekan refresh (f5);

  </body>
</html>
