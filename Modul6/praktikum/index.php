<html >
<head>
<title>Halaman Administrator</title>
<style type="text/css">
.inner {
margin: 200px auto;
padding: 20px;
width: 240px;
border: 1px solid #333;
}
.body {
  background-color: pink;
  margin: 20px auto;
  padding-right: 30px;
  width: 250px;
}
</style>
</head>
<body>
<?php
ini_set('display_errors', 1);
define('_VALID', 1);
// include file eksternal
require_once('./auth.php');
init_login();
validate();
?>
<h3>Selamat Datang Kynantio</h3>
<p>
<a href="?m=logout">Logout</a>
<p>
Jangan lupa senyum hari ini
</body>
</html>
