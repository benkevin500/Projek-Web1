<!DOCTYPE html>
<html>
<head>
  
  <title>RPI</title>

  <link rel="stylesheet" type="text/css" href="css/coba.css">
</head>

<body>
  <section id="menu2">
    <div class="kanan">
      <ul>
        <li>
          <a href="index.html">Home</a>
        </li>
      </ul>
    </div>
    <div class="kiri">
      <ul>
        <li>
          <a href="">RPI</a>
        </li>
      </ul>
    </div>
  </section>

  <?php
//   $a = $_POST["id_user"];
  $b = $_POST["nm_user"];
  $c = $_POST["email"];
 $d = $_POST["username"];
 $e = $_POST["password"];

    include "koneksi.php";
    $q = "INSERT INTO `user`(`id_user`, `nm_user`, `email`,`username`,`password`) VALUES (NULL,'$b','$c','$d','$e')";
    mysqli_query($koneksi,$q);

?>
<section id="aneh">
	<h2>Data berhasil ditambah</h2><br>
        <a class="tampil" href="tampil.php">Daftar User</a><br>
        <a class="frmmsk" href="login.html">Login</a><br>
        <a class="indx" href="index.html">Home</a><br>
</section>
          
</body>
</html>